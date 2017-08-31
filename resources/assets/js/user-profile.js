console.log("user-profile.js");
Vue.component('avatar-upload', require('./components/blog/AvatarUpload'));
Vue.component('user-profile-form', require('./components/blog/UserProfileForm'))
var app = new Vue({
  el: '#app',
  data: {
    avatar: "/img/logo.png"
  },
  methods: {
      gotoUrl: window.gotoUrl,
      logout: window.logout
  },
  created(){
    let avatar = window.user.avatar
    if(avatar != null){
        this.avatar = window.user.avatar
    }
  }
});
