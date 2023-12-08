@extends('layout.layout')

@section('title', 'Terms')

@section('content')
<div class="row">
    <div class="col-3">
        @include('shared.left-sidebar')
    </div>
    <div class="col-6">
        <h1>Terms of Service</h1>
        <div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    
    </div>
    <div class="col-3">
        @include('shared.search-bar')
        @include('shared.follow-box')
     </div>
</div>
@endsection
 