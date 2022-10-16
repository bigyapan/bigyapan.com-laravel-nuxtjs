<template>
  <v-app>
    <Header/>
    <v-main>
      <v-container fluid class="ma-0 pa-0">
        <Nuxt/>
      </v-container>
    </v-main>
    <Footer/>
  </v-app>
</template>

<script>

export default {
  name: 'DefaultLayout',
  data() {
    return {}
  }
}
</script>
