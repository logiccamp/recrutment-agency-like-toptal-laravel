<template>
    <form @submit.prevent="handleSubmit" class="form">
        <h5 class="mb-3 text-center">Register your account</h5>

         <div v-if="isErrorL">
            <p class="text-danger text-center">{{errmessageL}}</p>
            <ul class="text-danger">
                <li v-for="(errors, index) in mainErrorL" :key="index">
                    <span v-for="(err, index) in errors" :key="index">{{err}}, </span>
                </li>
            </ul>
        </div>

        <div v-if="successMsg != ''">
            <p class="text-center text-success">{{successMsg}}</p>
        </div>
        <div class="form-floating mb-2">
            <input
                type="text"
                class="form-control"
                id="floatingInput"
                placeholder="Harry"
                name="first_name"
                v-model="first_name"
            />
            <label for="floatingInput">Firstname</label>
        </div>

        <div class="form-floating mb-2">
            <input
                type="text"
                class="form-control"
                id="floatingInput"
                placeholder="Harry"
                name="last_name"
                v-model="last_name"
            />
            <label for="floatingInput">Lastname</label>
        </div>

        <div class="form-floating mb-2">
            <input
                type="email"
                class="form-control"
                id="floatingEmail"
                placeholder="name@example.com"
                v-model="email"
            />
            <label for="floatingEmail">Email Address</label>
        </div>

        <div class="form-floating mb-3">
            <input
                type="password"
                class="form-control"
                id="floatingPassword"
                placeholder="Password"
                v-model="password"
            />
            <label for="floatingPassword">Password</label>
        </div>

        <div class="form-floating mb-3">
            <input
                type="password"
                class="form-control"
                id="floatingPassword"
                placeholder="Password"
                v-model="password_confirmation"
            />
            <label for="floatingPassword">Confirm Password</label>
        </div>

        <div class="form-floating mb-3">
            <small class="text-muted fs-16">
                By submitting, you acknowledge that you have read and agreed to
                our <a href="">Terms and Conditions</a>,
                <a href="">Privacy Policy</a>, and <a href="">Cookie Policy</a>.
            </small>
        </div>

        <button class="btn btn-primary w-100" type="submit">Register</button>

        <div class="col-12 text-center mt-3">
            <p class="mb-0 mt-3">
                <small class="text-dark me-2">Already have an account ?</small>
                <a href="/login" class="text-dark fw-bold">Sign in</a>
            </p>
        </div>
        <!--end col-->
    </form>
</template>


<script>
export default {
    data() {
        return {
            successMsg : "",
            first_name : "",
            last_name : "",
            email : "",
            password : "",
            password_confirmation : "",
            isLoading : false,
            isErrorL : false,
            errmessageL : '',
            mainErrorL : []
        }
    },

    methods: {
        async handleSubmit(){
            this.isErrorL = false;
            this.successMsg = "";
            this.errmessageL = [];
            
            this.$root.$emit("vueLoader")
            let self = this;
            var data = {
                "first_name" : this.first_name,
                "last_name" : this.last_name,
                "email" : this.email,
                "password" : this.password,
                "password_confirmation" : this.password_confirmation,
            }


            await axios.post("/bk/registerUser", data)
            .then((response)=>{
                if (response.data.status == true) {
                        this.successMsg = "Registration success. Please wait..."
                        window.location.assign("/account/verify");
                }else{
                    this.isErrorL = true;
                    this.errmessageL = response.data.message
                    this.isLoading = false;
                }
                this.$root.$emit("vueLoader")
            })
            .catch((error)=>{
                self.isErrorL = true;
                self.errmessageL = "";
                self.mainErrorL = error.response.data.errors
                self.$root.$emit("vueLoader")
            })
        }
    },
    mounted() {
    },
}
</script>