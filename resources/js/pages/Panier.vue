<template>
    <v-container>
        <h2>Mon panier</h2>
        <v-row>
            <v-col v-for="produit, index in produits" :key="index" cols=12 sm=4>
                <v-card >
                <v-img
                    :src="'../storage/img/'+produit.photo"
                    height="200px"     ></v-img>

                    <v-card-title>
                    {{produit.nom}}
                    </v-card-title>      

            
                    <v-spacer></v-spacer>

                </v-card>
            </v-col>
            </v-row>
            <p v-show="total > 0">total : €{{total}} </p>
    </v-container>
</template>

<script>
    export default {
        props: {
            produits: {
                type: Object,
            },
            total :{
                type: Number
            }
        },
        computed: {

        },
    }
</script>

<style lang="scss" scoped>

</style>