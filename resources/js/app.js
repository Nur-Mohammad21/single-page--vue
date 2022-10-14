import './bootstrap';
import {createApp} from 'vue/dist/vue.esm-bundler';
import router from "./Router/router";
import CategoryComponent from "./Components/CategoryComponent.vue";
createApp({
    components:{
        CategoryComponent,
    }
}).use(router).mount('#app');
