@extends('app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Post</div>
                <div class="panel-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    {!! Form::open(array('url' => 'blog', 'class' => 'form-horizontal')) !!}

                        <div class="form-group">
                            <label class="col-md-4 control-label">Title</label>
                            <div class="col-md-6">
                                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Description</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="description" value="{{ old('description') }}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label">Status</label>
                            <div class="col-md-6">
                                
                                <label class="radio">
                                    <input type="radio" name="status" value="1"/> Active
                                </label>
                                <label class="radio">
                                    <input type="radio" name="status" value="0"/> Inactive
                                </label>
                               
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection