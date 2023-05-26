<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addProductToCart($product)
    {
        $carts = json_decode($_COOKIE['carts'] ?? '[]', true);
        $carts[] = $product;
        setcookie('carts', json_encode($carts), time() + (86400 * 30), "/"); // Set cookie for 30 days
    }

    public function addCart(Request $request, $id)
    {
        $validate = $request->validate([
            'quantity' => 'required|numeric'
        ]);

        $idx = -1;
        $count = 0;
        $carts = $this->getCarts();
        foreach ($carts as $cart) {
            if ($cart->productid == $id) {
                $idx = $count;
            }
            $count++;
        }
        if ($idx == -1) {
            $cart = new Cart();
            $cart->productid = $id;
            $cart->quantity = $validate['quantity'];
            $this->addProductToCart($cart);
        } else {
            $carts[$idx]->quantity = $carts[$idx]->quantity + $validate['quantity'];
            setcookie('carts', json_encode($carts), time() + (86400 * 30), "/");
        }

        return redirect('carts');
    }

    public function getCarts()
    {
        $data = json_decode($_COOKIE['carts'] ?? '[]', true);
        $carts = [];
        foreach ($data as $cartArray) {
            $cartObject = new Cart();
            $cartObject->productid = $cartArray['productid'];
            $cartObject->quantity = $cartArray['quantity'];
            $carts[] = $cartObject;
        }

        return $carts;
    }

    public function openCart()
    {
        $carts = $this->getCarts();
        $total_price = 0;
        foreach ($carts as $cart) {
            $total_price += $cart->product->productprice * $cart->quantity;
        }
        return view('pages/cart/cartlist', ["carts" => $carts, "total_price" => $total_price]);
    }

    public function deleteCartProduct($id)
    {
        $carts = $this->getCarts();
        $count = 0;
        foreach ($carts as $cart) {
            if ($cart->productid == $id) {
                unset($carts[$count]);
                $carts = array_values($carts);
            }
            $count++;
        }
        setcookie('carts', json_encode($carts), time() + (86400 * 30), "/");
        return redirect('carts');
    }

    public function checkout()
    {
        $user = Auth::user()->UserID;
        $products = $this->getCarts();
        $header = TransactionHeader::create([
            'UserID' => $user,
            'TransactionDate' => date('Y-m-d H:i:s', strtotime('now'))
        ]);

        foreach ($products as $product) {
            TransactionDetail::create([
                'TransactionID' => $header->TransactionID,
                'ProductID' => $product->productid,
                'Quantity' => $product->quantity
            ]);
        }

        $carts = [];
        setcookie('carts', json_encode($carts), time() + (86400 * 30), "/");
        return redirect('carts');
    }
}
