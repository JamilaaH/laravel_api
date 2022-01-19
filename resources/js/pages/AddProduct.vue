<template>
    <v-container>
        <h2>Ajouter un produit</h2>
        <v-form action="/storeproduit" method="post" enctype="multipart/form-data"> 
            <input type="text" name="_token" :value="csrf" hidden>
            <v-text-field required name="nom" label="nom">  
            </v-text-field>
            <v-text-field required name="description" label="description">  
            </v-text-field>
            <v-text-field required name="prix" label="prix" type="number">  
            </v-text-field>
            <v-text-field required name="stock" label="stock" type="number">  
            </v-text-field>
            <v-file-input placeholder="photo" name="photo"
            truncate-length="15"
            ></v-file-input>
            <v-btn class="indigo lighten-1" type="submit" dark>Valider</v-btn>
        </v-form>
    </v-container>
</template>

<script>
export default {
    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        }
    },
    }
</script>

<style lang="scss" scoped>

</style>