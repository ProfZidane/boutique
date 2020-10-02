const Cart = document.querySelectorAll('.putInCart');
const Livraison = document.getElementById('exampleRadios1');
const PointRelai = document.getElementBy('exampleRadios2');

Cart.forEach(element => {
    element.addEventListener('click', ()=> {
        alert('Ajouter au panier');
        var id = element.getAttribute('id');
        $.ajax({
            method : "POST",
            url : "http://localhost/xampp/boutique/version0/back/sales/cart/putCart.php",
            data : { "id" : id },  
        }) .done(function(obj) {
            console.log(obj);
            document.getElementById('count_cart').innerHTML = obj;
        })
        //$.post(
          //  "http://localhost/xampp/boutique/version0/back/putCart.php",
        //)
    });
});