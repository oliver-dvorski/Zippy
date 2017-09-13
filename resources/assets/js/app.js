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
        },
        copyFromId(id) {
            copyToClipboard(document.getElementById(id).innerHTML)
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
                this.on('sending', file => {
                    document.getElementById('filePath').value = file.fullPath
                })
            },
            paramName: "file",
            maxFilesize: 50, // MB
        }
    }
})
