@extends('admin.layouts.master')
@section('content')
<table border="1">
    <thead>
        <tr>
            <th>SN</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Code</th>
            <th>Product Description</th>
            <th>Phone</th>
            <th>Image</th>
            <th colspan="2">Action</th>
        
        </tr>
    </thead>
    <tbody>
        @foreach($ecoms as $ecom)
        <tr>
            <td>{{$ecom->id}}</td>
            <td>{{$ecom->name}}</td>
            <td>{{$ecom->price}}</td>
            <td>{{$ecom->description}}</td>
            <td>{{$ecom->code}}</td>
            <td>{{$ecom->phone}}</td>
            <td><img src="{{ asset('images/'.$ecom->image_filename) }}" alt="" height="200px" width="200px"></td>
            <td><a href="/editproduct/{{$ecom->id}}">Edit</a></td>
            <td><a href="/deleteproduct/{{$ecom->id}}">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection