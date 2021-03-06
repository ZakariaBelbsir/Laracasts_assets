import Logo from "./components/Logo";
import LogoSymbol from "./components/LogoSymbols";
import Colors from "./components/Colors";
import Typography from "./components/Typography";
import Mascot from "./components/Mascot";
import Illustrations from "./components/Illustrations";
import Wallpapers from "./components/Wallpapers";
import NotFound from './components/NotFound';

let LoadersAndAnimations = () => import('./components/LoadersAndAnimations');
export default {
    mode: 'history',

    linkActiveClass: 'font-bold',

    routes:[
        {
            path: '*',
            component: NotFound
        },
        {
            path: '/',
            component: Logo
        },
        {
            path: '/logo-symbols',
            component: LogoSymbol
        },
        {
            path: '/colors',
            component: Colors
        },
        {
            path: '/typography',
            component: Typography
        },
        {
            path: '/mascot',
            component: Mascot
        },
        {
            path: '/illustrations',
            component: Illustrations
        },
        {
            path: '/loaders-and-animations',
            component: LoadersAndAnimations
        },
        {
            path: '/wallpapers',
            component: Wallpapers
        }
    ]
}
