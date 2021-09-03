import AllProduct from './components/AllProduct.vue';
import CreateProduct from './components/CreateProduct.vue';
import EditProduct from './components/EditProduct.vue';
import Createquantity from './components/Createquantity.vue';
import AllQuantity from './components/AllQuantity.vue';
 
export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllProduct
    },
    {
        name: 'create',
        path: '/create',
        component: CreateProduct
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditProduct
    },
    {
        name: 'allquantity',
        path: '/allquantity',
        component: AllQuantity
    },
    {
        name: 'quantity',
        path: '/quantity',
        component: Createquantity
    }
];