<template>
    <div class="modal fade st_pop_form_wrapper" id="myModa3" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    &times;
                </button>
                <div class="st_pop_form_heading_wrapper float_left">
                    <h3>Sign Up</h3>
                </div>
                <form>
                    <div class="st_profile_input float_left">
                        <label>Name</label>
                        <input type="text" name="name" v-model="name"/>
                    </div>
                    <div class="st_profile_input float_left">
                        <label>Email</label>
                        <input type="text" name="email" />
                    </div>
                    <div class="st_profile_input float_left">
                        <label>Password</label>
                        <input
                            type="password"
                            placeholder="Password"
                            name="password"
                        />
                    </div>
                    <div class="st_profile_input float_left">
                        <label>Confirm Password</label>
                        <input
                            type="password"
                            placeholder="Password"
                            name="password_confirmation"
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
                <div class="st_form_pop_or_btn float_left">
                    <h4>or</h4>
                </div>
                <div class="st_form_pop_facebook_btn float_left">
                    <a href="#"
                        ><i class="fab fa-facebook-f"></i> Connect with
                        Facebook</a
                    >
                </div>
                <div class="st_form_pop_gmail_btn float_left">
                    <a href="#"
                        ><i class="fab fa-google-plus-g"></i> Connect with
                        Google</a
                    >
                </div>
                <div
                    class="
          st_form_pop_signin_btn st_form_pop_signin_btn_signup
          float_left
        "
                >
                    <h5>
                        I agree to the <a href="#">Terms & Conditions</a> &
                        <a href="#">Privacy Policy</a>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style></style>
