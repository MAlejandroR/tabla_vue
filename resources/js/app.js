import {createApp} from "vue";

import tabla from "./components/tabla.vue";
import tablanew from "./components/tablanew.vue";


createApp({
    components:{
        tablanew,
        tabla,
    }

}).mount("#app");
