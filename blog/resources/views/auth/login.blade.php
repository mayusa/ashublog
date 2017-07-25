@extends('layouts.app')

@section('content')

<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-30">
        <div class="card">
            <div class="card-content">
            <h1 class="title has-text-centered">@lang('blog.signin') A.SHU</h1>
            {{-- form start --}}
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

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

                <div class="columns">
                  <div class="column is-half">
                    <b-checkbox name="remember" class="m-t-20" checked >@lang('blog.rememberme')</b-checkbox>
                  </div>
                  <div class="column">
                    <h5 class="m-t-20 has-text-right">
                      <a class="is-muted" href="{{ route('password.request') }}">@lang('blog.forgotpass')?</a>
                    </h5>
                  </div>
                </div>
            
                <div class="field m-t-20">
                  <p class="control is-centered">
                    <button class="button is-success is-fullwidth is-large">
                      @lang('blog.signinnow')
                    </button>
                  </p>
                </div>
                </form>
            {{-- / form end --}}
            </div>

        </div>
        <h5 class="m-t-20 has-text-centered">
        <a class="is-muted" href="{{ route('register') }}">
        @lang('blog.notjoin')
        </a>
            
        </h5>
    </div>
</div>

@endsection
