<template>
    <transition name="fade">
        <div class="modal is-active modal-background" @click="$emit('close')">
            <div class="columns is-mobile">
                <div class="column is-8 is-offset-2 modal-card" @click.stop>
                    <header class="modal-card-head" @click="$emit('close')">
                        <p class="modal-card-title">Password</p>
                        <button class="delete"></button>
                    </header>
                    <section class="modal-card-body">
                        This file is password protected, please insert your password in the field below to download the file
                    </section>
                    
                    <footer class="modal-card-foot">
                        <div class="control is-fullwidth has-addons has-addons-centered">
                            <input type="password" placeholder="Password" class="input is-large">
                            <button class="button is-primary is-large" :class="{ 'is-loading': loading }" @click="loading = true">OK</button>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </transition>
</template>

<style>
    .fade-enter {
        opacity: 0;
    }

    .fade-leave-active {
        opacity: 0;
    }

    .fade-enter .fade-container,
    .fade-leave-active .fade-container {
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }
</style>

<script>
    export default {
        data() {
            return {
                loading: false
            }
        },

        mounted() {
            document.addEventListener("keydown", (e) => {
                if (e.keyCode == 27) {
                    this.$emit('close');
                }   
            });
        },

        methods: {
            checkPassword() {
                loading: true
            }
        }
    }
</script>