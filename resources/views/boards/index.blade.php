@extends('admin::layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('admin::partials.notifications')

            <div class="panel panel-default loading">
                <div class="panel-heading">
                    Forum Boards
                </div>

                <div class="panel-body">
                    <table class="table table-striped">
                        <th>
                            Title
                        </th>
                        <th>
                            Description
                        </th>
                        <th>
                            Order
                        </th>
                        <th></th>

                        @forelse ($boards as $board)
                            <tr>
                                <td width="20%">{{ $board->title }}</td>
                                <td>{{ $board->description }}</td>
                                <td>{{ $board->order }}</td>
                                <td>
                                    <a href="{{ url('/admin/boards/edit/'.str_slug($board->title)) }}" class="btn btn-primary btn-xs">
                                        <span class="fa fa-pencil-square-o" aria-hidden="true"></span>
                                    </a>
                                    <a href="{{ url('/admin/boards/delete/'.str_slug($board->title)) }}" class="btn btn-danger btn-xs">
                                        <span class="fa fa-times" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No forums boards to show, you can <a href="{{ url('/admin/boards/create') }}">add</a> one.</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection