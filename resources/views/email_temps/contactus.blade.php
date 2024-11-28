@extends('layouts.mail')
@push('css')

<style type="text/css">
  .error{
    color: red;
  }
</style>
@endpush
@section('content')
<div class="innerContent-wrap">
  <div class="container">
    <table class="table table-bordered">
      <tbody>
        <tr>
          <th scope="row">First Name</th>
          <td>{{$contactus->first_name}}</td>
        </tr>
        <tr>
          <th scope="row">Last Name</th>
          <td>{{$contactus->last_name}}</td>
        </tr>

        <tr>
          <th scope="row">Email Address</th>
          <td>{{$contactus->email_address}}</td>
        </tr>

        <tr>
          <th scope="row">Phone Number</th>
          <td>{{$contactus->phone_number}}</td>
        </tr>

        <tr>
          <th scope="row">Message</th>
          <td>{{$contactus->message}}</td>
        </tr>

        
      </tbody>
    </table>
  </div>
</div>
@endsection