@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <h1 class="fw-bold text-center">Our Snacks</h1>
    <p class="text-muted text-center">cari dan beli makanan favorit kalian disini.</p>
    <div class="row g-4">
        <!-- produk -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/basreng-Pedas.jpg') }}" class="card-img-top" alt="Snack 1">
                <div class="card-body">
                    <h5 class="card-title">Basreng</h5>
                    <p class="card-text">7.000</p>
                    <button class="btn btn-primary add-to-cart" data-id="12345" data-name="Basreng" data-price="7000">
                        Tambahkan ke Keranjang
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4">
    <h3 class="fw-bold">Keranjang Belanja</h3>
    <ul id="cart-items" class="list-group"></ul>
    <button id="checkout-btn" class="btn btn-success mt-3" disabled>Checkout</button>
</div>

<script>
  // Array untuk menyimpan data produk dalam keranjang
  const cart = [];

  // Tambahkan event listener untuk semua tombol "Tambahkan ke Keranjang"
  document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', function () {
      // Ambil data produk dari atribut tombol
      const productId = this.getAttribute('data-id');
      const productName = this.getAttribute('data-name');
      const productPrice = parseInt(this.getAttribute('data-price'));

      // Cek apakah produk sudah ada dalam keranjang
      const existingProduct = cart.find(item => item.id === productId);
      if (existingProduct) {
        existingProduct.quantity += 1; // Tambahkan jumlah jika sudah ada
      } else {
        // Tambahkan produk baru ke keranjang
        cart.push({
          id: productId,
          name: productName,
          price: productPrice,
          quantity: 1
        });
      }

      // Perbarui tampilan keranjang
      updateCartDisplay();
    });
  });

  // Fungsi untuk memperbarui tampilan keranjang
  function updateCartDisplay() {
    const cartItemsContainer = document.getElementById('cart-items');
    const checkoutBtn = document.getElementById('checkout-btn');
    cartItemsContainer.innerHTML = ''; // Kosongkan isi keranjang sebelumnya

    cart.forEach(item => {
      const listItem = document.createElement('li');
      listItem.className = 'list-group-item';
      listItem.textContent = `${item.name} - Rp${item.price.toLocaleString()} x ${item.quantity}`;
      cartItemsContainer.appendChild(listItem);
    });

    // Aktifkan tombol checkout jika ada produk di keranjang
    checkoutBtn.disabled = cart.length === 0;
  }

  // Event listener untuk tombol checkout
  document.getElementById('checkout-btn').addEventListener('click', function () {
    // Kirim data keranjang ke halaman checkout
    const checkoutUrl = '/checkout'; // Ganti dengan URL halaman checkout Anda
    const cartData = JSON.stringify(cart);

    // Redirect ke halaman checkout dengan data produk
    const form = document.createElement('form');
    form.method = 'POST';
    form.action = checkoutUrl;

    // Tambahkan CSRF token jika menggunakan Laravel
    const csrfInput = document.createElement('input');
    csrfInput.type = 'hidden';
    csrfInput.name = '_token';
    csrfInput.value = '{{ csrf_token() }}'; // Pastikan Anda menggunakan Laravel Blade
    form.appendChild(csrfInput);

    // Tambahkan data keranjang
    const cartInput = document.createElement('input');
    cartInput.type = 'hidden';
    cartInput.name = 'cart';
    cartInput.value = cartData;
    form.appendChild(cartInput);

    // Tambahkan form ke body dan submit
    document.body.appendChild(form);
    form.submit();
  });
</script>
@endsection
