<template>
  <div class="relative">
      <heading class="mb-6">Laravel Nova Configuration</heading>
      <div class="flex justify-between">
          <div class="relative h-9 mb-6">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-labelledby="search" role="presentation" class="fill-current absolute search-icon-center ml-3 text-70"><path fill-rule="nonzero" d="M14.32 12.906l5.387 5.387a1 1 0 0 1-1.414 1.414l-5.387-5.387a8 8 0 1 1 1.414-1.414zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path></svg>
              <input data-testid="search-input" dusk="search" placeholder="Search" type="search" class="appearance-none form-control form-input w-search pl-search" v-model="search">
          </div>
          <span class="ml-auto mb-6">
              <button class="btn btn-default btn-primary" dusk="create-button" @click="createConfiguration">
                    Create Configuration
              </button>
          </span>
      </div>
      <div class="card relative">
          <div class="overflow-hidden overflow-x-auto relative">
              <table cellpadding="0" cellspacing="0" data-testid="resource-table" class="table w-full">
                  <thead>
                  <tr>
                      <th class="text-left">
                          <span dusk="sort-id" class="cursor-pointer inline-flex items-center">
                                ID
                          </span>
                      </th>
                      <th class="text-center">
                          <span></span>
                      </th>
                      <th class="text-left">
                          <span dusk="sort-name" class="cursor-pointer inline-flex items-center">
                            KEY
                          </span>
                      </th>
                      <th class="text-left">
                          <span dusk="sort-email" class="cursor-pointer inline-flex items-center">
                            VALUE
                          </span>
                      </th>
                      <th>&nbsp;</th>
                  </tr>
                  </thead>
                  <tbody v-for="(configuration, index) in filtered" :key="index">
                    <tr dusk="id-row">
                        <td>{{ configuration.id }}</td>
                        <td></td>
                        <td>
                            <span class="whitespace-no-wrap text-left">{{ configuration.key }}</span>
                        </td>
                        <td>
                            <span class="whitespace-no-wrap text-left">{{ configuration.value }}</span>
                        </td>
                        <td class="td-fit text-right pr-6">
                            <span>
                                <a @click="editConfiguration(configuration)" class="cursor-pointer text-70 hover:text-primary mr-3" dusk="2-edit-button" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-labelledby="edit" role="presentation" class="fill-current"><path d="M4.3 10.3l10-10a1 1 0 0 1 1.4 0l4 4a1 1 0 0 1 0 1.4l-10 10a1 1 0 0 1-.7.3H5a1 1 0 0 1-1-1v-4a1 1 0 0 1 .3-.7zM6 14h2.59l9-9L15 2.41l-9 9V14zm10-2a1 1 0 0 1 2 0v6a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h6a1 1 0 1 1 0 2H2v14h14v-6z"></path></svg>
                                </a>
                            </span>
                            <button data-testid="users-items-0-delete-button" dusk="2-delete-button" title="Delete" class="appearance-none cursor-pointer text-70 hover:text-primary mr-3" @click="askToDelete(configuration)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-labelledby="delete" role="presentation" class="fill-current"><path fill-rule="nonzero" d="M6 4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2h5a1 1 0 0 1 0 2h-1v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6H1a1 1 0 1 1 0-2h5zM4 6v12h12V6H4zm8-2V2H8v2h4zM8 8a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0V9a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0V9a1 1 0 0 1 1-1z"></path></svg>
                            </button>
                        </td>
                    </tr>
                  </tbody>
              </table>
          </div>
      </div>
      <ConfirmDelete v-if="showModal" @close="resetDelete" @confirm="deleteConfiguration"></ConfirmDelete>
  </div>
</template>

<script>
import ConfirmDelete from './ConfirmDelete'

export default {
    components: {
        ConfirmDelete,
    },
    computed:{
      filtered: function(){
          if( this.search === ''){
              return this.configurations;
          }

          return this.configurations.filter( config =>  this.isInKey(config, 'key') || this.isInKey(config, 'value'))
      }
    },
    mounted() {
        axios.get('/nova-vendor/laravel-nova-configuration/getAllConfigurations')
            .then(response => {
                this.configurations = response.data
            }).catch(error => this.$toasted.show(error, {type: 'error'}))
    },
    data() {
        return {
            search: '',
            id_delete: '',
            showModal: false,
            configurations : []
        }
    },
    methods:{
        editConfiguration(configuration){
            this.$router.push({ name: 'laravel-nova-configuration-edit', params: {'id': configuration.id, 'configuration': configuration}});
        },
        createConfiguration(){
            this.$router.push({ name: 'laravel-nova-configuration-create'});
        },
        isInKey(conf, field){
            return conf[field].toLowerCase().search(this.search.toLowerCase()) !== -1;
        },
        askToDelete(configuration){
            this.id_delete = configuration.id;
            this.showModal = true;
        },
        deleteConfiguration(){
            axios.delete('/nova-vendor/laravel-nova-configuration/configurations/'+ this.id_delete)
                .then(response => {
                    this.configurations = this.configurations.filter((config) => {
                        return config.id !== response.data.id;
                    });
                    this.$toasted.show("The configuration has been updated successfully", {
                        position: 'top-right',
                        type: 'success',
                        duration: 2000
                    });
                }).catch(error => {
                    this.$toasted.show(error, {
                        type: 'error',
                        position: 'top-right',
                        duration: 3000
                    });
                });
            this.resetDelete();
        },
        resetDelete(){
            this.id_delete = '';
            this.showModal = false;
        }
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>