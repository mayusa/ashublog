@extends('layouts.manage')

@section('content')

<div class="card m-t-30">
    <div class="card-content">
    <h1 class="title has-text-centered">media manager</h1>
    {{-- media add --}}
    <media-manager></media-manager>
    {{-- media list --}}
    </div>
</div>

@endsection

@section('scripts')
<script src="{{mix('js/media-manager.js')}}"></script>
@endsection
