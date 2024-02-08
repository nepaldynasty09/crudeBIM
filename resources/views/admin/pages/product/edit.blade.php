@extends('admin.layouts.master')
@section('content')
<form action="/updateproduct/{{$ecom->id}}" method="post" enctype="multipart/form-data">
    @csrf
    <br><br>
    <label form="">Name</label>
    <input type="text" name="name" value="{{$ecom->name}}"><br><br>

    <label for="">Price</label>
    <input type="text" name="price" value="{{$ecom->price}}"><br><br>

    <label for="">Phone</label>
    <input type="text" name="phone" value="{{$ecom->phone}}"><br><br>

    <label for="">Code</label>
    <input type="text" name="code" value="{{$ecom->code}}"><br><br>

    <label for="">Description </label>
    <textarea name="desc" id="" cols="30" rows="10" >{{$ecom->description}}</textarea><br><br>

    <label for="">Image please</label>
    <input type="file" name="img"><BR><BR>

    <button type="submit">update product</button>

</form>
@endsection