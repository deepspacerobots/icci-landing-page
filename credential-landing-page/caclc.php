<?php

/**
 * Template Name: Landing Page - CACLC
 */
require_once get_template_directory() . '/credential-landing-page/lib/functions.php';
?>
<?php get_template_part('/credential-landing-page/partials/header'); ?>
<!-- NAV | css:/components/nav.scss -->
<?php get_template_part('/credential-landing-page/partials/nav'); ?>

<main class="layout">
	<header class="course-hero">
		<div class="container-lg">
			<div class="course-hero-container">
				<div class="course-circle"></div>
				<div class="course-description-container">
					<div class="course-pillar-container">
						<h3 class="course-number">1</h3>
						<img src="/wp-content/themes/icci/credential-landing-page/public/img/pillar.png" alt="A pillar" />
					</div>
					<div class="course-text-container">
						<h5 class="course-subtitle">Learn more about CACLC</h5>
						<h1 class="course-title">
							Credentialed Associate <br />
							<span class="gradient-text">Christian Life Coach</span>
						</h1>
						<div class="course-hero-buttons">
							<a class="course-action-button button" href="https://iccicoaching.com/cart/?clear-cart=true&add-to-cart=542,2152,2154,1201,19650">
								<img src="/wp-content/themes/icci/credential-landing-page/public/img/icons/cart-dark.svg" alt="" />Add to cart
							</a>
							<a class="course-action-button button button-outline course-video-button" target="__blank" href="https://player.vimeo.com/video/694178844?h=d040ec0df6&title=0&byline=0&portrait=0">
								<img src="/wp-content/themes/icci/credential-landing-page/public/img/icons/circle-play.svg" alt="" />Watch video
							</a>
						</div>
					</div>
				</div>
				<div class="course-video-container">
					<div style="padding: 56.25% 0 0 0; position: relative">
						<iframe src="https://player.vimeo.com/video/694178844?h=d040ec0df6&title=0&byline=0&portrait=0" style="
										position: absolute;
										top: 0;
										left: 0;
										width: 100%;
										height: 100%;
									" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
					</div>
					<script src="https://player.vimeo.com/api/player.js"></script>
				</div>
			</div>
		</div>
	</header>

	<!-- Roadmap | css:/components/roadmap.scss -->
	<section id="roadmap" class="section-roadmap">
		<div class="container-lg">
			<h5 class="roadmap-subtitle">Six steps</h5>
			<h2 class="gradient-text roadmap-title">Roadmap To Credentialing</h2>
			<div class="roadmap-steps-container">
				<article class="roadmap-step-card roadmap-step-card-selected">
					<h4 class="roadmap-step-number-circle gradient-text">
						<span></span>1
					</h4>
					<p class="roadmap-subtitle">Step one</p>
					<h3 class="roadmap-step-title gradient-text">Purchase Bundle</h3>
					<p class="roadmap-step-description">
						We've put together everything you need to start your journey as
						a Christian Life Coach.
					</p>
				</article>
				<article class="roadmap-step-card">
					<h4 class="roadmap-step-number-circle gradient-text">
						<span></span>2
					</h4>
					<p class="roadmap-subtitle">Step two</p>
					<h3 class="roadmap-step-title gradient-text">
						Education: 30 hours (3 Courses)
					</h3>
					<p class="roadmap-step-description">
						Learn core life coaching skills with appropriate theory,
						knowledge, and professional practice through our 3 core courses
						(Foundations 1, 2, and 3).
					</p>
				</article>
				<article class="roadmap-step-card">
					<h4 class="roadmap-step-number-circle gradient-text">
						<span></span>3
					</h4>
					<p class="roadmap-subtitle">Step three</p>
					<h3 class="roadmap-step-title gradient-text">
						Mentoring: 3 Sessions
					</h3>
					<p class="roadmap-step-description">
						These sessions must be completed with an ICCI-approved
						Master-level Mentor of Christian Life Coaching at an additional
						cost.
					</p>
				</article>
				<article class="roadmap-step-card">
					<h4 class="roadmap-step-number-circle gradient-text">
						<span></span>4
					</h4>
					<p class="roadmap-subtitle">Step four</p>
					<h3 class="roadmap-step-title gradient-text">
						Field Experience: 25 hours
					</h3>
					<p class="roadmap-step-description">
						These hours must be conducted while practicing Christian Life
						Coaching.
					</p>
					<p class="roadmap-step-description">
						Your mentor helps refine your coaching skills and advises you on
						how to structure your business during this field experience.
					</p>
				</article>
				<article class="roadmap-step-card">
					<h4 class="roadmap-step-number-circle gradient-text">
						<span></span>5
					</h4>
					<p class="roadmap-subtitle">Step five</p>
					<h3 class="roadmap-step-title gradient-text">4 references</h3>
					<p class="roadmap-step-description">
						You will be asked for email addresses of 4 reference (personal,
						professional, pastoral, and mentor of Life Coaching).
					</p>
				</article>
				<article class="roadmap-step-card">
					<h4 class="roadmap-step-number-circle gradient-text">
						<span></span>6
					</h4>
					<p class="roadmap-subtitle">Step six</p>
					<h3 class="roadmap-step-title gradient-text">
						Complete Application
					</h3>
					<p class="roadmap-step-description">
						With your purchased bundle you will receive the application, and
						be eligible to apply for your credential pending a review, a
						savings value of <strong>$150</strong>.
					</p>
				</article>
			</div>

			<em class="roadmap-comment">* You must maintain 15 CE hours annually to keep certification.</em>
		</div>
	</section>

	<!-- FAQ | css:/components/course.scss -->
	<section id="get-started" class="course-buy-section">
		<div class="container-lg">
			<div class="course-buy-container">
				<h4 class="gradient-text course-buy-title">
					Ready To Get Started?
				</h4>
				<a class="button course-action-button" href="https://iccicoaching.com/cart/?clear-cart=true&add-to-cart=542,2152,2154,1201,19650">
					<img src="/wp-content/themes/icci/credential-landing-page/public/img/icons/cart-dark.svg" alt="" />Add to cart
				</a>
			</div>
		</div>
	</section>

	<!-- FAQ | css:/components/faq.scss -->
	<?php get_template_part('/credential-landing-page/partials/faq'); ?>

	<!-- SUPPORT | css:/components/support.scss -->
	<section class="section-support">
		<div class="container-md">
			<div class="support-container">
				<h4 class="support-title">Previous Training & Experience?</h4>
				<p class="support-description">Find out how to get credit.</p>
				<a class="support-button button button-icon" href="https://iccicoaching.com/contact/">
					<img src="/wp-content/themes/icci/credential-landing-page/public/img/icons/envelope.svg" alt="" />Contact Support
				</a>
			</div>
		</div>
	</section>
</main>

<!-- FOOTER | css:/components/footer.scss -->
<footer class="footer">
	<div class="container-lg">
		<div class="footer-container">
			<div>
				<a class="footer-logo-link" href="/getstarted"><img src="/wp-content/themes/icci/credential-landing-page/public/img/1cci-logo.png" class="footer-logo" alt="ICCI logo" /></a>
				<p class="footer-description">
					Bringing Life and Living Into Focus, Maximizing Each Person’s
					God-Given Potential
				</p>
			</div>
			<nav>
				<ul class="footer-nav-list">
					<li>Navigation</li>
					<li><a href="#roadmap">Roadmap</a></li>
					<li><a href="#get-started">Get Started</a></li>
					<li><a href="#faq">FAQs</a></li>
				</ul>
			</nav>
		</div>
		<div class="footer-sub">
			<p>© 2024 International Christian Coaching Institute</p>
			<div class="footer-sub-links">
				<a href="https://iccicoaching.com/terms-of-service/" target="_blank">Terms of Service</a>
				<a href="https://iccicoaching.com/disclaimer-and-disclosure/" target="_blank">Disclaimer and Discloser</a>
				<a href="https://iccicoaching.com/privacy-policy/" target="_blank">Privacy Policy</a>
			</div>
		</div>
	</div>
</footer>
<?php get_template_part('/credential-landing-page/partials/footer'); ?>