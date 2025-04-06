import { createApp } from 'vue';

// Componentes
import InvitaUsuariosComponent from './components/InvitaUsuariosComponent.vue';
import SubmitButtonComponent from './components/SubmitButtonComponent.vue';

// Plugins
import errorHandlerPlugin from './plugins/errorHandlerPlugin';

// Crear la aplicación Vue y montar
createApp({
    // Aquí puedes incluir opciones globales si es necesario
})
    .use(errorHandlerPlugin)  // Usar el plugin de manejo de errores
    .component('invita-usuarios-component', InvitaUsuariosComponent)  // Registrar el componente
    .component('submit-button-component', SubmitButtonComponent)  // Registrar otro componente
    .mount('#app_vue');  // Montar la aplicación en el DOM
