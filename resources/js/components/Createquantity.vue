<template>
    <div>
        <h3 class="text-center">Input Product Quantity</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addQuantitie">

                    <div class="form-group">
                         <label>Name</label>
                        <select class="form-control" v-model="quantityprice.product_id">
                            <option value="0">Select menu</option>
                            <option  v-for='data in products' :value="data.id" :key="data.id" >{{ data.name }} </option>
                        </select>                      
                    </div>
                      <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" class="form-control" v-model="quantityprice.quantity">
                    </div>
                    <div class="form-group">
                        <label>Amount</label>
                        <input type="text" class="form-control" v-model="quantityprice.amount">
                    </div>
                     <div class="form-group">
                        <label>detail</label>
                        <input type="text" class="form-control" v-model="quantityprice.detail">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
         data() {
            return {
                
                  products: [],
                quantityprice: {}
            }
        },
         mounted() {
                //console.log("shohag");             
               this.axios
                .get('http://localhost:8000/api/products/')
                .then(response => {                     
                    this.products = response.data;
                });         
            
        },
        methods: {

            addQuantitie() {
               // console.log("shohag"); 
                this.axios
                    .post('http://localhost:8000/api/quantityprices', this.quantityprice)
                    .then(response => (
                        this.$router.push({ name: 'allquantity' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        },
        
        
    }

    


</script>