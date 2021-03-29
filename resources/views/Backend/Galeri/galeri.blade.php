@extends('Backend_admin/Layout/main')

@section('title', 'Galeri')

@section('container')

    <div class="container-fluid mt-3">
        <div class="">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>INPUT DATA |<small>Galeri</small></h2>
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
                                method="POST" action="{{ route('galeri.save') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="judul">Judul Utama<span
                                            class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="judul" id="judul" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="deskripsi">Deskripsi
                                        Utama<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea class="form-control" rows="3" name="deskripsi" id="deskripsi"></textarea>
                                        <script>
                                            CKEDITOR.replace('deskripsi');

                                        </script>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="foto" class="col-form-label col-md-3 col-sm-3 label-align">Pilih
                                        Gambar</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="foto" class="form-control" type="file" name="foto">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-send">
                                                Submit</i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>MENAMPILKAN DATA |<small>Galeri</small></h2>
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

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Descripsi</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($galery as $tentang)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $tentang->judul }}</td>
                                            <td>{{ strip_tags($tentang->deskripsi) }}</td>
                                            <td><img src="../assets/uploads/galeri/{{ $tentang->foto }}" width="50"
                                                    alt="">
                                            </td>
                                            <td>
                                                <a href="{{ route('galeri.edit', $tentang->id) }}"
                                                    class="btn btn-link text-success p-0" style="font-size: 20px;"> <i
                                                        class="fa fa-edit"></i></a>
                                                <form action="{{ route('galeri.delete', $tentang->id) }}" method="POST"
                                                    class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button href="" class="btn btn-link text-danger p-0"
                                                        style="font-size: 20px;"><i class="fa fa-trash"></i></button>
                                                </form>
                                                <input type="hidden" value="{{ $tentang->id }}" name="id">
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
