{{-- <v-app-bar
absolute
color="#6A76AB"
dark
shrink-on-scroll
prominent
fade-img-on-scroll
scroll-target="#scrolling-techniques-3"
>
<template >
  <v-img
    gradient="to top right, rgba(100,115,201,.7), rgba(25,32,72,.7)"
  ></v-img>
</template>

<v-app-bar-nav-icon></v-app-bar-nav-icon>

<v-app-bar-title>MoShop</v-app-bar-title>

<v-spacer></v-spacer>

<template v-slot:extension>
  <v-tabs align-with-title>
    <v-tab>
        Shop
    </v-tab>
    <v-tab>Panier</v-tab>
    <v-tab href="{{route('login')}}">Se connecter</v-tab>
  </v-tabs>
</template>
</v-app-bar> --}}
<navbar></navbar>