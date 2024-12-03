//import './bootstrap';

import { createApp } from "vue";
import Welcome from "./components/Welcome.vue"
import Steps from "./components/Steps.vue"
import Thought from "./components/Thought.vue"

createApp(Welcome).mount('#app')
createApp(Steps).mount('#steps')
createApp(Thought).mount('#thought')
