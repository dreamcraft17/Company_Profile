<style>
    .wrapper-img-banner {
        max-width: 100%;
        max-height: 400px;

    }

    .img-banner {
        width: 100%;
    }
</style>



<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="wrapper-img-banner">
                <img src="/img/machine.jpg" class="img-banner" alt="">

            </div>


            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>PT SOHOU KIKAKU INDONESIA</h1>
                    <p>Discover Our Pinnacle Innovations in Manufacturing Excellence.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                </div>
            </div>


        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="container mt-5 ">
        <!-- <div class="text-center">
        <h4 class="">About</h4>
        <p></p>
        <br>
    </div> -->

        <div class="row">
            <div class="col-md-5">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/SKI.jpg" width="100%" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/cnc.jpg" width="100%" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/produksi.jpg" width="100%" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/machine2.jpg" width="100%" alt="">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
            <div class="col-md-7">
                <h2>Selamat Datang di PT SOHOU KIKAKU INDONESIA!</h2>
                <p>Kami adalah perusahaan yang berdedikasi di bidang Manufacturing Metal Products & Assembly.</p>
                <p>Sebagai pemimpin industri, kami bangga pada produksi berkualitas tinggi dan layanan unggul kami.</p>
                <p>Dengan komitmen kami terhadap inovasi dan keunggulan, kami telah membangun reputasi yang kuat di pasar.</p>
                <p>PT SOHOU KIKAKU INDONESIA adalah mitra terpercaya dalam menyediakan solusi yang tepat dan efisien untuk kebutuhan industri Anda.</p>
            </div>


        </div>

    </div>
    <div class="bg-secondary my-5">
        <div class="container py-5">
            <div class="text-white">
                <h5 style="text-align: center;">Learn About Us</h5>
                <p>Sebagai perusahaan yang berdedikasi pada Manufacturing Metal Products & Assembly, kami percaya bahwa transparansi dan keterbukaan merupakan kunci dalam membangun hubungan yang kuat dengan pelanggan dan mitra bisnis.</p>
            </div>
            >
        </div>
    </div>



    <div class="container my-4 ">
        <div class="text-center">
            <h4 class="">Service</h4>
            <p>Company </p>
        </div>


        <div class="row">

            @for($i = 0; $i < 4; $i++) <div class="col-md-3">
                <div class="text-center">
                    <i class="fas fa-home fa-3x text-dark"></i>
                    <h5><b>metal</b></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, at?</p>
                </div>
        </div>

        @endfor


    </div>

    <div class="text-center mt-3">
        <a href="" class="btn btn-secondary">More <i class="fas fa-arrow-right"></i></a>
    </div>
</div>

<div class="bg-secondary my-5">
    <div class="container py-5">
        <div class="text-white text-center">
            <h5>Learn About Us</h5>
            <p>Kunjungi kami dan temukan bagaimana PT SOHOU KIKAKU INDONESIA dapat menjadi mitra terpercaya Anda dalam memenuhi kebutuhan manufaktur metal dan perakitan. Hubungi kami untuk informasi lebih lanjut atau kerja sama potensial. Terima kasih atas kepercayaan Anda kepada kami.</p>
        </div>
        >
    </div>
</div>

<style>


</style>


<div class="container my-2 ">
    <div class="text-center">
        <h4 class="">Product</h4>
        <p>Company </p>
    </div>




    <div class="row">
        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="wrapper-card-product">
                    <img src="/ski/hasil1.png" class="-card-blog" alt="">
                </div>
                <div class="p-3">
                    <a href="text-decoration-none">
                        <h5>Metal</h5>
                    </a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="">More &RightArrow;</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="wrapper-card-product">
                    <img src="/ski/hasil2.png" class="-card-blog" alt="">
                </div>
                <div class="p-3">
                    <a href="text-decoration-none">
                        <h5>Metal</h5>
                    </a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="">More &RightArrow;</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="wrapper-card-product">
                    <img src="/ski/hasil3.png" class="-card-blog" alt="">
                </div>
                <div class="p-3">
                    <a href="text-decoration-none">
                        <h5>Metal</h5>
                    </a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="">More &RightArrow;</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="wrapper-card-product">
                    <img src="/ski/hasil4.png" class="-card-blog" alt="">
                </div>
                <div class="p-3">
                    <a href="text-decoration-none">
                        <h5>Metal</h5>
                    </a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="">More &RightArrow;</a>
                </div>
            </div>
        </div>

    </div>
</div>