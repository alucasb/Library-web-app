<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class LibController extends Controller
{
    public function index(){
        return view('index');
    }
    
    public function add(){
        return view('items.add');
    }
    
    public function store(Request $request){
        //armazenamento dos dados
        $item = new Item;
        
        //$data = $request->all();

        //puxa as informações passadas 
        $item->id = $request->id;
        $item->image = $request->image;
        $item->title = $request->title;
        $item->author = $request->author;
        $item->status = $request->status;
        $item->desc = $request->desc;

        //upload da imagem
        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = date('YdmHi').$file->getClientOriginalName();
            $file->move(public_path('/img/covers'), $fileName);
            $item['image']= $fileName;
            
        }
        
        $item->save();
        
        return redirect('/bib')->with('msg', 'Adicionado com sucesso!');
    }

    public function item($id){
        $item = Item::findOrFail($id);

        return view('items.item', compact('item'));
    }

    //fazer a dashboard de items
    public function bib(){
        //puxa todos os items
        $items = Item::all();
        return view('bib', compact('items'));
    }

    public function delete($id){
        Item::findOrFail($id)->delete();
        return redirect('/bib')->with('msg', 'Item deletado!');
    }
    
    public function edit($id){
        $item = Item::findOrFail($id);


        return view('items.edit', ['item' => $item]);
    }

    public function update(Request $request){
        $data = $request->only(['image', 'title', 'author', 'status', 'desc',]);

        //reupload da imagem
        if($request->hasFile('image')){
            $requestImage = $request->image;
            $extension = $requestImage->extension(); 

            $fileName = date('YdmHi').$requestImage->getClientOriginalName();
            $requestImage->move(public_path('/img/covers'), $fileName);
            $data['image']= $fileName;
            
        }
        //pega todos os items e atualiza o que requeriu
        Item::findOrFail($request->id)->update($data);

        return redirect('/bib')->with('msg','Evento editado com sucesso');
    }
}
