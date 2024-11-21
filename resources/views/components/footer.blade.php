@unless(request()->is('register') || request()->is('login') || request()->is('transaction'))
<footer>
    <!-- Footer Start-->
    <div class="footer-area section-bg" data-background="{{ asset('assets/img/gallery/section_bg02.png') }}">
        <div class="container">
            <div class="footer-top footer-padding" style="padding-top: 20px; padding-bottom: 15px;">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-8">
                        <div class="single-footer-caption mb-20">
                            <!-- Logo -->
                            <div class="footer-logo" style="text-align: right;">
                                <a href="/">
                                    <img src="{{ asset('assets/img/logo/logo2-footer.png') }}" alt="Logo"
                                        style="max-width: 300px; margin-bottom: 10px; padding-right: 10px;">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-20">
                            <div class="footer-tittle">
                                <h4 style="font-size: 12px;">Navigation</h4>
                                <ul>
                                    <li><a href="#" style="font-size: 12px;">Home</a></li>
                                    <li><a href="#" style="font-size: 12px;">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-20">
                            <div class="footer-tittle">
                                <h4 style="font-size: 12px;">Useful Links</h4>
                                <ul>
                                    <li><a href="#" style="font-size: 12px;">Registration</a></li>
                                    <li><a href="#" style="font-size: 12px;">Login</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Instagram -->
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-20">
                            <div class="footer-tittle">
                                <h4 style="font-size: 12px;">Instagram Feed</h4>
                            </div>
                            <div class="instagram-gellay">
                                <ul class="insta-feed">
                                    <li><a href="#"><img src="{{ asset('assets/img/gallery/instagram1.png') }}" alt="" style="max-width: 50px; height: auto;"></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/img/gallery/instagram2.png') }}" alt="" style="max-width: 50px; height: auto;"></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/img/gallery/instagram3.png') }}" alt="" style="max-width: 50px; height: auto;"></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/img/gallery/instagram4.png') }}" alt="" style="max-width: 50px; height: auto;"></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/img/gallery/instagram5.png') }}" alt="" style="max-width: 50px; height: auto;"></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/img/gallery/instagram6.png') }}" alt="" style="max-width: 50px; height: auto;"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom" style="padding-top: 5px; padding-bottom: 5px;">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-xl-9 col-lg-8">
                        <div class="footer-copy-right" style="font-size: 10px;">
                            <p>
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> Restaurant BIM <i class="fa fa-heart" aria-hidden="true"></i>
                                by <a href="https://colorlib.com" target="_blank" style="font-size: 10px;">Alfa, Fatih, Puput, Sabrina, Zahra</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <!-- Footer Social -->
                        <div class="footer-social f-right">
                            <span style="font-size: 10px;">Follow Us</span>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
@endunless
