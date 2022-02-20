@extends('backend.master')

@section('title')
    Update PDF Resource
@endsection

@section('content')
    <div class="content-wrapper" style="font-family: Roboto">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="m-0 text-dark" style="font-family: kalpurush">Update PDF Resource</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title" style="font-family: kalpurush">Update PDF Resource</h3>
                            </div>
                            <form method="POST" action="{{ route('update.pdf.resource') }}" enctype="multipart/form-data" role="form">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Title <span class="text-danger">*</span></label>
                                                <input type="text" name="title" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{ $resource->title }}" autofocus>
                                                <input type="hidden" name="id" value="{{ $resource->id }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            @if($resource->file)
                                                <a href="{{ asset($resource->file) }}" target="_blank">
                                                    <img src="{{ asset('assets/backend/img/pdf_icon.png') }}" alt="{{ $resource->title }}" style="max-height: 50px;max-width: 50px">
                                                </a>
                                            @endif
                                            <div class="form-group">
                                                <label>PDF File <span class="text-danger">*</span></label>
                                                <input type="file" name="file" class="form-control {{ $errors->has('file') ? ' is-invalid' : '' }}" value="{{ old('file') }}" autofocus>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="{{ route('manage.pdf.resource') }}">
                                        <button type="button" class="btn btn-danger">Close</button>
                                    </a>
                                    <button type="submit" class="btn btn-info float-right">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
