const ModifuButton = document.querySelectorAll('.modifyButton');
const NomInput = document.getElementById('product_nameModal');
const CatgInput = document.getElementById('ctgModal');
const SousCatgInput = document.getElementById('s_ctgModal');
const ImageInput = document.getElementById('imgModal');
const QteInput = document.getElementById('qteModal');
const PrixInput = document.getElementById('priceModal');
const DescInput = document.getElementById('descModal');
const HidId = document.getElementById('hidId');


ModifuButton.forEach(element => {
    
    element.addEventListener('click', function() {

        let id = this.getAttribute("data-id");
        console.log(id);

        $.ajax({
            method : "POST",
            url : "http://localhost/xampp/boutique/version1/traitment/getProductById.php",
            data : { "id" : id },  
            dataType: "JSON",  
        }) .done (function(data) {
            console.log(data);
            data.forEach(element => {
                //console.log(element);
                HidId.value = element['id'];
                NomInput.value = element['name'] + "d";
                CatgInput.value = element['catg'];
                SousCatgInput.value = element['sous_catg'];
                //ImageInput.value = element['4'];
                QteInput.value = element['qte'];
                PrixInput.value = element['prix'];
                DescInput.value = element['description'];
            });
        });

});
    

})
