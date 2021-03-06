@extends('Backend_admin/Layout/main')

@section('title', 'Halaman | Himed')

@section('container')

<div class="container-fluid mt-3">
    <div class="">
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>EDIT DATA</small></h2>
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
              <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ route('layanan.update', $services->id)}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                @method('PUT')
                <div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="title_service">Judul Utama<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 ">
                    <input type="text" name="title_service" id="title_service" required="required" class="form-control" value="{{$services->title_service}}">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="description_service">Deskripsi Utama<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 ">
                    <textarea class="form-control" rows="3"  name="description_service" id="description_service" required>{{$services->description_service}}</textarea>
                    <script>
                      CKEDITOR.replace( 'description_service' );
                    </script>
                </div>
                </div>
                <div class="ln_solid"></div>
                <div class="item form-group">
                  <div class="col-md-6 col-sm-6 offset-md-3">
                    <button type="submit" class="btn btn-success"  ><i class="fa fa-send"> Update</i></button>
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
