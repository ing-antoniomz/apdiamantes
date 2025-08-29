import { createApp } from 'vue'
import NivelesComponent from '../components/NivelesComponent.vue'
import SubmitButtonComponent from '../components/SubmitButtonComponent.vue';
import handleError from '../plugins/errorHandlerPlugin'
const app = createApp({})
app.use(handleError)
app.component('niveles-component', NivelesComponent)
app.component('submit-button-component', SubmitButtonComponent)
app.mount('#admin-niveles-app')
