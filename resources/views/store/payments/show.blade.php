@extends('admin::layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('admin::partials.notifications')

            <div class="panel panel-default loading">
                <div class="panel-heading">
                    Payment Logs
                </div>

                <div class="panel-body">
                    <table class="table table-striped">
                        <th>
                            ID
                        </th>
                        <th>
                            Method
                        </th>
                        <th>
                            Currency
                        </th>
                        <th>
                            Amount
                        </th>
                        <th>
                            Account ID
                        </th>
                        <th>
                            Points
                        </th>

                        @forelse ($payments as $payment)
                            <tr>
                                <td width="5%">{{ $payment->payment_id }}</td>
                                <td width="5%">{{ $payment->method }}</td>
                                <td width="5%">{{ $payment->currency }}</td>
                                <td width="5%">{{ $payment->amount }}</td>
                                <td width="5%">{{ $payment->account_id }}</td>
                                <td width="5%">{{ $payment->points }}</td>
                            </tr>
                            <tr>
                                
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">No payments to show.</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection