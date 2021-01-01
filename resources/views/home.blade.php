@extends('view')
@section('title')
This is | homepage
@endsection
@section('content')
<div class="continer mt-2">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <marquee scrollamount="8" class="text-white bg-danger" direction="left">BSEB annual examination result 2020</marquee>
            <div class="card">
                <div class="card-body">
                    <form action="" method="get">
                        <div class="form-group">
                            <label for="roll_code">Roll Code</label>
                            <input type="text" class="form-control" name="roll_code" placeholder="enter roll_code">
                            <small class="text-danger">{{$errors->first('roll_code')}}</small>
                        </div>
                        <div class="form-group">
                            <label for="roll_no">Roll Number</label>
                            <input type="text" class="form-control" name="roll_no" placeholder="enter roll_no.">
                            <small class="text-danger">{{$errors->first('roll_no')}}</small>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-success btn-block" value="Get Result" name="find">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-lg-11 mx-auto">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Obtained Marks</th>
                    <th>Action</th>
                </tr>
                @foreach($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->contact}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$total = $item->math+$item->science+$item->sst+$item->hindi+$item->english}}</td>
                    <td><a href="{{route('getResult',['id'=>$item->id])}}" class="btn btn-success btn-sm">get result</a>
                        <a href="{{route('edit',['id'=>$item->id])}}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="{{route('delete',['id'=>$item->id])}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
