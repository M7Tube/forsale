<div>
    <div class="container mt-3">
        <div class="col-12">
            <div class="d-flex justify-content-center mb-2">
                <canvas id="myChart1" style="width:100%;max-width:700px"></canvas>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <canvas id="myChart2" style="width:100%;max-width:700px"></canvas>
            </div>
        </div>
    </div>

    <script>
        var xValues = ["Italy", "France", "Spain", "USA", "<?php echo e(__('Cars')); ?>"];
        var yValues = [55, 49, 44, 24, <?php echo json_encode($cars); ?>];
        var barColors = ["red", "green", "blue", "orange", "brown"];
        new Chart("myChart1", {
            type: "doughnut",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "World Wide Wine Production"
                }
            }
        });
    </script>
    <script>
        var xValues = ["<?php echo e(__('Cars')); ?>", "<?php echo e(__('Real Estate')); ?>", "<?php echo e(__('Jobs')); ?>"];
        var yValues = [<?php echo json_encode($cars); ?>, <?php echo json_encode($realestate); ?>, <?php echo json_encode($jobs); ?>];
        var barColors = ["red", "green", "blue"];

        new Chart("myChart2", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: "<?php echo e(__('Ads Count')); ?>"
                },
                scales: {
                    yAxes: [{
                        display: true,
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</div>
<?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/livewire/dashboard/app-settings/statistics.blade.php ENDPATH**/ ?>