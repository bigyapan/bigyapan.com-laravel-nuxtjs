<template>
  <v-row no-gutters>
    <v-col cols="12">
      <v-carousel v-model="model"
                  height="50vh"
                  show-arrows-on-hover
                  cycle
                  hide-delimiter-background
                  delimiter-icon="fa-solid fa-minus"
      >
        <template v-slot:prev="{ on, attrs }">
          <v-btn
            icon
            x-small
            fab
            v-bind="attrs"
            v-on="on"
          ><v-icon>fa-solid fa-chevron-left</v-icon></v-btn>
        </template>
        <template v-slot:next="{ on, attrs }">
          <v-btn
            icon
            x-small
            fab
            v-bind="attrs"
            v-on="on"
          ><v-icon>fa-solid fa-chevron-right</v-icon></v-btn>
        </template>
        <v-carousel-item
          v-for="(color, i) in colors"
          :key="color"
        >
          <v-sheet
            :color="color"
            height="100%"
            tile
          >
            <v-row
              class="fill-height"
              align="center"
              justify="center"
            >
              <div class="text-h2">
                Slide {{ i + 1 }}
              </div>
            </v-row>
          </v-sheet>
        </v-carousel-item>
      </v-carousel>
    </v-col>
  </v-row>

</template>

<script>
export default {
  name: "HomeSlider",
  data: () => ({
    model: 0,
    colors: [
      'primary',
      'secondary',
      'yellow darken-2',
      'red',
      'orange',
    ],
  }),
}
</script>

<style scoped>

</style>
