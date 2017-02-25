// Homepage dependencies
window.Dropzone = require('./lib/dropzone')

// Download page dependencies
window.QRious = require('qrious')
import copyToClipboard from 'copy-to-clipboard'
window.copyToClipboard = copyToClipboard

// Global dependencies
window.Vue = require('vue')
Vue.component('password-modal', require('./components/PasswordModal.vue'));
Vue.component('notification', require('./components/Notification.vue'));
Vue.component('qr', require('./components/QrCode.vue'));