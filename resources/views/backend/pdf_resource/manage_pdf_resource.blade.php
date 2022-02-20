@extends('backend.master')

@section('title')
    Manage PDF Resource
@endsection

@section('css')
    @include('backend.partials.datatable-css')
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage PDF Resource</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Manage PDF Resource</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-3">
                            <div class="card-header">
                                <div class="fa-pull-left">
                                    <h3 class="card-title">
                                        <i class="fas fa-list"></i> Manage PDF Resource
                                    </h3>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="list" class="table dt-responsive table-bordered table-striped nowrap">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>PDF File</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('js')
@include('backend.partials.datatable-js')
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<script src="{{ asset('assets/common/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script>
        function showPDFResource(){
            $('#list').DataTable({
                bAutoWidth: false,
                processing: true,
                serverSide: true,
                iDisplayLength: 10,
                ajax: {
                    url: "/administrator/get-pdf-resource",
                    method: "get",
                    data: function (d) {
                        d._token = $('input[name="_token"]').val();
                    }
                },
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'title', name: 'title'},
                    {data: 'pdf_file', name: 'pdf_file'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
                "aaSorting": []
            });
        }

        showPDFResource();

        function deletePDFResource(id,e){
            e.preventDefault();
            swal.fire({
                title: "Are you sure?",
                text: "You want to delete this PDF Resource!",
                icon: "warning",
                showCloseButton: true,
                // showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: `Delete`,
                // dangerMode: true,
            }).then((result) => {
                if (result.value == true) {
                    swal.fire({
                        title: 'Success',
                        text: 'PDF Resource is deleted Successfully!',
                        icon: 'success'
                    }).then(function () {
                        $.ajax({
                            url: "/administrator/delete/pdf/resource",
                            method: "POST",
                            data: {id: id, "_token": "{{ csrf_token() }}"},
                            dataType: 'json',
                            success: function () {
                                location.reload();
                            }
                        })
                    })
                }
                else if (result.value == false) {
                    swal.fire("Cancelled", "PDF Resource is safe :)", "error");
                }
            })
        }
</script>

@endsection
