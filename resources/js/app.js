require('./bootstrap');

window.Vue = require('vue');
import VTooltip from 'v-tooltip'

Vue.use(VTooltip)


Vue.component('it-order-calc', require('./components/OrderCalc.vue').default);

import store from '../js/store'

const app = new Vue({
    el: '#app',
    store
});
