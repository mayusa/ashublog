@extends('layouts.manage')

@section('content')

<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100 m-b-100">
        <div class="card">
            <div class="card-content">
            <h1 class="title has-text-centered">dashboard1</h1>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script type="text/javascript">
    	console.log("manage.dashboard");

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
