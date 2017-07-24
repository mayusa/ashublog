@extends('layouts.app')

@section('content')

<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100 m-b-100">
        <div class="card">
            <div class="card-content">
            <h1 class="title has-text-centered">@lang('blog.resetpassword')</h1>
            {{-- form start --}}
            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}

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

            
                <div class="field m-t-20">
                  <p class="control">
                    <button class="button is-danger is-fullwidth is-large">
                      @lang('blog.sendresetlink')
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
