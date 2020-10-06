const DetailButton = document.querySelectorAll('.AboutButton');

console.log(DetailButton);

DetailButton.forEach(element => {

    element.addEventListener('click', ()=>{
        let num = element.getAttribute('data-num');
        //console.log(element.getAttribute('data-num'));

        $.ajax({
            method: "POST",
            url: "http://localhost/xampp/boutique/version1/traitment/getDetailOrders.php",
            data: { numCmd : num },
            dataType: "JSON"
        }) .done(function(data) {
            $('#body').empty();
            console.log(data);
            console.log(typeof(data));
            ttc = 0;
            $('<h1>Commandes n° '+num+'</h1>').appendTo($('#body'));
            for (let i = 0; i < data.length; i++) {
                //$a = ;
                //$('<div class="col-md-12 form-group mb-3"><label for="exampleInputQt">Nom Produit</label><input class="form-control" id="product_nameModal" type="text" value='+data[i]['0'] +'  /></div><div class="col-md-6 form-group mb-3"><label for="exampleInputQt">Prix</label><input class="form-control" id="product_nameModal" type="text" value='+data[i]['4'] +'  /></div><div class="col-md-6 form-group mb-3"><label for="exampleInputQt">Quantité</label><input class="form-control" id="product_nameModal" type="text" value='+data[i]['5'] +'  /></div>').appendTo($('#body'));
                $("<div class='row'><div class='col-md-6'><p>Nom : "+data[i]['0']+"</p></div><div class='col-md-6'><p>Prix : "+data[i]['4']+" FCFA</p><p>Quantité : "+data[i]['5']+"</p></div></div>").appendTo($('#body'));
                //$('<p>Nom : '+data[i]["0"]+'</p><p>Prix : '+data[i]["4"]+'</p><br><br><p>Quantité : '+data[i]["5"]+'</p>').appendTo($('#body'));
                ttc += Number(data[i]['4']) * Number(data[i]['5']);                

            }        
            $("<div class='col-md-12'><h2>Total : "+ttc+" FCFA</h2></div>").appendTo($('#body'));
            //$('<p>Total : '+ ttc +'</p>').appendTo($('#body'));

        })
    })

})