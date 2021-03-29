{{-- BAGAIAN HEADER --}}
@extends('Frontend.Layout.header')
@section('title', 'BPN Bidan Rani')
@section('content')
    <h1>muncul coba amikim</h1>
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pageTitle">Portfolio</h2>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="about-logo">
                        <h3>Voluptatem Accusantium Doloremque</h3>
                        <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                        </p>
                        <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Start Gallery 1-2 -->
    <section id="gallery-1" class="content-block section-wrapper gallery-1">
        <div class="container">

            <div class="editContent">
                <ul class="filter">
                    <li class="active"><a href="#" data-filter="*">All</a></li>
                    <li><a href="#" data-filter=".artwork">Artwork</a></li>
                    <li><a href="#" data-filter=".creative">Creative</a></li>
                    <li><a href="#" data-filter=".nature">Nature</a></li>
                    <li><a href="#" data-filter=".outside">Outside</a></li>
                    <li><a href="#" data-filter=".photography">Photography</a></li>
                </ul>
            </div>
            <!-- /.gallery-filter -->

            <div class="row">
                <div id="isotope-gallery-container">
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper artwork creative">
                        @foreach ($galery as $item)

                            <div class="gallery-item">
                                <div class="gallery-thumb">
                                    <img src="../../assets/uploads/galeri/{{ $item->foto }}" alt="6th gallery Thumb">
                                    <div class="image-overlay"></div>
                                    <img src="../../assets/uploads/galeri/{{ $item->foto }}"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="gallery-details">
                                    <div class="editContent">
                                        <h5>6th gallery Item</h5>
                                    </div>
                                    <div class="editContent">
                                        <p>Nullam id dolor id nibh ultricies vehicula.</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
                <!-- /.isotope-gallery-container -->
            </div>
            <!-- /.row -->
            <!-- /.container -->
        </div>
    </section>
    <!--// End Gallery 1-2 -->
    </div>
    <footer>
        <div class="container">

            <div class="row">
                <div class="col-lg-3">
                    <div class="widget">
                        <h5 class="widgetheading">Our Contact</h5>
                        <address>
                            <strong>Cambridge company Inc</strong><br>
                            JC Main Road, Near Silnile tower<br>
                            Pin-21542 NewYork US.
                        </address>
                        <p>
                            <i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
                            <i class="icon-envelope-alt"></i> email@domainname.com
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget">
                        <h5 class="widgetheading">Quick Links</h5>
                        <ul class="link-list">
                            <li><a href="#">Latest Events</a></li>
                            <li><a href="#">Terms and conditions</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget">
                        <h5 class="widgetheading">Latest posts</h5>
                        <ul class="link-list">
                            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                            <li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
                            <li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget">
                        <h5 class="widgetheading">Recent News</h5>
                        <ul class="link-list">
                            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                            <li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
                            <li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endsection
