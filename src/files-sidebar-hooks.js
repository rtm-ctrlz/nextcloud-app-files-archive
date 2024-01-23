/**
 * @author Claus-Justus Heine <himself@claus-justus-heine.de>
 * @copyright 2022, 2023, 2024 Claus-Justus Heine
 * @license AGPL-3.0-or-later
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

import Vue from 'vue';
import { appName } from './config.js';
import { attachDialogHandlers } from './toolkit/util/dialogs.js';
import { getInitialState } from './toolkit/services/InitialStateService.js';
import { generateFilePath, generateUrl } from '@nextcloud/router';
import FilesTab from './views/FilesTab.vue';
import { Tooltip } from '@nextcloud/vue';

// eslint-disable-next-line
import logoSvg from '../img/app.svg?raw';

require('files-archive.scss');
require('dialogs.scss');

Vue.directive('tooltip', Tooltip);

// eslint-disable-next-line
__webpack_public_path__ = generateFilePath(appName, '', 'js');
Vue.mixin({ data() { return { appName }; }, methods: { t, n, generateUrl } });

const View = Vue.extend(FilesTab);
let TabInstance = null;

const initialState = getInitialState();

window.addEventListener('DOMContentLoaded', () => {

  attachDialogHandlers();

  console.info('INITIAL STATE', initialState);

  /**
   * Register a new tab in the sidebar
   */
  if (OCA.Files && OCA.Files.Sidebar) {
    OCA.Files.Sidebar.registerTab(new OCA.Files.Sidebar.Tab({
      id: appName,
      name: t(appName, 'Archive'),
      iconSvg: logoSvg,

      enabled(fileInfo) {
        return initialState.archiveMimeTypes.indexOf(fileInfo.mimetype) >= 0;
      },

      async mount(el, fileInfo, context) {

        if (TabInstance) {
          TabInstance.$destroy();
        }

        TabInstance = new View({
          // Better integration with vue parent component
          parent: context,
        });

        // Only mount after we have all the info we need
        await TabInstance.update(fileInfo);

        TabInstance.$mount(el);
      },
      update(fileInfo) {
        console.info('ARGUMENTS', arguments);
        TabInstance.update(fileInfo);
      },
      destroy() {
        TabInstance.$destroy();
        TabInstance = null;
      },
    }));
  }
});
