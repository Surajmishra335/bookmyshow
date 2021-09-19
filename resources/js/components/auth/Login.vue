<template>
    <div>
        <form @submit.prevent="login">
            <div class="st_profile_input float_left">
                <label>Email</label>
                <input type="text" name="'email" v-model="email" />
            </div>
            <div
                class="st_profile__pass_input st_profile__pass_input_pop float_left"
            >
                <input
                    type="password"
                    placeholder="Password"
                    name="password"
                    v-model="password"
                />
            </div>
            <div class="st_form_pop_fp float_left">
                <h3>
                    <a
                        href="#"
                        data-toggle="modal"
                        data-target="#myModa2"
                        target="_blank"
                        >Forgot Password?</a
                    >
                </h3>
            </div>
            <div class="st_form_pop_login_btn float_left">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    methods: {
        storeEmployee() {
            axios.post("/login", {
                email: this.email,
                password: this.password
            });
        }
    }
};
</script>
