@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                @if ($errors->has('msg'))
                    <div class="alert alert-warning">
                        {{ $errors->first('msg') }}
                        <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                    </div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading text-center">Social Login </div>

                    <div class="panel-body">

                        <p class="lead text-center">Authenticate using your social network account from one of following providers</p>

                        <a href="{{ route('social.oauth', 'facebook') }}" class="btn btn-primary btn-block">
                            Login with Facebook
                        </a>

                        <a href="{{ route('social.oauth', 'twitter') }}" class="btn btn-info btn-block">
                            Login with Twitter
                        </a>

                        <a href="{{ route('social.oauth', 'google') }}" class="btn btn-danger btn-block">
                            Login with Google
                        </a>

                        <a href="{{ route('social.oauth', 'github') }}" class="btn btn-default btn-block">
                            Login with Github
                        </a>

                        <hr>

                        <a href="{{ route('login') }}" class="btn btn-default btn-block">
                            Login with Email
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection