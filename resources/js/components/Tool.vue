<template>
    <div>
        <heading class="mb-6">Laravel Nova Configuration</heading>
            <list-configurations :configurations="configurations">
            </list-configurations>
    </div>
</template>

<script>
    import Configurations from './Configurations'

export default {
    components: {
        'list-configurations': Configurations
    },
    mounted() {
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
