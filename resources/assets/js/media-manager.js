console.log("media-manager.js")
Vue.component('media-manager', require('./components/dashboard/Mediamanager'))
var app = new Vue({
    el: '#app',
    data: {
    },
    methods: {
        gotoUrl: window.gotoUrl,
        logout: window.logout
    },
    created(){
      console.log('ok');
    }
})
