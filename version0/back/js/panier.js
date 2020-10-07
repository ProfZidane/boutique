const Cart = document.querySelectorAll('.putInCart');
const Livraison = document.getElementById('exampleRadios1');
const PointRelai = document.getElementById('exampleRadios2');

const OptionRecv = document.getElementById('Option');

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
 /*
Livraison.addEventListener('click', ()=> {
    document.getElementById('liv').style.display = "block";
    document.getElementById('pr').style.display = "none";
});

PointRelai.addEventListener('click', ()=> {
    //document.getElementById('pr').style.display = "block";
    document.getElementById('liv').style.display = "none";
})
*/
OptionRecv.addEventListener('change', ()=> {
    console.log(OptionRecv.value);
    if (OptionRecv.value == "Livraison") {
        document.getElementById('liv').style.display = "block";
    } else {
        document.getElementById('liv').style.display = "none";
    }
})