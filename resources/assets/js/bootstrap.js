// Homepage dependencies
window.Dropzone = require('./lib/dropzone')

// Download page dependencies
window.QRious = require('qrious')
window.copyToClipboard = require('copy-to-clipboard')

// Global dependencies
window.Vue = require('vue')
Vue.component('password-modal', require('./components/PasswordModal.vue'));
Vue.component('notification', require('./components/Notification.vue'));
Vue.component('qr', require('./components/QrCode.vue'));
