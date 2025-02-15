@extends('layoutsadmin.app');
@section('content')

        <div class="container">
          <div class="page-inner">
            <h3 class="fw-bold mb-3">Dashboard</h3>
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >

            </div>
            <div class="row">
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-primary bubble-shadow-small"
                        >
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                            <p class="card-category">Data Petugas</p>
                            <h4 class="card-title">{{$totaladmin}}</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-info bubble-shadow-small"
                        >
                          <i class="fas fa-user-check"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                            <p class="card-category">Jumlah Laporan</p>
                            <h4 class="card-title">{{ $totalPengaduan }}</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-success bubble-shadow-small"
                        >
                          <i class="fas fa-luggage-cart"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                            <p class="card-category">Jumlah diproses</p>
                            <h4 class="card-title">.</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-secondary bubble-shadow-small"
                        >
                          <i class="far fa-check-circle"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                            <p class="card-category">Laporan Selesai</p>
                            <h4 class="card-title">{{$tanggapanSelesai}}</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-round">
                    <div class="card-header">
                        <div class="card-head-row">
                        <div class="card-title">Keluhan Pelapor</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-container" style="min-height: 375px">
                        <canvas id="statisticsChart"></canvas>
                        </div>
                    </div>
                    </div>
                </div>

                <!-- Statistik Tanggapan -->
                <div class="col-md-4">
                    <div class="card card-primary card-round">
                    <div class="card-header">
                        <div class="card-head-row">
                        <div class="card-title">Jumlah Laporan</div>
                        <div class="card-tools">
                            <div class="dropdown">
                            <button class="btn btn-sm btn-label-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Export
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="card-category">March 25 - April 02</div>
                    </div>
                    <div class="card-body pb-0">
                        <div class="mb-4 mt-2">
                        <h1>{{ $tanggapanSelesai }}</h1>
                        </div>
                        <div class="pull-in">
                        <canvas id="dailySalesChart"></canvas>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                document.addEventListener("DOMContentLoaded", function () {
                    const ctx = document.getElementById('statisticsChart').getContext('2d');

                    // Data dari Controller Laravel
                    const labels = @json($labels);
                    const data = @json($data);

                    new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                        label: 'Jumlah Pengaduan per Tanggal',
                        data: data,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderWidth: 2,
                        fill: true,
                        tension: 0.4
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                        legend: {
                            display: true
                        }
                        },
                        scales: {
                        x: {
                            title: {
                            display: true,
                            text: 'Tanggal Pengaduan'
                            }
                        },
                        y: {
                            title: {
                            display: true,
                            text: 'Jumlah Pengaduan'
                            },
                            beginAtZero: true
                        }
                        }
                    }
                    });
                });
                </script>
            <div class="row">
              <div class="col-md-12">
                <div class="card card-round">
                  <div class="card-header">
                    <div class="card-head-row card-tools-still-right">
                      <h4 class="card-title">Users Geolocation</h4>
                      <div class="card-tools">
                        <button
                          class="btn btn-icon btn-link btn-primary btn-xs"
                        >
                          <span class="fa fa-angle-down"></span>
                        </button>
                        <button
                          class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"
                        >
                          <span class="fa fa-sync-alt"></span>
                        </button>
                        <button
                          class="btn btn-icon btn-link btn-primary btn-xs"
                        >
                          <span class="fa fa-times"></span>
                        </button>
                      </div>
                    </div>
                    <p class="card-category">
                      Map of the distribution of users around the world
                    </p>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>



      <!-- Custom template | don't include it in your project! -->
@endsection
