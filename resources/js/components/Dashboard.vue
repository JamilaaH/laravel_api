<template>
    <v-container>
        <v-row class="my-15">
            <v-col cols="12"
                sm="4">
                <v-avatar         
                    height="100%"
                    width="100%"
                    >
                    <img
                    :src="'../storage/img/avatar/'+user.photo"
                    alt="avatar"
                    >
                </v-avatar>           
            </v-col>
            <v-col cols="12"
                sm="8">
                <v-card dark permanent class="deep-purple accent-4 spacing-playground pa-6">
                    <v-text-field :value="user.nom">
                    </v-text-field>
                    <v-text-field :value="user.prenom">
                    </v-text-field>
                    <v-text-field :value="user.email">
                    </v-text-field>
                </v-card>
            </v-col>
        </v-row>

    </v-container>
</template>

<script >
    
    export default {
        name:"dashboard",
        props: {
            user : {
                type: Object
            }
        }
    };
</script>

<style lang="sass" scoped>

</style>