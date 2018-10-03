<template>
  <div>
      <heading class="mb-6">Laravel Nova Configuration</heading>
      <ul>
          <li class="configuration" v-for="(configuration, index) in configurations" :key="index">
              {{ configuration.value }}
              <a href="#" @click.prevent="editConfiguration(configuration)">Edit Me</a>
          </li>
      </ul>
  </div>
</template>

<script>
export default {
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
    },
    methods:{
        editConfiguration(configuration){
            this.$router.push({ name: 'laravel-nova-configuration-edit', params: {'id': configuration.id, 'configuration': configuration}})
        }
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>