<template>
  <div>
      <ul>
          <li class="configuration" v-for="(configuration, index) in configurations" :key="index">
              {{ configuration.value }}
          </li>
      </ul>
  </div>
</template>

<script>
export default {
    name: 'list-configurations',
    props: ['configurations']
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>