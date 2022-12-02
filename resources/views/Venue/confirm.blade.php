@extends('base')

@section('content')
<div class="form-group">
    <a href="{{url('/')}}" class="btn btn-secondary mb-3"> <i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp; Back</a>
</div>

<style>
    .form-group a{
        transition: 0.5s;
    }
    .form-group a:hover{
        word-spacing: 1px;
    }
    .form-group a:focus{
        transition: 0.1s;
        word-spacing: 0px;
    }
</style>


    <div class="row w-50">
        <div class="col md-5">

            {!! Form::model($venue, ['url'=>'/edit-venue/' . $venue->id]) !!}
            <a href="{{url('/sub-edit/' . $venue->id)}}" class="editBtn m-1" title="Edit">

                <i class="fa fa-pencil-square-o" aria-hidden=""></i>
            </a>
            <h1 class="mb-4">Delete this Venue?</h1>
            <hr>


            <div class="mb-3">
                {!! Form::label('name') !!}
                {{ Form::text('name', null, ['class' => 'form-control', 'readonly' => 'true']) }}
            </div>

            <div class="mb-3">
                {!! Form::label('address') !!}
                {{ Form::text('address', null, ['class' => 'form-control', 'readonly' => 'true']) }}
            </div>

            <div class="mb-3">
                {!! Form::label('capacity') !!}
                {{ Form::text('capacity', null, ['class' => 'form-control', 'readonly' => 'true']) }}
            </div>

            <div class="mb-3">
                {!! Form::label('price') !!}
                {{ Form::text('price', null, ['class' => 'form-control', 'readonly' => 'true']) }}
            </div>



            </div>

            {!! Form::close() !!}

            <form action="{{url('/delete-venue/'.$venue->id)}}" method="post">

                {{ method_field('DELETE')}}
                {{ csrf_field()}}
                    <div class="form-group float-end">
                        <button href="" class="btn btn-success m-1" type="submit"> <i class="fa fa-check" aria-hidden="true"></i> &nbsp; Yes</button>
                        <a href="/" class="btn btn-warning m-1">

                            <i class="fa fa-times" aria-hidden="true"></i> &nbsp; No</a>
                    </div>
            </form>
            <style>

                h6{

                    margin-top: 3px;
                }
                .editBtn i{
                    margin-top: 5px;
                    color: white;
                    transition: 0.5s;
                    padding: 5px;
                    margin: 0px;
                    margin-left: -5px;
                    background-color: rgb(0, 255, 55);
                    padding: 10px;
                    padding-left: 15px;
                    padding-right: 15px;
                    border-radius:10px;
                    margin-top: 5px;

                }

                .editBtn i:hover{

                    transform: rotate3d(0, 1, 0, 360deg);
                    background-color: rgb(0, 255, 51);
                }



                .editBtn{
                    transition: 0.4s;
                    float: right;
                    color: rgb(185, 182, 214);

                }


            </style>

        </div>
    </div>
@endsection
