//import './bootstrap';

import { createApp } from "vue";
import Welcome from "./components/Welcome.vue"
import Steps from "./components/Steps.vue"

createApp(Welcome).mount('#app')
createApp(Steps).mount('#steps')
