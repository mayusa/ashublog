<script>
    window.ashucn = {
        csrfToken: '{{ csrf_token() }}',
        basePath: '{{ url('/') }}'
    }
    window.user = {!! Auth::user() !!};
    //in console, check basePath:  window.ashucn.basepath  -> http://localhost:9000
    console.log("window.user", window.user);
    console.log("window.user", window.user);
</script>
