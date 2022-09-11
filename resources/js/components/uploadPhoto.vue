<template>
    <div>
        <div class="card login-page bg-white shadow-md rounded border-0">
            <div class="card-body">
                <h5 class="fs-2 text-center">Upload your Profile Picture</h5>
                <p class="text-center">Only image files with maximum size of 100kb are allowed. <strong>A picture with hat or glasses will leads to disqualification.</strong></p>
                <p class="text-center">
                    <input type="file" accept=".jpg, .png, .jpeg" name="upoadphoto" @change="photoChange" id="uploadphoto" hidden>
                    <label for="uploadphoto" class="btn btn-outline-primary w-100">Click to Upload</label>
                </p>

                <p class="text-center" v-if="isUploaded">
                    <small >1 file has been selected : </small>
                    <small >{{fileName}} <span > [{{fileSize}} kb] </span></small>
                </p>
                <p class="text-center alert alert-danger" v-if="isUploadedError">
                    <small >{{errorMessage}} </small>
                    <ul v-if="isError" class="text-danger">
                        <li v-for="error in errors" :key="error" > 
                            <span v-for="err in error" :key="err"> <span v-text="err"></span>&nbsp; </span>
                        </li>
                    </ul> 
                </p>

                <div class="text-center" v-if="showPreview">
                    <img :src="Dataurl" alt="" srcset="" style="height: 200px; width: 200px; object-fit: contain;" class="img-thumbnail">
                </div>
            </div>
        </div><!---->
        <div class="form-group my-5 text-center">
            <button @click="uploadPhoto" class="btn btn-primary">Finish</button>
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
            showPreview : false,
            Dataurl : '',
        }
    },
    methods: {
        photoChange(e){
            this.isError = false
            this.errors = []
            this.isUploaded = false
            this.isUploadedError = false
            this.errorMessage = ""
            this.fileName = ""
            this.fileSize = 0
            this.fileUpload = ""
            let self = this;
            if (!e.target.files[0]) return false;
            console.log(e.target.files[0])
            const file = e.target.files[0];
            this.fileUpload = e.target.files[0];
            this.fileName = file.name
            this.fileSize = Math.round(file.size/1000)
            console.log(Math.round(file.size/1000))

            if (Math.round(file.size/1000) > 101){
                this.isUploadedError = true;
                this.errorMessage = "File size too large. Your file must 100kb or less";
                return false;
            }


            let fr = new FileReader()

            fr.readAsDataURL(file)
            fr.onload = function(){
                self.Dataurl = fr.result
            }

            this.showPreview = true;

            this.isUploaded = true;
        },
        async uploadPhoto(){
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
            await axios.post('/bk/uploadPhoto', formData ,{headers: {
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

                window.location.assign("/dashboard")
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