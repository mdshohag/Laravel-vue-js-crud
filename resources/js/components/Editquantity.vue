<template>
    <div>
        <h3 class="text-center">Edit Quantity Price</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateQuantity">
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
                    <button type="submit" class="btn btn-primary">Update</button>
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
        created() {

           // console.log("SHohag");
            this.axios
                .get(`http://localhost:8000/api/quantityprices/${this.$route.params.id}`)
                .then((res) => {
                    this.quantityprice = res.data;
                });
        },
        methods: {
            updateQuantity() {
                this.axios
                    .patch(`http://localhost:8000/api/quantityprices/${this.$route.params.id}`, this.quantityprice)
                    .then((res) => {
                        this.$router.push({ name: 'allquantity' });
                    });
            }
        }
    }
</script>