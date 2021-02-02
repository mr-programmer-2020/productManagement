<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;
use App\models\Dvd;
use App\models\Book;
use App\models\Furniture;
use DB;
class productsController extends Controller
{
    public function products()
    {
        //get dvds
        $dvds = DB::table('products')
        ->join('dvds','products.id',"=",'dvds.product_id')->get();

        //get book products
        $books = DB::table('products')
        ->join('books','products.id',"=",'books.product_id')->get();

        //get furniture products
        $furniture = DB::table('products')
        ->join('furniture','products.id',"=",'furniture.product_id')->get();

        return view('products.productsList')->with('dvds',$dvds)->with('books',$books)->with('furniture',$furniture);
    }

    public function addProduct()
    {
        return view('products.addProduct');
    
    }
    public function storeProduct(Request $request)
    {
        
        try
        {
          
            if(isset($_POST['cancel']))
            {
                return redirect()->route('products');
            }
            
            DB::beginTransaction();
            $product = new Product;
            $product->sku = $request->sku;
            $product->name = $request->name;
            $product->price = $request->price;
            $product->save();

            //dvd
            $size = $_POST['size'];
            //book
            $weight = $_POST['weight'];
            
            if(isset($size) && $size!='')
            {
                $dvd = new Dvd;
                $dvd->size = $request->size;
                $dvd->product_id = $product->id;
                $dvd->save();
            } 
            
            elseif(isset($weight) && $weight!='')
            {
                $book = new Book;
                $book->weight = $request->weight;
                $book->product_id = $product->id;
                $book->save();
            }

            else
            {
                $furniture = new Furniture;
                $furniture->height = $request->height;
                $furniture->width = $request->width;
                $furniture->length = $request->length;
                $furniture->product_id = $product->id;
                $furniture->save();
            }

            DB::commit();
            return redirect()->route('products');
        }
        catch(\Exeption $ex)
        {
            DB::rollback();
        }
    }

    
}