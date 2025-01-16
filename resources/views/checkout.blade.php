<script>
  const cart = [];

  document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', function () {
      const productId = this.getAttribute('data-id');
      const productName = this.getAttribute('data-name');
      const productPrice = parseInt(this.getAttribute('data-price'));

      const existingProduct = cart.find(item => item.id === productId);
      if (existingProduct) {
        existingProduct.quantity += 1;
      } else {
        cart.push({ id: productId, name: productName, price: productPrice, quantity: 1 });
      }

      updateCartDisplay();
    });
  });

  function updateCartDisplay() {
    const cartItemsContainer = document.getElementById('cart-items');
    const checkoutBtn = document.getElementById('checkout-btn');
    const totalPriceContainer = document.getElementById('total-price');

    cartItemsContainer.innerHTML = '';

    let totalPrice = 0;
    cart.forEach(item => {
      const listItem = document.createElement('li');
      listItem.className = 'list-group-item d-flex justify-content-between align-items-center bg-light-brown';
      listItem.innerHTML = `${item.name} - Rp ${item.price.toLocaleString()} x ${item.quantity}
        <button class="btn btn-sm btn-danger remove-item" data-id="${item.id}">Hapus</button>`;
      cartItemsContainer.appendChild(listItem);

      totalPrice += item.price * item.quantity;
    });

    totalPriceContainer.textContent = totalPrice.toLocaleString();
    checkoutBtn.disabled = cart.length === 0;
  }

  document.getElementById('cart-items').addEventListener('click', function (event) {
    if (event.target && event.target.classList.contains('remove-item')) {
      const productId = event.target.getAttribute('data-id');
      const index = cart.findIndex(item => item.id === productId);
      if (index !== -1) {
        cart.splice(index, 1);
        updateCartDisplay();
      }
    }
  });

  document.getElementById('checkout-btn').addEventListener('click', function () {
    if (cart.length === 0) {
      alert('Keranjang belanja Anda kosong!');
      return;
    }

    let checkoutMessage = 'Detail Checkout:\n\n';
    let totalItems = 0;
    let totalPrice = 0;

    cart.forEach(item => {
      const subtotal = item.price * item.quantity;
      totalItems += item.quantity;
      totalPrice += subtotal;
      checkoutMessage += `- ${item.name}: ${item.quantity} pcs (Rp ${subtotal.toLocaleString()})\n`;
    });

    checkoutMessage += `\nTotal Produk: ${totalItems} pcs`;
    checkoutMessage += `\nTotal Harga: Rp ${totalPrice.toLocaleString()}`;

    alert(checkoutMessage);
  });
</script>
