import { createApp } from 'vue'
import InvitaUsuariosComponent from '../components/InvitaUsuariosComponent.vue'
import SubmitButtonComponent from '../components/SubmitButtonComponent.vue';
import handleError from '../plugins/errorHandlerPlugin'
const app = createApp({})
app.use(handleError)
app.component('invita-usuarios-component', InvitaUsuariosComponent)
app.component('submit-button-component', SubmitButtonComponent)
app.mount('#invita-usuarios-app')
