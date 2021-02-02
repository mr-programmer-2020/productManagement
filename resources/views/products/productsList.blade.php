<head>
    <link rel="stylesheet" href="{{asset('style/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/ProductAdd.css')}}">
    <link rel="stylesheet" href="{{asset('style/js/bootstrap.min.js')}}">
    <link rel="stylesheet" href="{{asset('style/css/style.css')}}">
    <script src="{{asset('style/js/jquery-3.5.1.min.js')}}"></script>
</head>

<script >
   $(function(){
       $(document).on("click",".delete-elemets",function(){
           var deleteRows = $(".wrapper input:checked").parents(".row").remove();
       })
   })
</script>

@extends('includes.nav')
@section('content')

<div class="content">

    <div class="productHeader">
        <div class="productHeaderTitle">
            <h2>Product Add</h2>
        </div>
        <div class="productHeaderAction">
            <a href="add/product"><button type="submit" id="add">ADD</button></a>
            <button class="delete-elemets" type="submit">MASS DELETE</button>
        </div>
    </div>

    <div class="wrapper">
        @foreach($dvds as $dvd)
        <div class="row"> 
            <input type="checkbox">
            <br>
            {{$dvd->sku}}
            <br>
            {{$dvd->name}}
            <br>
            {{$dvd->price}} $
            <br>
            Size: {{$dvd->size}} MB
        </div>
        @endforeach

        @foreach($books as $book)
        <div class="row">
            <input type="checkbox">
            <br>
            {{$book->sku}}
            <br>
            {{$book->name}}
            <br>
            {{$book->price}} $
            <br>
           Weight: {{$book->weight}} KG
        </div>
        @endforeach

        @foreach($furniture as $furn)
        <div class="row">
            <input type="checkbox">
            <br>
            {{$furn->sku}}
            <br>
            {{$furn->name}}
            <br>
            {{$furn->price}} $
            <br>
           Dimensione: {{$furn->height}}x{{$furn->width}}x{{$furn->length}}
        </div>
        @endforeach
    </div>

</div>

@endsection