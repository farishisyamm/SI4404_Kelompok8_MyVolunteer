@extends('pages.dashboard.main')
@section('title', 'Edit')
@section('content')
<div class="p-4 card">
    <h6>Edit Kegiatan</h6>
    <hr class="horizontal dark mt-0">
    <form action="<?php echo url('/editevent').'/'.$event->event_id;?>" method="POST">
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
                    <input type="text" class="form-control" id="event_name" name="event_name" value="{{$event->event_name}}" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="location" class="form-label">Lokasi</label>
                    <div class="row">
                        <div class="col-md-10">
                            <input type="hidden" value="dummy longitude" name="longitude" id="longitude" required>
                            <input type="hidden" value="dummy latitude" name="latitude" id="latitude" required>
                            <input type="text" class="form-control" id="location" name="location" value="{{$event->event_location}}" required>
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
                    <input type="datetime-local" class="form-control" id="start_date" name="start_date" value="{{$event->start_date}}" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <label for="end_date" class="form-label">Waktu Selesai</label>
                    <input type="datetime-local" class="form-control" id="end_date" name="end_date" value="{{$event->end_date}}" required>
                </div>
            </div>
            <div class="col-md-2 text-lg-end">
                <div class="mb-3">
                    <label for="resource_need" class="form-label">Jumlah Yang Dibutuhkan</label>
                    <input type="number" class="form-control" min="1" id="resource_need" name="resource_need" value="{{$event->resource_need}}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="resourceNeed" class="form-label">Kategori Relawan</label>
                    <div class="row">
                        <div class="col-md-8">
                            <select class="form-select" id="categories" name="category">
                                @foreach ($resource_categories as $resource_category)
                                <option value="{{$resource_category->resource_category_id}}">
                                    {{$resource_category->resource_category_name}}</option>
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
                            <th>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($resource_details as $key => $resource_detail)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>
                                    <span class="text-xs font-weight-bold">
                                        {{$resource_detail->resource_category_name}}
                                    </span>
                                </td>
                                <td class="align-middle">
                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="{{url('/deleteeventcategory').'/'.$event->event_id.'/'.$resource_detail->resource_detail_id}}">
                                        <i class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="reward" class="form-label">Reward</label>
                    <input type="text" class="form-control" id="reward" name="reward" value="{{$event->reward}}" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi Kegiatan</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required>{{$event->event_description}}</textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="status" class="form-label">Status Kegiatan</label>
                    <select class="form-select" id="status" name="status">
                        <option value="S" {{$event->event_status == 'S'? 'selected' : ''}}>Sedang Berlangsung</option>
                        <option value="N" {{$event->event_status == 'N'? 'selected' : ''}}>Dibatalkan</option>
                        <option value="Y" {{$event->event_status == 'Y'? 'selected' : ''}}>Selesai</option>
                    </select>
                </div>
            </div>
            <a href="{{url('/addeventdetail').'/'.$event->event_id}}"
                class="text-lg-end text-body text-sm font-weight-bold mb-2 icon-move-right mt-auto p-4">Tambah Detail
                Kegiatan <i class="fas fa-plus text-sm ms-1" aria-hidden="true"></i></a>
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
                        @foreach ($event->eventdetails as $key=>$item)
                            <?php $data = explode(";;;", $item->event_value);?>
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>
                                    <span class="text-xs font-weight-bold">{{$data[1]}}</span>
                                </td>
                                <td>
                                    <span class="text-xs font-weight-bold">{{$data[2]}}</span>
                                </td>
                                <td>
                                    <span class="text-xs font-weight-bold">{{$data[3]}}</span>
                                </td>
                                <td class="align-middle">
                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="{{url('/deleteeventdetail').'/'.$event->event_id.'/'.$item->event_detail_id}}"><i
                                        class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete
                                    </a>
                                    <a class="btn btn-link text-dark px-3 mb-0"
                                        href="{{url('/editeventdetail').'/'.$item->event_detail_id}}">
                                        <i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <button type="reset" class="btn bg-gradient-light w-100 my-4 mb-2">Reset</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </form>
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
    var categories = [];
    @foreach ($resource_details as $key => $resource_detail)
        categories.push("{{$resource_detail->resource_category_id}}");
    @endforeach
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
    });

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
