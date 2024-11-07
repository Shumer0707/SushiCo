<?php

namespace App\Http\Controllers;
use App\Models\Menu;

class BasketController extends Controller
{

    public $basket_close = "close_btn";
    public $basket_count = "count_btn";
    public $basket_add = "add_btn";
    public $name_plus = "plus";
    public $name_minus = "minus";

    public function index(){   
        return view('static.basket');
    }
    public function add_to_basket($id){
        if(isset($_SESSION['prod'])){
            if(is_int($_SESSION['prod']->keys()->search($id)) == 0){
                $_SESSION['prod'][$id] = 1;
            }
        }else{
            $_SESSION['prod'] = collect([$id => 1]);
        }
    }
    public function show_for_viewing(){
        if (isset($_SESSION['prod'])) {
            $basket=Menu::whereIn('id', $_SESSION['prod']->keys())->get();
            return $basket;
        }
    }
    public function fetch_data($val, $name, $id){
            if ($id == $this->basket_close){
                unset($_SESSION['prod'][$val]);
                if($_SESSION['prod']->isEmpty() == 1){
                    session_destroy();
                }
            }elseif($id == $this->basket_count){
                if($name == $this->name_plus){
                    $_SESSION['prod'][$val] = $_SESSION['prod'][$val] + 1;
                }elseif($name == $this->name_minus){
                    if($_SESSION['prod'][$val] > 1){
                    $_SESSION['prod'][$val] = $_SESSION['prod'][$val] - 1;
                    }
                }
            }elseif($id == $this->basket_add){
                $this->add_to_basket($val);
            }
            $this->all_price();
            $this->count();
            return 'ok';
    }
    public function fetch_vieu($val, $id = ''){
        if($id != 'no'){
            return view("fetch.$val")->with('id', $id);
        }
        return view("fetch.$val");
    }
    public function all_price(){
        if(isset($_SESSION['prod'])){
            $price = Menu::whereIn('id', $_SESSION['prod']->keys())->select('price', 'id')->get();
            foreach ($price as $key => $value) {
                $good_price[$value['id']] = $value['price'];
            }
            $variable = 0;
            foreach($_SESSION['prod'] as $key => $val){
                $variable = $variable + $good_price[$key] * $val;
            }
            $_SESSION['all_price'] = $variable;
            
            if($_SESSION['all_price'] == 0){
                unset($_SESSION['all_price']);
            }else{
                if($_SESSION['all_price'] < config('my_config.del_min_sum')){
                    $_SESSION['all_price'] = $_SESSION['all_price'] + config('my_config.del_price');
                }
            }
        }
    }
    public function count(){
        if(isset($_SESSION['prod'])){
            $_SESSION['count'] = ($_SESSION['prod'])->sum();
            if($_SESSION['count'] == 0){
                unset($_SESSION['count']);
            }
        }
    }
    public function test(){
        foreach ($_SESSION['prod'] as $key => $value) {
            $items[] = [
            'title' => Menu::where('id',$key)->select('title')->get()->toArray()[0]['title'],
            'price' => Menu::where('id',$key)->select('price')->get()->toArray()[0]['price'],
            'count' => $value,
            'all_price' => Menu::where('id', $key)->select('price')->get()->toArray()[0]['price']*$value
            ];
            $items = collect($items);
        };
        dd($items);
        // return (new OrderMail('q'))->render();
    }
}







    // $_SESSION['all_price'] = Menu::whereIn('id', $_SESSION['prod']->keys())->sum('price');

    // public function get_all_id($arr){
    //     $id_all = collect();
    //     for($e = 0;$e < count($arr); $e++){
    //         $id_all = $id_all->push($arr[$e]['id']);
    //     }
    //     return $id_all;
    // }

        // if(isset($_SESSION['prod'])){
        //     $id_all = $this->get_all_id($_SESSION['prod']);
        //     $prod = collect($_SESSION['prod']);
        //     if(is_int($id_all->search($id)) == 0){
        //         $new_prod = ['id' => $id, 'count_item' => '1'];
        //         $_SESSION['prod'] = $prod->push($new_prod);
        //         $id_all = $id_all->push($id);
        //     }
        // }else{
        //     $prod = ['id' => $id, 'count_item' => '1'];
        //     $_SESSION['prod'][] = $prod;
        //     $id_all[] = $id;
        // }