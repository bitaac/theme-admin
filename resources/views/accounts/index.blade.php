@extends('admin::layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('admin::partials.notifications')

            <div class="panel panel-default loading">
                <div class="panel-heading">
                    Accounts
                </div>

                <div class="panel-body">
                    <table class="table table-striped">
                        @if (Bitaac::getAccountNameField() !== 'id')
                            <th>#</th>
                        @endif
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>

                        @foreach ($accounts as $account)
                            <tr>
                                @if (Bitaac::getAccountNameField() !== 'id')
                                    <td>
                                        {{ $account->id }}
                                    </td>
                                @endif

                                <td>
                                    {{ $account->getName() }}
                                </td>

                                <td>
                                    {{ $account->email }}
                                </td>

                                <td>
                                    <a href="{{ route('admin.account', $account) }}" class="btn btn-primary btn-xs">
                                        <span class="fa fa-pencil-square-o" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
