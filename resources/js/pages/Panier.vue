<template>
<div>
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
        </v-container>
        <v-form method="post" action="/commander">
            <input type="text" name="_token" :value="csrf" hidden> 
            <select class="form-control" name="produits[]" multiple="" hidden>
                <option v-for="produit, index in produits" :key="index" :value="produit.id" selected>{{produit.id}}</option>
            </select>
            <input hidden type="number" v-for="produit, index in produits" :key="index" :value="produit.id">
            <v-text-field v-show="total > 0" type="number" :value="total" name="total" prepend-icon="mdi-currency-eur"> </v-text-field>
            <v-btn dark class="indigo lighten-1" type="submit" >Passer commande</v-btn>
        </v-form>

</div>
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
        data() {
            return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>