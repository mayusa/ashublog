@extends('layouts.user')

@section('content')

<div class="columns m-t-50">
  <div class="column is-1"></div>

<div class="tile is-ancestor">
  <div class="tile is-vertical">
    <div class="tile">
      <div class="tile is-parent">
        <article class="tile is-child notification card">
          <p class="title">Profile</p>
          {{-- <p class="subtitle">With an image</p> --}}
          <user-profile-form></user-profile-form>
        </article>
      </div>
      <div class="tile is-parent is-vertical">
        <article class="tile is-child notification card">
          <p class="title">Avatar</p>
          <avatar-upload :img-url="avatar"></avatar-upload>
        </article>
        <article class="tile is-child notification card">
          <p class="title">Change Password</p>
        </article>
      </div>

    </div>
  </div>
</div>
  <div class="column is-1"></div>
</div>

@endsection

@section('scripts')
<script src="{{mix('js/user-profile.js')}}"></script>
@endsection

@section('styles')
<link rel="stylesheet" type="text/css" href="{{mix('css/croppie.css')}}">
<style>
  .file{
    position: relative;
    height:60px;
    width:200px;
    margin: 0 auto;
  }
  #upload-image{
    top:0;
    left:0;
    opacity: 0;
    position: absolute;
    height:60px;
    width: 100%;
  }
  #upload-wrapper{
    text-align: center;
  }
  .file-cta {
    margin-top:16px;
    padding-top: 10px;
    padding-bottom: 10px;
    border: #ddd 1px solid;
  }

</style>
@endsection
