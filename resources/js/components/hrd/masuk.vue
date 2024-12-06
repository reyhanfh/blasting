<template>
    <div class="container mt-5 template">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="text-center">
                        <div class="card-header">
                            <img
                                style="height: 30px"
                                src="https://myhorison.com/v2/images/web/logo-myhorison.png"
                                class="logo"
                                alt="Bootstrap Gallery"
                            />
                        </div>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="login">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input
                                    type="text"
                                    v-model="username"
                                    class="form-control"
                                    id="username"
                                    required
                                />
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input
                                    type="password"
                                    v-model="password"
                                    class="form-control"
                                    id="password"
                                    required
                                />
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            username: "",
            password: "",
        };
    },
    methods: {
        async login() {
            try {
                const response = await axios.post("/masuk/redirect", {
                    username: this.username,
                    password: this.password,
                });
                window.location.href = "http://127.0.0.1:8000/home";
            } catch (error) {
                console.error(error.response.data);
                alert("Login failed: " + error.response.data.error);
            }
        },
    },
};
</script>

