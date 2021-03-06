@extends('admin::layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('admin::partials.notifications')

            <div class="panel panel-default loading">
                <div class="panel-heading">
                    Account &rarr; {{ $account->getName() }} &rarr; Edit
                </div>

                <div class="panel-body">
                    <form method="POST">
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label class="control-label">Name</label>
                            <input type="text" class="form-control" value="{{ old('name', $account->getName()) }}" name="name">
                            <p class="help-block">{{ $errors->first('name') }}</p>
                        </div>

                        @if (Bitaac::twofa()->enabled())
                            <div class="form-group {{ $errors->has('secret') ? 'has-error' : '' }}">
                                <label class="control-label">Secret</label>
                                <input type="text" class="form-control" value="{{ $account->secret }}" name="secret">
                                <p class="help-block">{{ $errors->first('secret') }}</p>
                            </div>
                        @endif

                        <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
                            <label class="control-label">Type</label>
                            <input type="text" class="form-control" value="{{ $account->type }}" name="type">
                            <p class="help-block">{{ $errors->first('type') }}</p>
                        </div>

                        <div class="form-group {{ $errors->has('premdays') ? 'has-error' : '' }}">
                            <label class="control-label">Premdays</label>
                            <input type="text" class="form-control" value="{{ $account->premdays }}" name="premdays">
                            <p class="help-block">{{ $errors->first('premdays') }}</p>
                        </div>

                        <div class="form-group {{ $errors->has('lastday') ? 'has-error' : '' }}">
                            <label class="control-label">Lastday</label>
                            <input type="text" class="form-control" value="{{ $account->lastday }}" name="lastday">
                            <p class="help-block">{{ $errors->first('lastday') }}</p>
                        </div>

                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label class="control-label">Email</label>
                            <input type="text" class="form-control" value="{{ $account->email }}" name="email">
                            <p class="help-block">{{ $errors->first('email') }}</p>
                        </div>

                        <input type="submit" class="btn btn-primary btn-sm" value="Submit">
                        <a href="{{ route('admin.account', $account) }}" class="btn btn-sm">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
