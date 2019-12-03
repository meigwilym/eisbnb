import { InertiaApp } from '@inertiajs/inertia-vue';
import Vue from 'vue';
import '../sass/app.scss';

Vue.mixin({ methods: { route: window.route } });
Vue.use(InertiaApp);

const app = document.getElementById('app');

new Vue({
  render: h => h(InertiaApp, {
    props: {
      initialPage: JSON.parse(app.dataset.page),
      resolveComponent: name => require(`./Pages/${name}`).default,
    },
  }),
}).$mount(app);

document.addEventListener('DOMContentLoaded', () => {

    // mobile menu
    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
    if ($navbarBurgers.length > 0) {
      $navbarBurgers.forEach( el => {
        el.addEventListener('click', () => {
          const target = el.dataset.target;
          const $target = document.getElementById(target);
          el.classList.toggle('is-active');
          $target.classList.toggle('is-active');
        });
      });
    }

});
