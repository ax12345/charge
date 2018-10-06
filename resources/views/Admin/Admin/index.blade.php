@extends('Admin.AdminPublic.public')
@section('title','后台首页')
@section('mail')
<div class="right">
        <img class="wColck" src="./static/admins/img/clock.jpg" alt=""/>
        <div class="wFont">
            <h2>Admin</h2>
            <p>欢迎来到管理系统!</p>
            <span id="hours"></span>
        </div>
</div> 
@endsection