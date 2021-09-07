<template>
    <div>
        <h2 class="text-center"> List</h2>
 
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Quantit</th>
                <th>Amout</th>
                 <th>Details</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="quantityprice in quantityprices" :key="quantityprice.id">
                <td>{{ quantityprice.id }}</td>
                <td>{{ quantityprice.name }}</td>
                <td>{{ quantityprice.quantity }}</td>
                <td>{{ quantityprice.amount }}</td>
                 <td>{{ quantityprice.detail }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'editquantity', params: { id: quantityprice.id }}" class="btn btn-success">Edit</router-link>
                        <button class="btn btn-danger" @click="deletequantityprice(quantityprice.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                   products: [],
                quantityprices: []
            }
        },
        created() {
             
            this.axios
                .get('http://localhost:8000/api/quantityprices')
                .then(response => {
                   
                    this.quantityprices = response.data;
                     console.log( response.data);
                });
        },
        methods: {
            deletequantityprice(id) { 
                this.axios
                    .delete(`http://localhost:8000/api/quantityprices/${id}`)
                    .then(response => {
                        let i = this.quantityprices.map(data => data.id).indexOf(id);
                        this.quantityprices.splice(i, 1)
                    });
            }
        }
    }
</script>