@extends("layouts.frontLayout")
@section("content")

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/hero.jpg">
        <form class="d-flex tm-search-form">
            <input class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary">Video title goes here</h2>
        </div>
        <div class="row tm-mb-90">
            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                <video autoplay muted loop controls id="tm-video">
                    <source src="video/hero.mp4" type="video/mp4">
                </video>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="tm-bg-gray tm-video-details">
                    <p class="mb-4">
                        Aliquam varius posuere nunc, nec imperdiet neque condimentum at. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Please support us by contributing <a href="https://paypal.me/templatemo" target="_parent" rel="sponsored">a small donation</a> via PayPal.
                    </p>
                    <div class="text-center mb-5">
                        <a href="#" class="btn btn-primary tm-btn-big">Download</a>
                    </div>
                    <div class="mb-4 d-flex flex-wrap">
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Resolution: </span><span class="tm-text-primary">1920x1080</span>
                        </div>
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Format: </span><span class="tm-text-primary">MP4</span>
                        </div>
                        <div>
                            <span class="tm-text-gray-dark">Duration: </span><span class="tm-text-primary">00:00:20</span>
                        </div>
                    </div>
                    <div class="mb-4">
                        <h3 class="tm-text-gray-dark mb-3">License</h3>
                        <p>Free for both personal and commercial use. No need to pay anything. No need to make any attribution.</p>
                    </div>
                    <div>
                        <h3 class="tm-text-gray-dark mb-3">Tags</h3>
                        <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Cloud</a>
                        <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Bluesky</a>
                        <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Nature</a>
                        <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Background</a>
                        <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Timelapse</a>
                        <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Night</a>
                        <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Real Estate</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary">
                Related Videos
            </h2>
        </div>
        <div class="row mb-3 tm-gallery">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/img-01.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Hangers</h2>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">12 Oct 2020</span>
                    <span>12,460 views</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/img-02.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Perfumes</h2>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">18 Oct 2020</span>
                    <span>11,402 views</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/img-03.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Clocks</h2>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">16 Oct 2020</span>
                    <span>9,906 views</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/img-04.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Plants</h2>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">12 Oct 2020</span>
                    <span>16,100 views</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/img-05.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Morning</h2>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">24 Sep 2020</span>
                    <span>16,008 views</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/img-06.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Pinky</h2>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">21 Sep 2020</span>
                    <span>12,860 views</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/img-07.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Bus</h2>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">18 Sep 2020</span>
                    <span>10,900 views</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/img-08.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>New York</h2>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">9 Sep 2020</span>
                    <span>11,300 views</span>
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container-fluid, tm-container-content -->

@endsection