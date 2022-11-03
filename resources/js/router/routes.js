import Home from '../pages/Home.vue'
import ContactUs from '../pages/ContactUs.vue'
import PostsIndex from '../pages/Posts.index.vue'


// Definisco elenco di Routes
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
    {
        path: '/blog',
        name: 'posts.index',
        component: PostsIndex,
    },
];

export default routes;