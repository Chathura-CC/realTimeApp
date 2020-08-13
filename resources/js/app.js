
import Vue from 'vue'
import Vuetify from 'vuetify'
Vue.use(Vuetify)


Vue.component(
    'example-component',
    require('./components/ExampleComponent.vue').default
);
Vue.component('home-component', require('./components/AppHome.vue').default);

const app = new Vue({
   el: '#app',
   vuetify:new Vuetify()
});