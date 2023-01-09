@extends('pages.dashboard.main')
@section('title', 'Event Detail')
@section('content')
<div class="p-4 card">
    <h6>Detail Kegiatan</h6>
    <hr class="horizontal dark mt-0">
    <form action="<?php echo url('/editeventdetail').'/'.$idevent.'/'.$id;?>" method="POST" enctype="multipart/form-data">
        @csrf
        <?php $data = explode(";;;", $event_detail->event_value);?>
        <div class="row">
            <img src="{{url('/images')}}/{{$data[0]}}"
        class="h-400px w-100 object-fit-cover" alt="waves">
            <div class="col-12">
                <div class="mb-3">
                    <label for="title" class="form-label">Judul Detail Kegiatan</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$data[1]}}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal</label>
                    <input type="datetime-local" class="form-control" id="date" name="date" value="{{$data[3]}}" required>
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
                    <textarea class="form-control" id="description" name="description" rows="3" required>{{$data[2]}}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <button type="reset" class="btn bg-gradient-light w-100 my-4 mb-2">Reset</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Update Detail Kegiatan</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
