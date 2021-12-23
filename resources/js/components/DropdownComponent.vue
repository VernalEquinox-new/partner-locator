<template lang="html">
  <div class="dropdown">
    <button class="btn btn-outlined btn-sm dropdown-toggle d-flex justify-content-between align-items-center" type="button" :id="idProp" data-bs-toggle="dropdown" aria-expanded="false"  @click="getOptions(idProp)">
      {{ activeItem.name }}
      <img src="/img/arrow.svg" alt="">
    </button>
    <ul class="dropdown-menu" :aria-labelledby="idProp">
      <li v-if="idProp !== 'status'"><input class="form-control form-control-sm" type="text" v-model="itemFilter" @input="findOptions()"/></li>
      <li><button class="dropdown-item" type="button" @click="setFilter(idProp, { name: btnName } )">{{ btnName }}</button></li>
      <li><button v-for="(item, i) in items" class="dropdown-item" type="button" @click="setFilter(idProp, item)">{{item.status || item.name}}</button></li>
      <li class="d-flex justify-content-center">
        <div class="spinner-border text-primary dropdown-item disabled" v-if="loading" role="status" style="width: 40px; height: 40px;">
          <span class="visually-hidden">Loading...</span>
        </div>
      </li>
      <li class="visually-hidden">{{country}}</li>
    </ul>
  </div>
</template>

<script>
export default {
  props: ["idProp", "btnName"],
  data () {
    return {
      itemFilter: "",
      items: [],
      activeItem: {
        name: this.btnName,
        country_id: null,
      },
      loading: false,
    }
  },
  computed: {
    country() {
      if(this.idProp === 'state') {
        return this.$parent.$refs['country'].activeItem.country_id;
      }
    }
  },
  methods: {
    findOptions() {
      let haystack = this.$parent.options[this.idProp];
      if (this.country) {
        haystack = haystack.filter((e) => e.country_id === this.country);
      }
      if (this.itemFilter === "") {
        this.items = haystack;
      } else {
        let needle = this.itemFilter.toLowerCase();
        this.items = haystack.filter((o) => o.name.toLowerCase().indexOf(needle) > -1);
      }
    },
    getOptions(val) {
      if (!this.$parent.options[val].length) {
        this.loading = true;
        axios
        .get("api/options", {
          params: {
            table: val
          }
        })
        .then((res) => {
          this.$parent.options[val] = res.data
          this.findOptions()
          this.loading = false
        })
      }
    },
    setFilter(col, val) {
      if(val.hasOwnProperty('status')) {
        val.name = val.status;
        val.short_name = val.status;
      }
      this.activeItem = val;
      if(val.name === this.btnName) {
        val.short_name = "";
      }
      this.$parent.setFilter(col, val.short_name);
    }
  }
}
</script>

<style lang="css" scoped>
  input {
    border: 1px solid #B7BCC1;
    margin: 0 5px;
    width: 95%;
  }
</style>
