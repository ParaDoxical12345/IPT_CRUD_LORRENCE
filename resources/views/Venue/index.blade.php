@extends('base')


@section('content')

@if ($info = Session::get('info'))



@endif
<div class="showInfo">
    <div class="info">
        <p> {{$info}} </p>
    </div>

</div>

<style>
    p{
        margin-top: 20px;
    }
    .info{
        text-align: center;
        background-color: rgba(0, 137, 242, 0.39);
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        color: white;
        width: 900px;
    }
</style>



<div class="container">
    <div class="float-end">
        <a href="{{url('/venue/create')}}" class="btn btn-primary">
            <i class="fa fa-plus" aria-hidden="true"></i> &nbsp; Add Venue
        </a>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr class="">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Capacity</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                    <style>
                        .table{
                            box-shadow: 10px 10px 20px 1px rgba(0, 0, 0, 0.199);
                            background-color: rgb(255, 255, 255);
                        }
                    </style>
                </thead>
                <tbody>

                    <?php foreach($venue as $venue): ?>

                        <tr>
                            <td><?=$venue->id ?></td>
                            <td><?=$venue->name ?></td>
                            <td><?=$venue->address ?></td>
                            <td><?=$venue->capacity ?></td>
                            <td><?=$venue->price ?></td>
                            <td>
                                <div class="form-group" style="display: inline-flex;">
                                    <a href="{{url('/edit-venue/' . $venue->id)}}" class="btn btn-success m-1" style="width: 100px;"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> &nbsp; Edit</a>
                                    <a href="{{url('/delete-confirm/' . $venue->id)}}" class="btn btn-danger m-1" style="width: 100px;"> <i class="fa fa-trash-o" aria-hidden="true"></i> &nbsp; Delete</a>
                                </div>

                                <style>

                                    .form-group a:hover{
                                        font-size: 15px;
                                        transition: 0.4s;
                                    }
                                    .form-group a:focus{
                                        font-size: 16px;
                                        transition: 0.3s;
                                    }

                                </style>

                            </td>

                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


@stop
