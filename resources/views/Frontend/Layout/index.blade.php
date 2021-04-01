{{-- BAGAIAN HEADER --}}
@extends('Frontend.Layout.header')
@section('title', 'BPN Bidan Rani')
@section('content')
    <section id="banner">
        <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
                <li>
                    <img src="{!! asset('Frontend/asset_img/hero/1.png') !!}" alt="" />
                    <div class="flex-caption">
                        <h3>Pondok Bersalin</h3>
                        <h3>Bidan Rani</h3>
                        <p>Kami ada untuk meningkatkan kesehatan ibu dan anak</p>
                    </div>
                </li>
                <li>
                    <img src="{!! asset('Frontend/asset_img/hero/2.png') !!}" alt="" />
                    <div class="flex-caption">
                        <h3>mengutamakan</h3>
                        <h3>Kepuasana pengunjung </h4>
                            <p>Memberikan Pelayanan Terbaik, Profesional, dan Ramah</p>
                    </div>
                </li>
            </ul>
        </div>
        <!-- end slider -->
    </section>

    <div class="about home-about">
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <!-- Heading and para -->
                    <div class="block-heading-two">
                        <h3><span>{{ $abouts->title_about }}</span></h3>
                    </div>
                    <p>{!! $abouts->description_about !!}</p>
                    <a href="#" class="btn btn-primary">Baca Selengkapnya</a>

                </div>
                <div class="col-md-4">
                    <div class="block-heading-two">
                        <h3><span>Pelayanan</span></h3>
                    </div>
                    <!-- Accordion starts -->
                    <div class="panel-group" id="accordion-alt3">
                        <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
                        @foreach ($services as $item)
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
                                            <i class="fa fa-angle-right"></i> {{ $item->title_service }}
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour-alt3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        {!! $item->description_service !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Accordion ends -->

                </div>
                {{-- jadwal praktek --}}
                <div class="col-md-4">
                    <div class="timetable">
                        <h3><span class="fa fa-clock-o"></span> Jadwal Praktek</h3>
                        <hr>
                        <dl>
                            <dt>Jadwal Buka Senin - Sabtu : </dt>
                            <dd>Pagi = 09.00 - 12.00 </dd>
                            <dd>Sore = 16.00 - 20.00 </dd>
                        </dl>
                        <dl>
                            <dt>Jadwal Imunisasi : </dt>
                            <dd>Selasa dan Jumat</dd>
                        </dl>

                    </div>
                </div>

            </div>



            <br>

        </div>

    </div>

    <section id="call-to-action-2">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-9">
                    <h3>SELAMAT DATANG DI PONDOK BERSALIN BIDAN RANI</h3>
                    <p>Website ini berisi informasi dari pondak bersalin bidan rani yang mana didalam nya mencakup beberapa
                        hal antara lain tentang imunisasi, persalinan dan Keluagra berencana</p>
                </div>
                <div class="col-md-2 col-sm-3">
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <section id="content">


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aligncenter">
                        <h2 class="aligncenter">Kenapa kita berbeda ?</h2>Untuk dapat mewujudkan Visi dan Misi pembangunan
                        kesehatan yang diselenggarakan oleh “Pondok Bersalin Bidan Rani” yaitu tercapainya kesehatan ibu dan
                        bayi. menuju terwujudnya Indonesia sehat terdapat 4 (empat) indikator utama yaitu lingkungan sehat,
                        perilaku sehat, cakupan pelayanan kesehatan yang bermutu dan kesehatan ibu dan bayi.
                    </div>
                    <br />
                </div>
            </div>
            <div class="row">
                <div class="skill-home">
                    <div class="skill-home-solid clearfix">
                        <div class="col-md-3 text-center">
                            <span class="icons c1"><i class="fa fa-book"></i></span>
                            <div class="box-area">
                                <h3>Pesialis di Bidangnya</h3>
                                <p>Semua bidan di pondok bersalin ini telah lulus sesuai dengan keahliannya dan insyaallah
                                    dapat dipercaya untuk kinerjanya</p>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <span class="icons c2"><i class="fa fa-users"></i></span>
                            <div class="box-area">
                                <h3>Pelayanan Ramah</h3>
                                <p>Pelayanan di pondok bersalin ini sangat ramah dan juga menerapkan 5R (ringkas, rapi,
                                    resik, rawat, dan rajin)</p>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <span class="icons c3"><i class="fa fa-trophy"></i></span>
                            <div class="box-area">
                                <h3>Fasilitas Lengkap</h3>
                                <p>Fasilitas yang disediakan lengkap dan rapih, diantaranya ruang bersalin telah dilengkapi
                                    dengan peralatan yang dibutuhkan dalam proses persalianan</p>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <span class="icons c4"><i class="fa fa-globe"></i></span>
                            <div class="box-area">
                                <h3>Informasi Up to Date</h3>
                                <p>Semua informasi yang disajikan di website ini adalah informasi terbaru dari Pondok
                                    Bersalin Rani</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="section-padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Team Kami</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about-text">


                        <ul class="withArrow">
                            <li><span class="fa fa-angle-right"></span> Rani Kusumawati A.Md. Keb </li>
                            <li><span class="fa fa-angle-right"></span> Evi Dewi A.Md. Keb</li>
                            <li><span class="fa fa-angle-right"></span> Gina Syifa A.Md. Keb</li>
                            <li><span class="fa fa-angle-right"></span> apt. Roni Syaiful B S.Farm.</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Selengkapnya ...</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="about-image">
                        <img src="{!! asset('Frontend/img/about.jpg') !!}" alt="About Images">
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
