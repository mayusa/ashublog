@extends('layouts.app')

@section('content')


<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100 m-b-100">
        <div class="card">
            <div class="card-content">
            <h1 class="title has-text-centered">@lang('blog.join')</h1>
            {{-- form start --}}
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            {{-- error msgs --}}
            @if ($errors->any())
                <span class="help is-danger m-b-20 has-text-centered" id="errormsg">
                @foreach($errors->all() as $error)
                    {{ $error }}
                @endforeach
                </span>
            @endif
            {{-- / error msgs --}}
                <div class="field">
                  <label class="label" for="name">@lang('blog.username')</label>
                  <p class="control has-icons-left has-icons-right">
                    <input class="input is-large {{ $errors->has('name') ? 'is-danger' : '' }}" type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="@lang('blog.username')" id="inputname">
                    <span class="icon is-left">
                      <i class="fa fa-user"></i>
                    </span>
                  </p>
                </div>

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
                    <input id="password" class="input is-large" type="password" name="password" placeholder="@lang('blog.password')" required>
                    <span class="icon is-left">
                      <i class="fa fa-lock"></i>
                    </span>
                  </p>
                </div>

                <div class="field m-t-20">
                  <p class="control">
                    <button class="button is-info is-fullwidth is-large">
                      @lang('blog.joinnow')
                    </button>
                  </p>
                </div>
                </form>
            {{-- / form end --}}
            </div>

        </div>
        <h5 class="m-t-20 has-text-centered">
        <a class="is-muted" href="{{ route('login') }}">
        @lang('blog.joined')
        </a>
            
        </h5>
    </div>
</div>

@endsection
