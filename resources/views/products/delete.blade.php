@extends('admin::layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default loading">
                <div class="panel-heading">
                    Delete Store Product
                </div>

                <div class="panel-body">
                    <form method="POST">
                        {{ csrf_field() }}

                        <div class="form-group">
                            Are you sure you want to delete product <strong>{{ $product->title }}</strong>?
                        </div>

                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="{{ route('admin.product.edit', $product) }}" class="btn">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
