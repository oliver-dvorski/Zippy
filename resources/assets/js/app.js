require('./bootstrap')

const app = new Vue({
    el: '#app',
    
    data: {
        showPasswordModal: false,
        showNotifcation: true,
        showClipboardNotification: false
    },

    methods: {
        copy(text) {
            copyToClipboard(text)
            this.showClipboardNotification = true
        }
    },

    mounted() {
        Dropzone.options.thatZone = {
            paramName: "file",
            maxFilesize: 50, // MB
        }
    }
})
