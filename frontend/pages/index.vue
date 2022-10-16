<template>
  <v-container class="pa-0 ma-0" fluid>
    <HomeSlider/>
    <LazyFeaturedProductsCard/>
    <LazyNewArrivalsCard/>
  </v-container>
</template>

<script>
export default {
  name: 'IndexPage',
  data() {
    return {
      slider: [
        "red",
        "green",
        "orange",
        "blue",
        "pink",
        "purple",
        "indigo",
        "cyan",
        "deep-purple",
        "light-green",
        "deep-orange",
        "blue-grey"
      ],
    }
  },
}
</script>
