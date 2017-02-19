<template>
    <div> 
        <input type="text" :value="message"> <br>
        <ul>
            <li>Original: {{ message }}</li>
            <li>Reverse: {{ reverseMessage }}</li>
        </ul>
    </div>
</template>

<script>
    export default {
        data: {
            message: 'Hello world'
        },
        computed: {
            reverseMessage() {
                return this.message.split('').reverse().join('')
            }
        }
    }
</script>