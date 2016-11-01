@extends('admin::layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('admin::partials.notifications')

            <div class="panel panel-default loading">
                <div class="panel-heading">
                    Store Products
                </div>

                <div class="panel-body">
                    <table class="table table-striped">
                        <th>
                            Image
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Description
                        </th>
                        <th>
                            #
                        </th>

                        @forelse ($products as $product)
                            <tr>
                                <td width="32" height="32" valign="middle" align="center"><img src="https://cdn.rawgit.com/pandaac-cdn/items/1076/{{ $product->item_id }}.gif"></td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->description }}</td>
                                <td><a href="#" class="btn btn-primary btn-xs">Edit</a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No products to show, you can <a href="#">add</a> one.</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection