<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AttrValue;
use App\Models\Category;
use App\Models\Product;
use App\Models\ImgProduct;
use App\Models\ProductAttr;
use App\Models\Attr;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $attr_values = AttrValue::all();
        $category = Category::all();
        return view('admin.product.add',compact('attr_values','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        
      if($request->hasFile('file')){
            $file= $request->file;
            $fileName = $file->getClientOriginalName();
            // dd($fileName);
            $file->move('uploads',$fileName);
            $request->merge(['image'=>$fileName]);
        }
       
        // dd($request->all());
        $pro = Product::create($request->all());
        // xu ly up nhieu anh 
        if($request->hasFile('files')){
           
            $files= $request->files;
            
           foreach($files as  $file){      
                foreach($file as $key => $f){
                    $fileName = $file[$key]->getClientOriginalName();
                    $file[$key]->move('uploads',$fileName);
                    ImgProduct::create([
                        'image'=> $fileName,
                        'product_id'=> $pro->id
                    ]);
                }
           }
          
        };
      
        return redirect()->route('product.index');
    }

    public function variant(){

        $attr = Attr::all();
        
        return view('admin.product.variant',compact('attr'));
    }

    public function variantPost(Request $request,$id){
        // dd($request->dem);
        $dem = $request->dem;
        for ($i=1; $i <=$dem ; $i++) { 
            $price = 'price'.$i;
            $attr = 'attr'.$i;
            $file = 'file'.$i;
            // echo $request->$price;
            // upload 
           
            if($request->hasFile($file)){
                $f= $request->$file;
                $fileName = $f->getClientOriginalName();
                // dd($fileName);
                $f->move('uploads',$fileName);
                $img_pro = ImgProduct::create([
                    'image'=> $fileName,
                    'product_id'=> $id
                ]);
            }
            DB::table('product_v_s')->insert([
                'product_id'=>$id,
                'price'=>$request->$price,
                'id_attr_values'=>json_encode($request->$attr),
                'id_img_product'=>$img_pro->id
            ]);
        }
        dd($request->all());
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
