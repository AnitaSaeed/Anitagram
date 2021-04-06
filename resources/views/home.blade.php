@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/social-network.png">
        </div>


        <div class="col-9 pt-5" >
            <div><h1>AnitaGram</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>15</strong>post</div>
                <div class="pr-5"><strong>15</strong>followers</div>
                <div class="pr-5"><strong>15</strong>following</div>
            </div>
            <div class="pt-2 font-weight-bold">Anitagram.com</div>
            <div>this is a test code so let's have fun and code together</div>
            <div><a href="">www.Anitagram.com</a></div>
        </div>


    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="/pic1.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/pic2.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/pic3.jpg" class="w-100">
        </div>
    </div>
</div>
@endsection
