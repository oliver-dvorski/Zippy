<template>
    <transition name="animate">
        <div class="modal is-active modal-background" @click="$emit('close')">
            <div class="is-fullwidth">
                <div class="modal-card" @click.stop>
                    <header class="modal-card-head is-primary">
                        <p class="modal-card-title">Password</p>
                        <button class="delete" @click="$emit('close')"></button>
                    </header>
                    <section class="modal-card-body">
                        This file is password protected, please input your password in the field below to download the file
                    </section>
                    
                    <footer class="modal-card-foot">
                        <form method="POST" class="is-fullwidth" :action="downloadRoute + '/download'">
                            <input type="hidden" name="_token" :value="csrf_token">
                            <div class="field has-addons has-addons-centered">
                                <div class="control">
                                    <input type="password" name="password" autofocus placeholder="Password" id="password" class="input is-large" @keyup.enter="checkPassword">
                                </div>
                                <div class="control">
                                    <button class="button is-primary is-large" :class="{ 'is-loading': loading }" @click="checkPassword">OK</button>
                                </div>
                            </div>
                        </form>
                    </footer>
                </div>
            </div>
        </div>
    </transition>
</template>

<script>
    export default {
        props: [ 'downloadRoute' ],

        data() {
            return {
                loading: false,
                csrf_token: window.appData.csrf
            }
        },

        mounted() {
            // Add the excape key event listener
            document.addEventListener("keydown", (e) => {
                if (e.keyCode == 27) {
                    this.$emit('close');
                }   
            });
        },

        methods: {
            clearPassword() {
                document.getElementById('password').value = ''
            },

            checkPassword() {
                this.loading = true
                setTimeout(() => {
                    this.loading = false
                    this.clearPassword()
                }, 1000)
            }
        }
    }
</script>