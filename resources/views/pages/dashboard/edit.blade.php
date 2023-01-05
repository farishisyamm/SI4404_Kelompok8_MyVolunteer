@extends('pages.dashboard.main')
@section('title', 'Edit')
@section('content')
<div class="p-4 card">
    <h6>Edit Kegiatan</h6>
    <hr class="horizontal dark mt-0">
    <div class="row">
        <div class="col-12">
            <div class="mb-3">
                <label for="title" class="form-label">Judul Kegiatan</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <label for="location" class="form-label">Lokasi</label>
                <div class="row">
                    <div class="col-md-10">
                        <input type="hidden" name="longitude" id="longitude" required>
                        <input type="hidden" name="latitude" id="latitude" required>
                        <input type="text" class="form-control" id="location" name="location" required>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-outline-primary btn-sm mb-0 me-3" href="#">Cari Lokasi</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="mb-3">
                <label for="startDate" class="form-label">Waktu Mulai</label>
                <input type="datetime-local" class="form-control" id="startDate" name="startDate" required>
            </div>
        </div>
        <div class="col-md-3">
            <div class="mb-3">
                <label for="endDate" class="form-label">Waktu Selesai</label>
                <input type="datetime-local" class="form-control" id="endDate" name="endDate" required>
            </div>
        </div>
        <div class="col-md-2">
            <div class="mb-3">
                <label for="resourceNeed" class="form-label">Jumlah Yang Dibutuhkan</label>
                <input type="number" class="form-control" min="1" id="resourceNeed" name="resourceNeed" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="resourceNeed" class="form-label">Kategori Relawan</label>
                <div class="row">
                    <div class="col-md-8">
                        <input class="form-control" list="resourceCategoryOptions" id="resourceCategory" placeholder="Type to search...">
                        <datalist id="resourceCategoryOptions" name="resourceCategoryOptions">
                            <option value="San Francisco">
                            <option value="New York">
                            <option value="Seattle">
                            <option value="Los Angeles">
                            <option value="Chicago">
                        </datalist>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-outline-primary btn-sm mb-0 me-3" href="#">
                            <i class="fas fa-plus text-sm ms-1" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <table class="table align-items-center justify-content-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            Kategori</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <span class="text-xs font-weight-bold">Tenaga Medis</span>
                        </td>
                        <td class="align-middle">
                            <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i
                                    class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <label for="title" class="form-label">Reward</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi Kegiatan</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <label for="status" class="form-label">Status Kegiatan</label>
                <select class="form-select" id="status" name="status">
                    <option value="1">Sedang Berlangsung</option>
                    <option value="2">Dibatalkan</option>
                    <option value="3">Selesai</option>
                </select>
            </div>
        </div>
        <a href="{{url('/adddetailevent')}}" class="text-lg-end text-body text-sm font-weight-bold mb-2 icon-move-right mt-auto p-4">Tambah Detail Kegiatan <i class="fas fa-plus text-sm ms-1" aria-hidden="true"></i></a>
        <div class="col-md-12">
            <table class="table align-items-center justify-content-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            Judul Detail Kegiatan
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            Deskripsi Detail Kegiatan
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            Tanggal</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <span class="text-xs font-weight-bold">Warga sangat terbantu dengan adanya bantuan pengajar</span>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold">Lorem ipsum lorem ipsum  lorem ipsum...</span>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold">May 11, 2020</span>
                        </td>
                        <td class="align-middle">
                            <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i
                                    class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete</a>
                            <a class="btn btn-link text-dark px-3 mb-0" href="<?php echo url('/editdetailevent');?>"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
