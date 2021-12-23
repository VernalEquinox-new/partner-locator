<template lang="html">
  <div class="filter">
    <div class="container">
      <div class="text mx-auto">
        <p class="text__large">Netwrix Partner Locator</p>
        <p>Hundreds of Netwrix partners around the world are standing by to help you.<br>
          With our Partner Locator you can easily find the list of authorized partners in your area.
        </p>
      </div>
      <div class="filter__form mx-auto">
        <div class="input-group">
          <input type="text" class="form-control search-input" :placeholder="ph" v-model="filter.search" @keyup.enter.prevent="$emit('start-search', filter)">
          <button class="btn" type="button"><i class="fas fa-search" @click="$emit('start-search', filter)"></i></button>
        </div>
        <div class="select-group">
          <dropdown-component idProp="status" btnName="Type"></dropdown-component>
          <dropdown-component idProp="country" btnName="Country" ref="country"></dropdown-component>
          <dropdown-component idProp="state" btnName="State"></dropdown-component>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import responsive from '../mixins/responsive.js';
import DropdownComponent from './DropdownComponent.vue';
export default {
  mixins:[responsive],
  components: { DropdownComponent },
  created() {
    window.addEventListener('resize', this.setPhValue);
    this.setPhValue();
  },
  destroyed() {
      window.removeEventListener('resize', this.setPhValue);
  },
  methods: {
    setFilter(property, val) {
      this.filter[property] = val;
      this.$emit('start-search', this.filter);
    },
    setPhValue() {
      let b = this.checkWidth();
      if (b) {
        this.ph = "Search by company name or address..."
      } else this.ph = "Search"
    },
  },
  data() {
    return {
      ph: "",
      filter: {},
      options: {
        status: [],
        country: [],
        state: [],
      }
    }
  }
}
</script>

<style lang="css" scoped></style>
