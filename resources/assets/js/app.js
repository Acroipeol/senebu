
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('index', require('./components/index.vue'));
Vue.component('footermain', require('./components/footer.vue'));
Vue.component('building', require('./components/building.vue'));
Vue.component('hardwares', require('./components/hardwares.vue'));
Vue.component('furnitures', require('./components/furnitures.vue'));
Vue.component('sliding', require('./components/sliding.vue'));
Vue.component('garden', require('./components/garden.vue'));
Vue.component('decoration', require('./components/decoration.vue'));
Vue.component('architect', require('./components/architect.vue'));
Vue.component('user', require('./components/user.vue'));

Vue.component('architecthouses', require('./components/architectHouses.vue'));
Vue.component('architectinfrastracture', require('./components/architectInfrastracture.vue'));
Vue.component('architectotherdesign', require('./components/architectOtherDesign.vue'));
Vue.component('architectupload', require('./components/architectUpload.vue'));

const app = new Vue({
    el: '#app'
});
