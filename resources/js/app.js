//import './bootstrap';

import { createApp } from "vue";
import Welcome from "./components/Welcome.vue"
import Steps from "./components/Steps.vue"
import Thought from "./components/Thought.vue"
import Pink from "./components/Pink.vue"
import Prepare from "./components/Prepare.vue"
import Book from "./components/Book.vue"
import Footer from "./components/Footer.vue"

createApp(Welcome).mount('#app')
createApp(Steps).mount('#steps')
createApp(Thought).mount('#thought')
createApp(Pink).mount('#pink')
createApp(Prepare).mount('#prepare')
createApp(Book).mount('#book')
createApp(Footer).mount('#footer')
