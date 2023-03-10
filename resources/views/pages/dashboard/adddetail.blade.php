@extends('pages.dashboard.main')
@section('title', 'Add Event Detail')
@section('content')
<div class="p-4 card">
    <h6>Tambah Detail Kegiatan</h6>
    <hr class="horizontal dark mt-0">
    <form action="<?php echo url('/addeventdetail').'/'.$id;?>" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label for="title" class="form-label">Judul Detail Kegiatan</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal</label>
                    <input type="datetime-local" class="form-control" id="date" name="date" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi Kegiatan</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <button type="reset" class="btn bg-gradient-light w-100 my-4 mb-2">Reset</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Tambah Detail Kegiatan</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
