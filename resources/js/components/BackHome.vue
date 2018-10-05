<template>
  <div>
      <button rel="prev" dusk="previous" class="btn btn-link py-3 px-4 text-80 opacity-50" @click="goHome">
          Previous
      </button>
  </div>
</template>

<script>
export default {
    methods:{
        goHome(){
            this.$router.push({ name: 'laravel-nova-configuration' })
        }
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>