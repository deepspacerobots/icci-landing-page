<?php

/**
 * Template Name: Landing Page - CPCLC
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
						<h3 class="course-number">2</h3>
						<img src="/wp-content/themes/icci/credential-landing-page/public/img/pillar.png" alt="A pillar" />
					</div>
					<div class="course-text-container">
						<h5 class="course-subtitle">Learn more about CPCLC</h5>
						<h1 class="course-title">
							Credentialed Professional <br />
							<span class="gradient-text">Christian Life Coach</span>
						</h1>
						<div class="course-hero-buttons">
							<a href="#get-started" class="course-action-button button">
								<img src="/wp-content/themes/icci/credential-landing-page/public/img/icons/cart-dark.svg" alt="" />Get Started
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
						a Christian Life Coach. Purchase bundle and pick your
						specialization.
					</p>
					<div class="roadmap-buy-container">
						<h5 class="roadmap-buy-title">
							Previous Training & Experience?
						</h5>
						<a class="support-button button button-icon" href="https://iccicoaching.com/contact/">
							<img src="/wp-content/themes/icci/credential-landing-page/public/img/icons/envelope.svg" alt="" />Contact Support
						</a>
					</div>
				</article>
				<article class="roadmap-step-card">
					<h4 class="roadmap-step-number-circle gradient-text">
						<span></span>2
					</h4>
					<p class="roadmap-subtitle">Step two</p>
					<h3 class="roadmap-step-title gradient-text">
						Education: 60 hours (6 Courses)
					</h3>
					<p class="roadmap-step-description">
						30 hours of this 60 hour requirement must include our core
						course (Foundations 1, 2, and 3) plus a credential.
					</p>
				</article>
				<article class="roadmap-step-card">
					<h4 class="roadmap-step-number-circle gradient-text">
						<span></span>3
					</h4>
					<p class="roadmap-subtitle">Step three</p>
					<h3 class="roadmap-step-title gradient-text">
						Mentoring: 6 Sessions
					</h3>
					<p class="roadmap-step-description">
						These sessions must be completed with an ICCI-approved
						Master-level Mentor of Christian Life Coaching at an additional
						cost.
					</p>
					<p class="roadmap-step-description">
						To earn your specialization, at least 3 of your mentor sessions
						must focus on your chosen specialization, and your mentor must
						specialize in that specialization.
					</p>
				</article>
				<article class="roadmap-step-card">
					<h4 class="roadmap-step-number-circle gradient-text">
						<span></span>4
					</h4>
					<p class="roadmap-subtitle">Step four</p>
					<h3 class="roadmap-step-title gradient-text">
						Field Experience: 70 hours
					</h3>
					<p class="roadmap-step-description">
						These hours must be conducted while practicing Christian Life
						Coaching. At least 25 hours need to be spent working in your
						chosen specialization.
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
						Complete 2 Applications
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
				<div class="button-group course-button-group">
					<form id="specializations-form">
						<select name="specialization" class="button button-outline specialization-select level-action-button button-icon button-icon-left" required></select>
						<fieldset id="courses" class="specialization-fieldset"></fieldset>
						<a class="button level-action-button button-icon button-icon-left margin-top-auto" id="go-next-btn" disabled>
							<img class="cart-icon" src="/wp-content/themes/icci/credential-landing-page/public/img/icons/cart-dark.svg" alt="" />
							Add to Cart</a>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- FAQ | css:/components/faq.scss -->
	<?php get_template_part('/credential-landing-page/partials/faq'); ?>
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