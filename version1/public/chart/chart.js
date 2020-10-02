const BarButton = document.getElementById('bar');
const LineButton = document.getElementById('line');
const DonutButton = document.getElementById('donut');
const ValidationButton = document.getElementById('ValidationButton');

let typeChart = '';

a = 0


//console.log(typeChart);



var ctx = document.getElementById('DynamicsChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, a],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


ValidationButton.addEventListener('click', ()=> {
    console.log("click");
    console.log(myChart.chart.config);
    myChart.chart.config.type = 'bar';
    /*if (BarButton.checked) {
        console.log('good');
        
    }*/
});
/**
 * 
 * BarButton.addEventListener('click', ()=> {
    console.log('jai clicker le bar');
    typeChart = 'bar';
});  

LineButton.addEventListener('click', ()=> {
    console.log('jai clicker le line');
    typeChart = 'line';
});

DonutButton.addEventListener('click', ()=> {
    console.log('jai clicker le donut');
    typeChart = 'pie';
});

*/