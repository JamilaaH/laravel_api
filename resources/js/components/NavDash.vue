<template>
  <v-navigation-drawer app class="deep-purple accent-4" dark permanent>
    <v-list>
      <v-list-item v-for="item in items" :key="item.title" :href="item.route">
        <v-list-item-icon>
          <v-icon>{{ item.icon }}</v-icon>
        </v-list-item-icon>

        <v-list-item-content>
          <v-list-item-title >{{ item.title }}</v-list-item-title>
        </v-list-item-content>
      </v-list-item>
    </v-list>

    <template v-slot:append>
      <div class="pa-2">
        
        <v-btn href="/logout"> Logout </v-btn>
      </div>
    </template>
  </v-navigation-drawer>
</template>

<script>
export default {
    data() {
        return {
        items: [
            { title: "Dashboard", icon: "mdi-view-dashboard" , route:"/dashboard"},
            { title: "Mon Shop", icon: "mdi-account-box", route:"/dashboard/monshop" },
            { title: "Panier", icon: "mdi-cart", route:"/dashboard/panier" },
            { title: "Mes commandes", icon: "mdi-purse", route:"/dashboard/commandes" },
        ],
        };
    },
    };
</script>

<style lang="scss" scoped>
</style>