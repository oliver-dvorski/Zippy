require('./bootstrap')

const app = new Vue({
    el: '#app',
    
    data: {
        showPasswordModal: false,
        showNotifcation: true,
        showClipboardNotification: false,
        dropzoneProcessing: false
    },

    methods: {
        copy(text) {
            copyToClipboard(text)
            this.showClipboardNotification = true
        }
    },

    mounted() {
        Dropzone.options.thatZone = {
            init: function() {
                this.on('processing', () => {
                    app.dropzoneProcessing = true
                })
                this.on('queuecomplete', () => {
                    app.dropzoneProcessing = false
                })
            },
            paramName: "file",
            maxFilesize: 50, // MB
        }
    }
})
