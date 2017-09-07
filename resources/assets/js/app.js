
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Buefy from 'buefy';
// Global variable

Vue.component('userlist', require('./components/dashboard/user/UserList.vue'));

/*import VueSocketio from 'vue-socket.io'
Vue.use(VueSocketio, 'http://localhost:9900')*/

Vue.use(Buefy);

window.toastr = require('toastr')

window.gotoUrl = function (url) {
    window.location.href = url;
}

window.logout = function (event){
    axios.post('/logout' )
        .then(function (response) {
            if (response.status==200) {
                window.location.href = "/blog";
            }
        })
        .catch(function (error) {
            // TODO
            console.log(error);
        });

}

$(document).ready(function(){
	$('input#inputemail').focus(function(e){
		$(this).removeClass('is-danger');
	})
	$('#errormsg').delay( 2000 ).fadeOut( 800 );
});
