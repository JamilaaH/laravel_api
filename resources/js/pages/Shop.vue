<template>
    <div>
        <v-main>
            <v-container>
                  <h2>{{shop.nom}}</h2>
                <v-row>
                    <v-col v-for="produit, index in prod" :key="index" cols=12 sm=4>
                      <v-card  >
                        <v-img
                            :src="'../storage/img/'+produit.photo"
                            height="200px"></v-img>

                          <v-card-title>
                            {{produit.nom}}
                          </v-card-title>      
                          <v-card-actions>
                            <form :action="'/achat/'+produit.id" method="POST">
                                <input type="hidden" name="_token" :value="csrf"/>
                                <v-btn
                                  color="green lighten-2"
                                  text
                                  type="
                                  submit"
                                >
                                  Acheter
                                </v-btn>                            
                            </form>
                    
                          <v-spacer></v-spacer>
                    
                          <v-btn
                            icon
                            @click="show = !show"
                          >
                            <v-icon>  {{ show ? 'mdi-chevron-up' : 'mdi-chevron-down' }}</v-icon>
                          </v-btn>
                        </v-card-actions>
                    
                        <v-expand-transition>
                          <div v-show="show">
                            <v-divider></v-divider>
                    
                            <v-card-text>
                              {{produit.description}}
                            </v-card-text>
                          </div>
                        </v-expand-transition>
                      </v-card>
                    </v-col>
                </v-row>
            </v-container>

        </v-main>
    </div>
</template>

<script>
export default {
  props: {
    shop: {
      type: Object,
    },

  },
  data() {
    return {
      show: false,
      csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
    }
  },
  computed: {
    prod() {
    
      return this.shop.produits.filter(el=>el.stock > 0) 
    }
  },
};
</script>

<style lang="scss" scoped>
</style>