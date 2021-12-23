<template lang="html">
  <div class="container partners">
    <div v-if="!partners.length && !$parent.loading" class="text-center">
      Your search parameters did not match any partners. Please try different search.
    </div>
    <div class="d-flex justify-content-center" v-if="$parent.loading">
      <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>
    <div v-else v-for="(partner, i) in partners" class="card mx-auto">
      <div class="card-body row">
        <div class="col-12 col-xl-2 order-1 align-self-center">
          <img class="partner__image" :src="partner.logo" alt="partner logo" >
        </div>
        <div class="section-one col-12 col-xl-4 order-2 align-self-center">
          <p class="partner__company">{{ partner.company }}</p>
          <p class="partner__address">{{ partner.address }}</p>
        </div>
        <div class="col-12 col-xl-1 order-3 order-xl-4">
          <hr :width="width" :size="size" class="partner__divider mx-auto">
        </div>
        <div class="section-two col-12 col-xl-2 order-4 order-xl-3 align-self-start">
          <p class="partner__website"><a :href="partner.website">Website</a></p>
          <p class="partner__phone">{{ partner.phone }}</p>
        </div>
        <p class="partner__status col-12 col-xl-3 order-5">{{ partner.status }}</p>
      </div>
    </div>
  </div>
</template>

<script>
import responsive from '../mixins/responsive.js';
export default {
  props: ["partners"],
  mixins: [responsive],
  created() {
    window.addEventListener('resize', this.setHr);
    this.setHr();
  },
  destroyed() {
      window.removeEventListener('resize', this.setHr);
  },
  methods: {
    setHr() {
      let b = this.checkWidth();
      if (b) {
        this.width = 1;
        this.size = 58;
      } else {
        this.width = null;
        this.size = null;
      }
    }
  },
  data() {
    return {
      width: null,
      size: null,
    }
  }
}
</script>

<style lang="css" scoped>
</style>
