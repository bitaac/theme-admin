@extends('admin::layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default loading">
                <div class="panel-heading">
                    Add Product
                </div>

                <div class="panel-body">
                    <form method="POST">
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            <label class="control-label">Title</label>
                            <input type="text" class="form-control" value="{{ old('title') }}" name="title">
                            <p class="help-block">{{ $errors->first('title') }}</p>
                        </div>

                        <div class="form-group {{ $errors->has('item_id') ? 'has-error' : '' }}">
                            <label class="control-label">Item ID</label>
                            <input type="number" class="form-control" value="{{ old('item_id') }}" name="item_id">
                            <p class="help-block">{{ $errors->first('item_id') }}</p>
                        </div>

                        <div class="form-group {{ $errors->has('amount') ? 'has-error' : '' }}">
                            <label class="control-label">Count</label>
                            <input type="number" class="form-control" value="{{ old('amount') }}" name="amount">
                            <p class="help-block">{{ $errors->first('amount') }}</p>
                        </div>

                        <div class="form-group {{ $errors->has('points') ? 'has-error' : '' }}">
                            <label class="control-label">Points</label>
                            <input type="number" class="form-control" value="{{ old('points') }}" name="points">
                            <p class="help-block">{{ $errors->first('points') }}</p>
                        </div>

                        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                            <label class="control-label">Description</label>
                            <textarea class="form-control" name="description" placeholder="Optional.."></textarea>
                            <p class="help-block">{{ $errors->first('description') }}</p>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection