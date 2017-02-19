
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./dropzone');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('password-modal', require('./components/PasswordModal.vue'));
Vue.component('notification', require('./components/Notification.vue'));

const app = new Vue({
    el: '#app',
    
    data: {
        showPasswordModal: false,
        showNotifcation: true
    }
});

if (!! document.getElementById('qrcode')) {
    new QRCode(document.getElementById("qrcode"), window.appData.url + '/' + document.getElementById('fileUrl').innerHTML);
}
