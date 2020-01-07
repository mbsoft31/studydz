//window.route = require('./route');
window.Vue = require('vue');
import VueGAPI from 'vue-gapi'
//import VueGDrive from 'vue-gdrive'

const config = {
    apiKey: ' AIzaSyC7ujYnYWjXCILy_tf2MXh0qL7yU1SgmEE ',
    clientId: '916815294589-0vt4l7vrqlf29mbblfebd8g9a9dktlqa.apps.googleusercontent.com',
    scope: 'https://www.googleapis.com/auth/drive.metadata.readonly https://www.googleapis.com/auth/drive.file',
    discoveryDocs: ["https://www.googleapis.com/discovery/v1/apis/drive/v3/rest"]
}

Vue.use(VueGAPI, config)

import { library } from '@fortawesome/fontawesome-svg-core'
import { fas } from '@fortawesome/free-solid-svg-icons'
import { fab } from '@fortawesome/free-brands-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(fas)
library.add(fab)

Vue.component('fi', FontAwesomeIcon)

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

const app = new Vue({
    el: '#app',
    data() {
    	return {
    		side: false,
    		notification: false,
    	}
    }
});
