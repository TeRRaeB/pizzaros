<?php

namespace App\Http\Controllers;

use App\Items;
use App\Products;
use Illuminate\Http\Request;

class AddToCartAction extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $id)
    {
        $item = Items::find($id);

        $cart = session();
        if ($cart === null) {
            $cart = [];
          session()->put('cart', $cart);
        }

        return redirect()->route('cart');
    }
}
