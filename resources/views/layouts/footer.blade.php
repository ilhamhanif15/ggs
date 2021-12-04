<style scoped>
#footer {
  background: black;
  padding: 0 0 20px 0;
  color: #fff;
  font-size: 14px;
}
#footer .footer-top {
  background: #dab96a;
  border-top: 3px solid #222222;
  padding: 60px 0 30px 0;
}
#footer .footer-top .footer-info {
  margin-bottom: 30px;
}
#footer .footer-top .footer-info h3 {
  font-size: 28px;
  margin: 0 0 20px 0;
  padding: 2px 0 2px 0;
  line-height: 1;
  font-weight: 700;
  text-transform: uppercase;
}
#footer .footer-top .footer-info h3 span {
  color: #ffc451;
}
#footer .footer-top .footer-info p {
  font-size: 14px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Raleway", sans-serif;
  color: #fff;
}
#footer .footer-top .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #292929;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 4px;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}
#footer .footer-top .social-links a:hover {
  background: #ffc451;
  color: #151515;
  text-decoration: none;
}
#footer .footer-top h4 {
  font-size: 16px;
  font-weight: 600;
  color: #fff;
  position: relative;
  padding-bottom: 12px;
}
#footer .footer-top .footer-links {
  margin-bottom: 30px;
}
#footer .footer-top .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
#footer .footer-top .footer-links ul i {
  padding-right: 2px;
  color: #ffc451;
  font-size: 18px;
  line-height: 1;
}
#footer .footer-top .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}
#footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}
#footer .footer-top .footer-links ul a {
  color: #fff;
  transition: 0.3s;
  display: inline-block;
  line-height: 1;
}
#footer .footer-top .footer-links ul a:hover {
  color: #ffc451;
}
#footer .footer-top .footer-newsletter form {
  margin-top: 30px;
  background: #fff;
  padding: 6px 10px;
  position: relative;
  border-radius: 4px;
}
#footer .footer-top .footer-newsletter form input[type=email] {
  border: 0;
  padding: 4px;
  width: calc(100% - 110px);
}
#footer .footer-top .footer-newsletter form input[type=submit] {
  position: absolute;
  top: 0;
  right: -2px;
  bottom: 0;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 20px;
  background: #ffc451;
  color: #151515;
  transition: 0.3s;
  border-radius: 0 4px 4px 0;
}
#footer .footer-top .footer-newsletter form input[type=submit]:hover {
  background: #ffcd6b;
}
#footer .copyright {
  text-align: center;
  padding-top: 30px;
}
#footer .credits {
  padding-top: 10px;
  text-align: center;
  font-size: 13px;
  color: #fff;
}
</style>

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <img src="{{ asset('foto/logo/1.jpg') }}" width="200" alt="">
            <div class="footer-info pt-3">
              <h3>GREEN GEO SINERGI</h3>
              <p>
                PT GREEN GEO SINERGI established in 2021 which also comprises the team from formerly known as PT TIERRA MADYA EKSPLORASI
              </p>
              {{-- <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div> --}}
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links ">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about') }}">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('service') }}">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('project') }}">Project list</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contact') }}">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('service') }}">Coal and Mineral Drilling Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('service') }}">Geotechnical Drilling and Soil Investigation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('service') }}">Surface Mapping
              </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('service') }}">Workshop</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Location</h4>
            <p>Perum Griya Permata Asri Jl. Kapuas 285, Balikpapan 76114</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.556952378227!2d116.88079!3d-1.236507!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df14672c7852d75%3A0xdd59926155391643!2sJl.%20Kapuas%20No.285%2C%20Gn.%20Bahagia%2C%20Kecamatan%20Balikpapan%20Selatan%2C%20Kota%20Balikpapan%2C%20Kalimantan%20Timur%2076114!5e0!3m2!1sen!2sid!4v1638619869191!5m2!1sen!2sid" width="350" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright text-muted">
        Copyright <strong><span>GREEN GEO SINERGI</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->