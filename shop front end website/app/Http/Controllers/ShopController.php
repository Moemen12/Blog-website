<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    private static function getData(){
        return [
            ['id'=>1,'name'=>'t-shirt','source'=>'https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80'],
            ['id'=>2,'name'=>'jewelry','source'=>'https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80'],
            ['id'=>3,'name'=>'perfume','source'=>'https://images.unsplash.com/photo-1587017539504-67cfbddac569?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80'],
            ['id'=>4,'name'=>'jacket','source'=>'https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=436&q=80'],
            ['id'=>5,'name'=>'t-shirt','source'=>'https://images.unsplash.com/photo-1576566588028-4147f3842f27?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80'],
            ['id'=>6,'name'=>'jewelry','source'=>'https://images.unsplash.com/photo-1598560917807-1bae44bd2be8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTUyfHxqZXdlbHJ5fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60'],
            ['id'=>7,'name'=>'perfume','source'=>'https://images.unsplash.com/photo-1541643600914-78b084683601?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=404&q=80'],
            ['id'=>8,'name'=>'jacket','source'=>'https://images.unsplash.com/photo-1611312449408-fcece27cdbb7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=369&q=80'],
            ['id'=>9,'name'=>'t-shirt','source'=>'https://images.unsplash.com/photo-1618354691373-d851c5c3a990?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=415&q=80'],
            ['id'=>10,'name'=>'jewelry','source'=>'https://images.unsplash.com/photo-1623302312645-65df66384692?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTYwfHxqZXdlbHJ5fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60'],
            ['id'=>11,'name'=>'perfume','source'=>'https://images.unsplash.com/photo-1592945403244-b3fbafd7f539?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=553&q=80'],
            ['id'=>12,'name'=>'t-shirt','source'=>'https://images.unsplash.com/photo-1434389677669-e08b4cac3105?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8Y2xvdGhlc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'],
            ['id'=>13,'name'=>'perfume','source'=>'https://images.unsplash.com/photo-1610461888750-10bfc601b874?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=399&q=80'],
            ['id'=>14,'name'=>'jewelry','source'=>'https://images.unsplash.com/photo-1535632066927-ab7c9ab60908?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTh8fGpld2Vscnl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60'],
            ['id'=>15,'name'=>'perfume','source'=>'https://images.unsplash.com/photo-1582211594533-268f4f1edcb9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80'],
        ];
    }

    public function index()
    {
        return view('shop.index',[
            'pieces'=> self::getData()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($piece)
    {
        $pieces = self::getData();

     
             $index =array_search($piece,array_column($pieces,'id'));

            if($index === false){
             abort(404);
            }
            return view('shop.show',[
             'part'=> $pieces[$index]
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
