
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Buefy from 'buefy';

Vue.use(Buefy);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',
    data: {
    	dropDown: true,
    	navigation: 'home',
    },
    methods: {
    	logout: function (event){
			axios.post('/logout' )
			  .then(function (response) {
			    if(response.status==200) {
			    	window.location.href = "/";
			    }
			  })
			  .catch(function (error) {
			  	// TODO
			    console.log(error);
			  });

    	}
    }
});

$(document).ready(function(){
	$('input#inputemail').focus(function(e){
		$(this).removeClass('is-danger');
	})
	$('#errormsg').delay( 2000 ).fadeOut( 800 );
});