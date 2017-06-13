@extends('layout.app')
@section('content')
@include('includes.upload_photo')
    <div class="container">
        <div class="row">
        @include('includes.photo_list')
        </div>
    </div>
    @endsection