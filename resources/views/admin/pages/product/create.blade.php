@extends('admin.layouts.master')
@section('content')
<form action="{{route('saveproduct')}}" method="post" enctype="multipart/form-data">
    @csrf
    <br><br>
    <label form="">Name</label>
    <input type="text" name="name"><br><br>

    <label for="">Price</label>
    <input type="text" name="price"><br><br>

    <label for="">Phone</label>
    <input type="text" name="phone"><br><br>

    <label for="">Code</label>
    <input type="text" name="code"><br><br>

    <label for="">Description </label>
    <textarea name="desc" id="" cols="30" rows="10"></textarea><br><br>

    <label for="">Image please:   </label>
    <input type="file" name="img">
    <br><br>
    <button type="submit">Add product</button>

</form>
@endsection