<template>

    <transition name="notification-animation">
        <div class="notification" :class="'is-' + type">
            <button class="delete" @click="$emit('close')"></button>
            <slot></slot>
        </div>
    </transition>

</template>

<script>
    export default {
        props: {
            type: {
                default: '',
                required: false,
                type: String
            },
            timer: {
                default: 5,
                required: false,
            }
        },

        mounted() {
            if (this.timer) {
                setTimeout(() => {
                    this.$emit('close')
                }, 5000)
            }
        }
    }
</script>
