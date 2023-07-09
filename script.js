var cart = [];
function addToCart(productName, price) {
    var product = {
        name: productName,
        price: price
    };
    
    cart.push(product);
    updateCart();
}
function updateCart() {
    var cartItemsElement = document.getElementById('cart-items');
    var cartTotalElement = document.getElementById('cart-total');
    
    cartItemsElement.innerHTML = '';
    
    var total = 0;
    
    for (var i = 0; i < cart.length; i++) {
        var item = cart[i];
        
        var listItem = document.createElement('li');
        listItem.innerText = item.name + ' - Rp. ' + item.price;
        cartItemsElement.appendChild(listItem);
        
        total += item.price;
    }
    
    cartTotalElement.innerText = 'Total: Rp. ' + total;
}
