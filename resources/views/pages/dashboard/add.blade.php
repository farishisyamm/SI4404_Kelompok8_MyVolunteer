@extends('pages.dashboard.main')
@section('title', 'Add')
@section('content')
<div class="p-4 card">
    <h6>Tambah Kegiatan</h6>
    <hr class="horizontal dark mt-0">
    <form action="<?php echo url('/addevent')?>" method="POST">
        @csrf
        @if (Session::has('success') || Session::has('error'))
        <div class="alert alert-{{Session::has('success') ? 'success' : 'danger'}}" role="alert">
            {{Session::get('success')}}
            {{Session::get('error')}}
        </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label for="event_name" class="form-label">Judul Kegiatan</label>
                    <input type="text" class="form-control" id="event_name" name="event_name" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="location" class="form-label">Lokasi</label>
                    <div class="row">
                        <div class="col-md-10">
                            <input type="hidden" value="dummy longitude" name="longitude" id="longitude" required>
                            <input type="hidden" value="dummy latitude" name="latitude" id="latitude" required>
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
                    <label for="start_date" class="form-label">Waktu Mulai</label>
                    <input type="datetime-local" class="form-control" id="start_date" name="start_date" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <label for="end_date" class="form-label">Waktu Selesai</label>
                    <input type="datetime-local" class="form-control" id="end_date" name="end_date" required>
                </div>
            </div>
            <div class="col-md-2">
                <div class="mb-3">
                    <label for="resource_need" class="form-label">Jumlah Yang Dibutuhkan</label>
                    <input type="number" class="form-control" min="1" id="resource_need" name="resource_need" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="resourceNeed" class="form-label">Kategori Relawan</label>
                    <div class="row">
                        <div class="col-md-8">
                            <select class="form-select"  id="categories" name="categories">
                                @foreach ($resource_categories as $resource_category)
                                <option value="{{$resource_category->resource_category_id}}">{{$resource_category->resource_category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <a class="btn btn-outline-primary btn-sm mb-0 me-3" href="#">
                                <i class="fas fa-plus text-sm ms-1" aria-hidden="true" id="btn_category"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <table class="table align-items-center justify-content-center mb-0" id="categories_table">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Kategori
                            </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>                        
                    </tbody>
                </table>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="reward" class="form-label">Reward</label>
                    <input type="text" class="form-control" id="reward" name="reward" required>
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
                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Tambah Kegiatan</button>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    $("#categories_table tbody").empty();
    var categories = [];
    $("#btn_category").click(function() {
        var selected_category = $('select[name=categories] option').filter(':selected');
        if ($.inArray(selected_category.val(), categories) != -1){
            alert('Kategori Sudah Di Tambahkan');
        } else {
            categories.push(selected_category.val());
            var temp = '<tr><td>' + categories.length + '</td><td><span class="text-xs font-weight-bold"><input type="hidden" name="categories[]" value="' + selected_category.val() + '">';
            temp += selected_category.html() + '</span></td><td class="align-middle"><a class="btn btn-link text-danger text-gradient px-3 mb-0" id="' + selected_category.val() + '" name="delete_button" href="#">';
            temp += '<i class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete</a></td></tr>';

            $("#categories_table tbody").append(temp);
        }
    });

    $("#categories_table").on("click", "[name=delete_button]", function() {
        var index = categories.indexOf($(this).attr('id'));
        if (index !== -1) {
            categories.splice(index, 1);
        }
        
        $(this).closest("tr").remove();
    })
</script>
@endsection
