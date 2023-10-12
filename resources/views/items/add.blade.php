
@extends('components.main')

@section('title', 'Adicionando Obra')

@section('content')
<div id="event-create-container">
    <h1 class="display-2" id="title">Coloque os dados da obra</h1>
    <div class="add-form">
        <form action="/items" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="image">Capa da obra:</label><br>
            <input type="file" id="image" name="image" accept="image/png, image/jpeg, image/webp, image/jpg" required/><br>

            <input type="text" name="title" id="nome" placeholder="Título da obra" required><br>
            <input type="text" name="author" id="nome" placeholder="Nome do autor" required><br>
            
            <label for="status">Meu Status da obra:</label><br>

            <input type="radio" id="lido" name="status" value="Lido" required>
            <label for="lido">Lido</label><br>

            <input type="radio" id="lerei" name="status" value="Lerei" required>
            <label for="lerei">Lerei</label><br>

            <input type="radio" id="esperando" name="status" value="Esperando finalizar" required>
            <label for="esperando">Esperando finalizar</label><br>

            <input type="radio" id="relendo" name="status" value="Relendo" required>
            <label for="relendo">Relendo</label><br>
            
            <input type="radio" id="dropado" name="status" value="Dropado" required>
            <label for="dropado">Dropado</label><br>

            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Descrição da obra" required></textarea><br>
        
            <input id="submit" class="btn btn-outline-primary" type="submit" value="Cadastrar Obra"></input>
        </form>
    </div>
</div>
@endsection

