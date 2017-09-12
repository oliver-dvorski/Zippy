<notification v-show="showClipboardNotification" :style="showNotifcation ? 'transform: translateY(-100%)' : null" @close="showClipboardNotification = false" type="success">
    Copied to clipboard
</notification>
