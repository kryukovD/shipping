@extends('layouts\main')
@section("content")
<form class=" d-flex-inline-block " style="width:500px"  action="/add" method="post" >
@csrf
  <div class="form-group  ">
    <label for="exampleInputEmail1">Откуда</label>
    <input type="text" class="form-control" id="from"  name="from" aria-describedby="emailHelp" placeholder="Откуда">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Куда</label>
    <input type="text" class="form-control" id="to" name="to" placeholder="Куда">
  </div>
  <div class="d-flex justify-content-around">
  <button type="subbmit" class="btn btn-primary mt-2" href="/login">Готово</button>
</div>
</from>
@endsection