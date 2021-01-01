@extends('view')
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="text-center">Update Student's Record Here</h5>
                    <div class="card-body">
                    <form action="{{route('updateResult',[$record->id])}}" method="POST">
                        @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$record->name}}">
                            <small class="text-danger">{{$errors->first('name')}}</small>
                            </div>
                            <div class="form-group">
                                <label for="father">Father's Name</label>
                                <input type="text" class="form-control" name="father" value="{{$record->father}}">
                                <small class="text-danger">{{$errors->first('father')}}</small>
                            </div>
                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <input type="text" class="form-control" name="contact" value="{{$record->contact}}">
                                <small class="text-danger">{{$errors->first('contact')}}</small>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" value="{{$record->email}}">
                                <small class="text-danger">{{$errors->first('email')}}</small>
                            </div>
                            <div class="form-group">
                                <label for="school">School</label>
                                <input type="text" class="form-control" name="school" value="{{$record->school}}">
                                <small class="text-danger">{{$errors->first('school')}}</small>
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" name="city" value="{{$record->city}}">
                                <small class="text-danger">{{$errors->first('city')}}</small>
                            </div>
                            <div class="form-group">
                                <label for="dob">Date Of Birth</label>
                                <input type="date" class="form-control" name="dob" value="{{$record->dob}}">
                                <small class="text-danger">{{$errors->first('dob')}}</small>
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select class="form-control" name="gender">
                                <option value="{{$record->gender}}">Male</option>
                                <option value="{{$record->gender}}">Female</option>
                                <option value="{{$record->gender}}">Others</option>
                                <small class="text-danger">{{$errors->first('gender')}}</small>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="roll_no">Roll no.</label>
                                <input type="text" class="form-control" name="roll_no" value="{{$record->roll_no}}">
                                <small class="text-danger">{{$errors->first('roll_no')}}</small>
                            </div>
                            <div class="form-group">
                                <label for="roll_code">Roll Code</label>
                                <input type="text" class="form-control" name="roll_code" value="{{$record->roll_code}}">
                                <small class="text-danger">{{$errors->first('roll_code')}}</small>
                            </div>
                            <div class="form-group">
                                <label for="math">Math</label>
                                <input type="text" class="form-control" name="math" value="{{$record->math}}">
                                <small class="text-danger">{{$errors->first('math')}}</small>
                            </div>
                            <div class="form-group">
                                <label for="science">Science</label>
                                <input type="text" class="form-control" name="science" value="{{$record->science}}">
                                <small class="text-danger">{{$errors->first('science')}}</small>
                            </div>
                            <div class="form-group">
                                <label for="sst">SST</label>
                                <input type="text" class="form-control" name="sst" value="{{$record->sst}}">
                                <small class="text-danger">{{$errors->first('sst')}}</small>
                            </div>
                            <div class="form-group">
                                <label for="hindi">Hindi</label>
                                <input type="text" class="form-control" name="hindi" value="{{$record->hindi}}">
                                <small class="text-danger">{{$errors->first('hindi')}}</small>
                            </div>
                            <div class="form-group">
                                <label for="english">English</label>
                                <input type="text" class="form-control" name="english" value="{{$record->english}}">
                                <small class="text-danger">{{$errors->first('english')}}</small>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="update" class="form-control btn btn-warning btn-block" name="post">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection