<template>
  <v-container fluid class="ma-0 pa-0">
    <v-row no-gutters>
      <!-- Top Bar -->
      <v-col cols="12">
        <v-system-bar app color="white" height="60px" flat>
          <v-btn text depressed>
            <v-icon left>fa-solid fa-shop</v-icon>
            Sellers
          </v-btn>
          <v-btn text depressed>
            <v-icon left>fa-solid fa-gifts</v-icon>
            Bigyapan Mela
          </v-btn>
          <v-btn text depressed>
            <v-icon left>fa-solid fa-phone-volume</v-icon>
            Contact Us
          </v-btn>
          <v-spacer></v-spacer>
          <v-btn text depressed value="sign-in">Sign in</v-btn>
          <v-divider vertical></v-divider>
          <v-btn text depressed value="sign-in">Create account</v-btn>
        </v-system-bar>
      </v-col>
      <!-- Main Header -->
      <v-col cols="12">
        <v-app-bar app
                   flat
                   elevate-on-scroll
                   hide-on-scroll
                   color="white"
                   extended
        >
          <v-row align="center" no-gutters>
            <v-col cols="2">
              <NuxtLink to="/">
                <v-img src="/images/logos/horizontal.png" max-height="50px" max-width="180px" alt="" contain></v-img>
              </NuxtLink>
            </v-col>
            <v-col cols="2">
              <v-autocomplete
                class="search-bar-left"
                prepend-inner-icon="fa-solid fa-map-marker-alt"
                color="#F69038"
                filled
                outlined
                dense
                hide-details
                placeholder="Select Location..."
              >
              </v-autocomplete>
            </v-col>
            <v-col cols="2">
              <v-autocomplete
                class="search-bar-middle"
                prepend-inner-icon="fa-solid fa-tags"
                color="#F69038"
                filled
                outlined
                dense
                hide-details
                placeholder="Select Categories..."
              >
              </v-autocomplete>
            </v-col>
            <v-col cols="5">
              <v-text-field
                class="search-bar-right"
                append-icon="fa-solid fa-search"
                color="#F69038"
                dense
                outlined
                filled
                hide-details
                placeholder="Search for everything..."
              >
              </v-text-field>
            </v-col>
          </v-row>
          <v-tooltip bottom>
            <template v-slot:activator="{ on }">
              <v-btn class="mr-2" v-on="on" icon>
                <v-icon>fa-regular fa-heart</v-icon>
              </v-btn>
            </template>
            Wishlist
          </v-tooltip>

          <button class="button">
            <v-icon dark>fa-solid fa-plus</v-icon>
            <span class="button__text"><strong>Post your Ad</strong></span>
            <svg class="button__svg" role="presentational" viewBox="0 0 600 600">
              <defs>
                <clipPath id="myClip">
                  <rect x="0" y="0" width="100%" height="50%"/>
                </clipPath>
              </defs>
              <g clip-path="url(#myClip)">
                <g id="money">
                  <path
                    d="M441.9,116.54h-162c-4.66,0-8.49,4.34-8.62,9.83l.85,278.17,178.37,2V126.37C450.38,120.89,446.56,116.52,441.9,116.54Z"
                    fill="#699e64" stroke="#323c44" stroke-miterlimit="10" stroke-width="14"/>
                  <path
                    d="M424.73,165.49c-10-2.53-17.38-12-17.68-24H316.44c-.09,11.58-7,21.53-16.62,23.94-3.24.92-5.54,4.29-5.62,8.21V376.54H430.1V173.71C430.15,169.83,427.93,166.43,424.73,165.49Z"
                    fill="#699e64" stroke="#323c44" stroke-miterlimit="10" stroke-width="14"/>
                </g>
                <g id="creditcard">
                  <path
                    d="M372.12,181.59H210.9c-4.64,0-8.45,4.34-8.58,9.83l.85,278.17,177.49,2V191.42C380.55,185.94,376.75,181.57,372.12,181.59Z"
                    fill="#a76fe2" stroke="#323c44" stroke-miterlimit="10" stroke-width="14"/>
                  <path
                    d="M347.55,261.85H332.22c-3.73,0-6.76-3.58-6.76-8v-35.2c0-4.42,3-8,6.76-8h15.33c3.73,0,6.76,3.58,6.76,8v35.2C354.31,258.27,351.28,261.85,347.55,261.85Z"
                    fill="#ffdc67"/>
                  <path d="M249.73,183.76h28.85v274.8H249.73Z" fill="#323c44"/>
                </g>
              </g>
              <g id="wallet">
                <path
                  d="M478,288.23h-337A28.93,28.93,0,0,0,112,317.14V546.2a29,29,0,0,0,28.94,28.95H478a29,29,0,0,0,28.95-28.94h0v-229A29,29,0,0,0,478,288.23Z"
                  fill="#a4bdc1" stroke="#323c44" stroke-miterlimit="10" stroke-width="14"/>
                <path
                  d="M512.83,382.71H416.71a28.93,28.93,0,0,0-28.95,28.94h0V467.8a29,29,0,0,0,28.95,28.95h96.12a19.31,19.31,0,0,0,19.3-19.3V402a19.3,19.3,0,0,0-19.3-19.3Z"
                  fill="#a4bdc1" stroke="#323c44" stroke-miterlimit="10" stroke-width="14"/>
                <path d="M451.46,435.79v7.88a14.48,14.48,0,1,1-29,0v-7.9a14.48,14.48,0,0,1,29,0Z" fill="#a4bdc1"
                      stroke="#323c44" stroke-miterlimit="10" stroke-width="14"/>
                <path
                  d="M147.87,541.93V320.84c-.05-13.2,8.25-21.51,21.62-24.27a42.71,42.71,0,0,1,7.14-1.32l-29.36-.63a67.77,67.77,0,0,0-9.13.45c-13.37,2.75-20.32,12.57-20.27,25.77l.38,221.24c-1.57,15.44,8.15,27.08,25.34,26.1l33-.19c-15.9,0-28.78-10.58-28.76-25.93Z"
                  fill="#7b8f91"/>
                <path d="M148.16,343.22a6,6,0,0,0-6,6v92a6,6,0,0,0,12,0v-92A6,6,0,0,0,148.16,343.22Z" fill="#323c44"/>
              </g>

            </svg>
          </button>
          <template v-slot:extension>
            <v-tabs
              dark
              background-color="#1F689F"
            >
              <v-tabs-slider color="#F69038"></v-tabs-slider>

              <v-menu
                open-on-hover
                bottom
                offset-y
                allow-overflow
                v-for="(item,index) in categories"
                :key="index"
              >
                <template v-slot:activator="{ on, attrs }">
                  <v-tab
                    v-bind="attrs"
                    v-on="on"
                    :to="item.to"
                  >
                    <v-icon left>{{ item.icon }}</v-icon>
                    {{ item.title }}
                  </v-tab>
                </template>
                <v-card width="100vw">
                  <v-container fluid>
                    <v-list>
                      <v-list-item
                        v-for="(item2, index) in categories"
                        :key="index"
                        v-if="item2.title===item.title"
                      >
                        <v-list-item-title>{{ item2.title }}</v-list-item-title>
                      </v-list-item>
                    </v-list>
                  </v-container>
                </v-card>
              </v-menu>
              <v-menu
                v-if="more.length"
                bottom
                left
                open-on-hover
                offset-y
              >
                <template v-slot:activator="{ on, attrs }">
                  <v-tab
                    v-bind="attrs"
                    v-on="on"
                  >
                    More
                    <v-icon right>fa-solid fa-caret-down</v-icon>
                  </v-tab>
                </template>

                <v-list>
                  <v-list-item
                    v-for="(item,index) in more"
                    :key="index"
                    :to="item.to"
                  >
                    <v-list-item-icon>
                      <v-icon>{{ item.icon }}</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title>{{ item.title }}</v-list-item-title>
                  </v-list-item>
                </v-list>
              </v-menu>
            </v-tabs>
          </template>
        </v-app-bar>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {
  name: "Header",
  data() {
    return {
      categories: [
        {title: 'Real Estate', icon: 'fa-solid fa-building', to: '/real-estate'},
        {title: 'Services', icon: 'fa-solid fa-briefcase', to: '/services'},
        {title: 'Vehicles', icon: 'fa-solid fa-car', to: '/vehicles'},
        {title: 'For Home & Garden', icon: 'fa-solid fa-seedling', to: '/home-garden'},
        {title: 'Baby Care', icon: 'fa-solid fa-baby', to: '/baby-care'},
        {title: 'Consumer Electronics', icon: 'fa-solid fa-tv', to: '/consumer-electronics'},
        {title: 'Mobile,tablets & accessories', icon: 'fa-solid fa-mobile', to: '/mobile-tablets-accessories'},
        {title: 'Books & Magazines', icon: 'fa-solid fa-book', to: '/books-magazines'},
        {title: 'Home Appliances', icon: 'fa-solid fa-kitchen-set', to: '/home-appliances'},
        {title: 'Clothing & Apparels', icon: 'fa-solid fa-shirt', to: '/clothing-apparels'},
        {title: 'Grocery', icon: 'fa-solid fa-cart-shopping', to: '/grocery'},
        {title: 'Laptop/PC', icon: 'fa-solid fa-laptop', to: '/laptop-pc'},

      ],
      more: [
        {title: 'Musical Instruments', icon: 'fa-solid fa-guitar', to: '/musical-instruments'},
        {title: 'Sports & Fitness', icon: 'fa-solid fa-futbol', to: '/sports-fitness'},
        {title: 'Beauty, Hygiene & Health', icon: 'fa-solid fa-shirt', to: '/beauty-hygiene-health'},
        {title: 'Agriculture and Farming', icon: 'fa-solid fa-tractor', to: '/agriculture-farming'},
      ],
    }
  }
}
</script>

<style lang="scss" scoped>
.search-bar-left {
  border-radius: 50px 0 0 50px;
}

.search-bar-middle {
  border-radius: 0;
}

.search-bar-right {
  border-radius: 0 50px 50px 0;
}

.v-btn {
  text-transform: unset !important;
}

.v-tab {
  text-transform: unset !important;
}


/* only animate if the device supports hover */
@media (hover: hover) {
  #creditcard {
    /*  set start position */
    transform: translateY(110px);
    transition: transform 0.1s ease-in-out;
    /*  set transition for mouse enter & exit */
  }

  #money {
    /*  set start position */
    transform: translateY(180px);
    transition: transform 0.1s ease-in-out;
    /*  set transition for mouse enter & exit */
  }

  button:hover #creditcard {
    transform: translateY(0px);
    transition: transform 0.2s ease-in-out;
    /*  overide transition for mouse enter */
  }

  button:hover #money {
    transform: translateY(0px);
    transition: transform 0.3s ease-in-out;
    /*  overide transition for mouse enter */
  }
}

@keyframes bounce {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-0.25rem);
  }
  100% {
    transform: translateY(0);
  }
}

.button:hover .button__text span {
  transform: translateY(-0.25rem);
  transition: transform .2s ease-in-out;
}

/* styling */

.button {
  border: none;
  outline: none;
  background-color: #f5821f;
  padding: 6px 40px 6px 10px;
  position: relative;
  border-radius: 8px;
  letter-spacing: 0.7px;
  color: #fff;
  cursor: pointer;
  box-shadow: rgba(0, 9, 61, 0.2) 0px 4px 8px 0px;
}

.button:active {
  transform: translateY(1px);
}

.button__svg {
  position: absolute;
  overflow: visible;
  bottom: 8px;
  right: 0.3rem;
  height: 100%;
}

</style>
