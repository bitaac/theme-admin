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
                                <td width="32" height="32" valign="middle" align="center"><img src="{{ $product->getItemImage() }}"></td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->description }}</td>
                                <td>
                                    <a href="{{ route('admin.product.edit', $product) }}" class="btn btn-primary btn-xs">
                                        <span class="fa fa-pencil-square-o" aria-hidden="true"></span>
                                    </a>
                                    <a href="{{ route('admin.product.delete', $product) }}" class="btn btn-danger btn-xs">
                                        <span class="fa fa-times" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No products to show, you can <a href="{{ route('admin.products.create') }}">add</a> one.</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
