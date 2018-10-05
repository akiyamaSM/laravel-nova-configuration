<template>
  <div class="relative">
      <heading class="mb-6">Laravel Nova Configuration</heading>
      <div class="flex justify-between">
          <div class="relative h-9 mb-6">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-labelledby="search" role="presentation" class="fill-current absolute search-icon-center ml-3 text-70"><path fill-rule="nonzero" d="M14.32 12.906l5.387 5.387a1 1 0 0 1-1.414 1.414l-5.387-5.387a8 8 0 1 1 1.414-1.414zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path></svg>
              <input data-testid="search-input" dusk="search" placeholder="Search" type="search" class="appearance-none form-control form-input w-search pl-search">
          </div>
          <span class="ml-auto mb-6">
              <button class="btn btn-default btn-primary" dusk="create-button">
                    Create Configuration
              </button>
          </span>
      </div>
      <div class="card relative">
          <div class="py-3 flex items-center border-b border-50">
              <div class="px-3">
                  <div class="dropdown relative" dusk="select-all-dropdown">
                      <a class="dropdown-trigger h-9 flex items-center cursor-pointer select-none">
                          <div class="checkbox select-none rounded">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="block"><g id="Page-1" fill="none" fill-rule="evenodd"><g id="checkbox-off"><g id="b-link" fill="#FFF" fill-rule="nonzero"><rect id="b" width="20" height="20" rx="4"></rect></g><rect id="Rectangle-path" width="19" height="19" x=".5" y=".5" stroke="#CCD4DB" rx="4"></rect></g></g></svg>
                          </div>
                          <svg width="10px" height="6px" viewBox="0 0 10 6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="ml-2"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="04-user" transform="translate(-385.000000, -573.000000)" fill="#35393C" fill-rule="nonzero"><path d="M393.292893,573.292893 C393.683418,572.902369 394.316582,572.902369 394.707107,573.292893 C395.097631,573.683418 395.097631,574.316582 394.707107,574.707107 L390.707107,578.707107 C390.316582,579.097631 389.683418,579.097631 389.292893,578.707107 L385.292893,574.707107 C384.902369,574.316582 384.902369,573.683418 385.292893,573.292893 C385.683418,572.902369 386.316582,572.902369 386.707107,573.292893 L390,576.585786 L393.292893,573.292893 Z" id="Path-2-Copy"></path></g></g>
                          </svg>
                      </a> <!---->
                  </div>
              </div>
              <div class="flex items-center ml-auto px-3"><!----> <!---->
                  <div class="dropdown relative bg-30 hover:bg-40 rounded" data-testid="filter-selector" dusk="filter-selector">
                      <a class="dropdown-trigger h-9 flex items-center cursor-pointer select-none px-3">
                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-labelledby="filter" role="presentation" class="fill-current text-80"><path fill-rule="nonzero" d="M.293 5.707A1 1 0 0 1 0 4.999V1A1 1 0 0 1 1 0h18a1 1 0 0 1 1 1v4a1 1 0 0 1-.293.707L13 12.413v2.585a1 1 0 0 1-.293.708l-4 4c-.63.629-1.707.183-1.707-.708v-6.585L.293 5.707zM2 2v2.585l6.707 6.707a1 1 0 0 1 .293.707v4.585l2-2V12a1 1 0 0 1 .293-.707L18 4.585V2H2z"></path></svg> <svg width="10px" height="6px" viewBox="0 0 10 6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="ml-2"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="04-user" transform="translate(-385.000000, -573.000000)" fill="#35393C" fill-rule="nonzero"><path d="M393.292893,573.292893 C393.683418,572.902369 394.316582,572.902369 394.707107,573.292893 C395.097631,573.683418 395.097631,574.316582 394.707107,574.707107 L390.707107,578.707107 C390.316582,579.097631 389.683418,579.097631 389.292893,578.707107 L385.292893,574.707107 C384.902369,574.316582 384.902369,573.683418 385.292893,573.292893 C385.683418,572.902369 386.316582,572.902369 386.707107,573.292893 L390,576.585786 L393.292893,573.292893 Z" id="Path-2-Copy"></path></g></g></svg>
                      </a> <!---->
                  </div> <!---->
              </div>
          </div>
          <div class="overflow-hidden overflow-x-auto relative">
              <table cellpadding="0" cellspacing="0" data-testid="resource-table" class="table w-full">
                  <thead>
                  <tr>
                      <th class="w-16">&nbsp;</th>
                      <th class="text-left">
                          <span dusk="sort-id" class="cursor-pointer inline-flex items-center">
                                ID
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" class="ml-2"><g id="sortable-icon" fill="none" fill-rule="evenodd"><path id="Path-2-Copy-3" d="M1.70710678 4.70710678c-.39052429.39052429-1.02368927.39052429-1.41421356 0-.3905243-.39052429-.3905243-1.02368927 0-1.41421356l3-3c.39052429-.3905243 1.02368927-.3905243 1.41421356 0l3 3c.39052429.39052429.39052429 1.02368927 0 1.41421356-.39052429.39052429-1.02368927.39052429-1.41421356 0L4 2.41421356 1.70710678 4.70710678z" class="fill-60"></path> <path id="Combined-Shape-Copy-3" fill-rule="nonzero" d="M6.29289322 9.29289322c.39052429-.39052429 1.02368927-.39052429 1.41421356 0 .39052429.39052429.39052429 1.02368928 0 1.41421358l-3 3c-.39052429.3905243-1.02368927.3905243-1.41421356 0l-3-3c-.3905243-.3905243-.3905243-1.02368929 0-1.41421358.3905243-.39052429 1.02368927-.39052429 1.41421356 0L4 11.5857864l2.29289322-2.29289318z" class="fill-60"></path></g></svg>
                          </span>
                      </th>
                      <th class="text-center">
                          <span></span>
                      </th>
                      <th class="text-left">
                          <span dusk="sort-name" class="cursor-pointer inline-flex items-center">
                            Name
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" class="ml-2"><g id="sortable-icon" fill="none" fill-rule="evenodd"><path id="Path-2-Copy-3" d="M1.70710678 4.70710678c-.39052429.39052429-1.02368927.39052429-1.41421356 0-.3905243-.39052429-.3905243-1.02368927 0-1.41421356l3-3c.39052429-.3905243 1.02368927-.3905243 1.41421356 0l3 3c.39052429.39052429.39052429 1.02368927 0 1.41421356-.39052429.39052429-1.02368927.39052429-1.41421356 0L4 2.41421356 1.70710678 4.70710678z" class="fill-60"></path> <path id="Combined-Shape-Copy-3" fill-rule="nonzero" d="M6.29289322 9.29289322c.39052429-.39052429 1.02368927-.39052429 1.41421356 0 .39052429.39052429.39052429 1.02368928 0 1.41421358l-3 3c-.39052429.3905243-1.02368927.3905243-1.41421356 0l-3-3c-.3905243-.3905243-.3905243-1.02368929 0-1.41421358.3905243-.39052429 1.02368927-.39052429 1.41421356 0L4 11.5857864l2.29289322-2.29289318z" class="fill-60"></path></g></svg>
                          </span>
                      </th>
                      <th class="text-left">
                          <span dusk="sort-email" class="cursor-pointer inline-flex items-center">
                            Email
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" class="ml-2"><g id="sortable-icon" fill="none" fill-rule="evenodd"><path id="Path-2-Copy-3" d="M1.70710678 4.70710678c-.39052429.39052429-1.02368927.39052429-1.41421356 0-.3905243-.39052429-.3905243-1.02368927 0-1.41421356l3-3c.39052429-.3905243 1.02368927-.3905243 1.41421356 0l3 3c.39052429.39052429.39052429 1.02368927 0 1.41421356-.39052429.39052429-1.02368927.39052429-1.41421356 0L4 2.41421356 1.70710678 4.70710678z" class="fill-60"></path> <path id="Combined-Shape-Copy-3" fill-rule="nonzero" d="M6.29289322 9.29289322c.39052429-.39052429 1.02368927-.39052429 1.41421356 0 .39052429.39052429.39052429 1.02368928 0 1.41421358l-3 3c-.39052429.3905243-1.02368927.3905243-1.41421356 0l-3-3c-.3905243-.3905243-.3905243-1.02368929 0-1.41421358.3905243-.39052429 1.02368927-.39052429 1.41421356 0L4 11.5857864l2.29289322-2.29289318z" class="fill-60"></path></g></svg>
                          </span>
                      </th>
                      <th>&nbsp;</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr dusk="id-row">
                        <td>
                            <div class="flex items-center" data-testid="users-items-0-checkbox" dusk="2-checkbox">
                                <div tabindex="0" role="checkbox" class="checkbox select-none rounded">
                                    <input type="checkbox" class="hidden"> <div class="check"><svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="block"><g id="Page-1" fill="none" fill-rule="evenodd"><g id="checkbox-off"><g id="b-link" fill="#FFF" fill-rule="nonzero"><rect id="b" width="20" height="20" rx="4"></rect></g><rect id="Rectangle-path" width="19" height="19" x=".5" y=".5" stroke="#CCD4DB" rx="4"></rect></g></g></svg>
                                </div>
                                </div>
                            </div>
                        </td>
                        <td>1</td>
                        <td></td>
                        <td>
                            <span class="whitespace-no-wrap text-left" via-resource="" via-resource-id="">2</span>
                        </td>
                        <td>
                            <span class="whitespace-no-wrap text-left" via-resource="" via-resource-id="">2</span>
                        </td>
                        <td class="td-fit text-right pr-6">
                            <span>
                                <a href="/nova/resources/users/2" class="cursor-pointer text-70 hover:text-primary mr-3" data-testid="users-items-0-view-button" dusk="2-view-button" title="View">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" viewBox="0 0 22 16" aria-labelledby="view" role="presentation" class="fill-current"><path d="M16.56 13.66a8 8 0 0 1-11.32 0L.3 8.7a1 1 0 0 1 0-1.42l4.95-4.95a8 8 0 0 1 11.32 0l4.95 4.95a1 1 0 0 1 0 1.42l-4.95 4.95-.01.01zm-9.9-1.42a6 6 0 0 0 8.48 0L19.38 8l-4.24-4.24a6 6 0 0 0-8.48 0L2.4 8l4.25 4.24h.01zM10.9 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"></path></svg>
                                </a>
                            </span>
                            <span>
                                <a href="/nova/resources/users/2/edit" class="cursor-pointer text-70 hover:text-primary mr-3" dusk="2-edit-button" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-labelledby="edit" role="presentation" class="fill-current"><path d="M4.3 10.3l10-10a1 1 0 0 1 1.4 0l4 4a1 1 0 0 1 0 1.4l-10 10a1 1 0 0 1-.7.3H5a1 1 0 0 1-1-1v-4a1 1 0 0 1 .3-.7zM6 14h2.59l9-9L15 2.41l-9 9V14zm10-2a1 1 0 0 1 2 0v6a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h6a1 1 0 1 1 0 2H2v14h14v-6z"></path></svg>
                                </a>
                            </span>
                            <button data-testid="users-items-0-delete-button" dusk="2-delete-button" title="Delete" class="appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-labelledby="delete" role="presentation" class="fill-current"><path fill-rule="nonzero" d="M6 4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2h5a1 1 0 0 1 0 2h-1v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6H1a1 1 0 1 1 0-2h5zM4 6v12h12V6H4zm8-2V2H8v2h4zM8 8a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0V9a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0V9a1 1 0 0 1 1-1z"></path></svg>
                            </button>
                        </td>
                    </tr>
                  </tbody>
              </table>
          </div>
      </div>
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
            }).catch(error => this.$toasted.show(error, {type: 'error'}))
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