<template>
    <div class="card text-center">
        <div class="card-header">
            Welcome
        </div>
        <div class="card-body">
            <label class="card-title" for="name">Enter Login</label>
            <div v-if="error">
                <p class="alert-danger">{{name_error}}</p>
            </div>
            <div class="input-group mb-3">
                <input class="form-control" id="name" v-model="name_login" type="text" placeholder="Login">
                <div class="input-group-append">
                    <button class="btn btn-outline-info" >Submit</button>
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="room">Сhoose Room</label>
                </div>
                <select class="custom-select" id="room" v-model="room">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3 Not valid</option>
                </select>
            </div>
        </div>
        <div class="card-footer text-muted">
            2019
        </div>

    </div>
</template>

<script>
    // import axios from 'axios';

    export default {
        name: "Enter",
        data() {
            return {
                name_login: '',
                room: '',
                move_chat: null,
                error: false,
                name_error: '',
            }
        },
        // mounted() {
        //     window.Echo.channel('chat.' . this.room)
        //         .listen('OnUser', (e) => {
        //             console.log(e);
        //         });
        // },
        // methods: {
        //     sendMessage() {
        //         axios
        //             .post('', {
        //                 login: this.name_login,
        //                 room: this.room,
        //             })
        //             .then(response => {
        //                 if (response.status === 200) {
        //                     this.error = false;
        //
        //                 }
        //             })
        //             .catch(error => {
        //                 this.error = true;
        //                 this.name_error = (error.response.data[0]);
        //                 console.log("error: ", error.response.data[0])
        //             });
        //     }
        // }
    }
</script>

<style scoped>

</style>