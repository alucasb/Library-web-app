
@extends('components.main')

@section('title', 'Editando Obra')

@section('content')
<div id="event-create-container">
    <h1 class="display-2" id="title">Revise os dados da obra</h1>
    <div class="add-form">
        <form action="/items/update/{{$item->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="image">Capa da obra:</label><br>
            <img style="width: 140px; height: 180px" src="/img/covers/{{$item->image}}" alt="{{$item->title}}" class="img-preview">
            <input type="file" id="image" name="image" accept="image/png, image/jpeg/, image/webp"/><br>

            <input value="{{$item->title}}" type="text" name="title" id="nome" placeholder="Título da obra" required><br>
            <input value="{{$item->author}}" type="text" name="author" id="nome" placeholder="Nome do autor" required><br>
            
            <label for="status">Meu Status da obra:</label><br>

            <input type="radio" id="lido" name="status" value="Lido">
            <label for="lido">Lido</label><br>

            <input type="radio" id="lerei" name="status" value="Lerei">
            <label for="lerei">Lerei</label><br>

            <input type="radio" id="esperando" name="status" value="Esperando finalizar">
            <label for="esperando">Esperando finalizar</label><br>

            <input type="radio" id="relendo" name="status" value="Relendo">
            <label for="relendo">Relendo</label><br>
            
            <input type="radio" id="dropado" name="status" value="Dropado">
            <label for="dropado">Dropado</label><br>

            <textarea  name="desc" id="desc" cols="30" rows="10" placeholder="Descrição da obra">{{$item->desc}}</textarea><br>
        
            <input id="submit" class="btn btn-outline-primary" type="submit" value="Cadastrar Obra"></input>
        </form>
    </div>
</div>
@endsection

