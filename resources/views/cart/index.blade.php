@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Cart</h1>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($cartItems->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $item)
                <tr>
                    <td>{{ $item->product->name }}</td>
                    <td>${{ $item->product->price }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>${{ $item->quantity * $item->product->price }}</td>
                    <td>
                        <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">Total</td>
                    <td>${{ $total }}</td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    @else
        <p>Your cart is empty</p>
    @endif
</div>
@endsection