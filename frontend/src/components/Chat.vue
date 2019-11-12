<template>
    <div class="card text-center">
        <div class="card-header">
            Chat
        </div>
        <div class="card-body">
            <textarea
                    class="form-control"
                    style="resize:none"
                    cols="30"
                    rows="10"
                    readonly=""
                    v-model="message"
            ></textarea>
            <hr>run
            <input
                    type="text"
                    class="form-control"
                    v-model="textMessage"
                    @keyup.enter="sendMessage"
            >
            <br>
            <button @click.prevent="logout">
                logout
            </button>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        name: "Chat",
        data() {
            return {
                message: [],
                textMessage: ''
            }
        },
        mounted() {
            window.Echo.channel('laravel_database_room')
                .listen('Chat', (e) => {
                    this.message.push(e.message);
                });
        },
        methods: {
            sendMessage() {
                axios
                    .post('api/sendMessage', {
                        message: this.textMessage,
                    });

                this.textMessage = '';
            },
            logout() {
                axios
                    .post('api/logout', {})
                    .then(response => {
                        console.log(response);
                    })
            }

        }
    }
</script>

<style scoped>

</style>