@extends('admin::layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('admin::partials.notifications')

            <div class="panel panel-danger">
                <div class="panel-heading">
                    Account &rarr; {{ $editAccount->name }} &rarr; Delete
                </div>

                <div class="panel-body">
                    <form method="POST">
                        {{ csrf_field() }}

                        Are you sure you want to delete this account?

                        <hr>

                        <strong>Also Delete:</strong>

                        <div class="checkbox">
                            <label><input type="checkbox" name="characters" checked>Characters</label>
                        </div>

                        <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                        <a href="{{ route('admin.account', $editAccount) }}" class="btn btn-sm">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
