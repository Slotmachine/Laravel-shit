@extends('user.master')
@section('title','Welcom Test')
@section('content')
<div class="jumbotron text-center">
    <h1 style="font-size: 50px;">ระบบกรอกข้อมูล ไซส์เสื้อ</h1>
    <p>คณะสังคมศาสตร์ มหาวิทยาลัยเชียงใหม่</p>
</div>

<div class="container">
    <div class="row" align="center">
        <div class="col-sm-3">
            <a href="#" class="btn btn-warning" style="font-size: 20px; margin-top: 70px;" onclick="myFunction()">แก้ไขข้อมูล</a>
        </div>
        <div class="col-sm-6">
            <a href="{{route('user.create')}}" class="btn btn-success" style="font-size: 50px; margin-top: 130px;">กรอกข้อมูล</a>
        </div>
        <div class="col-sm-3">
            <a href="#" class="btn btn-danger" style="font-size: 20px; margin-top: 70px;" onclick="myFunction()">ลบข้อมูล</a>
        </div>
    </div>
</div>
<script language="javascript" type="text/javascript">
    function myFunction() {
        alert("เร็วๆนี้");
    }
</script>
@stop