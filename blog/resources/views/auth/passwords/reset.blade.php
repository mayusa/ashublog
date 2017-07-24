@extends('layouts.app')

@section('content')


<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100 m-b-100">
        <div class="card">
            <div class="card-content">
            <h1 class="title has-text-centered">@lang('blog.resetpassword')</h1>
            {{-- form start --}}
            <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
            {{ csrf_field() }}
            <input type="hidden" name="token" value="{{ $token }}">

            @include('layouts.message_success')
            @include('layouts.message_error')
            
                <div class="field">
                  <label class="label" for="email">@lang('blog.email')</label>
                  <p class="control has-icons-left has-icons-right">
                    <input class="input is-large {{ $errors->has('email') ? 'is-danger' : '' }}" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="@lang('blog.email')" id="inputemail">
                    <span class="icon is-left">
                      <i class="fa fa-envelope"></i>
                    </span>
                  </p>
                </div>

                <div class="field">
                  <label class="label" for="password">@lang('blog.password')</label>
                  <p class="control has-icons-left">
                    <input class="input is-large" type="password" name="password" placeholder="@lang('blog.password')">
                    <span class="icon is-left">
                      <i class="fa fa-lock"></i>
                    </span>
                  </p>
                </div>

                <div class="field">
                  <label class="label" for="password_confirmation">@lang('blog.passwordconfirm')</label>
                  <p class="control has-icons-left">
                    <input class="input is-large" type="password" name="password_confirmation" placeholder="@lang('blog.passwordconfirm')">
                    <span class="icon is-left">
                      <i class="fa fa-lock"></i>
                    </span>
                  </p>
                </div>

                <div class="field m-t-20">
                  <p class="control">
                    <button class="button is-success is-fullwidth is-large">
                      @lang('blog.resetpassword')
                    </button>
                  </p>
                </div>
                </form>
            {{-- / form end --}}
            </div>

        </div>
    </div>
</div>

@endsection
