<template>
    <div>
        <div class="card login-page bg-white shadow rounded border-0">
            <div class="card-body">
                <h5 class="fs-2 text-center">Upload your CV</h5>
                <p class="text-center">Please upload a copy of your cv. Only PDF, DOC, DOCX are allowed</p>
                <p class="text-center">
                    <input accept=".pdf, .docx, doc" type="file" name="upoadcv" @change="cvChange" id="uploadcv" hidden />
                    <label for="uploadcv" class="btn btn-outline-primary">Click to Upload</label>
                </p>

                <p class="text-center" v-if="isUploaded">
                    <small >1 file has been selected : </small>
                    <small >{{fileName}} <span :class="fileSize < 1 ? 'd-none' : '' "> [{{fileSize}} mb] </span></small>
                </p>
                <p class="text-center alert alert-danger" v-if="isUploadedError">
                    <small >{{errorMessage}} </small>
                    <ul v-if="isError" class="text-danger">
                        <li v-for="error in errors" :key="error" > 
                            <span v-for="err in error" :key="err"> <span v-text="err"></span>&nbsp; </span>
                        </li>
                    </ul> 
                </p>
            </div>
        </div>
        <!---->
        <div class="form-group my-5 text-center">
            <button @click="uploadCV" class="btn btn-primary">Save & Continue</button>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            isUploaded : false,
            fileName : "",
            fileSize : 0,
            isUploadedError : false,
            errorMessage : '',
            fileUpload : "",
            isError : false,
            errors : [],
        }
    },
    methods: {
        cvChange(e){
            this.isError = false
            this.errors = []
            this.isUploaded = false
            this.isUploadedError = false
            this.errorMessage = ""
            this.fileName = ""
            this.fileSize = 0
            this.fileUpload = ""

            if (!e.target.files[0]) return false;
            console.log(e.target.files[0])
            const file = e.target.files[0];
            this.fileUpload = e.target.files[0];
            this.fileName = file.name
            this.fileSize = Math.round(file.size/1000000)
            console.log(Math.round(file.size/1000000))

            if (Math.round(file.size/1000000) > 10){
                this.isUploadedError = true;
                this.errorMessage = "File size too large. Your file must be less than 10mb";
                return false;
            }

            this.isUploaded = true
        },
        async uploadCV(){
            this.isError = false
            this.errors = []
            this.isUploaded = false
            this.isUploadedError = false
            this.errorMessage = ""

            if (this.fileUpload == "") return false;
            this.$root.$emit("vueLoader")
            let formData = new FormData();
            formData.append('Image', this.fileUpload);
            let self = this
            await axios.post('/bk/uploadCv', formData ,{headers: {
            'Content-Type': 'multipart/form-data',
            "Access-Control-Allow-Origin": "*",
            }})
            .then((response)=> {
                if (response.data.status == false){
                    this.isUploadedError = true;
                    this.errorMessage = response.data.message;
                    this.$root.$emit("vueLoader")
                    return false;
                }

                window.location.assign("/process/step-3")
            })
            .catch((error)=>{
                this.isUploadedError = true;
                self.isError = true
                self.errors = error.response.data.errors
                this.$root.$emit("vueLoader")

            })
        }
    },
    mounted() {
        console.log("Hello")
    },
}
</script>