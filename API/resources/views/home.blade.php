
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Personnal | Blog | Diagui Tounkara</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootstrap 5 Template For Software Startups">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- FontAwesome JS-->
    <script defer src="{{asset('assets/fontawesome/js/all.min.js')}}"></script>

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/plugins/tiny-slider/tiny-slider.css')}}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.2/styles/atom-one-dark.min.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{asset('assets/css/theme.css')}}">

</head>

<body>
    <header class="header fixed-top">
        <div class="branding">
            <div class="container-fluid position-relative">
				<nav class="navbar navbar-expand-lg" >
                    <div class="site-logo"><a class="navbar-brand" href="index.html"><img class="logo-icon me-2" src="assets/images/site-logo.svg" alt="logo"><span class="logo-text">Coder<span class="text-alt">Pro</span></span></a></div>

					<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
	                    <span> </span>
	                    <span> </span>
	                    <span> </span>
	                </button>

					<div class="collapse navbar-collapse py-3 py-lg-0" id="navigation">
						<ul class="social-list list-inline mt-3 mt-lg-0 mb-lg-0 d-none d-xl-flex ms-lg-3 me-lg-3">
			                <li class="list-inline-item"><a href="#"><i class="fab fa-github fa-fw"></i></a></li>
				            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
			                <li class="list-inline-item"><a href="#"><i class="fab fa-slack fa-fw"></i></a></li>
			                <li class="list-inline-item"><a href="#"><i class="fab fa-product-hunt fa-fw"></i></a></li>
			            </ul><!--//social-list-->
						<ul class="navbar-nav ms-lg-auto">
							<li class="nav-item me-lg-4">
							    <a class="nav-link" href="features.html">Features</a>
							</li>
							<li class="nav-item me-lg-4">
							   <a class="nav-link" href="pricing.html">Pricing</a>
							</li>
							<li class="nav-item dropdown me-lg-4">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Docs
						        </a>
						        <ul class="dropdown-menu rounded shadow menu-animate slideIn" aria-labelledby="navbarDropdown">
						            <li><a class="dropdown-item has-icon" href="docs.html"><span class="theme-icon-holder me-2"><i class="fas fa-home fa-fw"></i></span>Docs Home</a></li>

						            <li><div class="dropdown-divider m-0"></div></li>

						            <li><a class="dropdown-item has-icon" href="docs-page.html#section-1"><span class="theme-icon-holder me-2"><i class="fas fa-map-signs fa-fw"></i></span>Introduction</a></li>
						            <li><a class="dropdown-item has-icon" href="docs-page.html#section-2"><span class="theme-icon-holder me-2"><i class="fas fa-arrow-down fa-fw"></i></span>Installation</a></li>
						            <li><a class="dropdown-item has-icon" href="docs-page.html#section-3"><span class="theme-icon-holder me-2"><i class="fas fa-box fa-fw"></i></span>APIs</a></li>
						            <li><a class="dropdown-item has-icon" href="docs-page.html#section-4"><span class="theme-icon-holder me-2"><i class="fas fa-cogs fa-fw"></i></span>Integrations</a></li>
						            <li><a class="dropdown-item has-icon" href="docs-page.html#section-5"><span class="theme-icon-holder me-2"><i class="fas fa-tools fa-fw"></i></span>Utilities</a></li>
						            <li><a class="dropdown-item has-icon" href="docs-page.html#section-6"><span class="theme-icon-holder me-2"><i class="fas fa-laptop-code fa-fw"></i></span>Web</a></li>
						            <li><a class="dropdown-item has-icon" href="docs-page.html#section-7"><span class="theme-icon-holder me-2"><i class="fas fa-tablet-alt fa-fw"></i></span>Mobile</a></li>
						            <li><a class="dropdown-item has-icon" href="docs-page.html#section-8"><span class="theme-icon-holder me-2"><i class="fas fa-book-reader fa-fw"></i></span>Resources</a></li>
						            <li><a class="dropdown-item has-icon" href="docs-page.html#section-9"><span class="theme-icon-holder me-2"><i class="fas fa-lightbulb fa-fw"></i></span>FAQs</a></li>
						        </ul>
						    </li>
							<li class="nav-item me-lg-4">
							    <a class="nav-link" href="contact.html">Contact</a>
							</li>
							<li class="nav-item me-lg-4">
							   <a class="nav-link" href="login.html">Login</a>
							</li>
							<li class="nav-item me-lg-0 mt-3 mt-lg-0">
							   <a class="btn btn-primary text-white" href="signup.html">Sign up</a>
							</li>
						</ul>
					</div>
				</nav>

            </div><!--//container-->
        </div><!--//branding-->
    </header><!--//header-->

    <section class="hero-section py-3 py-md-5">
	    <div class="container">
		    <div class="row">
			    <div class="col-12 col-lg-6 pt-3 mb-5 mb-lg-0">
				    <h1 class="site-headline font-weight-bold mb-3">Launch and promote your software project like a pro</h1>
				    <div class="site-tagline mb-4">Designed for entrepreneurial software developers, CoderPro is the ultimate Bootstrap 5 Template for promoting or selling your <span id="typewriter" class="text-primary font-weight-bold"></span>.</div>
				    <div class="cta-btns mb-lg-3">
					    <a class="btn btn-primary me-2 mb-3" href="pricing.html">Get Started Free<i class="fas fa-arrow-alt-circle-right ms-2"></i></a>
					    <a class="btn btn-secondary mb-3" href="docs.html">View Docs<i class="fas fa-arrow-alt-circle-right ms-2"></i></a>
				    </div>
			    </div>
			    <div class="col-12 col-lg-6 text-center">
				    <img class="hero-figure mx-auto" src="{{asset('assets/images/promo-figure-alt.svg')}}" alt="">
			    </div>
		    </div><!--//row-->
	    </div>
    </section><!--//hero-section-->

    <section class="benefits-section theme-bg-light py-5">

	    <div class="container">
		    <h3 class="mb-3 text-center font-weight-bold section-title">Made For Developers</h3>
		    <div class="mb-5 text-center section-intro">From Web Developers to App Developers</div>
		    <div class="row">
		        <div class="item col-12 col-md-6 col-lg-3">
				    <div class="item-inner rounded">
					    <div class="icon-holder text-center mx-auto mb-3">
					        <i class="fas fa-shapes"></i>
					    </div><!--//icon-holder-->
					    <h5 class="mb-3">Quick and Simple</h5>
					    <div>List your project's benefit here. You can change the icon above to any of the 1500+ <a class="theme-link" href="https://fontawesome.com/" target="_blank">free FontAwesome icons</a> available.</div>
					    <div class="mt-2"><a class="text-link" href="features.html">Learn more &rarr;</a></div>
				    </div><!--//item-inner-->
			    </div><!--//item-->

			    <div class="item col-12 col-md-6 col-lg-3">
				    <div class="item-inner rounded">
					    <div class="icon-holder text-center mx-auto mb-3">
					        <i class="fas fa-angle-double-right"></i>
					    </div><!--//icon-holder-->
					    <h5 class="mb-3">Lightening Fast</h5>
					    <div>List your project's benefit here. You can change the icon above to any of the 1500+ <a class="theme-link" href="https://fontawesome.com/" target="_blank">free FontAwesome icons</a> available.</div>
					    <div class="mt-2"><a class="text-link" href="features.html">Learn more &rarr;</a></div>
				    </div><!--//item-inner-->
			    </div><!--//item-->

			    <div class="item col-12 col-md-6 col-lg-3">
				    <div class="item-inner rounded">
					    <div class="icon-holder text-center mx-auto mb-3">
					        <i class="fas fa-wrench"></i>
					    </div><!--//icon-holder-->
					    <h5 class="mb-3">Extendable</h5>
					    <div>List your project's benefit here. You can change the icon above to any of the 1500+ <a class="theme-link" href="https://fontawesome.com/" target="_blank">free FontAwesome icons</a> available.</div>
					    <div class="mt-2"><a class="text-link" href="features.html">Learn more &rarr;</a></div>
				    </div><!--//item-inner-->
			    </div><!--//item-->

			    <div class="item col-12 col-md-6 col-lg-3">
				    <div class="item-inner rounded">
					    <div class="icon-holder text-center mx-auto mb-3">
					        <i class="fas fa-book"></i>
					    </div><!--//icon-holder-->
					    <h5 class="mb-3">Fully Documented</h5>
					    <div>List your project's benefit here. You can change the icon above to any of the 1500+ <a class="theme-link" href="https://fontawesome.com/" target="_blank">free FontAwesome icons</a> available.</div>
					    <div class="mt-2"><a class="text-link" href="docs.html">View docs &rarr;</a></div>
				    </div><!--//item-inner-->
			    </div><!--//item-->

		    </div><!--//row-->
		    <div class="pt-3 text-center">
			    <a class="btn btn-light" href="features.html">View All Features<i class="fas fa-arrow-alt-circle-right ms-2"></i></a>
		    </div>
	    </div>

    </section><!--//benefits-section-->

    <section class="how-section py-5">
	    <div class="container">
		    <h3 class="mb-3 text-center font-weight-bold section-title">How Does It Work</h3>
		    <div class="mb-5 text-center section-intro">You're only a few simple steps away</div>

		    <div class="row">
			    <div class="item col-12 col-md-4">
				    <div class="icon-holder">
					    <img src="assets/images/streamline-free/monitor-loading-progress.svg" alt="">
					    <div class="arrow-holder d-none d-lg-inline-block"></div>
				    </div><!--//icon-holder-->
				    <div class="desc p-3">
						<h5><span class="step-count me-2">1</span>Download</h5>
					    <p>The illustrations used in this section are from <a class="text-link" href="https://transactions.sendowl.com/stores/8764/151385" target="_blank">Streamline's free illustrations pack</a>. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
				    </div><!--//desc-->
			    </div><!--//item-->
			    <div class="item col-12 col-md-4">
				    <div class="icon-holder">
					    <img src="assets/images/streamline-free/monitor-window.svg" alt="">
					    <div class="arrow-holder d-none d-lg-inline-block"></div>
				    </div><!--//icon-holder-->
				    <div class="desc p-3">
						<h5><span class="step-count me-2">2</span>Customize</h5>
					    <p>The illustrations used in this section are from <a class="text-link" href="https://transactions.sendowl.com/stores/8764/151385" target="_blank">Streamline's free illustrations pack</a>. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
				    </div><!--//desc-->
			    </div><!--//item-->
			    <div class="item col-12 col-md-4">
				    <div class="icon-holder">
					    <img src="assets/images/streamline-free/monitor-cash-credit-card.svg" alt="">
				    </div><!--//icon-holder-->
				    <div class="desc p-3">
						<h5><span class="step-count me-2">3</span>Launch</h5>
					    <p>The illustrations used in this section are from <a class="text-link" href="https://transactions.sendowl.com/stores/8764/151385" target="_blank">Streamline's free illustrations pack</a>. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
				    </div><!--//desc-->
			    </div><!--//item-->
		    </div><!--//row-->
	    </div><!--//container-->
    </section><!--//how-section-->

    <section class="features-section py-5">
	    <div class="container">
		    <div class="row">
			    <div class="col-12 col-md-5 order-md-1">
				    <div class="nav flex-column" id="features-tabs" role="tablist" aria-orientation="vertical">
						<a class="nav-link active rounded" id="tab-1" data-bs-toggle="pill" href="#tab-content-1" role="tab" aria-controls="tab-1" aria-selected="true">
							<span class="tab-heading"><span class="tab-icon me-2"><i class="fab fa-github"></i></span>Github Example</span>
							<span class="tab-heading-desc">Showcase one of your project's best features here. You can embed your code snippets using Github gists.  </span>
						</a>
						<a class="nav-link rounded" id="tab-2" data-bs-toggle="pill" href="#tab-content-2" role="tab" aria-controls="tab-2" aria-selected="false">
							<span class="tab-heading"><span class="tab-icon me-2"><i class="fab fa-codepen"></i></span>Codepen Example</span>
							<span class="tab-heading-desc">Showcase one of your project's best features here. You can embed your code snippets using codepen.</span>
						</a>
						<a class="nav-link rounded" id="tab-3" data-bs-toggle="pill" href="#tab-content-3" role="tab" aria-controls="tab-3" aria-selected="false">
							<span class="tab-heading"><span class="tab-icon me-2"><i class="fas fa-code"></i></span>HighlightJS Example</span>
							<span class="tab-heading-desc">Showcase one of your project's best features here. You can embed your code snippets using highlight.js.</span>
						</a>
						<a class="nav-link rounded" id="tab-4" data-bs-toggle="pill" href="#tab-content-4" role="tab" aria-controls="tab-4" aria-selected="false">
							<span class="tab-heading"><span class="tab-icon me-2"><i class="fas fa-play"></i></span>Screencast Example</span>
							<span class="tab-heading-desc">Showcase one of your project's best features here. You can use screen recording software to create screencasts of your key features. </span>
						</a>
						<a class="nav-link rounded" id="tab-5" data-bs-toggle="pill" href="#tab-content-5" role="tab" aria-controls="tab-5" aria-selected="false">
							<span class="tab-heading"><span class="tab-icon me-2"><i class="fas fa-image"></i></span>Image Example</span>
							<span class="tab-heading-desc">Showcase one of your project's best features here. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </span>
						</a>
				    </div><!--//nav-->
			    </div><!--//col-3-->
			    <div class="col-12 col-md-7 order-md-0">
				    <div class="tab-content" id="features-content">

						<div class="tab-pane fade show active" id="tab-content-1" role="tabpanel" aria-labelledby="tab-1">
							<!-- ** Embed github code starts ** -->
							<script src="https://gist.github.com/xriley/fce6cf71edfd2dadc7919eb9c98f3f17.js"></script>
							<!-- ** Embed github code ends ** -->
							<div class="text-center mt-4">
							    <div class="caption shadow-lg theme-bg-dark text-white mx-auto"><i class="fas fa-info-circle me-2"></i>You can <a class="text-white text-link" href="https://gist.github.com/"  target="_blank">embed your code snippets using Github gists</a></div>
							</div>
						</div><!--//tab-pane-->

						<div class="tab-pane fade" id="tab-content-2" role="tabpanel" aria-labelledby="tab-2">

							<!-- ** Embed codepen starts ** -->
							<p class="codepen" data-height="420" data-theme-id="dark" data-default-tab="js,result" data-user="MillerTime" data-slug-hash="BexBbE" style="height: 420px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Menja">
							  <span>See the Pen <a href="https://codepen.io/MillerTime/pen/BexBbE/">
							  Menja</a> by Caleb Miller (<a href="https://codepen.io/MillerTime">@MillerTime</a>)
							  on <a href="https://codepen.io">CodePen</a>.</span>
							</p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                            <!-- ** Embed codepen ends ** -->

                            <div class="text-center mt-4">
							    <div class="caption shadow-lg theme-bg-dark text-white mx-auto"><i class="fas fa-info-circle me-2"></i>You can <a class="text-white" href="https://blog.codepen.io/documentation/features/embedded-pens/" target="_blank">embed your code snippets using codepen</a></div>
							</div>

                        </div><!--//tab-pane-->

                        <div class="tab-pane fade" id="tab-content-3" role="tabpanel" aria-labelledby="tab-3">
							<pre class="shadow-lg rounded">
                                <code class="json hljs">[
                                        {
                                            <span class="hljs-attr">"title"</span>: <span class="hljs-string">"apples"</span>,
                                            <span class="hljs-attr">"count"</span>: [<span class="hljs-number">12000</span>, <span class="hljs-number">20000</span>],
                                            <span class="hljs-attr">"description"</span>: {<span class="hljs-attr">"text"</span>: <span class="hljs-string">"..."</span>, <span class="hljs-attr">"sensitive"</span>: <span class="hljs-literal">false</span>}
                                        },
                                        {
                                            <span class="hljs-attr">"title"</span>: <span class="hljs-string">"oranges"</span>,
                                            <span class="hljs-attr">"count"</span>: [<span class="hljs-number">17500</span>, <span class="hljs-literal">null</span>],
                                            <span class="hljs-attr">"description"</span>: {<span class="hljs-attr">"text"</span>: <span class="hljs-string">"..."</span>, <span class="hljs-attr">"sensitive"</span>: <span class="hljs-literal">false</span>}
                                        }
                                    ]

                                </code>
                            </pre>
                            <div class="text-center mt-4">
							    <div class="caption shadow-lg theme-bg-dark text-white mx-auto"><i class="fas fa-info-circle me-2"></i>You can <a class="text-white text-link" href="https://github.com/highlightjs/highlight.js" target="_blank">embed your code snippets using highlight.js</a></div>
							</div>
						</div><!--//tab-pane-->

						<div class="tab-pane fade text-center" id="tab-content-4" role="tabpanel" aria-labelledby="tab-4">
							<figure class="figure mx-auto">
							    <img class="figure-img img-fluid rounded shadow-lg" src="assets/images/features/devcard-theme-darkmode.gif" alt="">
							    <figcaption class="figure-caption caption shadow-lg theme-bg-dark text-white mx-auto mt-3"><i class="fas fa-info-circle me-2"></i>This gif screencast is captured from our <a  class="text-white" href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/devcard-bootstrap-4-vcard-portfolio-template-for-software-developers/" target="_blank">DevCard theme</a></figcaption>
							</figure>
						</div><!--//tab-pane-->
						<div class="tab-pane fade text-center" id="tab-content-5" role="tabpanel" aria-labelledby="tab-5">
							<figure class="figure mx-auto">
								<img class="figure-img img-fluid rounded shadow-lg" src="assets/images/features/appify-theme-projects-overview.jpg" alt="">
								<figcaption class="figure-caption caption shadow-lg theme-bg-dark text-white mt-3"><i class="fas fa-info-circle me-2"></i>This screenshot is taken from <a class="text-white" href="https://themes.3rdwavemedia.com/bootstrap-templates/product/appify-bootstrap-4-admin-template-for-app-developers/" target="_blank">Appify theme</a>.</figcaption>
							</figure>
						</div><!--//tab-pane-->
				    </div><!--//tab-content-->
				</div><!--//col-9-->
		    </div><!--//row-->
	        <div class="pt-5 text-center">
			    <a class="btn btn-light" href="pricing.html">Get Started<i class="fas fa-arrow-alt-circle-right ms-2"></i></a>
		    </div>
	    </div><!--container-->
    </section><!--//features-section-->
    <div class="container"><hr></div>
    <section class="logos-section theme-bg-primary py-5 text-center">
	    <div class="container">
		    <h3 class="mb-3 text-center">You're In Good Company</h3>
	    <div class="section-intro mb-5">Join 500,000+ users around the world lorem ipsum dolor sit amet</div>
		    <div class="logos-row row mx-auto">
	            <div class="item col-6 col-md-4 mb-3 mb-lg-0">
		            <div class="item-inner">
		                <img src="assets/images/logos/logo-1.svg" alt="logo">
		            </div><!--//item-inner-->
	            </div><!--//item-->
	            <div class="item col-6 col-md-4 mb-3 mb-lg-0">
		            <div class="item-inner">
		                <img src="assets/images/logos/logo-2.svg" alt="logo">
		            </div><!--//item-inner-->
	            </div><!--//item-->
	            <div class="item col-6 col-md-4 mb-3 mb-lg-0">
		            <div class="item-inner">
		                <img src="assets/images/logos/logo-3.svg" alt="logo">
		            </div><!--//item-inner-->
	            </div><!--//item-->
	            <div class="item col-6 col-md-4 mb-3 mb-lg-0">
		            <div class="item-inner">
		                <img src="assets/images/logos/logo-4.svg" alt="logo">
		            </div><!--//item-inner-->
	            </div><!--//item-->
	            <div class="item col-6 col-md-4 mb-3 mb-lg-0">
		            <div class="item-inner">
		                <img src="assets/images/logos/logo-5.svg" alt="logo">
		            </div><!--//item-inner-->
	            </div><!--//item-->
	            <div class="item col-6 col-md-4 mb-3 mb-lg-0">
		            <div class="item-inner">
		                <img src="assets/images/logos/logo-6.svg" alt="logo">
		            </div><!--//item-inner-->
	            </div><!--//item-->
	        </div>
	    </div><!--//container-->
    </section><!--//logo-section-->

    <section class="testimonial-section pb-5">
	    <div class="container">
		    <div class="testimonials-slider-container position-relative mb-5">
			    <div class="testimonials-slider tiny-slider">
	                <div class="item">
		                <div class="item-inner rounded shadow-sm">
			                <div class="row source-holder">
				                <div class="source-profile-holder col-auto">
							        <img src="assets/images/users/user-1.jpg" class="source-profile" alt="">
				                </div><!--//col-->
							    <div class="col source-meta align-self-center ">
								    <div class="name">User Name</div>
								    <div class="info"><a class="text-link" href="#">@username</a></div>
							    </div><!--//col-->
							    <div class="source-icon"><i class="fab fa-twitter"></i></div>
							</div><!--//row-->

						    <div class="quote-holder">
							    <blockquote class="quote-content mb-0">
								    You can list user reviews or testimonials here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat vel quam cursus sagittis. Curabitur vestibulum mollis leo, sed ultricies felis egestas ac.
							    </blockquote>
						    </div><!--//quote-holder-->
		                </div><!--//item-inner-->
	                </div><!--//item-->
	                <div class="item">
		                <div class="item-inner rounded shadow-sm">
			                <div class="row source-holder">
				                <div class="source-profile-holder col-auto">
							        <img src="assets/images/users/user-2.jpg" class="source-profile" alt="">
				                </div><!--//col-->
							    <div class="col source-meta align-self-center ">
								    <div class="name">User Name</div>
								    <div class="info"><a class="text-link" href="#">@username</a></div>
							    </div><!--//col-->
							    <div class="source-icon"><i class="fab fa-twitter"></i></div>
							</div><!--//row-->

						    <div class="quote-holder">
							    <blockquote class="quote-content mb-0">
								    You can list user reviews or testimonials here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat vel quam cursus sagittis. Curabitur vestibulum mollis leo, sed ultricies felis egestas ac.
							    </blockquote>
						    </div><!--//quote-holder-->
		                </div><!--//item-inner-->
	                </div><!--//item-->
	                <div class="item">
		                <div class="item-inner rounded shadow-sm">
			                <div class="row source-holder">
				                <div class="source-profile-holder col-auto">
							        <img src="assets/images/users/user-3.jpg" class="source-profile" alt="">
				                </div><!--//col-->
							    <div class="col source-meta align-self-center ">
								    <div class="name">User Name</div>
								    <div class="info"><a class="text-link" href="#">@username</a></div>
							    </div><!--//col-->
							    <div class="source-icon"><i class="fab fa-twitter"></i></div>
							</div><!--//row-->

						    <div class="quote-holder">
							    <blockquote class="quote-content mb-0">
								    You can list user reviews or testimonials here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat vel quam cursus sagittis. Curabitur vestibulum mollis leo, sed ultricies felis egestas ac.
							    </blockquote>
						    </div><!--//quote-holder-->
		                </div><!--//item-inner-->
	                </div><!--//item-->
	                <div class="item">
		                <div class="item-inner rounded shadow-sm">
			                <div class="row source-holder">
				                <div class="source-profile-holder col-auto">
							        <img src="assets/images/users/user-4.jpg" class="source-profile" alt="">
				                </div><!--//col-->
							    <div class="col source-meta align-self-center ">
								    <div class="name">User Name</div>
								    <div class="info"><a class="text-link" href="#">@username</a></div>
							    </div><!--//col-->
							    <div class="source-icon"><i class="fab fa-twitter"></i></div>
							</div><!--//row-->

						    <div class="quote-holder">
							    <blockquote class="quote-content mb-0">
								    You can list user reviews or testimonials here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat vel quam cursus sagittis. Curabitur vestibulum mollis leo, sed ultricies felis egestas ac.
							    </blockquote>
						    </div><!--//quote-holder-->
		                </div><!--//item-inner-->
	                </div><!--//item-->
	                <div class="item">
		                <div class="item-inner rounded shadow-sm">
			                <div class="row source-holder">
				                <div class="source-profile-holder col-auto">
							        <img src="assets/images/users/user-5.jpg" class="source-profile" alt="">
				                </div><!--//col-->
							    <div class="col source-meta align-self-center ">
								    <div class="name">User Name</div>
								    <div class="info"><a class="text-link" href="#">@username</a></div>
							    </div><!--//col-->
							    <div class="source-icon"><i class="fab fa-twitter"></i></div>
							</div><!--//row-->

						    <div class="quote-holder">
							    <blockquote class="quote-content mb-0">
								    You can list user reviews or testimonials here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat vel quam cursus sagittis. Curabitur vestibulum mollis leo, sed ultricies felis egestas ac.
							    </blockquote>
						    </div><!--//quote-holder-->
		                </div><!--//item-inner-->
	                </div><!--//item-->
	                <div class="item">
		                <div class="item-inner rounded shadow-sm">
			                <div class="row source-holder">
				                <div class="source-profile-holder col-auto">
							        <img src="assets/images/users/user-6.jpg" class="source-profile" alt="">
				                </div><!--//col-->
							    <div class="col source-meta align-self-center ">
								    <div class="name">User Name</div>
								    <div class="info"><a class="text-link" href="#">@username</a></div>
							    </div><!--//col-->
							    <div class="source-icon"><i class="fab fa-twitter"></i></div>
							</div><!--//row-->

						    <div class="quote-holder">
							    <blockquote class="quote-content mb-0">
								    You can list user reviews or testimonials here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat vel quam cursus sagittis. Curabitur vestibulum mollis leo, sed ultricies felis egestas ac.
							    </blockquote>
						    </div><!--//quote-holder-->
		                </div><!--//item-inner-->
	                </div><!--//item-->
	                <div class="item">
		                <div class="item-inner rounded shadow-sm">
			                <div class="row source-holder">
				                <div class="source-profile-holder col-auto">
							        <img src="assets/images/users/user-7.jpg" class="source-profile" alt="">
				                </div><!--//col-->
							    <div class="col source-meta align-self-center ">
								    <div class="name">User Name</div>
								    <div class="info"><a class="text-link" href="#">@username</a></div>
							    </div><!--//col-->
							    <div class="source-icon"><i class="fab fa-twitter"></i></div>
							</div><!--//row-->

						    <div class="quote-holder">
							    <blockquote class="quote-content mb-0">
								    You can list user reviews or testimonials here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat vel quam cursus sagittis. Curabitur vestibulum mollis leo, sed ultricies felis egestas ac.
							    </blockquote>
						    </div><!--//quote-holder-->
		                </div><!--//item-inner-->
	                </div><!--//item-->
	                <div class="item">
		                <div class="item-inner rounded shadow-sm">
			                <div class="row source-holder">
				                <div class="source-profile-holder col-auto">
							        <img src="assets/images/users/user-8.jpg" class="source-profile" alt="">
				                </div><!--//col-->
							    <div class="col source-meta align-self-center ">
								    <div class="name">User Name</div>
								    <div class="info"><a class="text-link" href="#">@username</a></div>
							    </div><!--//col-->
							    <div class="source-icon"><i class="fab fa-twitter"></i></div>
							</div><!--//row-->

						    <div class="quote-holder">
							    <blockquote class="quote-content mb-0">
								    You can list user reviews or testimonials here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat vel quam cursus sagittis. Curabitur vestibulum mollis leo, sed ultricies felis egestas ac.
							    </blockquote>
						    </div><!--//quote-holder-->
		                </div><!--//item-inner-->
	                </div><!--//item-->
	            </div><!--//testimonials-slider-->
		    </div><!--//slider-container-->
            <div class="pt-5 text-center">
			    <a class="btn btn-light" href="pricing.html">Get Started<i class="fas fa-arrow-alt-circle-right ms-2"></i></a>
		    </div>
	    </div><!--//container-->
    </section><!--//testiomonial-section-->
    <div class="container"><hr></div>
    <section class="integration-section text-center py-5">
	    <div class="container">
		    <h3 class="mb-3">Seamless Integrations</h3>
		    <div class="section-intro mb-3">Section intro goes here lorem ipsum. <br>You can download brand logos from <a href="https://worldvectorlogo.com/" target="_blank">worldvectorlogo.com</a></div>
		    <div class="integration-list row justify-content-center py-5">
			    <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5 top-line-lg"><img class="shadow rounded-circle" src="assets/images/logos/slack.svg" alt=""></div>
			    <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5 bottom-line-lg"><img class="shadow rounded-circle" src="assets/images/logos/jira.svg" alt=""></div>
			    <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5 top-line-lg"><img class="shadow rounded-circle" src="assets/images/logos/trello.svg" alt=""></div>
			    <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5 bottom-line-lg"><img class="shadow rounded-circle" src="assets/images/logos/aws.svg" alt=""></div>
			    <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5 top-line-lg"><img class="shadow rounded-circle" src="assets/images/logos/bootstrap.svg" alt=""></div>
			    <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5"><img class="shadow rounded-circle" src="assets/images/logos/wordpress.svg" alt=""></div>
			    <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5 top-line-lg"><img class="shadow rounded-circle" src="assets/images/logos/shopify.svg" alt=""></div>
			    <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5 bottom-line-lg"><img class="shadow rounded-circle" src="assets/images/logos/ionic.svg" alt=""></div>
			    <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5 top-line-lg"><img class="shadow rounded-circle" src="assets/images/logos/paypal.svg" alt=""></div>
			    <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5 bottom-line-lg"><img class="shadow rounded-circle" src="assets/images/logos/stripe.svg" alt=""></div>
			    <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5"><img class="shadow rounded-circle" src="assets/images/logos/apple-pay.svg" alt=""></div>
		    </div><!--//row-->

		    <div class="pt-3 text-center">
			    <a class="btn btn-light" href="docs.html">View Docs<i class="fas fa-arrow-alt-circle-right ms-2"></i></a>
		    </div>
	    </div>
    </section><!--//intergration-section-->


    <section class="cta-section text-center py-5 theme-bg-dark position-relative">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <h3 class="mb-3 text-white mb-3">Get Started in No Time</h3>
		    <div class="section-intro text-white mb-3 single-col-max mx-auto">CoderPro makes it super easy to get your software project online, so you can start promoting or selling your digital product to your audience.</div>
		    <div class="pt-3 text-center">
			    <a class="btn btn-light" href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/coderpro-bootstrap-4-startup-template-for-software-projects/">Get Started<i class="fas fa-arrow-alt-circle-right ms-2"></i></a>
		    </div>
	    </div>
    </section><!--//cta-section-->



    <footer class="footer">
	    <div class="container py-5 mb-3">
		    <div class="row">
			    <div class="footer-col col-6 col-lg-3">
				    <h4 class="col-heading">Products</h4>
				    <ul class="list-unstyled">
					    <li><a class="text-link" href="#">Bootstrap Themes</a></li>
					    <li><a class="text-link" href="#">Design Templates</a></li>
					    <li><a class="text-link" href="#">Live Demo</a></li>
					    <li><a class="text-link" href="#">Showcase</a></li>

				    </ul>
			    </div><!--//footer-col-->
			    <div class="footer-col col-6 col-lg-3">
				    <h4 class="col-heading">Developers</h4>
				    <ul class="list-unstyled">
					    <li><a class="text-link" href="#">Pricing</a></li>
					    <li><a class="text-link" href="#">APIs</a></li>
					    <li><a class="text-link" href="#">FAQs</a></li>
					    <li><a class="text-link" href="#">Support</a></li>
				    </ul>
			    </div><!--//footer-col-->
			    <div class="footer-col col-6 col-lg-3">
				    <h4 class="col-heading">Resources</h4>
				    <ul class="list-unstyled">
					    <li><a class="text-link" href="#">Docs</a></li>
					    <li><a class="text-link" href="#">Freebies</a></li>
					    <li><a class="text-link" href="#">Affiliates</a></li>
					    <li><a class="text-link" href="#">Community</a></li>
				    </ul>
			    </div><!--//footer-col-->
			    <div class="footer-col col-6 col-lg-3">
				    <h4 class="col-heading">CoderPro</h4>
				    <ul class="list-unstyled">
					    <li><a class="text-link" href="#">About Us</a></li>
					    <li><a class="text-link" href="#">Contact Us</a></li>
					    <li><a class="text-link" href="#">Privacy</a></li>
					    <li><a class="text-link" href="#">Terms of Services</a></li>
				    </ul>

			    </div><!--//footer-col-->
		    </div><!--//row-->
	    </div><!--//container-->
	    <div class="container">
		    <hr>
	    </div>
	    <div class="newsletter-section py-5">
		    <div class="container text-center">
			    <h4 class="mb-2">Join Our Newsletter</h4>
			    <div class="section-intro mb-2">Sign up to receive latest updates, features, and news!</div>
		        <form class="signup-form row gx-1 justify-content-center pt-3">
                    <div class="col-12 col-md-auto">
                        <label class="sr-only" for="semail">Email address</label>
                        <input type="email" id="semail" name="semail1" class="form-control semail" placeholder="Enter email">
                    </div>
                    <div class="col-12 col-md-auto mt-2 mt-md-0">
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                </form>
		    </div>
	    </div><!--//newsletter-section-->
	    <div class="footer-bottom text-center pb-5">
	        <small class="copyright">Template Copyright &copy; <a class="text-link" href="https://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a></small>
	        <ul class="social-list list-unstyled pt-4 mb-0">
			    <li class="list-inline-item"><a href="#"><i class="fab fa-github fa-fw"></i></a></li>
	            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
	            <li class="list-inline-item"><a href="#"><i class="fab fa-slack fa-fw"></i></a></li>
	            <li class="list-inline-item"><a href="#"><i class="fab fa-product-hunt fa-fw"></i></a></li>
	            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f fa-fw"></i></a></li>
	            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram fa-fw"></i></a></li>
	        </ul><!--//social-list-->
	    </div>
    </footer>

    <!-- Javascript -->
    <script src="{{asset('assets/plugins/popper.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>


    <!-- Page Specific JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script src="{{asset('assets/js/highlight-custom.js')}}"></script>
    <script src="{{asset('assets/plugins/typewriterjs/dist/core.js')}}"></script>
    <script src="{{asset('assets/js/typewriter-custom.js')}}"></script>
    <script src="{{asset('assets/plugins/tiny-slider/min/tiny-slider.js')}}"></script>
	<script src="{{asset('assets/js/tinyslider-custom.js')}}"></script>



</body>
</html>

