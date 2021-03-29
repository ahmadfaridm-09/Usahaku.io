<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Usahaku.io - Dashboard</title>

</head>
<body>
    <div class="container-fluid p-0">
        <div class="d-flex flex-row">
            <div class="sidebar-wrapper border-end">
                <div class="sidebar">
                    <div class="sidebar-header border-bottom">
                        <div class="sidebar-logo-wrapper">
                            <span class="sidebar-logo-mini hide text-secondary">
                                UIO
                            </span>
                            <span class="sidebar-logo text-secondary">
                                Usahaku.io
                            </span>
                            <button class="btn btn-primary unload">S</button>
                        </div>
                    </div>
                    <div class="sidebar-menu-wrapper">
                        <div class="sidebar-mini border-end">
                            <div class="sidebar-mini-upper">
                                <ul class="sidebar-item">
                                    <li><img src="/assets/icon/bell.svg"></li>
                                    <li>Dashboard</li>
                                </ul>
                                <ul class="sidebar-item">
                                    <li><img src="/assets/icon/bell.svg"></li>
                                    <li>Laporan</li>
                                </ul>
                                <ul class="sidebar-item">
                                    <li><img src="/assets/icon/bell.svg"></li>
                                    <li>Inventori</li>
                                </ul>
                                <ul class="sidebar-item">
                                    <li><img src="/assets/icon/bell.svg"></li>
                                    <li>Pelanggan</li>
                                </ul>
                                <ul class="sidebar-item">
                                    <li><img src="/assets/icon/bell.svg"></li>
                                    <li>Produk</li>
                                </ul>
                                <ul class="sidebar-item">
                                    <li><img src="/assets/icon/bell.svg"></li>
                                    <li>Karyawan</li>
                                </ul>
                            </div>
                            <div class="sidebar-mini-lower">
                                <ul class="sidebar-item">
                                    <li><img src="/assets/icon/bell.svg"></li>
                                </ul>
                                <ul class="sidebar-item">
                                    <li>
                                        <div class="profile-picture bg-primary">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-right">
                            <ul>
                                <li><span>Ringkasan Penjualan</span></li>
                                <li><span>Penjualan Outlet</span></li>
                                <li><span>Penjualan Kategori</span></li>
                                <li><span>Penjualan Produk</span></li>
                                <li><span>Penjualan Varian</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-wrapper flex-fill">
                <div class="container-fluid p-0">
                    <div class="d-flex flex-row vh-100">
                        <div class="d-flex flex column flex-fill">
                            <div class="container-fluid h-50 position-relative">
                                <canvas id="myChart" width="200" height="200"></canvas>
                            </div>
                        </div>
                        <div class="side-profile d-flex flex-column border-start">
                            <div class="d-flex flex-column p-4 border-bottom">
                                <div class="d-flex justify-content-center px-4 pb-4">
                                    <div class="profile-picture-big bg-primary">

                                    </div>
                                </div>
                                <span class="text-center profile-name text-primary">Uncle Rich</span>
                                <span class="text-center">Owner</span>
                                <div class="d-flex flex-row justify-content-center">
                                    <div class="profile-option p-2 me-2"><img src="/assets/icon/bell.svg"></div>
                                    <div class="profile-option p-2"><img src="/assets/icon/bell.svg"></div>
                                    <div class="profile-option p-2 ms-2"><img src="/assets/icon/bell.svg"></div>
                                </div>
                            </div>
                            <div class="d-flex flex-row p-2">
                                <h6>Kilas Balik</h6>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/Chart.min.js"></script>
    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
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
    </script>
    <script>
        function hide_sidebar(){
            $(".sidebar-right").addClass("hide");
            $(".sidebar-wrapper").addClass("small");
            $(".sidebar-logo-mini").removeClass("hide");
            $(".sidebar-logo").removeClass("loaded");
            $(".sidebar-logo").addClass("unloaded");
            $(".unload").addClass("hide");
            $(".sidebar-logo-mini").addClass("unhide");
            $(".sidebar-mini.border-end").removeClass("border-end");
        }

        $(function(){
            $(".sidebar-logo").addClass("loaded");
            $(".unload").on("click", function(){
                hide_sidebar();
            });
        });
    </script>
</body>
</html>