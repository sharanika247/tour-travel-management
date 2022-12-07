@extends('backend.master')
@section('main')

<table class="table-fixed">
  <thead>
    <tr>
      <th>SL</th>
      <th>Type Name</th>
      <th>Email</th>
      <th>Details</th>
    </tr>
  </thead>
  <tbody>

    @foreach($types as $type)
   <tr>
      <td>{{$type->id}}</td>
      <td>{{$type->name}}</td>
      <td>{{$type->email}}</td>
      <td>{{$type->details}}</td>
    </tr>
    @endforeach

   
  
  </tbody>
</table>
@endsection 