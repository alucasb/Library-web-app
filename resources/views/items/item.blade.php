@extends('components.main')

@section('title', $item->title)

@section('content')
<div class="col-md-10 offset-md-1">
    <div class="row">
        <div class="col-md-6" id="image-container">
            <img style="height: 500px;width: 320px;" class="img-thumbnail" src="/img/covers/{{$item->image}}" alt="cover">
        </div>
        <div id="item-container" class="col-md-6">
            <h1>{{$item->title}}</h1>
            <p>{{$item->author}}</p>
            <p>- {{$item->status}}</p>
            <p>{{$item->desc}}</p>
            <div>
                <div style="display: inline-block; vertical-align: middle;">
                    <a href="/items/edit/{{$item->id}}" class="btn btn-info edit-btn">
                        Editar
                    </a>
                </div>
                <div style="display: inline-block; vertical-align: middle;">
                    <form action="/items/{{$item->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>

</div>
@endsection
