<template>
    <v-form
      ref="form"
      v-model="valid"
      lazy-validation
      action="login" method="post"
    >

      <h3>Se connecter</h3>
      <v-text-field type="hidden" name="_token" :value="csrf"></v-text-field>
  
      <v-text-field
        v-model="email"
        :rules="emailRules"
        label="E-mail"
        name="email"
        required
      ></v-text-field>

      <v-text-field
        v-model="password"
        label="Password"
        name="password"
        :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
        :type="show1 ? 'text' : 'password'"
        @click:append="show1 = !show1"
        required
      ></v-text-field>
  
      <v-btn
        color="success"
        class="mr-4"
        type="submit"
        @click="validate"
      >
        Validate
      </v-btn>
  

  

    </v-form>
</template>
<script>
export default {
  name: "Login",
  data: () => ({
    show1: false,
    valid: true,
    email: '',
    emailRules: [
      v => !!v || 'E-mail is required',
      v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
    ],
    csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
  }),

  methods: {
    validate () {
      this.$refs.form.validate()
    },


  },}
</script>
<style lang="sass">
  .v-form
    // margin-top: 20vh
    margin: 20vh auto
    width: 60%
</style>