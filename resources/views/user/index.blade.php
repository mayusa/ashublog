@extends('layouts.user')

@section('content')

<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100 m-b-100">
        <div class="card">
            <div class="card-content">
            <h1 class="title has-text-centered">user's profile</h1>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script type="text/javascript">

console.log("user.index");

const app = new Vue({
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
