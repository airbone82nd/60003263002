@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="card">
                <div class="card-header">Dashboard</div>
                        แสดงรายชื่อนักศึกษาทั้งหมดจากระบบการจัดการข้อมูลนักศึกษา{{ $count }}
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>คำนำหน้า</th>
                            <th>ชื่อต้น</th>
                            <th>นามสกุล</th>
                            <th>รหัสนักศึกษา</th>
                            <th>รหัสกลุ่มนักศึกษา</th>
                            <th>สาขาวิชาเอก</th>
                            <th>คณะที่สังกัด</th>
                        </tr>
                        @foreach ($student as $student);
                        <tr>
                            <td>{{ $student->stu_pre}}</td>
                            <td>{{ $student->stu_fname}}</td>
                            <td>{{ $student->stu_lname}}</td>
                            <td>{{ $student->stu_code}}</td>
                            <td>{{ $student->stu_group_id}}</td>
                            <td>{{ $student->major_id}}</td>
                            </tr>
                        @endforeach
                    </table>
                    {!! $student->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
