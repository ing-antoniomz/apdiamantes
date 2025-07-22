import { createApp } from 'vue'
import UsuariosComponent from '../components/UsuariosComponent.vue'
import SubmitButtonComponent from '../components/SubmitButtonComponent.vue';

const app = createApp({})
app.component('usuarios-component', UsuariosComponent)
app.component('submit-button-component', SubmitButtonComponent)
app.mount('#admin-usuarios-app')
