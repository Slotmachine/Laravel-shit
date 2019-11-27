@extends('user.master')
@section('title','Welcom Test')
@section('content')
<div class="jumbotron text-center">
    <h1>ระบบกรอกข้อมูล ไซส์เสื้อ</h1>
    <p>คณะสังคมศาสตร์ มหาวิทยาลัยเชียงใหม่</p>
</div>

<div class="container">
    <div class="row" align="center">
        <div class="col-sm-4">
            <a href="/" class="btn btn-warning">แก้ไขข้อมูล</a>
        </div>
        <div class="col-sm-4">
            <a href="{{route('user.create')}}" class="btn btn-success">กรอกข้อมูล</a>
        </div>
        <div class="col-sm-4">
            <a href="/" class="btn btn-danger">ลบข้อมูล</a>
        </div>
    </div>
</div>
@stop