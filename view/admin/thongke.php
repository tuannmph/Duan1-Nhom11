<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
<<<<<<< HEAD
    <style>
    .card-bodyy {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 500px;

    }
    </style>
=======
>>>>>>> c05b7d31d4768536ed2f2998e34a9853991223a9
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var jsonData = <?php echo json_encode($data); ?>;

        var data = google.visualization.arrayToDataTable([
            ['Loại sản phẩm', 'Số lượng'],
<<<<<<< HEAD
            <?php
                foreach ($data as $key) {
                    echo "['" . $key['cate_name'] . "' , " . $key['number_cate'] . "],";
                }
                ?>
        ]);

        var options = {
            // title: 'Biểu đồ số lượng sản phẩm theo danh mục',
=======

            <?php
            foreach ($data as $key) {
                echo "['" . $key['cate_name'] . "' , " . $key['number_cate'] . "],";
            }
            ?>
        ]);

        var options = {
            title: 'Biểu đồ số lượng sản phẩm theo danh mục',
>>>>>>> c05b7d31d4768536ed2f2998e34a9853991223a9
            is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
    }
    </script>
</head>

<body>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Bảng điều khiển</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Bảng điều khiển</li>
            </ol>

            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Thẻ chính</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">Xem chi tiết</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Thẻ cảnh báo</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
<<<<<<< HEAD

=======
>>>>>>> c05b7d31d4768536ed2f2998e34a9853991223a9
                            <a class="small text-white stretched-link" href="#">Xem chi tiết</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Thẻ thành công</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">Xem chi tiết</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Thẻ nguy hiểm</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">Xem chi tiết</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
<<<<<<< HEAD
                <div class="col-xl-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                            Biểu đồ số lượng sản phẩm theo danh mục
                        </div>
                        <div class="card-bodyy">
                            <div id="piechart_3d" style="width: 100%; height: 100%;"></div>
                        </div>
=======
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                            Biểu đồ diện tích
                        </div>
                        <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-bar me-1"></i>
                            Biểu đồ cột
                        </div>
                        <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
>>>>>>> c05b7d31d4768536ed2f2998e34a9853991223a9
                    </div>
                </div>
            </div>

        </div>
<<<<<<< HEAD
=======

        <div id="piechart_3d" style="width: 900px; height: 500px; margin: auto;"></div>

>>>>>>> c05b7d31d4768536ed2f2998e34a9853991223a9
    </main>
</body>

</html>