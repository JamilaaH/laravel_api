<template>
    <v-container>
        <h2>Mes commandes</h2>
        <p v-show="commande.lenght ==0">Pas de commande en cours</p>
        <v-simple-table>
    <template v-slot:default>
      <thead>
        <tr>
          <th class="text-left">
            N° commande
          </th>
          <th class="text-left">
            Total
          </th>
        </tr>
      </thead>
      <tbody>
        <tr
          v-for="item in commande"
          :key="item.id"
        >
          <td>{{item.id}}</td>
          <td>{{ item.total }}</td>
        </tr>
      </tbody>
    </template>
  </v-simple-table>
    </v-container>
</template>

<script>
    export default {
        props: {
            commande: {
                type: Object,
            },
        },
    }
</script>

<style lang="scss" scoped>

</style>