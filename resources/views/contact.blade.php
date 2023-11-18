@extends('layouts.app')

@section('title')
<title>Contact Us</title>
@endsection

@section('content')
<section style="padding-top:60px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                <div class="card-header">
                    Contact Us
            </div>
            <div class="card-body">
                @if(Session::has('message_send'))
                    <div class="alert alert-succes" role="alert">
                    {{ Session::get('message_send') }}
                    </div>    
                @endif

                <form method="POST" action="{{route('contact_send')}}" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" />

                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" />

                        <label for="phone">Phone</label>
                        <input class="form-control" type="text" name="phone" />

                        <label for="message">Message</label>
                        <textarea class="form-control" name="message"></textarea>
                    </div>
                    <br>
                    <p align="right">
                        <button  class="btn btn-primary btn-sm float-right" type="submit" >Submit</button>
                        <br>
                    </p>
                    
            </div>
        </div>
    </div>
</section>
@endsection