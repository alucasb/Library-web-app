@extends('components.main')

@section('title', 'Biblioteca')

@section('content')
<div>
    <h1 id="title">Minha biblioteca</h1>
</div>
@foreach($items as $item)
<div id="bib-container" class="col-md-12">
    <div id="cards-container">
        <div id="cards" class="card-group" style="display: inline-block; vertical-align: middle; float: left;">
                <div class="card" id="card">
                    <img src="{{ asset('/img/covers/'.$item->image)}}" class="card-img-top" alt="{{$item->title}}">
                    <div class="card-body">
                    <h5 class="card-title">{{$item->title}}</h5>
                    <sub>- {{$item->status}}</sub>
                    <p>{{$item->author}}</p>
                    <p class="card-text">{{$item->desc}}</p>
                    <a href="/items/{{$item->id}}" class="btn btn-primary">Coferir Obra</a>
                    </div>
                </div>
        </div>
    </div>
</div>
@endforeach

@endsection


