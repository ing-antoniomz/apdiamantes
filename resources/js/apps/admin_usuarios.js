import { createApp } from 'vue'
import UsuariosComponent from '../components/UsuariosComponent.vue'
import SubmitButtonComponent from '../components/SubmitButtonComponent.vue';
import handleError from '../plugins/errorHandlerPlugin'
const app = createApp({})
app.use(handleError)
app.component('usuarios-component', UsuariosComponent)
app.component('submit-button-component', SubmitButtonComponent)
app.mount('#admin-usuarios-app')
