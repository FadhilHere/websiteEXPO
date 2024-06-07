

<!-- =========== Navbar Start =========== -->
<header id="navbar" class="@@link-color fixed top-0 inset-x-0 flex items-center z-40 w-full lg:bg-transparent bg-white transition-all py-5">
    <div class="container">
        <nav class="flex items-center">
            <!-- Navbar Brand Logo -->
            <a href="index.html">
                @include('partials.logo')
            </a>

            <!-- Nevigation Menu -->
            <div class="hidden lg:block ms-auto">
                <ul class="navbar-nav flex gap-x-3 items-center justify-center">
                    @foreach($loadHeader as $header)
                        <li class="nav-item">
                            @if(isset($loadDropdown[$header->judul]))
                                <a href="javascript:void(0);" class="nav-link after:absolute hover:after:-bottom-10 after:inset-0" data-fc-trigger="hover" data-fc-target="dropdownMenu{{ $header->id }}" data-fc-type="dropdown" data-fc-placement="bottom">
                                    {{ $header->judul }} <i class="fa-solid fa-angle-down ms-2 align-middle"></i>
                                </a>
                                <div id="dropdownMenu{{ $header->id }}" class="hidden opacity-0 mt-4 fc-dropdown-open:opacity-100 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all bg-white rounded-lg shadow-lg border p-2 w-48 space-y-1.5">
                                    @foreach($loadDropdown[$header->judul] as $dropdown)
                                        <div class="nav-item">
                                            <a class="nav-link" href="{{ route('show', $dropdown->judul) }}">{{ $dropdown->judul }}</a>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <a class="nav-link" href="{{ route('show', $header->judul) }}">{{ $header->judul }}</a>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>






            <!-- Download Button -->
            <div class="hidden lg:flex items-center ms-3">
                <a href="https://1.envato.market/prompt-tailwind" target="_blank" class="bg-primary text-white px-4 py-2 rounded inline-flex items-center text-sm">Login</a>
            </div>

            <!-- Moblie Menu Toggle Button (Offcanvas Button) -->
            <div class="lg:hidden flex items-center ms-auto px-2.5">
                <button type="button" data-fc-target="mobileMenu" data-fc-type="offcanvas">
                    <i class="fa-solid fa-bars text-2xl text-gray-500"></i>
                </button>
            </div>
        </nav>
    </div>
</header>
<!-- =========== Navbar End =========== -->

<!-- =========== Mobile Menu Start (Offcanvas) =========== -->
<div id="mobileMenu" class="fc-offcanvas-open:translate-x-0 translate-x-full fixed top-0 end-0 transition-all duration-200 transform h-full w-full max-w-md z-50 bg-white border-s hidden">
    <div class="flex flex-col h-full divide-y-2 divide-gray-200">
        <!-- Mobile Menu Topbar Logo (Header) -->
        <div class="p-6 flex items-center justify-between">
            <a href="index.html">
                <img src="assets/images/logo-dark.png" class="h-8" alt="Logo">
            </a>

            <button data-fc-dismiss class="flex items-center px-2">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>

        <!-- Mobile Menu Link List -->
        <div class="p-6 overflow-scroll h-full">
            <ul class="navbar-nav flex flex-col gap-2" data-fc-type="accordion">
                <!-- Home Page Link -->
                <li class="nav-item">
                    <a href="index.html" class="nav-link">Home</a>
                </li>

                <!-- Landing Page -->
                <li class="nav-item">
                    <a href="javascript:void(0)" data-fc-type="collapse" class="nav-link">
                        Landing <i class="fa-solid fa-angle-down ms-auto align-middle transition-all fc-collapse-open:rotate-180"></i>
                    </a>

                    <ul class="hidden overflow-hidden transition-[height] duration-300 space-y-2">
                        <li class="nav-item mt-2">
                            <a class="nav-link" href="home-app.html">App</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="home-saas.html">Saas Modern</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="home-saas2.html">Saas Classic</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="home-startup.html">Startup</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="home-software.html">Software</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="home-agency.html">Agency</a>
                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href="home-coworking.html">Coworking</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="home-crypto.html">Crypto</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="home-marketing.html">Marketing</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="home-portfolio.html">Portfolio</a>
                        </li>
                    </ul>
                </li>

                <!-- Inner Page -->
                <li class="nav-item">
                    <a href="javascript:void(0)" data-fc-type="collapse" class="nav-link">
                        Pages <i class="fa-solid fa-angle-down ms-auto align-middle transition-all fc-collapse-open:rotate-180"></i>
                    </a>

                    <ul class="hidden overflow-hidden transition-[height] duration-300 space-y-2">
                        <li class="nav-item mt-2">
                            <a class="nav-link" href="company.html">Company</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="career.html">Career</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="pricing.html">Pricing</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="help.html">Help</a>
                        </li>
                    </ul>
                </li>

                <!-- Blog Page -->
                <li class="nav-item">
                    <a href="javascript:void(0)" data-fc-type="collapse" class="nav-link">
                        Blog Page <i class="fa-solid fa-angle-down ms-auto align-middle transition-all fc-collapse-open:rotate-180"></i>
                    </a>

                    <ul class="hidden overflow-hidden transition-[height] duration-300 space-y-2">
                        <li class="nav-item mt-2">
                            <a class="nav-link" href="blog.html">Blog</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="blog-post.html">Blog Post</a>
                        </li>
                    </ul>
                </li>

                <!-- Portfolio Page -->
                <li class="nav-item">
                    <a href="javascript:void(0)" data-fc-type="collapse" class="nav-link">
                        Portfolio <i class="fa-solid fa-angle-down ms-auto align-middle transition-all fc-collapse-open:rotate-180"></i>
                    </a>

                    <ul class="hidden overflow-hidden transition-[height] duration-300 space-y-2">
                        <li class="nav-item mt-2">
                            <a class="nav-link" href="portfolio-grid.html">Portfolio Grid</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="portfolio-masonry.html">Portfolio Masonry</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="portfolio-item.html">Portfolio Item</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="account-confirm.html">Confirm Account</a>
                        </li>
                    </ul>
                </li>

                <!-- Auth Page -->
                <li class="nav-item">
                    <a href="javascript:void(0)" data-fc-type="collapse" class="nav-link">
                        Account <i class="fa-solid fa-angle-down ms-auto align-middle transition-all fc-collapse-open:rotate-180"></i>
                    </a>

                    <ul class="hidden overflow-hidden transition-[height] duration-300 space-y-2">
                        <li class="nav-item mt-2">
                            <a class="nav-link" href="account-login.html">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="account-signup.html">Sign Up</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="account-forget-password.html">Forget Password</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="account-confirm.html">Confirm Account</a>
                        </li>
                    </ul>
                </li>

                <!-- Contact Page Link -->
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact us</a>
                </li>
            </ul>
        </div>

        <!-- Mobile Menu Download Button (Footer) -->
        <div class="p-6 flex items-center justify-center">
            <a href="https://1.envato.market/prompt-tailwind" target="_blank" class="bg-primary w-full text-white p-3 rounded flex items-center justify-center text-sm">Download</a>
        </div>
    </div>
</div>
<!-- =========== Mobile Menu End =========== -->
