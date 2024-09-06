@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
           <h3>Student Edit</h3>

            <form action="/student/{{$student->id}}" method="post">
                @csrf
                @method('PUT')
                <label for="">รหัสนักศึกษา</label>
                <input type="text" name="id" value="{{$student->id}}">

                <label for="">ชื่อ-สกุล</label>
                <input type="text" name="name" value="{{$student->name}}">

                <label for="">อายุ</label>
                <input type="text" name="age" value="{{$student->age}}">
                
                <br>
                <br>
                <button type="submit">บันทึก</button>
                <button type="reset">ยกเลิก</button>
            </form>

        </div>
    </div>
</div>
@endsection