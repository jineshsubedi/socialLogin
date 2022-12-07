<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JINESH SUBEDI</title>
    <link href="https://fonts.googleapis.com/css?family=Hind+Vadodara:400,600,700|Frank+Ruhl+Libre:700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/dist/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dist/css/my_style.css')}}">
    <!-- Favicons -->
    <link href="assets/img/jnslogo.png" rel="icon">
    <link href="assets/img/jnslogo.png" rel="apple-touch-icon">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <style>
        .loginBtn {
            text-decoration: none;
            color: #504f4f;
            font-weight: 400;
            border-bottom: 1px solid #c4c4ff;
        }
        .loginBtn:hover {
            text-decoration: none;
            color: #504f4f;
            border-bottom: 1px solid #c4c4ff;
        }
    </style>
</head>
<body class="is-boxed has-animations">
    <div class="body-wrap boxed-container">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="http://jineshsubedi.com.np/">
                                <img src="assets/img/jnslogo.png" alt="logo" width="100px;">
                            </a>
                        </h1>
                    </div>
                    <p style="z-index:99909;">
                    @auth
                        <a href="{{route('dashboard')}}" class="loginBtn">DASHBOARD</a>
                    @else 
                        <a href="{{route('login')}}" class="loginBtn"><i class="fa fa-sign-in" aria-hidden="true"></i> LOGIN</a>
                    @endauth
                    </p>
                </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
						<div class="hero-copy">
	                        <h1 class="hero-title mt-0">Welome To Social Login Page</h1>
	                        <p class="hero-paragraph"> 
                            You can <b>connect via Facebook and Linkedin</b> and during the connection your <b>Name, Email and Profile Image</b> are only accessible.
                            </p>

                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="btn btn-sm btn-success">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="btn btn-sm btn-primary"><i class="fa fa-sign-in" aria-hidden="true"></i> &nbsp; Explore</a>
                                    @endauth
                                </div>
                            @endif
						</div>
						<div class="hero-illustration">
							<div class="hero-shapes is-revealing">
								<svg width="724" height="672" viewBox="0 0 724 672" xmlns="http://www.w3.org/2000/svg">
								    <defs>
								        <linearGradient x1="87.336%" y1="7.447%" x2="66.279%" y2="44.56%" id="hero-shapes-a">
								            <stop stop-color="#A3A9F1" offset="0%"/>
								            <stop stop-color="#6A72E4" offset="100%"/>
								        </linearGradient>
								        <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="hero-shapes-b">
								            <stop stop-color="#82DDFC" offset="0%"/>
								            <stop stop-color="#0181F6" offset="100%"/>
								        </linearGradient>
								    </defs>
							        <path d="M675.09 555.602c101.344 0-138.133-250.973-138.133-352.317S664.223.91 562.879.91C461.535.91.543 80.5.543 181.844S573.746 555.602 675.09 555.602z" fill="url(#hero-shapes-a)"/>
							        <path d="M667.21 644.029c111.82-59.115-15.77-185.344-15.77-321.482 0-136.138-.284-340.372-136.422-321.106C378.88 20.708 433.487 224.707 85.874 306.688c-347.614 81.98 469.517 396.456 581.336 337.34z" transform="matrix(-1 0 0 1 723.483 15)" fill="url(#hero-shapes-b)"/>
							        <path d="M532.631 556.964c23.168-12.535-176.81-30.951-173.117-8.023-16.445-27.256-.668 111.452-1.357 97.18-17.805 14.436 202.398 23.384 180.678 25.205 4.694-22.81 13.508-143.183-15.392-139.49-1.105-3.22 20.111-5.785 9.188 25.128" fill="#FFE5F1"/>
							        <path d="M500.754 531.682c23.168-12.535-176.81-30.95-173.117-8.023-16.445-27.256-.668 111.452-1.357 97.18-17.805 14.436 202.398 23.384 180.678 25.205 4.694-22.809 13.508-143.183-15.392-139.49-1.105-3.219 20.111-5.785 9.188 25.128m-1.834 1.51c22.705-12.117 22.727 86.08 26.346 108.244-16.116-26.348-196.655-8.263-197.329-22.06-17.45 13.955 2.35-93.395-18.937-91.634 4.601-22.049 209.238-22.41 180.916-18.84" fill="#FF6DB1"/>
								</svg>
							</div>
                            <div class="hero-media is-revealing" style="perspective:800px">
                                    <img src="{{asset('assets/img/jinesh.jpg')}}" width="100%">
                                <!-- <svg width="528" height="401" viewBox="0 0 528 401" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <filter x="-500%" y="-500%" width="1000%" height="1000%" filterUnits="objectBoundingBox" id="dropshadow-media">
                                            <feOffset dy="16" in="SourceAlpha" result="shadowOffsetOuter"/>
                                            <feGaussianBlur stdDeviation="24" in="shadowOffsetOuter" result="shadowBlurOuter"/>
                                            <feColorMatrix values="0 0 0 0 0.06 0 0 0 0 0.13 0 0 0 0 0.34 0 0 0 0.14 0" in="shadowBlurOuter"/>
                                        </filter>
                                    </defs>
                                    <path fill="#FFF" d="M0 52L528 .832v399.336L0 349z" style="mix-blend-mode:multiply;filter:url(#dropshadow-media)"/>
									<path fill="#FFF" d="M0 52L528 .832v399.336L0 349z"/>
								</svg> -->
							</div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="site-footer-inner">
                    <div class="brand footer-brand">
                        <a href="#">
                            <svg width="44" height="32" viewBox="0 0 44 32" xmlns="http://www.w3.org/2000/svg">
                                <title>jineshsubedi.com.np</title>
                                <defs>
                                    <linearGradient x1="97.927%" y1="0%" x2="1.669%" y2="0%" id="logo-footer-a">
                                        <stop stop-color="#82DDFC" offset="0%"/>
                                        <stop stop-color="#0181F6" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="96.64%" y1="1.497%" x2="0%" y2="44.56%" id="logo-footer-b">
                                        <stop stop-color="#A3A9F1" offset="0%"/>
                                        <stop stop-color="#6A72E4" offset="99.203%"/>
                                        <stop stop-color="#6A6FEC" offset="100%"/>
                                    </linearGradient>
                                </defs>
                                <!-- <path d="M0 16h8a8 8 0 1 0 16 0h8c0 8.837-7.163 16-16 16S0 24.837 0 16z" fill="url(#logo-footer-a)"/>
                                <path d="M12 0h8a8 8 0 1 0 16 0h8c0 8.837-7.163 16-16 16S12 8.837 12 0z" fill="url(#logo-footer-b)" transform="rotate(180 28 8)"/> -->
                            </svg>
                        </a>
                    </div>
                    <!-- <ul class="footer-links list-reset">
                        <li>
                            <a href="#">Contact</a>
                        </li>
                        <li>
                            <a href="http://jineshsubedi.com.np/mp3/">mp3</a>
                        </li>
                        <li>
                            <a href="http://kishorthumbhangphe.com.np/?i=1">Art page</a>
                        </li>
                    </ul> -->
                    <ul class="footer-social-links list-reset">
                        <li>
                            <a href="https://www.facebook.com/jinesh1094" target="_blank">
                                <span class="screen-reader-text">Facebook</span>
                                <i class="fa fa-facebook-official" width="40" height="40" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/jinesh.officials" target="_blank">
                                <span class="screen-reader-text">Instagram</span>
                                <i class="fa fa-instagram" width="40" height="40" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/jineshsubedi" target="_blank">
                                <span class="screen-reader-text">Git Hub</span>
                                <i class="fa fa-github" width="40" height="40" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="footer-copyright">&copy; 2018 jinesh subedi, all rights reserved</div>
                </div>
            </div>
        </footer>
    </div>

    <script src="assets/dist/js/main.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>
</html>
