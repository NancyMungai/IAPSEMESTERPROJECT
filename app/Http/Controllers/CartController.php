<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'id' => 'required|numeric',
            'product_photo' => 'required', // Add validation for product photo if needed
            'product_price' => 'required|numeric', // Add validation for product price if needed
        ]);

        $productId = $request->input('id');
        $productName = $request->input('product_name');
        $productPhoto = $request->input('product_photo'); // Corrected the input name
        $productPrice = $request->input('product_price');
        $userId = auth()->id(); // Assuming you have user authentication

        // Check if the item is already in the cart
        $existingCartItem = Cart::where('user_id', $userId)
            ->where('id', $productId) // Corrected the column name
            ->first();

        if ($existingCartItem) {
            // If the item is already in the cart, you might want to update quantity or do nothing
            return redirect()->route('cart')->with('info', 'Product is already in the cart.');
        }

        // If the item is not in the cart, add it
        Cart::create([
            'user_id' => $userId, // Corrected the column name
            'product_id' => $productId, // Corrected the column name
            'product_name' => $productName,
            'photo' => $productPhoto,
            'product_price' => $productPrice,
            // Add other fields as needed
        ]);

        return redirect()->route('cart')->with('success', 'Product added to cart successfully.');
    }

    public function viewCart()
    {
        // Your logic to retrieve and display the cart items
        $cartItems = Cart::all(); // Replace this with your actual logic to fetch cart items

        return view('cart', compact('cartItems'));
    }

    public function removeFromCart(Request $request)
    {
        $productId = $request->input('product_id'); // Corrected the input name
        $userId = auth()->id(); // Assuming you have user authentication

        // Remove cart record
        Cart::where('user_id', $userId)->where('product_id', $productId)->delete();

        return redirect()->route('cart')->with('success', 'Product removed from cart successfully.');
    }
}
