<template>
    <canvas></canvas>
</template>

<script>
    import Chart from 'chart.js';

    export default {
        props: ['labels', 'values'],
        mounted () {
            var data = {
                labels: this.labels,
                datasets: [
                    {
                        label: '1',
                        data: this.values,
                        backgroundColor: [
                            'rgba(54, 162, 235, 1)',
                        ],
                    }
                ]
            };

            new Chart(this.$el.getContext('2d'), {
                type: 'line',
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
        }
    }
</script>

