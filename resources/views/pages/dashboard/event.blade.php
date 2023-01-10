@extends('pages.dashboard.main')
@section('title', 'Event')
@section('content')
<div class="row">
    @if (Session::get('status_user') != "V")
    <a href="{{url('/addevent')}}"
        class="text-lg-end text-body text-sm font-weight-bold mb-2 icon-move-right mt-auto p-4">Tambah Kegiatan <i
            class="fas fa-plus text-sm ms-1" aria-hidden="true"></i></a>
    @endif
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Tabel Kegiatan</h6>
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
                            @foreach ($events as $event)
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-sm">{{$event->event_name}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">{{$event->event_location}}</p>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-xs font-weight-bold">{{$event->start_date}}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-xs font-weight-bold">{{$event->end_date}}</span>
                                </td>
                                <td class="align-middle text-end">
                                    <span class="text-xs font-weight-bold">{{$event->resource_need}}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-xs font-weight-bold">{{count($event->eventresources)}}
                                        @if (Session::get('status_user') != "V")
                                            &nbsp;&nbsp;<a class="btn btn-outline-primary btn-xs mb-0 me-3" href="#"
                                                onclick="showVolunteer({{$event->eventresources}})">
                                                <i class="fas fa-info text-sm ms-1" aria-hidden="true"></i>
                                            </a>
                                        @endif
                                    </span>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <span
                                            class="me-2 text-xs font-weight-bold">{{number_format((count($event->eventresources)/$event->resource_need)*100, 0)}}%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-info" role="progressbar"
                                                    aria-valuenow="{{(count($event->eventresources)/$event->resource_need)*100}}"
                                                    aria-valuemin="0" aria-valuemax="100"
                                                    style="width: {{(count($event->eventresources)/$event->resource_need)*100}}%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-xs font-weight-bold">
                                        @if($event->event_status == 'S')
                                            Sedang Berlangsung
                                        @elseif($event->event_status == 'Y')
                                            Selesai
                                        @elseif($event->event_status == 'N')
                                            Dibatalkan
                                        @endif
                                    </span>
                                </td>
                                <td class="align-middle">
                                    <a class="btn btn-link text-dark px-3 mb-0" href="<?php echo url('/editevent').'/'.$event->event_id;?>">
                                        
                                        @if (Session::get('status_user') != "V")
                                        <i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>
                                        Edit
                                        @else
                                        Detail    
                                        @endif
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="volunteerList" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Relawan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table align-items-center justify-content-center mb-0" id="tableVolunteer">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Nama
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                No Handphone
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Tanggal Apply
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Status
                            </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    function showVolunteer(listVolunteer){
        $("#tableVolunteer tbody").empty();
        listVolunteer.forEach(function(item, index) {
            var temp = '<tr><td>' + (index+1) + '</td><td><span class="text-xs font-weight-bold">' + item.user_full_name + '</span>';
            temp += '</td><td><span class="text-xs font-weight-bold">' + item.user_email + '</span></td><td><span class="text-xs font-weight-bold">';
            temp += item.apply_date + '</span></td><td><span class="text-xs font-weight-bold">' + (item.er_status == 'A' ? 'Diterima' : item.er_status == 'D' ? 'Ditolak': item.er_status == 'C' ? 'Dibatalkan' : 'Menunggu Konfirmasi') + '</span></td><td class="align-middle">';

            if(item.er_status != 'C'){
                temp += '<a class="btn btn-link text-danger text-gradient px-3 mb-0" href="' + '{{url("/reject")}}/' + item.event_resource_id + '">Tolak</a>';
                temp += '<a class="btn btn-link text-dark px-3 mb-0" href="' + '{{url("/accept")}}/' + item.event_resource_id + '">Terima</a>';
            }
            
            temp += '</td></tr>';

            $("#tableVolunteer tbody").append(temp);
        });

        $('#volunteerList').modal('show');
    }
</script>
@endsection
