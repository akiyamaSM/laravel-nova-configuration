<template>
    <div class="card overflow-hidden">
        <h1 class="mb-3 text-90 font-normal text-2xl">Edit Configuration</h1>
        <form @submit.prevent="update">
            <div class="flex border-b border-40">
                <div class="w-1/5 px-8 py-6">
                    <label class="inline-block text-80 h-9 pt-2">Name</label>
                    <p class="text-sm leading-normal text-80 italic"></p>
                </div>
                <div class="w-1/2 px-8 py-6">
                    <input id="name" dusk="name" placeholder="Name" type="text" class="w-full form-control form-input form-input-bordered" :value="configuration.key">
                </div>
            </div>
            <div class="flex border-b border-40">
                <div class="w-1/5 px-8 py-6">
                    <label class="inline-block text-80 h-9 pt-2">Value</label>
                    <p class="text-sm leading-normal text-80 italic"></p>
                </div>
                <div class="w-1/2 px-8 py-6">
                    <input id="value" dusk="value" placeholder="value" type="text" class="w-full form-control form-input form-input-bordered" :value="configuration.value">
                </div>
            </div>
            <div class="bg-30 flex px-8 py-4">
                <button dusk="update-button" class="btn btn-default btn-primary">
                    Update Configuration
                </button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    name: 'edit-configuration',
    props: ['id'],
    data(){
        return{
            //id: this.$route.params.id,
            configuration: {},
        }
    },
    mounted(){
        axios('/nova-vendor/laravel-nova-configuration/configurations/' + this.id).
            then( response => this.configuration = response.data)
            .catch(error => console.log(error))
    },
    methods:{
        update(){
            //axios('')
            console.log('here to edit')
            this.$router.push({ name: 'laravel-nova-configuration'})
        }
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>