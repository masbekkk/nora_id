@extends('landing.layouts.app')

@section('content')
      <!-- ***** Main Banner Area Start ***** -->
  <section class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h6>Selamat datang di</h6>
            <h2>Notulensi Rapat Indonesia <em>- Nora.id</em></h2>
            <div class="main-button-gradient">
              <div class="scroll-to-section"><a href="#contact-section">Segera Berlangganan</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
            <img src="{{ asset('landing/assets/images/banner-right-image-update.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>Layanan Kami</h6>
            <h4>Kami <em>Melayani</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset('landing/assets/images/service-icon-01.png') }}" alt="">
                </div>
                <h4>Input Notulensi</h4>
                <p>Dapat menginputkan berbagai data yang sesuai dengan form dan berisi berbagai informasi.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset('landing/assets/images/service-icon-02.png') }}" alt="">
                </div>
                <h4>Notifikasi</h4>
                <p>Dapat mengirimkan notifikasi by email ke setiap peserta rapat dan tamu rapat.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset('landing/assets/images/service-icon-03.png') }}" alt="">
                </div>
                <h4>Hapus</h4>
                <p>Setiap role sekretaris yang menginputkan data dapat menghapus data rapat yang ada.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset('landing/assets/images/service-icon-04.png') }}" alt="">
                </div>
                <h4>Download</h4>
                <p>Aplikasi ini dapat mendownload file yang sudah di upload oleh sekretaris.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset('landing/assets/images/service-icon-01.png') }}" alt="">
                </div>
                <h4>Update</h4>
                <p>Dapat mengupdate data dengan cara mengedit pada form yang disediakan.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset('landing/assets/images/service-icon-02.png') }}" alt="">
                </div>
                <h4>Search</h4>
                <p>Aplikasi ini dapat mencari file yang sudah di upload oleh sekretaris sesuai dengan data yang tampil di dashboard.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset('landing/assets/images/service-icon-03.png') }}" alt="">
                </div>
                <h4>Filter</h4>
                <p>Aplikasi ini dapat memfilter file yang sudah di upload oleh sekretaris sesuai dengan data yang tampil di dashboard.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="get-info" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image">
            <img src="{{  asset('landing/assets/images/amico.png')  }}" alt="">
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <div class="section-heading">
            <h6>Get info</h6>
            <h4>Read More <em>About Nora.id</em></h4>
            <p>Nore.id merupakan Sistem Informasi Notulensi Rapat berbasis website yang di develop oleh mahasiswa D3 tingkat 2 <strong>Politeknik Elektronika Negeri Surabaya</strong> untuk memenuhi tugas dari mata kuliah Rekayasa Perangkat Lunak dan Workhsop Produksi Perangkat Lunak.<br><br>Walaupun berbasis website aplikasi ini juga dapat digunakan atau di akses melalui smartphone karena aplikasi ini merupakan aplikasi yang responsive. Aplikasi ini memiliki beberapa fitur yang sangat bermanfaat dan mudah di implementasikan seperti fitur CRUD, Notulensi secara live, dan notifikasi rapat by email.</p>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="info-item">
                <div class="icon">
                  <img src="{{  asset('landing/assets/images/service-icon-01.png')  }}" alt="">
                </div>
                <h4>Rekap Hasil Rapat</h4>
                <p>Food & truck tumeric taxidermy hoodie chiasore bitters retroed gentrify street portland.</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-item">
                <div class="icon">
                  <img src="{{  asset('landing/assets/images/service-icon-02.png')  }}" alt="">
                </div>
                <h4>Unduh Data Rapat</h4>
                <p>Food & truck tumeric taxidermy hoodie chiasore bitters retroed gentrify street portland.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-team">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>Our Team</h6>
            <h4>Our Team <em>Members</em></h4>
          </div>
        </div>
        <div class="col-lg-10 offset-lg-1">
          <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                    <div class="active">
                      <img src="{{  asset('landing/assets/images/denas-thumb.jpg')  }}" alt="">
                      <h4>Denas</h4>
                      <span>Dev Lead Front End</span>
                    </div>
                    <div>
                      <img src="{{  asset('landing/assets/images/bekhan-thumb.jpg')  }}" alt="">
                      <h4>Bekhan</h4>
                      <span>Dev Lead Back End</span>
                    </div>
                    <div>
                      <img src="{{  asset('landing/assets/images/nafis-thumb.jpg')  }}" alt="">
                      <h4>Nafis</h4>
                      <span>Dev||UI Designer</span>
                    </div>
                    <div>
                      <img src="{{  asset('landing/assets/images/abdil-thumb.jpg')  }}" alt="">
                      <h4>Abdil</h4>
                      <span>Developer</span>
                    </div>
                    <div>
                      <img src="{{  asset('landing/assets/images/iga-thumb.jpg')  }}" alt="">
                      <h4>Iga</h4>
                      <span>Developer</span>
                    </div>
                    <div>
                      <img src="{{  asset('landing/assets/images/nisa-thumb.jpg')  }}" alt="">
                      <h4>Annisa</h4>
                      <span>Product Owner</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="left-content">
                          <h4>Denassyah Nurrahman</h4>
                          <p>Devlead at Front End Nora.id<br>3120500002<br>2 D3 IT A</p>
                          <span><a href="mailto:rohmantesting83@gmail.com">Email</a></span>
                          <span><a href="https://www.instagram.com/denasnurrohman/">Instagram</a></span>
                          <span class="https://www.linkedin.com/in/denassyah-nurrohman-a5a79314a/"><a href="#">Linkedin</a></span>
                          <div class="text-button">
                            <a href="https://wa.me/+6285815943017">Contact Member</a>
                          </div>
                        </div>
                        <div class="right-image">
                          <img src="{{  asset('landing/assets/images/denas.jpg')  }}" alt="">
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-content">
                          <h4>Muhammad Subkhan</h4>
                          <p>Devlead at Back End Nora.id<br>3120500001<br>2 D3 IT A</p>
                          <span><a href="mailto:mohammadsubkhan149@gmail.com">Email</a></span>
                          <span><a href="https://www.instagram.com/subkhaaan13/">Instagram</a></span>
                          <span class="last-span"><a href="https://www.linkedin.com/in/mohammad-subkhan/">Linkedin</a></span>
                          <div class="text-button">
                            <a href="https://wa.me/+6282132397302 ">Contact Member</a>
                          </div>
                        </div>
                        <div class="right-image">
                          <img src="{{  asset('landing/assets/images/bekhan.jpg')  }}" alt="">
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-content">
                          <h4>Waridun Nafis</h4>
                          <p>Developer Front End and UI/UX Designer Nora.id<br>3120500016<br>2 D3 IT A</p>
                          <span><a href="mailto:waridunnafis@gmail.com">Email</a></span>
                          <span><a href="https://www.instagram.com/waridun_nafis/">Instagram</a></span>
                          <span class="last-span"><a href="https://www.linkedin.com/in/waridunnafis/">Linkedin</a></span>
                          <div class="text-button">
                            <a href="https://wa.me/+6281335442117">Contact Member</a>
                          </div>
                        </div>
                        <div class="right-image">
                          <img src="{{  asset('landing/assets/images/nafis.jpg')  }}" alt="">
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-content">
                          <h4>Abdillah Romadhon</h4>
                          <p>Developer Front End Nora.id<br>3120500029<br>2 D3 IT A</p>
                          <span><a href="mailto:abdillahromadhon512@gmail.com">Email</a></span>
                          <span><a href="https://www.instagram.com/romadhon_abdillah/">Instagram</a></span>
                          <span class="last-span"><a href="https://www.linkedin.com/in/abdillah-romadhon-a8ba751bb/">Linkedin</a></span>
                          <div class="text-button">
                            <a href="https://wa.me/+6283134897978">Contact Member</a>
                          </div>
                        </div>
                        <div class="right-image">
                          <img src="{{  asset('landing/assets/images/abdil.jpg')  }}" alt="">
                        </div>
                      </div>
                      </li>
                      <li>
                        <div>

                          <div class="left-content">
                            <h4>Iga</h4>
                            <p>Daveloper<br>2120500003<br>2 D3 IT A</p>
                            <span><a href="mailto:igadwilestari0@gmail.com">Email</a></span>
                            <span><a href="https://www.instagram.com/idl03_/">Instagram</a></span>
                            <span class="last-span"><a href="https://www.linkedin.com/in/iga-dwi-lestari-520a39193/">Linkedin</a></span>
                            <div class="text-button">
                              <a href="https://wa.me/+6289698934921">Contact Member</a>
                            </div>
                          </div>
                          <div class="right-image">
                            <img src="{{  asset('landing/assets/images/iga.jpg')  }}" alt="">
                          </div>
                        </div>
                      </li>
                      <li>
                        <div>
                          <div class="left-content">
                            <h4>Annisa Arsylia</h4>
                            <p>Product Owner Nora.id<br>3120500024<br>2 D3 IT A</p>
                            <span><a href="mailto:annisaasrylia@gmail.com">Email</a></span>
                            <span><a href="https://www.instagram.com/oyyiniss_/">Instagram</a></span>
                            <span class="last-span"><a href="https://www.linkedin.com/in/annisa-arsylia-ab8572200/">Linkedin</a></span>
                            <div class="text-button">
                              <a href="https://wa.me/+6285259752035">Contact Member</a>
                            </div>
                          </div>
                          <div class="right-image">
                            <img src="{{  asset('landing/assets/images/nisa.jpg')  }}" alt="">
                          </div>
                        </div>
                      </li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>OUR COURSES</h6>
            <h4>What You Can <em>Learn</em></h4>
            <p>You just think about TemplateMo whenever you need free CSS templates for your business website</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col-lg-3">
                  <div class="menu">
                    <div class="active gradient-border"><span>Web Development</span></div>
                    <div class="gradient-border"><span>Graphic Design</span></div>
                    <div class="gradient-border"><span>Web Design</span></div>
                    <div class="gradient-border"><span>WordPress</span></div>
                  </div>
                </div>
                <div class="col-lg-9">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="left-image">
                          <img src="{{ asset('landing/assets/images/courses-01.jpg') }}" alt="">
                          <div class="price"><h6>$128</h6></div>
                        </div>
                        <div class="right-content">
                          <h4>Web Development</h4>
                          <p>Did you know that you can visit <a rel="nofollow" href="https://www.toocss.com/" target="_blank">TooCSS website</a> for latest listing of HTML templates and a variety of useful templates. 
                          <br><br>You just need to go and visit that website right now. IF you have any suggestion or comment about this template, you can feel free to go to contact page for our email address.</p>
                          <span>36 Hours</span>
                          <span>4 Weeks</span>
                          <span class="last-span">3 Certificates</span>
                          <div class="text-button">
                            <a href="contact-us.html">Subscribe Course</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="{{ asset('landing/assets/images/courses-02.jpg') }}" alt="">
                          <div class="price"><h6>$156</h6></div>
                        </div>
                        <div class="right-content">
                          <h4>Creative Graphic Design</h4>
                          <p>You are not allowed to redistribute this template ZIP file on any other website without a permission from us.<br><br>There are some unethical people on this world copied and reposted our templates without any permission from us. Their Karma will hit them really hard. Yeah!</p>
                          <span>48 Hours</span>
                          <span>6 Weeks</span>
                          <span class="last-span">1 Certificate</span>
                          <div class="text-button">
                            <a href="contact-us.html">Subscribe Course</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="{{ asset('landing/assets/images/courses-03.jpg') }}" alt="">
                          <div class="price"><h6>$184</h6></div>
                        </div>
                        <div class="right-content">
                          <h4>Web Design</h4>
                          <p>Quinoa roof party squid prism sustainable letterpress cray hammock tumeric man bun mixtape tofu subway tile cronut. Deep v ennui subway tile organic seitan.<br><br>Kogi VHS freegan bicycle rights try-hard green juice probably haven't heard of them cliche la croix af chillwave.</p>
                          <span>28 Hours</span>
                          <span>4 Weeks</span>
                          <span class="last-span">1 Certificate</span>
                          <div class="text-button">
                            <a href="contact-us.html">Subscribe Course</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="{{ asset('landing/assets/images/courses-04.jpg') }}" alt="">
                          <div class="price"><h6>$76</h6></div>
                        </div>
                        <div class="right-content">
                          <h4>WordPress Introduction</h4>
                          <p>Quinoa roof party squid prism sustainable letterpress cray hammock tumeric man bun mixtape tofu subway tile cronut. Deep v ennui subway tile organic seitan.<br><br>Kogi VHS freegan bicycle rights try-hard green juice probably haven't heard of them cliche la croix af chillwave.</p>
                          <span>48 Hours</span>
                          <span>4 Weeks</span>
                          <span class="last-span">2 Certificates</span>
                          <div class="text-button">
                            <a href="contact-us.html">Subscribe Course</a>
                          </div>
                        </div>
                      </div>
                      </li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 offset-lg-1">
          <div class="left-image">
            <img src="{{ asset('landing/assets/images/cta-left-image.png') }}" alt="">
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <h6>Langganan Sekarang</h6>
          <h4>Segera Inventarisir Rapat Anda</h4>
          <p>Segera berlangganan nora.id untuk mendapat fitur inventaris Notulensi Rapat pertama di Indonesia</p>
          <div class="white-button">
            <a href="mailto:notulensirapat.id@gmail.com">Hubungi Kami</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="testimonials" id="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>Testimonials</h6>
            <h4>What They <em>Think</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
            <div class="item">
              <p>“Hal sulit dapat menjadi kebaikan, namun hal mudah terkadang dapat mematikan suatu hal”</p>
                <h4>Mr. Adam</h4>
                <span>Dosen RPL</span>
                <img src="{{ asset('landing/assets/images/quote.png') }}" alt="">
            </div>
            <div class="item">
              <p>“Lakukanlah testing dari sisi unnormal agar kita tahu aplikasi tersebut sudah diterapkan erorr handling atau belum.”</p>
                <h4>Mrs. Desy</h4>
                <span>Dosen RPL</span>
                <img src="{{ asset('landing/assets/images/quote.png') }}" alt="">
            </div>
            <div class="item">
              <p>“Persiapkan Aplikasi secara matang agar ketika dilirik oleh pak direktur saat expo kalian sudah siap dengan produk yang berkualitas”</p>
                <h4>Mrs. Sinta</h4>
                <span>Sekertaris Pens</span>
                <img src="{{ asset('landing/assets/images/quote.png') }}" alt="">
            </div>
            <div class="item">
              <p>“Pastikan yang mana tamu yang mana peserta rapat agar tidak terjadi silo.”</p>
                <h4>Mrs. Nailus</h4>
                <span>Dosen RPL</span>
                <img src="{{ asset('landing/assets/images/quote.png') }}" alt="">
            </div>
            {{-- <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>George Soft</h4>
                <span>Gadget Reviewer</span>
                <img src="{{ asset('landing/assets/images/quote.png') }}" alt="">
            </div>
            <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>Andrew Hall</h4>
                <span>Marketing Manager</span>
                <img src="{{ asset('landing/assets/images/quote.png') }}" alt="">
            </div>
            <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>Maxi Power</h4>
                <span>Fashion Designer</span>
                <img src="{{ asset('landing/assets/images/quote.png') }}" alt="">
            </div>
            <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>Olivia Too</h4>
                <span>Creative Designer</span>
                <img src="{{ asset('landing/assets/images/quote.png') }}" alt=""> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us" id="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div id="map">
          
            <!-- You just need to go to Google Maps for your own map point, and copy the embed code from Share -> Embed a map section -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6919770741156!2d112.79156701456121!3d-7.275847094748325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa10ea2ae883%3A0xbe22c55d60ef09c7!2sPoliteknik%20Elektronika%20Negeri%20Surabaya!5e0!3m2!1sid!2sid!4v1655127675005!5m2!1sid!2sid" width="100%" height="420px" frameborder="0" style="border:0; border-radius: 15px; position: relative; z-index: 2;" allowfullscreen=""></iframe>
            <div class="row">
              <div class="col-lg-4 offset-lg-1">
                <div class="contact-info">
                  <div class="icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <h4>Phone</h4>
                  <span>(031) 594-7280</span>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="contact-info">
                  <div class="icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <h4>Mobile</h4>
                  <span>(+62) 852-5975-2035</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>Contact us</h6>
                  <h4>Say <em>Hello</em></h4>
                  <p>Jika ada keluhan, saran atau kerja sama bisa kirim pesan disini!.</p>
                </div>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Full Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" id="message" placeholder="Your Message"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-gradient-button">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-12">
          <ul class="social-icons">
            {{-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-rss"></i></a></li> --}}
            <li><a href="mailto:notulensirapat.id@gmail.com"><i class="fa fa-envelope"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <p class="copyright">Copyright &copy; 2022 Kelompok A2. All rights reserved </p>
          {{-- <br>Design: <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a></p> --}}
        </div>
        <div class="footer-right">
          v2.0.0
      </div>
      </div>
    </div>
  </section>

@endsection