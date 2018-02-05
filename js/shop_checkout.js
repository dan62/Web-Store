// JavaScript Document

function update_price() {
var price = document.getElementById('price').value;
var amount = document.getElementById('quantity').value;
var subtotal = document.getElementById('subtotal');
var total = "";

total = price * amount;
subtotal.innerHTML = total;

}