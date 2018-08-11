@extends('admin::layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('admin::partials.notifications')

            <div class="panel panel-default loading">
                <div class="panel-heading">
                    Account &rarr; {{ $editAccount->name }}
                </div>

                <div class="panel-body">
                    <a href="{{ route('admin.account.impersonate', $editAccount) }}" class="btn btn-primary btn-sm">Impersonate</a>
                    <a href="{{ route('admin.account.edit', $editAccount) }}" class="btn btn-primary btn-sm">Edit Account</a>
                    <a href="{{ route('admin.account.delete', $editAccount) }}" class="btn btn-danger btn-sm">Delete Account</a>

                    <hr>

                    <form method="POST">
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('points') ? 'has-error' : '' }}">
                            <label class="control-label">Points</label>
                            <input type="text" class="form-control" value="{{ $editAccount->bitaac->points }}" name="points">
                            <p class="help-block">{{ $errors->first('points') }}</p>
                        </div>

                        <div class="checkbox">
                            <label><input type="checkbox" {{ $editAccount->isAdmin() ? 'checked' : '' }} name="admin">Admin</label>
                        </div>

                        <input type="submit" value="Save" class="btn btn-primary btn-sm">
                        <a href="{{ route('admin.accounts') }}" class="btn">Back</a>
                    </form>
                </div>
            </div>

            <div class="panel panel-default loading">
                <div class="panel-heading">
                    Characters
                </div>

                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <th>Level</th>
                            <th>Gender</th>
                            <th>Vocation</th>
                        </tr>

                        @forelse($editAccount->characters as $character)
                            <tr>
                                <td>
                                    {{ $character->name }}
                                </td>

                                <td>
                                    {{ $character->level }}
                                </td>

                                <td>
                                    {{ $character->gender->name }}
                                </td>

                                <td>
                                    {{ $character->vocation->name }}
                                </td>
                            </tr>
                        @empty

                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
