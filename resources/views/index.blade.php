@extends('admin::layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default loading">
                <div class="panel-heading">
                    Dashboard
                </div>

                <div class="panel-body">
                    <table class="table table-striped">
                        <th colspan="4">
                            Statistics
                        </th>

                        <tr>
                            <td width="20%">Total accounts:</td>
                            <td>{{ $totalAccounts }}</td>
                        </tr>

                        <tr>
                            <td>Total players:</td>
                            <td>{{ $totalPlayers }}</td>
                        </tr>

                        <tr>
                            <td>Highest level:</td>
                            <td>{{ $highestLevel }}</td>
                        </tr>

                        <tr>
                            <td>Average level:</td>
                            <td>{{ $averageLevel }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection