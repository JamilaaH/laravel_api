<template>
    <div>
        <v-main>
            <v-container>
                
                <!-- {{shop.produits}} -->
                <!-- {{produits}} -->
                <v-row>
                    <v-col v-for="produit, index in shop.produits" :key="index" cols=12 sm=4>
                      <v-card >
                        <v-img
                            :src="'../storage/img/'+produit.photo"
                            height="100%"     ></v-img>

                          <v-card-title>
                            {{produit.nom}}
                          </v-card-title>      
                          <v-card-actions>
                          <v-btn
                            color="green lighten-2"
                            text
                          >
                            Acheter
                          </v-btn>
                    
                          <v-spacer></v-spacer>
                    
                          <v-btn
                            icon
                            @click="show = !show"
                          >
                            <v-icon> v {{ show ? 'mdi-chevron-up' : 'mdi-chevron-down' }}</v-icon>
                          </v-btn>
                        </v-card-actions>
                    
                        <v-expand-transition>
                          <div v-show="show">
                            <v-divider></v-divider>
                    
                            <v-card-text>
                              I'm a thing. But, like most politicians, he promised more than he could deliver. You won't have time for sleeping, soldier, not with all the bed making you'll be doing. Then we'll go with that data file! Hey, you add a one and two zeros to that or we walk! You're going to do his laundry? I've got to find a way to escape.
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
      show: false
    }
  },
};
</script>

<style lang="scss" scoped>
</style>