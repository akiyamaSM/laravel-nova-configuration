<template>
  <div>
      <div class="configuration" v-for="(configuration, index) in configurations">
        {{ configuration.label }}
      </div>
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