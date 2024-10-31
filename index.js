document.addEventListener("DOMContentLoaded", () => {
  const cartIcon = document.getElementById("cart-icon");
  const cartModal = document.getElementById("cart-modal");
  const closeBtn = document.querySelector(".close");
  const cartItems = document.getElementById("cart-items");
  const cartTotal = document.getElementById("cart-total");
  const productSearch = document.getElementById("product-search");
  const productCards = document.querySelectorAll(".product-card");
  let cart = [];

  // Show cart modal
  cartIcon.addEventListener("click", () => {
    cartModal.style.display = "block";
  });

  // Close cart modal
  closeBtn.addEventListener("click", () => {
    cartModal.style.display = "none";
  });

  // Close cart modal when clicking outside of it
  window.addEventListener("click", (event) => {
    if (event.target == cartModal) {
      cartModal.style.display = "none";
    }
  });

  // Add to cart functionality
  document.querySelectorAll(".add-to-cart").forEach((button) => {
    button.addEventListener("click", (event) => {
      const productCard = event.target.closest(".product-card");
      const productId = productCard.getAttribute("data-id");
      const productName = productCard.getAttribute("data-name");
      const productPrice = parseFloat(productCard.getAttribute("data-price"));

      const existingProduct = cart.find((item) => item.id === productId);
      if (existingProduct) {
        existingProduct.quantity += 1;
      } else {
        cart.push({
          id: productId,
          name: productName,
          price: productPrice,
          quantity: 1,
        });
      }

      updateCart();
    });
  });

  // Update cart display
  function updateCart() {
    cartItems.innerHTML = "";
    let total = 0;

    cart.forEach((item) => {
      const li = document.createElement("li");
      li.textContent = `${item.name} - $${item.price} x ${item.quantity}`;
      cartItems.appendChild(li);
      total += item.price * item.quantity;
    });

    cartTotal.textContent = total.toFixed(2);
    cartIcon.textContent = `Cart (${cart.length})`;
  }

  // Product search functionality
  productSearch.addEventListener("input", (event) => {
    const query = event.target.value.toLowerCase();
    productCards.forEach((card) => {
      const productName = card.getAttribute("data-name").toLowerCase();
      if (productName.includes(query)) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    });
  });
});
