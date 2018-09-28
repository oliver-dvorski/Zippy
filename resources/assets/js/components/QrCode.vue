<template>
    <canvas id="qrcode"></canvas>
</template>

<script>
    export default {
        props: ['url'],
        mounted() {

            new QRious({
                element: document.getElementById('qrcode'),
                value: this.url,
                size: 300
            })

        }
    }
</script>
