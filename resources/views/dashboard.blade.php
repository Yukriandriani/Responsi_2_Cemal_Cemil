<div class="card">
    <img src="{{ asset('path-to-product-image') }}" alt="Product Image">
    <div class="card-body">
        <h5 class="card-title">Tahu Walik</h5>
        <p>Renyah, Gurih, Istimewa.</p>
        <p>Rp 10.000</p>
        <form action="{{ route('checkout') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="1"> <!-- ID produk -->
            <button type="submit" class="btn btn-primary">Order Now</button>
        </form>
    </div>
</div>
