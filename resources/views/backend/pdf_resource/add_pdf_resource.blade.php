@extends('backend.master')

@section('title')
    Add PDF Resource | {{ $appName }}
@endsection

@section('content')
    <div class="content-wrapper" style="font-family: Roboto">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="m-0 text-dark" style="font-family: kalpurush">Add PDF Resource</h1>
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
                                <h3 class="card-title" style="font-family: kalpurush">Add PDF Resource</h3>
                                <div class="fa-pull-right">
                                    <a href="{{ route('manage.pdf.resource') }}">
                                        <button class="btn btn-light"><i class="fa fa-arrow-left"></i><b> Back To PDF Resource </b></button>
                                    </a>
                                </div>
                            </div>
                            <form method="POST" action="{{ route('save.pdf.resource') }}" enctype="multipart/form-data" role="form">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Title <span class="text-danger">*</span></label>
                                                <input type="text" name="title" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{ old('title') }}" autofocus>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
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
