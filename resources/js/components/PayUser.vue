<template>
    <div >
          <button @click="fShowDialog" class="btn btn-primary my-2">Pay User</button>
          <div class="payUserDialog" v-if="showDialog">
              <div class="payUserDialog_container">
                  <div class="card p-2 px-md-3 text-center position-relative" v-if="showPage1">
                      <a class="text-danger position-absolute close" @click="fHideDialog">&times;</a>
                      <div v-if="isTask" class="alert alert-success mt-3">Worker paid successfully!</div>
                      <h6>PAY</h6>
                      <h3>{{username}}</h3>

                      <div class="form-group">
                          <label for="">How many {{paymentmode}} (s) are you paying the worker?</label>
                          <select name="howmany" v-model="times" id="" class="form-select form-control">
                              <option v-for="n in 100" :key="n" :value="n">{{n}}</option>
                          </select>
                      </div>

                      <div class="form-group">
                          <label for="">Job</label>
                          <input type="text" class="form-control" disabled :value="jobname">
                      </div>

                      <div class="form-group">
                          <a v-if="isLoading" href="#?" class="btn btn-primary">Loading...</a>
                          <a v-else href="#?" @click="fShowPage2" class="btn btn-primary">PAY NOW</a>
                      </div>
                  </div>
                <div class="card p-2 px-md-3 text-center" v-if="showPage2">
                    <h6 class="w-75 mx-auto">You are about to pay {{username}} 
                        <span>{{times}}</span><span>{{paymentmode}}</span><span v-text="times < 2 ? '' : 's'"></span>
                    </h6>

                    <h3 class="text-center">
                       &#163; <span v-text="times * rate"></span>
                    </h3>

                    <div class="d-flex justify-content-between">
                        <a v-if="isLoading" href="#?" class="btn btn-primary w-100">Loading...</a>
                        <a v-else href="#?" class="btn btn-primary w-100" @click="payUser">Yes</a>
                        <a href="#?" class="btn btn-link" @click="fShowPage1" > cancel</a>
                    </div>
                </div>
              </div>


          </div>
    </div>
        
</template>


<script>
export default {
    props : [
        "jobname", "jobid", "username", "paymentmode", "userid", "userjobid", "rate"
        ],
    data() {
        return {
            isLoading : false,
            showDialog : false,
            showPage1 : true,
            showPage2 : false,
            times: 1,
            isTask : false,
        }
    },

    methods: {
        fShowPage2(){
            this.isLoading = true
            setTimeout(() => {
                this.showPage1 = false;
                this.showPage2 = true;
                this.isLoading = false
            }, 1000);
        },

        fShowPage1(){
            this.showPage1 = true;
            this.showPage2 = false;
        },

        fHideDialog(){
            this.isLoading = false;
            
            this.showPage2 = false;
            this.showPage1 = true;
            this.times = 1;
            if (this.isTask == true){
                window.location.reload();
            }
            this.showDialog = false;
        },
        fShowDialog(){
            this.showDialog = true;
        },
        payUser(){
            this.isLoading = true;
            setTimeout(async () => {
                var data = {
                    "userjob_id" : this.userjobid,
                    "user_id" : this.userid,
                    "job_id" : this.jobid,
                    "amount" : this.rate * this.times
                }
                console.log(data)

                await axios.post(`/management/payuser`, data, {
                    headers:{
                        'Content-Type': 'application/json',
                        'Allow-Origin' : "*",
                    }
                })
                .then((response)=> {
                    console.log(response)
                    this.isTask = true;
                    this.fShowPage1()
                })
                this.isLoading = false;
            }, 1000);
        }
    },
}
</script>