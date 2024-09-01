import { Chart, registerables } from 'chart.js';
Chart.register(...registerables);

document.addEventListener('DOMContentLoaded', function () {
    const ctx = document.getElementById('myChart').getContext('2d');
    const labels = JSON.parse(document.getElementById('chart-labels').textContent);
    const data = JSON.parse(document.getElementById('chart-data').textContent);
    console.log(labels);
    new Chart(ctx, {
        type: 'pie', // グラフのタイプ（例: 'pie', 'bar', 'line' など）
        data: {
            labels: labels,
            datasets: [{
                label: 'アンケート結果',
                data: data,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
    });
});
