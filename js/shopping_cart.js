function increment_cart() {
    var products_in_cart = document.getElementById('cart');
    var number = products_in_cart.innerHTML;
    number++;
    products_in_cart.innerHTML = number;
}

function wishlist() {
    var wishlist = document.getElementById('wishlist');
    wishlist.innerHTML = '<img src=\'images/heart.jpg\'>';
}