import Home from '../pages/Home.vue'
import ContactUs from '../pages/Home.vue'


// Definisco elenco di Route
const routes = [
    {
        path: '/',
        name: 'home',
        component: Home,
    },
    {
        path: '/contatti',
        name: 'contact-us',
        component: ContactUs,
    },
];

export default routes;