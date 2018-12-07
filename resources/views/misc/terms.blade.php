@extends('admin::layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('admin::partials.notifications')

            <div class="panel panel-default loading">
                <div class="panel-heading">
                    ToS & Rules
                </div>

                <div class="panel-body">
                    <form method="POST">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Terms of service</label>

                            <textarea class="form-control" name="terms_of_service" rows="6">{{ Bitaac::get('terms_of_service') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Rules</label>

                            <textarea class="form-control" name="rules" rows="6">{{ Bitaac::get('rules') }}</textarea>
                        </div>

                        <input type="submit" class="btn btn-primary btn-sm">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
