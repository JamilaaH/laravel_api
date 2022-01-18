<v-app-bar app>
  <v-app-bar-title>MoShop</v-app-bar-title>

  <v-spacer></v-spacer>

  @guest
    <v-btn href="/login" class="mr-3" text>Se connecter</v-btn>  
  @endguest
  @auth
    <v-btn href="/dashboard" class="mr-3" text>Dashboard</v-btn>  
  @endauth

  <v-divider inset vertical></v-divider>

  <v-btn
    class="mr-4 ml-5"
    color="primary"
    plain
  >
    <v-icon left icon="mdi mdi-handshake-outline"></v-icon>

  </v-btn>
</v-app-bar>