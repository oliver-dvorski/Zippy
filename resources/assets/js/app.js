require('./bootstrap');

const app = new Vue({
    el: '#app',
    
    data: {
        showPasswordModal: false,
        showNotifcation: true
    },

    methods: {
        copy(text) {
            copyToClipboard(text)
        }
    },

    mounted() {
        Dropzone.options.thatZone = {
            paramName: "file",
            maxFilesize: 50, // MB
        }
    }
});

// If there's a #qrcode element on the page, you're on the download page
if (!! document.getElementById('qrcode')) {
    new QRious({
        element: document.getElementById('qrcode'),
        value: window.appData.url + '/' + document.getElementById('fileUrl').innerHTML,
        size: 240,
    })
}
