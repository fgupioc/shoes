<?php

namespace shoes\Http\Controllers\Product;

use Illuminate\Http\Request;

use shoes\Http\Requests;
use shoes\Http\Controllers\Controller; 
use shoes\Models\Product;
use shoes\Models\Mark;
use shoes\Http\Requests\Product\ProductoCreateRequest;
use shoes\Http\Requests\Product\ProductoUpdateRequest;
use Illuminate\Support\Facades\Auth;
use  Session;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function demo(){
        //Auth::user()->administrator->first()->type_admin->abbreviation;
        
      return"llego";
    }

    public function index()
    { 
        $productos= Product::select('products.id','products.name as producto','products.price'
            ,'marks.name as marca')->join('marks','marks.id','=','products.marca_id')->paginate(4);  
        return view('product.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       $marcas =Mark::lists('name','id')->prepend('seleccione una marca');
       return view('product.create',compact('marcas')); 
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoCreateRequest $request)
    {
       $data = $request->all();
       Product::create([
        'name' => $data['name'],
        'price' => $data['price'],
        'marca_id' => $data['marca_id'],
        ]);

       Session::flash('save','Se ha creado correctamente');
       return redirect()->route('producto');
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $producto= Product::FindOrFail($id);
     return View('product.delete',compact('producto'));
 }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

       $marcas =Mark::lists('name','id')->prepend('seleccione una marca');
       $producto = Product::FindOrFail($id);
       return View('product.edit',compact('marcas','producto'));
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductoUpdateRequest $request, $id)
    {
     $value = array();
     $producto = Product::FindOrFail($id);
     $data = $request->all();
     $value['name'] = $data['name'];
     $value['price'] = $data['price'];
     $value['marca_id'] = $data['marca_id'];
     $producto->fill($value);
     $producto->save();

     Session::flash('update','Se ha actualizado creado correctamente');
     return redirect()->route('producto');
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto= Product::FindOrFail($id);
        $producto->delete();
        Session::flash('delete','Se ha eliminado correctamente');
        return redirect()->route('producto');
    }
}
