<?php
require_once get_template_directory() . '/credential-landing-page/lib/functions.php';
/**
 * Template Name: Landing Page - CMCLC
 */
?>
<? get_template_part('/credential-landing-page/partials/header'); ?>
<!-- NAV | css:/components/nav.scss -->
<nav class="nav">
	<div class="container-lg">
		<div class="nav-container">
			<a href="/" title="home">
				<img src="/wp-content/themes/icci/credential-landing-page/public/img/1cci-logo.png" alt="ICCI logo" class="logo" />
			</a>
			<a href="https://iccicoaching.com/cart/" target="_blank" title="cart">
				<img class="cart-icon" src="/wp-content/themes/icci/credential-landing-page/public/img/icons/cart.svg" alt="cart" />
			</a>
		</div>
	</div>
</nav>

<main class="layout">
	<header class="course-hero">
		<div class="container-lg">
			<div class="course-hero-container">
				<div class="course-circle"></div>
				<div class="course-description-container">
					<div class="course-pillar-container">
						<h3 class="course-number">3</h3>
						<img src="/wp-content/themes/icci/credential-landing-page/public/img/pillar.png" alt="A pillar" />
					</div>
					<div class="course-text-container">
						<h5 class="course-subtitle">Learn more about CMCLC</h5>
						<h1 class="course-title">
							Credentialed Master <br />
							<span class="gradient-text">Christian Life Coach</span>
						</h1>
						<div class="course-hero-buttons">
							<a class="course-action-button button" href="tel:18558670824">
								<img src="/wp-content/themes/icci/credential-landing-page/public/img/icons/phone.svg" alt="" />Call For Pricing
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
					<h3 class="roadmap-step-title gradient-text">
						Contact Support Team
					</h3>
					<p class="roadmap-step-description">
						Our Master level credentialing requires speaking with our
						customer support team to customize a program for you with your
						existing credential or experience in mind.
					</p>
					<div class="roadmap-buy-container">
						<h5 class="roadmap-buy-title">
							Previous Training &amp; Experience?
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
						Education: 200 hours (20 ICCI Courses)
					</h3>
					<p class="roadmap-step-description">
						Must include 30 hours of foundations of Life Coaching and 10
						hours of integrating biblical principles, theories, and
						practices into Life Coaching.
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
				</article>
				<article class="roadmap-step-card">
					<h4 class="roadmap-step-number-circle gradient-text">
						<span></span>4
					</h4>
					<p class="roadmap-subtitle">Step four</p>
					<h3 class="roadmap-step-title gradient-text">
						Field Experience: 200 hours
					</h3>
					<p class="roadmap-step-description">
						These hours must be conducted while practicing Christian Life
						Coaching and/or in the training, equipping, or mentoring of
						other emerging life coaches
					</p>
					<p class="roadmap-step-description">
						Your mentor helps refine your coaching skills and advises you on
						how to structure your business during this field experience.
						This must take place across a minimum of 2 years practicing as a
						Christian Life Coach
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
						Apply for credential
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
				<a class="support-button button button-icon" href="https://iccicoaching.com/contact/">
					<img src="/wp-content/themes/icci/credential-landing-page/public/img/icons/envelope.svg" alt="" />Contact Support
				</a>
			</div>
		</div>
	</section>

	<!-- FAQ | css:/components/faq.scss -->
	<section id="faq" class="section-faq">
		<div class="container-lg">
			<h4 class="gradient-text faq-title">Frequently Asked Questions</h4>
			<details>
				<summary class="faq-question">
					What are the differences between Christian Life Coaching and
					counseling?
				</summary>
				<p class="faq-answer">
					The primary focal point of life coaching is on future performance
					and outcomes. It is therefore more proactive, solution-focused,
					collaborative, and forward-oriented in terms of personal and/or
					professional growth than traditional counseling and other mental
					health services. Psychotherapy tends to address past issues with
					the goal of symptom reduction, trauma work, and problem
					resolution. Coaches, on the other hand, endeavor to help unlock a
					person’s potential in order to maximize their performance, set and
					attain appropriate goals, and improve overall functioning in life.
					The change process is often viewed as having both a motivational
					and behavioral mindset where clients are not seen as individuals
					who need to be to be “fixed,” but those who have a capacity to
					envision and intentionally move toward new and higher goals. This
					indicates coaching is more about growth and not necessarily about
					clinical assessment, diagnosis or healing. Rather, it is a
					movement toward a healthier maturity instead of an unhealthy
					dependence on other things or people.
				</p>
			</details>

			<details>
				<summary class="faq-question">
					What are the benefits of having an ICCI credential?
				</summary>
				<p class="faq-answer">
					Since coaching is largely an unregulated profession, Life Coaches
					frequently pursue voluntary certification and credentialing to
					show the public they have received an appropriate level of
					training, education, practice experience, and/or mentoring. We
					believe ICCI represents a premier faith-based network of Life
					Coaches that includes many of the leading Christian voices in the
					field today. Having an ICCI credential demonstrates a credible
					national level of competence, integrity, excellence, and
					recognition as having met rigorous standards, especially for those
					individuals who identify as Christian Life Coaches.
				</p>
			</details>

			<details>
				<summary class="faq-question">
					What distinguishes an ICCI credential from other credentials in
					the field?
				</summary>
				<p class="faq-answer">
					Beyond a strong commitment to overall practice and ministerial
					excellence and professionalism, ICCI endeavors to faithfully
					integrate the Word of God and biblical principles into its
					training, resources, Member Benefits, events, and more. An ICCI
					credential represents a clear identity as a Christian Life Coach
					and has the backing and endorsement of many leading voices in the
					field today.
				</p>
			</details>

			<details>
				<summary class="faq-question">
					How is an ICCI credential different than one from the
					International Coaching Federation (ICF)?
				</summary>
				<p class="faq-answer">
					Life coaching is an unregulated field, both within the United
					States and in most places around the world. As such, there are any
					number of coaching organizations (ICCI, ICF, etc.) that offer
					certification and credentialing opportunities. None of them are
					state or federally regulated entities, so individuals make choices
					about credentialing based primarily on a sense of affiliation and
					alignment with an organization’s values, core principles, and
					practices. ICCI’s foundational principles include the same core
					competencies as ICF and other reputable organizations. However,
					ICCI’s distinguishing characteristics are based on God’s Word and
					biblical principles to faithfully train and credential individuals
					who want to identify as “Christian” Life Coaches.
				</p>
			</details>

			<details>
				<summary class="faq-question">How will I take my courses?</summary>
				<p class="faq-answer">
					After purchase, courses and credential applications are served in
					your ICCI online dashboard. Just log into your account at
					iccicoaching.com at your convenience to complete your courses.
					Save your Certificates of Completion from each course to upload
					into your credentialing application.
				</p>
			</details>

			<details>
				<summary class="faq-question">
					What counts as field experience?
				</summary>
				<p class="faq-answer">
					Any coaching activity provided to clients, whether on a
					voluntary/pro bono or compensated basis, can qualify for
					appropriate field experience. This can be either ministry oriented
					or part of a professional life coaching practice.
				</p>
			</details>
		</div>
	</section>
</main>

<!-- FOOTER | css:/components/footer.scss -->
<footer class="footer">
	<div class="container-lg">
		<div class="footer-container">
			<div>
				<a class="footer-logo-link" href="/"><img src="/wp-content/themes/icci/credential-landing-page/public/img/1cci-logo.png" class="footer-logo" alt="ICCI logo" /></a>
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
<? get_template_part('/credential-landing-page/partials/footer'); ?>