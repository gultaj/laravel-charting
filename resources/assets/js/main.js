import Chart from 'chart.js';

var data = {
	labels: ['January', 'February', 'March'],
	datasets: [
		{
			label: '1',
			data: [30, 12, 50],
			backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
            ],
		},
		{
			data: [20, 32, 40],
			backgroundColor: [
                'rgba(255, 132, 132, 1)',
                'rgba(256, 162, 235, 1)',
                'rgba(255, 206, 186, 1)',
            ],
		}
	]
};

var context = document.querySelector('#graph').getContext('2d');

new Chart(context, {
	type: 'bar',
	data: data,
	options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});