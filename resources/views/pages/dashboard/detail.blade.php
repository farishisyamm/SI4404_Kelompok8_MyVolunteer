@extends('pages.dashboard.main')
@section('title', 'Event Detail')
@section('content')
<div class="p-4 card">
    <h6>Detail Kegiatan</h6>
    <hr class="horizontal dark mt-0">
    <div class="row">
        <img src="images/ivancik.jpg"
        class="h-400px w-100 object-fit-cover" alt="waves">
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
    </div>
</div>
@endsection
