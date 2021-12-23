<template lang="html">
  <div :class="isMobile ? ['nav', 'sticky-top']: 'nav'">
    <img src="/img/logo.svg" alt="netwrix logo" :class="isMobile ? 'mx-auto' : ''">
  </div>
</template>

<script>
import responsive from '../mixins/responsive.js';
export default {
  mixins: [responsive],
  created() {
    window.addEventListener('resize', this.setClass);
    this.setClass();
  },
  destroyed() {
      window.removeEventListener('resize', this.setClass);
  },
  methods: {
    setClass() {
      this.isMobile = !this.checkWidth();
    }
  },
  data() {
    return {
      isMobile: null
    }
  }
  //120x25
  //mx-auto
}
</script>

<style lang="css" scoped>

</style>
