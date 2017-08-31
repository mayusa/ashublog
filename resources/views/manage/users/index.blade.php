@extends('layouts.manage')

@section('content')

<div class="columns">
    <div class="column m-l-10 m-t-30">
    	<h1 class="title">Users</h1>
    </div>
    <div class="column m-t-40">
    	<a class="button is-primary is-pulled-right">Add New User</a>
    </div>
</div>

<hr>

<div class="columns">
	<userlist></userlist>
</div>

@endsection

@section('scripts')
<script>
  console.log("manage.user.index");

  var app = new Vue({
      el: '#app',
      data: {
          navigation: 'home',
      },
      methods: {
          gotoUrl: window.gotoUrl,
          logout: window.logout
      }
  });
</script>
@endsection
