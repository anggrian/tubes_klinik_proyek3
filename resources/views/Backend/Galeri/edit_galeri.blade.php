@extends('Backend_admin/Layout/main')

@section('title', 'edit galeri')

@section('container')

    <div class="container-fluid mt-3">
        <div class="">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>EDIT DATA </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                                method="POST" action="{{ route('galeri.update', $galery->id) }}"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                @method('PUT')
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="judul">Judul
                                        Utama <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="judul" id="judul" required="required" class="form-control"
                                            value="{{ $galery->judul }}">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="deskripsi">Deskripsi
                                        Utama <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea class="form-control" rows="3" name="deskripsi" id="deskripsi"
                                            required>{{ $galery->deskripsi }}</textarea>
                                        <script>
                                            CKEDITOR.replace('deskripsi');

                                        </script>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="foto">Gambar <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <img src="../../assets/uploads/galeri/{{ $galery->foto }}" width="100" alt="">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label for="foto" class="col-form-label col-md-3 col-sm-3 label-align">Pilih
                                        Gambar</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="foto" class="form-control" type="file" name="foto">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-send">
                                                Update</i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
