<template>
    <div class="card text-center">
        <div class="card-header">
            Login
        </div>
        <div class="card-body">
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
                email: '',
                password: '',
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
                        console.log(response)
                    })
                    .catch(error => {
                        console.log("error: ", error.response)
                    })
            }
        }
    }
</script>

<style scoped>

</style>