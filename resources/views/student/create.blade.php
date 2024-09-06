@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
           <h3>Student Create</h3>

            <form action="/student" method="post">
                @csrf
                <label for="">รหัสนักศึกษา</label>
                <input type="text" name="id">

                <label for="">ชื่อ-สกุล</label>
                <input type="text" name="name">

                <label for="">อายุ</label>
                <input type="text" name="age">
                
                <br>
                <br>
                <button type="submit">บันทึก</button>
                <button type="reset">ยกเลิก</button>
            </form>

        </div>
    </div>
</div>
@endsection