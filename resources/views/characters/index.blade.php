@extends('admin::layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('admin::partials.notifications')

            <div class="panel panel-default loading">
                <div class="panel-heading">
                    Characters
                </div>

                <div class="panel-body">
                    <table class="table table-striped">
                        <th>#</th>
                        <th>Name</th>
                        <th>Level</th>
                        <th>Gender</th>
                        <th>Vocation</th>

                        @foreach ($characters as $character)
                            <tr>
                                <td>
                                    {{ $character->id }}
                                </td>

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
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
