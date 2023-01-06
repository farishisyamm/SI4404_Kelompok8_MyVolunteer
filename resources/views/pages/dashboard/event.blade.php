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
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Budget</th>
                                <th
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                    Target Relawan</th>
                                <th
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                    Target Tercapai</th>
                                <th
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                    Completion</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div>
                                            <img src="{{url('/images')}}/small-logos/logo-spotify.svg"
                                                class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-sm">Spotify</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">$2,500</p>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-xs font-weight-bold">10000</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-xs font-weight-bold">600
                                        <a class="btn btn-outline-primary btn-sm mb-0 me-3" href="#"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fas fa-info text-sm ms-1" aria-hidden="true"></i>
                                        </a>
                                    </span>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <span class="me-2 text-xs font-weight-bold">60%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-info" role="progressbar"
                                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 60%;"></div>
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
                                    <a class="btn btn-link text-dark px-3 mb-0" href="<?php echo url('/editevent/1');?>"><i
                                            class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div>
                                            <img src="{{url('/images')}}/small-logos/logo-invision.svg"
                                                class="avatar avatar-sm rounded-circle me-2" alt="invision">
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-sm">Invision</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">$5,000</p>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-xs font-weight-bold">10000</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-xs font-weight-bold">600
                                        <a class="btn btn-outline-primary btn-sm mb-0 me-3" href="#"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fas fa-info text-sm ms-1" aria-hidden="true"></i>
                                        </a>
                                    </span>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <span class="me-2 text-xs font-weight-bold">100%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-success" role="progressbar"
                                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 100%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-xs font-weight-bold">done</span>
                                </td>
                                <td class="align-middle">
                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i
                                            class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete</a>
                                    <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                            class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div>
                                            <img src="{{url('/images')}}/small-logos/logo-jira.svg"
                                                class="avatar avatar-sm rounded-circle me-2" alt="jira">
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-sm">Jira</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">$3,400</p>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-xs font-weight-bold">10000</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-xs font-weight-bold">600
                                        <a class="btn btn-outline-primary btn-sm mb-0 me-3" href="#"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fas fa-info text-sm ms-1" aria-hidden="true"></i>
                                        </a>
                                    </span>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <span class="me-2 text-xs font-weight-bold">30%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-danger" role="progressbar"
                                                    aria-valuenow="30" aria-valuemin="0" aria-valuemax="30"
                                                    style="width: 30%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-xs font-weight-bold">canceled</span>
                                </td>
                                <td class="align-middle">
                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i
                                            class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete</a>
                                    <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                            class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div>
                                            <img src="{{url('/images')}}/small-logos/logo-slack.svg"
                                                class="avatar avatar-sm rounded-circle me-2" alt="slack">
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-sm">Slack</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">$1,000</p>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-xs font-weight-bold">10000</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-xs font-weight-bold">600
                                        <a class="btn btn-outline-primary btn-sm mb-0 me-3" href="#"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fas fa-info text-sm ms-1" aria-hidden="true"></i>
                                        </a>
                                    </span>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <span class="me-2 text-xs font-weight-bold">0%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-success" role="progressbar"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="0"
                                                    style="width: 0%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-xs font-weight-bold">canceled</span>
                                </td>
                                <td class="align-middle">
                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i
                                            class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete</a>
                                    <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                            class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div>
                                            <img src="{{url('/images')}}/small-logos/logo-webdev.svg"
                                                class="avatar avatar-sm rounded-circle me-2" alt="webdev">
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-sm">Webdev</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">$14,000</p>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-xs font-weight-bold">10000</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-xs font-weight-bold">600
                                        <a class="btn btn-outline-primary btn-sm mb-0 me-3" href="#"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fas fa-info text-sm ms-1" aria-hidden="true"></i>
                                        </a>
                                    </span>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <span class="me-2 text-xs font-weight-bold">80%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-info" role="progressbar"
                                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="80"
                                                    style="width: 80%;"></div>
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
                                    <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                            class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div>
                                            <img src="{{url('/images')}}/small-logos/logo-xd.svg"
                                                class="avatar avatar-sm rounded-circle me-2" alt="xd">
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-sm">Adobe XD</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">$2,300</p>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-xs font-weight-bold">10000</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-xs font-weight-bold">600
                                        <a class="btn btn-outline-primary btn-sm mb-0 me-3" href="#"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fas fa-info text-sm ms-1" aria-hidden="true"></i>
                                        </a>
                                    </span>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <span class="me-2 text-xs font-weight-bold">100%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-success" role="progressbar"
                                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 100%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-xs font-weight-bold">done</span>
                                </td>
                                <td class="align-middle">
                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i
                                            class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete</a>
                                    <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                            class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                </td>
                            </tr>
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
