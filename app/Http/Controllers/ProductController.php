<?php

namespace App\Http\Controllers;

use App\Http\Requests\IngrRequest;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Ingredient;
use App\Models\Ingredient_menu;
use App\Models\Menu;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(){
        $menu = Menu::all();
        $category = Menu::pluck('category')->unique();
        return view('product.index')->with('menu', $menu)->with('category', $category);
    }
    public function form_add_product(){
        $checked = [''];
        // $checked = ['Рис', 'Соевый соус', 'Имбирь', 'Васаби'];
        return view('product.form_add_product')->with('ingr', $this->all_ingrediet())->with('checked', $checked);
    }
    public function add_product(ProductRequest $request){

        $data = $request->validated();
        $image = $this->add_img($data['img']);
        $id = Menu::insertGetId(
            [
                'title' => Str::of($data['title'])->trim()->upper(),
                'description_ru' => Str::of($data['description_ru'])->trim()->lower()->ucfirst(),
                'description_ro' => Str::of($data['description_ro'])->trim()->lower()->ucfirst(),
                'gram' => $data['gram'],
                'price' => $data['price'],
                'category' => Str::of($data['category'])->trim()->lower(),
                'img' => $image
            ]
        );
        $this->insert_Ingredient_menu($data['ingr'], $id);
        return(redirect(route('product.index')));
    }

    public function add_ingr(IngrRequest $request){
        
        $data = $request->validated();
        if(isset($data['id'])){
            Ingredient::where('id', $data['id'])->update([
                'text_ru' => Str::of($data['text_ru'])->trim()->lower()->ucfirst(),
                'text_ro' => Str::of($data['text_ro'])->trim()->lower()->ucfirst(),
            ]);
        }else{
            Ingredient::insert([
                'text_ru' => Str::of($data['text_ru'])->trim()->lower()->ucfirst(),
                'text_ro' => Str::of($data['text_ro'])->trim()->lower()->ucfirst(),
                
            ]);
        }   
        return redirect()->back();
        // return(redirect(route('product.index')));
    }
    public function form_update_ingr(){
        return view('product.form_update_ingr')->with('ingr', $this->all_ingrediet());
    }
    public function delete_ingr($id){
        // $ingr = Ingredient::find($id);
        Ingredient_menu::where('ingredient_id', $id)->delete();
        Ingredient::where('id', $id)->delete();
        return redirect()->back();
    }
    public function form_update_product($id){
        $item = Menu::find($id);
        foreach($item->ingr as $el){
            $item_ingr[] = $el->text_ru;
        }
        return view('product.form_update_product')
            ->with('item', $item)
            ->with('ingr', $this->all_ingrediet())
            ->with('item_ingr', $item_ingr);
    }

    public function update_product(ProductUpdateRequest $request){
        $data = $request->validated();
        $item = Menu::find($data['id']);
        $this->delete_Ingredient_menu($data['id']);
        $this->insert_Ingredient_menu($data['ingr'], $data['id']);
        if(isset($data['img'])){
            // if(Storage::exists($item['img'])){
            //     Storage::delete($item['img']);
            // }
            $this->delete_img($item['img']);
            $image = $this->add_img($data['img']);

            Menu::where('id', $data['id'])->update([
                'title' => Str::of($data['title'])->trim()->upper(),
                'description_ru' => Str::of($data['description_ru'])->trim()->lower()->ucfirst(),
                'description_ro' => Str::of($data['description_ro'])->trim()->lower()->ucfirst(),
                'gram' => $data['gram'],
                'price' => $data['price'],
                'category' => Str::of($data['category'])->trim()->lower(),
                'img' => $image
            ]);
        }else{
            Menu::where('id', $data['id'])->update([
                'title' => Str::of($data['title'])->trim()->upper(),
                'description_ru' => Str::of($data['description_ru'])->trim()->lower()->ucfirst(),
                'description_ro' => Str::of($data['description_ro'])->trim()->lower()->ucfirst(),
                'gram' => $data['gram'],
                'price' => $data['price'],
                'category' => Str::of($data['category'])->trim()->lower(),
            ]);
        }
        return(redirect(route('product.index')));
    }

    public function delete_product($id){
        $item = Menu::find($id);
        $this->delete_Ingredient_menu($id);
        $this->delete_img($item['img']);
        Menu::where('id', $id)->delete();
        
        return redirect()->back();
    }

    public function all_ingrediet(){
        $ingr = Ingredient::orderBy('text_ru', 'asc')->get();
        return $ingr;
    }
    public function delete_Ingredient_menu($id){
        Ingredient_menu::where('menu_id', $id)->delete();
    }
    public function insert_Ingredient_menu($ingredient_id, $menu_id){
        foreach($ingredient_id as $el){
            Ingredient_menu::insert([
                'ingredient_id' => $el,
                'menu_id' => $menu_id
            ]);
        }
    }
    public function add_img($img){
        $image = $img->store('menu');
        return $image;
    }
    public function delete_img($img){
        if(Storage::exists($img)){
            Storage::delete($img);
        }
    }

}
