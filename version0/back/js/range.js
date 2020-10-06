var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value + ' FCFA'; 

slider.oninput = function() {
  output.innerHTML = this.value + ' FCFA';
}