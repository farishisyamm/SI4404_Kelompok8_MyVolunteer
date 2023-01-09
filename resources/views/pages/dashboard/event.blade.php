@extends('pages.dashboard.main')
@section('title', 'Event')
@section('content')
<div class="row">
    <a href="{{url('/addevent')}}"
        class="text-lg-end text-body text-sm font-weight-bold mb-2 icon-move-right mt-auto p-4">Tambah Kegiatan <i
            class="fas fa-plus text-sm ms-1" aria-hidden="true"></i></a>
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
                                        &nbsp;&nbsp;<a class="btn btn-outline-primary btn-xs mb-0 me-3" href="#"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fas fa-info text-sm ms-1" aria-hidden="true"></i>
                                        </a>
                                    </span>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <span
                                            class="me-2 text-xs font-weight-bold">{{(count($event->eventresources)/$event->resource_need)*100}}%</span>
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
                                    <span class="text-xs font-weight-bold">working</span>
                                </td>
                                <td class="align-middle">
                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i
                                            class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete</a>
                                    <a class="btn btn-link text-dark px-3 mb-0"
                                        href="<?php echo url('/editevent/1');?>"><i
                                            class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Relawan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table align-items-center justify-content-center mb-0">
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
                                Tanggal Apply</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <span class="text-xs font-weight-bold">Dea Rahman</span>
                            </td>
                            <td>
                                <span class="text-xs font-weight-bold">0812213123123</span>
                            </td>
                            <td>
                                <span class="text-xs font-weight-bold">Jan 11, 2023</span>
                            </td>
                            <td class="align-middle">
                                <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                    href="javascript:;">Tolak</a>
                                <a class="btn btn-link text-dark px-3 mb-0" href="">Terima</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection
