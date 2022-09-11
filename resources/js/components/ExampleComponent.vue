<template>
    <div id="preloader" v-if="vueLoader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                vueLoader : false,
            }
        },
        mounted() {
            this.$root.$on("vueLoader", ()=>{
                this.vueLoader = !this.vueLoader
            })
        }
    }
</script>
