@extends('admin::layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default loading">
                <div class="panel-heading">
                    Edit Forum Board
                </div>

                <div class="panel-body">
                    <form method="POST">
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            <label class="control-label">Title</label>
                            <input type="text" class="form-control" value="{{ $board->title }}" name="title">
                            <p class="help-block">{{ $errors->first('title') }}</p>
                        </div>

                        <div class="form-group {{ $errors->has('order') ? 'has-error' : '' }}">
                            <label class="control-label">Order</label>
                            <input type="number" class="form-control" value="{{ $board->order }}" name="order">
                            <p class="help-block">{{ $errors->first('order') }}</p>
                        </div>

                        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                            <label class="control-label">Description</label>
                            <textarea class="form-control" name="description" placeholder="Optional..">{{ $board->description }}</textarea>
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