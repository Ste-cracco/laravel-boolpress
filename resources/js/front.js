window.axios = require('axios');
window.Vue = require('vue');

// Importo il Router
import router from './router/index'

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

//Importo App.vue
import App from './views/App';


const app = new Vue({
    el: '#app',
    render: (h) => h(App),
    router: router
});