@extends('view')
@section('title')
This is|resultpage
@endsection
@section('content')
<div class="container mt-3">
    <div class="row">
        <table class="table table-striped table-bordered">
            <tr>
                <th colspan="4" class="bg-primary"> Personal details</th>
            </tr>
            <tr>
                <th colspan="2">Name</th>
                <td colspan="2">{{$item->name}}</td>
            </tr>
            <tr>
                <th colspan="2">Father's Name</th>
                <td colspan="2">{{$item->father}}</td>
            </tr>
            <tr>
                <th colspan="2">Email_id</th>
                <td colspan="2">{{$item->email}}</td>
            </tr>
            <tr>
                <th colspan="2">Contact</th>
                <td colspan="2">{{$item->contact}}</td>
            </tr>
            <tr>
                <th colspan="2">School</th>
                <td colspan="2">{{$item->school}}</td>
            </tr>
            <tr>
                <th colspan="1">gender</th>
                <td colspan="1">{{$item->gender}}</td>
                <th colspan="1">Roll no.</th>
                <td colspan="1">{{$item->roll_no}}</td>
            </tr>
            <tr>
                <th colspan="1">Date of Birth</th>
                <td colspan="1">{{$item->dob}}</td>
                <th colspan="1">Roll Code.</th>
                <td colspan="1">{{$item->roll_code}}</td>
            </tr>
            <tr>
                <th colspan="4" class="bg-success text-white">Marks Details</th>
            </tr>
            <tr>
                <th>Subject</th>
                <th>Total Marks</th>
                <th>Pass Marks</th>
                <th>Obtained Marks</th>

            </tr>
            <tr>
                <td>Maths</td>
                <td>100</td>
                <td>30</td>
            <td>{{$item->math}}</td>

            </tr>

            <tr>
                <td>Science</td>
                <td>100</td>
                <td>30</td>
                <td>{{$item->science}}</td>

            </tr>
            <tr>
                <td>SST</td>
                <td>100</td>
                <td>30</td>
            <td>{{$item->sst}}</td>

            </tr>
            <tr>
                <td>Hindi</td>
                <td>100</td>
                <td>30</td>
                <td>{{$item->hindi}}</td>

            </tr>
            <tr>
                <td>English</td>
                <td>100</td>
                <td>30</td>
            <td>{{$item->english}}</td>

            </tr>
            <tr>
                <th colspan="4" class="bg-dark text-white">Result Details</th>
            </tr>
            <tr>
              <th colspan="3">Aggrigate Marks</th>
              <td>{{$total = $item->math+$item->science+$item->sst+$item->hindi+$item->english}}</td>
            </tr>
            <tr>
                <th colspan="3">Division</th>
            <td>
                @if($total>=300)
                    1st Division
                @elseif($total>=250)
                    2nd division
                @elseif($total>=150)
                    3rd Division
                @else
                    You are Fail
                @endif
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection
