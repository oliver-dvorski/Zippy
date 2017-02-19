<template>

    <transition name="animate">
        <div class="notification" :class="'is-' + type">
            <button class="delete" @click="$emit('close')"></button>
            <slot></slot>
        </div>
    </transition>

</template>

<script>
    export default {
        props: ['type'],

        mounted() {
            setTimeout(() => {
                this.$emit('close')
            }, 5000)
        }
    }
</script>