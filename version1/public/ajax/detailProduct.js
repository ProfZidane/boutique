const DetailButton = document.querySelectorAll('.AboutButton');



DetailButton.forEach(element => {

    element.addEventListener('click', () => {
        let num = this.getAttribute("data-num");
        document.getElementById('mot').innerHTML = num;
    })
})