@extends('pages.dashboard.main')
@section('title', 'Dashboard')
@section('content')
<div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Kegiatan</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{$eventsCount}}
                                <span class="text-warning text-sm font-weight-bolder">Kegiatan</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Kegiatan Berjalan</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{$eventsOngoingCount}}
                                <span class="text-info text-sm font-weight-bolder">Kegiatan</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Kegiatan Selesai</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{$eventsDoneCount}}
                                <span class="text-success text-sm font-weight-bolder">Kegiatan</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Kegiatan Dibatalkan</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{$eventsCancelCount}}
                                <span class="text-danger text-sm font-weight-bolder">Kegiatan</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div id="carouselExampleControlsNoTouching" class="carousel slide mb-4" data-bs-touch="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card h-400px">
                    <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100"
                        style="background-image: url('images/slider-dashboard1.jpg');">
                        <span class="mask bg-secondary"></span>
                        <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                            <h5 class="text-white font-weight-bolder mb-4 pt-2">Bulan Relawan Nasional</h5>
                            <p class="text-white m-5">Bulan Desember adalah bulan penting bagi relawan secara global. Pada tanggal 5 Desember, dunia merayakan Hari Kerelawanan Sedunia. Sedangkan tanggal 26 Desember adalah peringatan Tsunami Aceh, yang merupakan hari bersejarah bagi relawan tanggap bencana di Indonesia.
                                Untuk itu, MyVolunteer menginisiasi Bulan Relawan Nasional (BRN) sejak 2022 untuk merayakan semangat kerelawanan di Indonesia.
                                Tahun 2023, meskipun kita masih berada di situasi pandemi dan peralihan. Namun, kerelawanan masih sangat relevan dan penting di masa seperti ini. Untuk itu, Indorelawan membuat beberapa aktivitas dalam rangka merayakan Bulan Relawan Nasional secara online dan offline.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card h-400px">
                    <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100"
                        style="background-image: url('images/slider-dashboard2.jpg');">
                        <span class="mask bg-secondary"></span>
                        <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                            <h5 class="text-white font-weight-bolder mb-4 pt-2">Sahabat Hutan Indonesia</h5>
                            <p class="text-white m-5">Hutan Itu Indonesia adalah gerakan terbuka yang percaya akan kekuatan pesan-pesan positif untuk menumbuhkan rasa cinta kepada hutan Indonesia yang sangat berpengaruh pada kehidupan kita.
                                Hutan Itu Indonesia memiliki visi untuk menjadikan hutan sebagai identitas utama bangsa Indonesia yang hidup harmonis dengan hutan.
                                Kami percaya semua orang bisa berkontribusi untuk menjaga hutan, dan dengan kolaborasi, kita bisa mendorong adanya perlindungan hutan yang lebih baik untuk kita dan masa depan Indonesia..</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card h-400px">
                    <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100"
                        style="background-image: url('images/slider-dashboard3.jpg');">
                        <span class="mask bg-gradient-secondary"></span>
                        <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                            <h5 class="text-white font-weight-bolder mb-4 pt-2">Pawai Bebas Plastik</h5>
                            <p class="text-white m-5">Pawai bebas Plastik dalam rangka memperingati #PlasticFreeJuly, kembali menghadirkan pawai di tahun 2022 setelah dilaksanakan di tahun 2019-2021. Pawai Bebas Plastik tahun ini kembali menyelenggarakan kampanye secara luring dan menjadikan pawai (longmarch) sebagai puncak pelaksanaan rangkaian kegiatan selama bulan Juli.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="col-lg-7 mb-lg-0 mb-4">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($arrayOfEvents as $event)
                @foreach ($event as $i)
                    @if ($i==$event[0])
                <div class="carousel-item active">
                    @else
                <div class="carousel-item">
                    @endif
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column h-100">
                                        <p class="mb-1 pt-2 text-bold text-danger"><i class="fas fa-fire"></i> Top Event <i class="fas fa-fire"></i></p>
                                        <h5 class="font-weight-bolder">{{$i['event_name']}}</h5>
                                        <p class="mb-1"><i class="fas fa-thumbtack"></i> {{$i['event_location']}}.</p>
                                        <p class="mb-1"><i class="fas fa-award"></i> {{$i['reward']}}</p>
                                        <p class="mb-2"><i class="fas fa-users"></i> {{count($i['eventresources'])}} / {{$i->resource_need}}</p>
                                        <div class="justify-content-center">
                                            <span
                                                class="me-2 text-xs font-weight-bold">{{(count($i->eventresources)/$i->resource_need)*100}}%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-danger" role="progressbar"
                                                        aria-valuenow="{{(count($i->eventresources)/$i->resource_need)*100}}"
                                                        aria-valuemin="0" aria-valuemax="100"
                                                        style="width: {{(count($i->eventresources)/$i->resource_need)*100}}%;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto"
                                            href="/">
                                            Read More
                                            <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                                    <div class="bg-gradient-primary border-radius-lg h-100">
                                        <img src="{{url('/images')}}/shapes/waves-white.svg"
                                            class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                                        <div
                                            class="position-relative d-flex align-items-center justify-content-center h-100">
                                            <img class="w-100 position-relative z-index-2 pt-4"
                                                src="{{url('/images')}}/illustrations/rocket-white.png" alt="rocket">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    
    <div class="col-lg-5">
        <div class="card h-100 p-3">
            <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100"
                style="background-image: url('images/bg-gotongroyong.jpg');">
                <span class="mask bg-secondary"></span>
                <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                    <h5 class="text-white font-weight-bolder mb-4 pt-2">Bersama Untuk Negeri</h5>
                    <p class="text-white">"Sebaik-baiknya manusia adalah
                        yang paling <b>bermanfaat</b> bagi orang lain"</p>
                    <p class="text-white text-lg font-weight-bold mb-0 mt-5" href="javascript:;">
                        Ayo gotong royong bersama
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-12 mt-3">
    <div class="card mb-4">
        <div class="card-header pb-0">
            <h6>Daftar Kegiatan</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Nama Kegiatan
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Lokasi Kegiatan
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Waktu Mulai
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Waktu Selesai
                            </th>
                            <th
                                class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                Target Relawan
                            </th>
                            <th
                                class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                Target Tercapai
                            </th>
                            <th
                                class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                Completion
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Status
                            </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allEvents as $allEvent)
                        <tr>
                            <td>
                                <div class="d-flex px-2">
                                    <div class="my-auto">
                                        <h6 class="mb-0 text-sm">{{$allEvent->event_name}}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm font-weight-bold mb-0">{{$allEvent->event_location}}</p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-xs font-weight-bold">{{$allEvent->start_date}}</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-xs font-weight-bold">{{$allEvent->end_date}}</span>
                            </td>
                            <td class="align-middle text-end">
                                <span class="text-xs font-weight-bold">{{$allEvent->resource_need}}</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-xs font-weight-bold">{{count($allEvent->eventresources)}}
                                </span>
                            </td>
                            <td class="align-middle text-center">
                                <div class="d-flex align-items-center justify-content-center">
                                    <span
                                        class="me-2 text-xs font-weight-bold">{{(count($allEvent->eventresources)/$allEvent->resource_need)*100}}%</span>
                                    <div>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-info" role="progressbar"
                                                aria-valuenow="{{(count($allEvent->eventresources)/$allEvent->resource_need)*100}}"
                                                aria-valuemin="0" aria-valuemax="100"
                                                style="width: {{(count($allEvent->eventresources)/$allEvent->resource_need)*100}}%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="text-xs font-weight-bold">
                                    @if($allEvent->event_status == 'S')
                                        Sedang Berlangsung
                                    @elseif($allEvent->event_status == 'Y')
                                        Selesai
                                    @elseif($allEvent->event_status == 'N')
                                        Dibatalkan
                                    @endif
                                </span>
                            </td>
                            <td class="align-middle">
                                <form action="<?php echo url('/applyevent').'/'.$allEvent->event_id;?>" method="POST">
                                    @csrf
                                    <button type="submit" name="event_id" value="{{$allEvent->event_id}}"  class="btn btn-link text-dark px-3 mb-0">
                                    @if (Session::get('status_user') == "V")
                                    Apply
                                    @endif 
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('anotherjs')
<script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Sales",
                tension: 0.4,
                borderWidth: 0,
                borderRadius: 4,
                borderSkipped: false,
                backgroundColor: "#fff",
                data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
                maxBarThickness: 6
            }, ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        suggestedMin: 0,
                        suggestedMax: 500,
                        beginAtZero: true,
                        padding: 15,
                        font: {
                            size: 14,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                        color: "#fff"
                    },
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false
                    },
                    ticks: {
                        display: false
                    },
                },
            },
        },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

    var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
    gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

    new Chart(ctx2, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#129644",
                    borderWidth: 3,
                    backgroundColor: gradientStroke1,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                },
                {
                    label: "Websites",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#ffc045",
                    borderWidth: 3,
                    backgroundColor: gradientStroke2,
                    fill: true,
                    data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                    maxBarThickness: 6
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#b2b9bf',
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#b2b9bf',
                        padding: 20,
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
            },
        },
    });

</script>
@endsection
