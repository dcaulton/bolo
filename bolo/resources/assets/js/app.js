
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
Vue.component('layer-detail', require('./components/LayerDetail.vue'));
Vue.component('new-layer', require('./components/NewLayer.vue'));
Vue.component('show-new-layer-button', require('./components/ShowNewLayerButton.vue'));
Vue.component('control-panel', require('./components/ControlPanel.vue'));
Vue.component('thumbnail-flow-panel', require('./components/ThumbnailFlowPanel.vue'));
Vue.component('output-panel', require('./components/OutputPanel.vue'));
Vue.component('builder-panel', require('./components/BuilderPanel.vue'));

const app = new Vue({
    el: '#app',
    methods: {
    },
    created: function (){
//alert('i have been created');
// if we don't have a data object fetch the latest project for this user
    },
    mounted: function () {
//alert('i have been mounted');
// all vue js templates have been finished drawing now
    },
});
