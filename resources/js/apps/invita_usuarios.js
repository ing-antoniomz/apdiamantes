import { createApp } from 'vue'
import InvitaUsuariosComponent from '../components/InvitaUsuariosComponent.vue'
import SubmitButtonComponent from '../components/SubmitButtonComponent.vue';

const app = createApp({})
app.component('invita-usuarios-component', InvitaUsuariosComponent)
app.component('submit-button-component', SubmitButtonComponent)
app.mount('#invita-usuarios-app')
