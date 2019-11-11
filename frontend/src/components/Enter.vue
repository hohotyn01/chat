<template>
    <div class="card text-center">
        <div class="card-header">
            Login
        </div>
        <div class="card-body">
            <div class="alert alert-danger" v-if="error_status">
                {{error_message}}
            </div>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input
                            type="email"
                            class="form-control"
                            id="exampleInputEmail1"
                            v-model="email" aria-describedby="emailHelp"
                            placeholder="Enter email"
                    >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input
                            type="password"
                            class="form-control"
                            id="exampleInputPassword1"
                            v-model="password" autocomplete="on"
                            placeholder="Password"
                    >
                </div>
                <div class="row">
                    <div class="col">
                        <button
                                type="submit"
                                @click.prevent="sendLogin"
                                class="btn btn-primary"
                        >
                            Login
                        </button>
                    </div>
                    <div class="col">
                        <button
                                type="submit"
                                class="btn btn-primary"
                        >
                            Registration
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer text-muted">
            2019
        </div>

    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        name: "Enter",
        data() {
            return {
                // Credentials
                email: '',
                password: '',

                // Event handler
                error_status: false,
                error_message: '',
            }
        },
        methods: {
            sendLogin() {
                axios
                    .post('api/login', {
                        email: this.email,
                        password: this.password
                    })
                    .then(response => {
                        this.error_status = false;
                        this.error_message = '';
                        document.cookie="token = " + response.data.token;
                    })
                    .catch(error => {
                        this.error_status = true;
                        this.error_message = error.response.statusText;
                        console.log(error.response);
                        console.log(error.response.statusText);
                    })
            }
        }
    }
</script>

<style scoped>

</style>