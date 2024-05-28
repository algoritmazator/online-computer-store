// Открытие корзины
function openCartPopup() {
  document.getElementById("cartPopup").style.display = "block";
}

// Закрытие корзины
function closeCartPopup() {
  document.getElementById("cartPopup").style.display = "none";
}

// Добавление товара в корзину
function addToCart(productId) {
  // Ваш код для добавления товара в корзину
  var cartItems = document.getElementById("cartItems");
  var newItem = document.createElement("div");
  newItem.innerHTML = "Товар #" + productId; // Пример текста товара
  cartItems.appendChild(newItem);
}

// Просмотр товаров в корзине
function viewCart() {
  // Ваш код для отображения товаров в корзине
  openCartPopup();
}

// Удаление товара из корзины
function removeFromCart(productId) {
  // Ваш код для удаления товара из корзины
  var cartItems = document.getElementById("cartItems");
  var itemToRemove = document.getElementById("item_" + productId);
  cartItems.removeChild(itemToRemove);
}

// Оформление заказа
function checkout() {
  // Ваш код для оформления заказа
  alert("Ваш заказ оформлен!");
  closeCartPopup();
}