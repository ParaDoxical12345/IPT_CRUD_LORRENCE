@extends('base')

@section('content')
<div class="form-group">

    <a href="{{url('/delete-confirm/' . $venue->id)}}" class="btn btn-secondary mb-3"> <i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp; Back</a>
</div>

<style>
    .form-group a{
        transition: 0.3s;
    }
    .form-group a:hover{
        word-spacing: 1px;
    }
    .form-group a:focus{
        transition: 0.1s;
        word-spacing: 0px;
    }
</style>
    <h1>Edit Venue</h1>

    <div class="row w-50">
        <div class="col md-5">
            {!! Form::model($venue, ['url'=>'/edit-venue/' . $venue->id, 'method'=>'put']) !!}

            <hr >
            <div class="mb-3">
                {!! Form::label('name') !!}
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>

            <div class="mb-3">
                {!! Form::label('address') !!}
                {{ Form::text('address', null, ['class' => 'form-control']) }}
            </div>

            <div class="mb-3">
                {!! Form::label('capacity') !!}
                {{ Form::text('capacity', null, ['class' => 'form-control']) }}
            </div>

            <div class="mb-3">
                {!! Form::label('price') !!}
                {{ Form::text('price', null, ['class' => 'form-control']) }}
            </div>


            <div class="form-group float-end">
                <button class="btn btn-primary m-1" type="submit">
                    <i class="fa fa-pencil" aria-hidden="true"></i> &nbsp; Update
                </button>
                <a href="{{url('/')}}" class="btn btn-warning m-1"> <i class="fa fa-ban" aria-hidden="true"></i> &nbsp; Cancel</a>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection
