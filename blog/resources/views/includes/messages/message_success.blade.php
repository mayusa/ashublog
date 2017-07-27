@if (session('status'))
    <div class=" is-ok m-b-20 has-text-centered">
        {{ session('status') }}
    </div>
@endif

@if (session('success'))
    <div class=" is-success m-b-20 has-text-centered">
        {{ session('success') }}
    </div>
@endif