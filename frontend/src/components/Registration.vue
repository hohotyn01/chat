<template>
    <div class="card text-center">
        <div class="card-header">
            Registration
        </div>
        <div class="card-body">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input
                                type="text"
                                class="form-control"
                                name="name" v-model="name"
                                id="name"
                                placeholder="Name"
                        >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail">Email</label>
                        <input
                                type="email"
                                class="form-control"
                                name="email"
                                v-model="email"
                                id="inputEmail"
                                placeholder="Email"
                        >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input
                                type="password"
                                class="form-control"
                                name="password"
                                v-model="password"
                                id="password"
                                aria-describedby="passwordHelpBlock"
                                autocomplete="on"
                        >
                        <small id="passwordHelpBlock" class="form-text text-muted">
                            Your password must be 8-20 characters long.
                        </small>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password_confirmation">Password confirmation</label>
                        <input
                                type="password"
                                class="form-control"
                                name="password_confirmation"
                                v-model="confirm"
                                id="password_confirmation"
                                aria-describedby="passwordHelpBlock"
                                autocomplete="on"
                        >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button
                                type="submit"
                                @click.prevent="sendValue"
                                class="btn btn-primary"
                        >
                            Create account
                        </button>
                    </div>
                    <div class="col">
                        <button
                                type="submit"
                                class="btn btn-primary"
                        >
                            Login
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        name: "Registration",
        data() {
            return {
                name: '',
                email: '',
                password: '',
                confirm: '',
            }
        },
        methods: {
            sendValue() {
                axios
                    .post('api/register', {
                        name: this.name,
                        email: this.email,
                        password: this.password,
                        password_confirmation: this.confirm,
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