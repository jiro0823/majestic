

@foreach ($featuredProducts as $product)
<div class="product-card">
    <img src="{{ $product->image_url }}" alt="{{ $product->name }}">
    <h3>{{ $product->name }}</h3>
    <p>Price: ${{ $product->price }}</p>

    <form action="{{ route('cart.store', $product->id) }}" method="POST">
        @csrf

        <input type="hidden" name="product_id" value="{{ $porduct->id}}">
        <button type="submit" class="add-to-cart-btn">Add to Cart</button>
    </form>
</div>
@endforeach