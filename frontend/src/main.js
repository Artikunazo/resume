import Vue from "vue";
import App from "./App.vue";

import "gary-css/gary.min.css";
import "@/assets/css/all.css";
import "@/assets/css/artikunazo.css";

Vue.config.productionTip = false;

new Vue({
  render: h => h(App)
}).$mount("#curriculum");
