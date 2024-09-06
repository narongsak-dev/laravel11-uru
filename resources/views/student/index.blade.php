@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <h3>Student Index</h3>

           <a
                name=""
                id=""
                class="btn btn-primary"
                href="/student/create"
                role="button"
                >เพิ่มข้อมูล</a
            >

            <div
                class="table-responsive"
            >
                <table
                    class="table table-primary"
                >
                    <thead>
                        <tr>
                            <th scope="col">รหัสนักศึกษา</th>
                            <th scope="col">ชื่อ-สกุล</th>
                            <th scope="col">อายุ</th>
                            <th scope="col">ดำเนินการ</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($students as $item)
                        <tr class="">
                            <td scope="row">{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->age}}</td>
                            <td>
                                <a
                                    name=""
                                    id=""
                                    class="btn btn-warning"
                                    href="/student/{{$item->id}}/edit"
                                    role="button"
                                    >แก้ไข</a
                                >
                                <form action="/student/{{$item->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        name=""
                                        id=""
                                        class="btn btn-danger"
                                        type="submit"
                                        role="button"
                                        >ลบ</button
                                    >
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr class="">
                            <td colspan="4">ไม่พบข้อมูล</td>
                        </tr>
                        @endforelse
                    
                    </tbody>
                </table>
            </div>
            

        </div>
    </div>
</div>
@endsection
