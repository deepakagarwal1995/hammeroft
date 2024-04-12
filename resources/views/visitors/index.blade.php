@extends('layouts.visitorsApp', ['page_title' => $title, 'page_descr' => $descr, 'page_img' => $img])
@section('content')
    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Hammer Of Thor - <span>World’s Strongest</span> Ashwagandha Extract</h2>
                    <p>Now perform better and naturally with hammer of thor tablet. it is scientifically proven to improve
                        your testosterone levels also boost your strength & stamina & libdo.</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#order" class="btn-get-started">Order Now</a>
                        <a href="tel:+917017697393" style="    color: #fff;
    padding-left: 5px;"
                            class="d-flex align-items-center"> +91 70176 97393</a>

                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{ config('app.url') }}/assets/img/product.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-tree"></i></div>
                            <h4 class="title"><a href="#0" class="stretched-link">100 % natural</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-gem"></i></div>
                            <h4 class="title"><a href="#0" class="stretched-link">Best Quality product</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-geo-alt"></i></div>
                            <h4 class="title"><a href="#0" class="stretched-link">Cash on delivery</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-command"></i></div>
                            <h4 class="title"><a href="#0" class="stretched-link">20 lakh happy customer</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                </div>
            </div>
        </div>

        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">



                <div class="row gy-4">
                    <div class="col-lg-6">

                        <img src="{{ config('app.url') }}/assets/img/69.jpg" class="img-fluid rounded-4 mb-4"
                            alt="">

                    </div>
                    <div class="col-lg-6 d-flex">
                        <div class="content ps-0 ps-lg-5 m-auto">
                            <h3>HAMMER OF THORS</h3>
                            <p class="fst-italic">
                                Consult our team of experienced professionals with over 25+ years of service experience in
                                the healthcare domain. Call now for latest offers available.
                            </p>



                            <div class="position-relative mt-4">
                                <a href="tel:7017697393" class="btn btn-primary">Call Us</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-out">
                <h3>As Seen In</h3>
                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="{{ config('app.url') }}/assets/img/Ani.webp" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ config('app.url') }}/assets/img/webindia123.webp"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ config('app.url') }}/assets/img/mid-day.webp"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ config('app.url') }}/assets/img/up18news.webp"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ config('app.url') }}/assets/img/dcz9bdg-8e0eff32-a656-4917-aa2e-6c31e2ded60e.png"
                                class="img-fluid" alt=""></div>
                    </div>
                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Stats Counter Section ======= -->


        <!-- ======= Our Services Section ======= -->
        <section id="Ingredients" class="services sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>OUR 100% NATURAL HERBS</h2>
                    <p>Excavated from the foothills of himalyas, natural and original herbs for Men.</p>
                </div>

                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <img src="{{ config('app.url') }}/assets/img/c37c02e553a4b882e149630cc2b8f401_489x489_0x62_489x612_crop.jpg"
                                    class="img-fluid" alt="">

                            </div>
                            <h3>Safed Musli</h3>

                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <img src="{{ config('app.url') }}/assets/img/0f52aa1cea7e2a5d06190e2aa0a8a3e3_496x568_fit.jpg"
                                    class="img-fluid" alt="">

                            </div>
                            <h3>SHATAVARI</h3>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <img src="{{ config('app.url') }}/assets/img/0b19b25355ebc91ba53afaaf94fed45d_496x496_fit.jpg"
                                    class="img-fluid" alt="">

                            </div>
                            <h3>KONCH BEEJ</h3>

                        </div>
                    </div>
                    <div class="offset-lg-2 col-lg-4 col-md-6">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <img src="{{ config('app.url') }}/assets/img/a426d73f53356dc808fb40309718ebf4_408x408_102x0_612x408_crop.jpg"
                                    class="img-fluid" alt="">

                            </div>
                            <h3>SHILAJIT</h3>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <img src="{{ config('app.url') }}/assets/img/d9b7fd67f2c9b572574b263f42fadaa7_fit.jpg"
                                    class="img-fluid" alt="">

                            </div>
                            <h3>ASHWAGANDHA</h3>

                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Our Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Why more than 20000+ satisfied
                        customers just ❤️ the Hammer Of Thor</h2>
                    <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti
                        fignissimos eos quam</p>
                </div>

                <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <img src="{{ config('app.url') }}/assets/img/2.png" class="img-fluid" alt="">
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <img src="{{ config('app.url') }}/assets/img/1.webp" class="img-fluid" alt="">
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <img src="{{ config('app.url') }}/assets/img/3.webp" class="img-fluid" alt="">
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <img src="{{ config('app.url') }}/assets/img/4.webp" class="img-fluid" alt="">
                        </div><!-- End testimonial item -->


                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Portfolio Section ======= -->

        <!-- ======= Our Team Section ======= -->

        <!-- ======= Pricing Section ======= -->
        <section id="products" class="pricing sections-bg">
            <div class="container" data-aos="fade-up">



                <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">

                    <div class="col-lg-6 d-flex">
                        <div class="m-auto">
                            <h2>CALL - +91 70176 97393</h2>
                            <p class="fst-italic">Hammer of Thors - 100% natural and Original, formulated in Germany.
                                Revolutionary product with great results from 1st day itself. Highly recommended by
                                consumers with more than 2lac+ reviews.
                                Consult today for best offers.</p>

                            <h4 style="text-align: left;
    margin: 15px 0;">Price ₹1490</h4>
                            <div class="d-flex justify-content-center justify-content-lg-start">
                                <a href="#order" class="btn btn-primary">Order Now</a>
                            </div>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-6">
                        <div class="pricing-item featured">
                            <h3>Our Package</h3>

                            <img src="{{ config('app.url') }}/assets/img/product.jpg" class="img-fluid" alt="">

                            <h4><sup>₹</sup>1490<span> / Pack</span></h4>

                            <div class="text-center"><a href="#order" class="buy-btn">Order Now</a></div>
                        </div>
                    </div><!-- End Pricing Item -->

                    <!-- End Pricing Item -->

                </div>

            </div>
        </section><!-- End Pricing Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->


        <!-- ======= Recent Blog Posts Section ======= -->


        <!-- ======= Contact Section ======= -->
        <section id="order" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Order Now</h2>

                </div>

                <div class="row gx-lg-0 gy-4">



                    <div class="offset-lg-2 col-lg-8 pricing ">
                        <form action="{{route('orderNow')}}" method="post" role="form" class="pricing-item featured">
                              @csrf
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label>Name *</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-12 form-group mt-3 mt-md-0">
                                    <label>Phone *</label>
                                    <input type="tel" pattern="[5-9]{1}[0-9]{9}"
       title="Phone number with 5-9 and remaing 9 digit with 0-9" class="form-control" name="phone" id="email"
                                        placeholder="Your Phone" required>
                                </div>
                            </div>



                            <div class="text-center"><button type="submit" class="btn btn-primary w-100 mt-3">Order Now</button></div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main>
@endsection
