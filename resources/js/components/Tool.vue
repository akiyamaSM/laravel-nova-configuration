<template>
    <div>
        <heading class="mb-6">Laravel Nova Configuration</heading>

        <card class="bg-90 flex flex-col items-center justify-center" style="min-height: 300px">
            <list-configurations :configurations="configurations">

            </list-configurations>

        </card>
    </div>
</template>

<script>
    import Configurations from 'Configurations.vue'

export default {
    components: {
        Configurations
    },
    created() {
        axios.get('/nova-vendor/laravel-nova-configuration/getAllConfigurations')
            .then(response => {
                this.configurations = response.data
            }).catch(error => console.log(error))
    },

    data() {
        return {
            configurations : ''
        }
    }
}
</script>

<style>
    /* Scoped Styles */
</style>
