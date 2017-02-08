import './bootstrap';

import router from './routes'

import './components';

Vue.prototype.trans = (key) => {
    return _.get(window.trans, key, key);
};

const app = new Vue({
    el: '#app',
    router
});
