//window.route = require('./route');
window.Vue = require('vue');

import { library } from '@fortawesome/fontawesome-svg-core'
import { fas } from '@fortawesome/free-solid-svg-icons'
import { fab } from '@fortawesome/free-brands-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(fas)
library.add(fab)
Vue.component('fi', FontAwesomeIcon)
const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('main-app', require('./components/MainApp.vue').default);

const app = new Vue({
    el: '#app',
    data() {
    	return {
    		side: false,
    		notification: false,
    	}
    }
});
