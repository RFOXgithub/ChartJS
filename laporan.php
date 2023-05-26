<!DOCTYPE html>
<html>
<head>
    <title>Data Comparison Charts</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="lineChart"></canvas>
    <canvas id="barChart" height="140"></canvas>
    <canvas id="pieChart" height="500" width="1000"></canvas>
    <canvas id="doughnutChart" height="500" width="1000"></canvas>

    <script>
        // Mengambil data dari database MySQL
        <?php
        include('koneksi.php');
        include('getallchart.php');
        ?>

        // Line Chart
        var lineChart = new Chart(document.getElementById('lineChart'), {
    type: 'line',
    data: {
        labels: <?php echo json_encode($countries); ?>,
        datasets: [
            {
                label: 'Total Cases',
                data: <?php echo json_encode($totalCases); ?>,
                borderColor: 'blue',
                fill: false
            },
            {
                label: 'Total Deaths',
                data: <?php echo json_encode($totalDeaths); ?>,
                borderColor: 'red',
                fill: false
            },
            {
                label: 'Total Recovered',
                data: <?php echo json_encode($totalRecovered); ?>,
                borderColor: 'green',
                fill: false
            },
            {
                label: 'Active Cases',
                data: <?php echo json_encode($activeCases); ?>,
                borderColor: 'orange',
                fill: false
            },
            {
                label: 'Total Tests',
                data: <?php echo json_encode($totalTests); ?>,
                borderColor: 'purple',
                fill: false
            }
        ]
    },
    options: {
        responsive: true,
        title: {
            display: true,
            text: 'Comparison of COVID-19 Statistics (Line Chart)'
        },
    }
});


        // Bar Chart
        var barChart = new Chart(document.getElementById('barChart'), {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($countries); ?>,
                datasets: [
                    {
                        label: 'Total Cases',
                        data: <?php echo json_encode($totalCases); ?>,
                        backgroundColor: 'blue'
                    },
                    {
                        label: 'Total Deaths',
                        data: <?php echo json_encode($totalDeaths); ?>,
                        backgroundColor: 'red'
                    },
                    {
                        label: 'Total Recovered',
                        data: <?php echo json_encode($totalRecovered); ?>,
                        backgroundColor: 'green'
                    },
                    {
                        label: 'Active Cases',
                        data: <?php echo json_encode($activeCases); ?>,
                        backgroundColor: 'orange'
                    },
                    {
                        label: 'Total Tests',
                        data: <?php echo json_encode($totalTests); ?>,
                        backgroundColor: 'purple'
                    }
                ]
            },
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: 'Comparison of COVID-19 Statistics (Bar Chart)'
                }
                
            }
        });

        // Pie Chart
        var pieChart = new Chart(document.getElementById('pieChart'), {
            type: 'pie',
            data: {
                labels: <?php echo json_encode($countries); ?>,
                datasets: [
                    {
                        data: <?php echo json_encode($totalCases); ?>,
                        backgroundColor: ['blue', 'red', 'green', 'orange', 'purple', 'yellow', 'brown', 'pink', 'gray', 'cyan']
                    }
                ]
            },
            options: {
                responsive: false,
                title: {
                    display: true,
                    text: 'Total Cases by Country (Pie Chart)'
                }
            }
        });

        // Doughnut Chart
        var doughnutChart = new Chart(document.getElementById('doughnutChart'), {
            type: 'doughnut',
            data: {
                labels: <?php echo json_encode($countries); ?>,
                datasets: [
                    {
                        data: <?php echo json_encode($totalCases); ?>,
                        backgroundColor: ['blue', 'red', 'green', 'orange', 'purple', 'yellow', 'brown', 'pink', 'gray', 'cyan']
                    }
                ]
            },
            options: {
                responsive: false,
                title: {
                    display: true,
                    text: 'Total Cases by Country (Doughnut Chart)'
                }
            }
        });
    </script>
</body>
</html>
