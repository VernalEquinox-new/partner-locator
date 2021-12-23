<template lang="html">
  <div>
    <header-component></header-component>
    <filter-component @start-search="getPartners"></filter-component>
    <partners-component :partners="partners"></partners-component>
  </div>
</template>

<script>
import PartnersComponent from './PartnersComponent.vue';
import HeaderComponent from './HeaderComponent.vue';
import FilterComponent from './FilterComponent.vue';
export default {
  components: {
    PartnersComponent,
    HeaderComponent,
    FilterComponent,
  },
  methods: {
    getPartners(filter) {
      this.loading = true;
      axios
        .get("api/partners", {params: filter})
        .then((res) => {
          this.partners = res.data;
          this.loading = false;
        });
    },
  },
  data() {
    return {
      partners: [],
      loading: false,
    }
  },
  created() {
    this.getPartners({})
  }
}
</script>

<style lang="css" scoped>

</style>
