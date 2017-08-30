@extends('layouts.blog')

@section('content')
<div class="card">
    <div class="card-content">
    <h1 class="title has-text-centered">@lang('blog.home')</h1>
    @if(Auth::check()){{  \Carbon\Carbon::parse(Auth::user()->created_at)->toDateTimeString() }}@endif

    {{  \Carbon\Carbon::now()}}
    {{-- main content --}}
    </div>
</div>

@endsection
