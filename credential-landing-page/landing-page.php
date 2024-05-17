<?php
require_once get_template_directory() . '/credential-landing-page/lib/functions.php';
/**
 * Template Name: Credential Landing Page
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
	<!-- HERO | css:/components/hero.scss -->
	<header class="hero hero-relative">
		<div class="hero-left-circle"></div>
		<div class="hero-right-circle"></div>
		<img src="/wp-content/themes/icci/credential-landing-page/public/img/woman-smiling-in-classroom.jpg" alt="Woman smiling in woman-smiling-in-classroom" class="hero-left-image" />
		<img src="/wp-content/themes/icci/credential-landing-page/public/img/working-on-laptop.jpg" alt="Woman working on a laptop" class="hero-right-image" />
		<div class="container-lg">
			<div class="hero-container">
				<h5 class="hero-subtitle">
					Do you want to help people <em>build a vision</em> for their
					future?
				</h5>
				<h2 class="hero-title">Become a Credentialed</h2>
				<h2 class="hero-title gradient-text">Christian Life Coach</h2>
				<a class="button hero-get-started-button" href="#discount">
					<img src="/wp-content/themes/icci/credential-landing-page/public/img/icons/cart-dark.svg" alt="" />Get Started
				</a>
				<img src="/wp-content/themes/icci/credential-landing-page/public/img/icons/arrow.svg" alt="" class="hero-arrow" />
			</div>
		</div>
	</header>

	<!-- DISCOUNT | css:/components/discount.scss -->
	<section id="discount" class="section-discount">
		<div class="container-lg">
			<div class="discount-container">
				<img src="/wp-content/themes/icci/credential-landing-page/public/img/sun-badge.png" class="discount-badge" alt="" />
				<div class="discount-text-container">
					<p class="discount-subtitle">Let's Find</p>
					<h2 class="discount-title">
						The Right Credential<br />
						<span class="gradient-text">For Your Journey</span>
					</h2>
					<p>
						We offer 3 levels of credentialing in easy-to-use bundles to
						jumpstart your coaching career.
					</p>
					<p class="discount-description">
						*30% off an entire credential package, including membership,
						education, and credential application. Mentoring sessions not
						included.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- LEVELS | css:/components/levels.scss -->
	<section class="section-levels" id="certification">
		<div class="container-lg">
			<div class="levels-container">
				<!-- Associate level -->
				<article class="level-card" id="caclc">
					<div class="level-description-container">
						<div class="level-pillar-container">
							<h3 class="level-course-number">1</h3>
							<img src="/wp-content/themes/icci/credential-landing-page/public/img/pillar.png" alt="A pillar" />
						</div>
						<div>
							<h5 class="level-subtitle">C A C L C</h5>
							<h3 class="level-title">Associate Level</h3>
							<p class="level-description">
								Perfect for those starting their coaching journey.
							</p>
						</div>
					</div>
					<a class="button level-action-button button-icon button-icon-left margin-top-auto" href="https://iccicoaching.com/cart/?clear-cart=true&add-to-cart=542,2152,2154,1201,19650">
						<img class="cart-icon" src="/wp-content/themes/icci/credential-landing-page/public/img/icons/cart-dark.svg" alt="" />
						Add to cart
					</a>
					<div class="level-price-container">
						<hr class="level-price-line" />
						<h4 class="level-price">$629</h4>
						<hr class="level-price-line" />
					</div>
					<a href="./caclc.html" class="level-link"><img src="/wp-content/themes/icci/credential-landing-page/public/img/icons/link.svg" class="level-link-icon" alt="" />Learn more</a>
				</article>

				<!-- Professional level -->
				<article class="level-card" id="cpclc">
					<div class="level-description-container">
						<div class="level-pillar-container">
							<h3 class="level-course-number">2</h3>
							<img src="/wp-content/themes/icci/credential-landing-page/public/img/pillar.png" alt="A pillar" />
						</div>
						<div>
							<h5 class="level-subtitle">C P C L C</h5>
							<h3 class="level-title">Professional Level</h3>
							<p class="level-description">Core training + a credential.</p>
						</div>
					</div>
					<form id="specializations-form">
						<select name="specialization" class="button button-outline specialization-select level-action-button button-icon button-icon-left" required></select>
						<fieldset id="courses" class="specialization-fieldset"></fieldset>
						<a class="button level-action-button button-icon button-icon-left margin-top-auto" id="go-next-btn" disabled>
							<img class="cart-icon" src="/wp-content/themes/icci/credential-landing-page/public/img/icons/cart-dark.svg" alt="" />
							Add to Cart</a>
					</form>
					<div class="level-price-container">
						<hr class="level-price-line" />
						<h4 class="level-price">$1,185</h4>
						<hr class="level-price-line" />
					</div>
					<a href="./cpclc.html" class="level-link margin-top-auto"><img src="/wp-content/themes/icci/credential-landing-page/public/img/icons/link.svg" class="level-link-icon" alt="" />Learn more</a>
				</article>

				<!-- Master level -->
				<article class="level-card" id="cmclc">
					<div class="level-description-container">
						<div class="level-pillar-container">
							<h3 class="level-course-number">3</h3>
							<img src="/wp-content/themes/icci/credential-landing-page/public/img/pillar.png" alt="A pillar" />
						</div>
						<div>
							<h5 class="level-subtitle">C M C L C</h5>
							<h3 class="level-title">Master Level</h3>
							<p class="level-description">For seasoned coaches.</p>
						</div>
					</div>
					<a href="tel:18558670824" class="button button-icon level-action-button margin-top-auto">
						<img src="/wp-content/themes/icci/credential-landing-page/public/img/icons/phone.svg" alt="" class="level-call-icon" />Call for Pricing
					</a>

					<a href="./cmclc.html" class="level-link"><img src="/wp-content/themes/icci/credential-landing-page/public/img/icons/link.svg" class="level-link-icon" alt="" />Learn more</a>
				</article>
			</div>
		</div>
	</section>

	<!-- MEMBERSHIP | css:/components/membership.scss -->
	<section class="section-membership" id="membership">
		<div class="membership-circle"></div>
		<div class="container-lg">
			<div class="membership-container">
				<img class="membership-picture" src="/wp-content/themes/icci/credential-landing-page/public/img/talking-at-cafe.jpg" alt="People talking at a cafe" />
				<div class="membership-text-container">
					<p class="membership-subtitle">Membership included!</p>
					<h3 class="gradient-text membership-title">First Year - FREE</h3>
					<p>
						Your first year of ICCI membership is included with your
						purchase of any credentialing bundle. This
						<strong>$179 value</strong> includes:
					</p>
					<div class="membership-lists-container">
						<ul>
							<li>Training and Product Discounts</li>
							<li>Credentialing Discounts</li>
							<li>Event Discounts and Benefits</li>
							<li>Monthly Member Meet-and-Greet</li>
						</ul>
						<ul>
							<li>Online Community</li>
							<li>Coach's Corner Interviews</li>
							<li>Continuing Education Hours</li>
							<li>And more!</li>
						</ul>
					</div>
					<br />
					<p class="membership-description">
						This membership will auto-renew unless canceled a year from
						purchase.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- WHY-ICCI | css:/components/why-icci.scss -->
	<section class="arch-section section-why-icci" id="why-icci">
		<div class="why-icci-circle"></div>
		<img class="why-icci-picture" src="/wp-content/themes/icci/credential-landing-page/public/img/working-on-laptop.jpg" />
		<svg class="arch arch-top" viewBox="0 0 1580 60" width="1580" height="60">
			<path d="M0,60h790C475.4,60,193,36.8,0,0V60z" />
			<path d="M790,60h790V0C1387,36.8,1104.6,60,790,60z" />
		</svg>
		<div class="arch-content">
			<div class="container-lg">
				<div class="icci-text-container">
					<h2>Why ICCI?</h2>
					<p class="icci-description">
						ICCI trains and credentials Christian Life Coaches using
						<span>biblical principles</span>, equipping them to assist their
						clients in setting individualized goals through a collaborative
						partnership that addresses <span>the whole person</span>.
						Receive Masterclass quality training from
						<span> nationally recognized coaching experts </span>, become a
						<span>fully credentialed life coach</span>, and join other
						servant leaders who are making a difference.
					</p>
				</div>
			</div>
		</div>
		<svg class="arch arch-bottom" viewBox="0 0 1580 60" width="1580" height="60">
			<path class="st0" d="M0,0c193,36.8,475.4,60,790,60s597-23.2,790-60H0z" />
		</svg>
	</section>

	<!-- TESTIMONIALS | css:/components/testimonials.scss, js:/components/testimonials.js -->
	<div class="testimonials-left-circle"></div>
	<section class="section-testimonials" id="testimonials">
		<div class="container-lg">
			<div class="testimonials-container">
				<h2 class="testimonials-title">
					What Our <br />
					<span class="gradient-text">Students</span> Say
				</h2>
				<div class="blaze-slider testimonials">
					<img src="/wp-content/themes/icci/credential-landing-page/public/img/icons/quotes-outlined.svg" class="testimonials-corner-quote" alt="" />
					<div class="blaze-container">
						<div class="blaze-track-container">
							<div class="blaze-track">
								<!-- Testimonial 1 -->
								<div class="testimonial">
									<p class="testimonial-text">
										“I am delighted to inform you that my life has been so
										blessed to be a part of ICCI. By becoming a member of
										this organization, I am now able to assist a diverse
										community of people, both in my community and in my
										focus group within my church. I truly believe that my
										prayers have been answered regarding my purpose in life.
										ICCI provides a rich amount of resources in finding
										solutions to our global world issues of today.”
									</p>
									<div class="testimonial-student-container">
										<img src="/wp-content/themes/icci/credential-landing-page/public/img/profile-picture.jpg" class="testimonial-student-pic" alt="" />
										<div class="testimonial-student-text">
											<h5 class="testimonial-student-name">
												<strong>Maria P</strong>
											</h5>
											<small class="testimonial-student-title">ICCI Credentialed Coach</small>
										</div>
									</div>
								</div>
								<!-- Testimonial 2 -->
								<div class="testimonial">
									<p class="testimonial-text">
										“I am delighted to inform you that my life has been so
										blessed to be a part of ICCI. By becoming a member of
										this organization, I am now able to assist a diverse
										community of people, both in my community and in my
										focus group within my church. I truly believe that my
										prayers have been answered regarding my purpose in life.
										ICCI provides a rich amount of resources in finding
										solutions to our global world issues of today.”
									</p>
									<div class="testimonial-student-container">
										<img src="/wp-content/themes/icci/credential-landing-page/public/img/profile-picture.jpg" class="testimonial-student-pic" alt="" />
										<div class="testimonial-student-text">
											<h5 class="testimonial-student-name">
												<strong>Maria P</strong>
											</h5>
											<small class="testimonial-student-title">ICCI Credentialed Coach</small>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- QUOTE | css:/components/qoute.scss -->
	<section class="section-qoute">
		<div class="container-md">
			<blockquote class="quote-container">
				<img src="/wp-content/themes/icci/credential-landing-page/public/img/icons/quotes-filled.svg" alt="Quotes" class="quote-left" />
				<img src="/wp-content/themes/icci/credential-landing-page/public/img/icons/quotes-filled.svg" alt="Quotes" class="quote-right" />
				<h4 class="quote-text">
					One thing I do: forgetting what lies behind and reaching forward
					to what lies ahead, I press on toward the goal for the prize of
					the upward call of God in Christ Jesus.
				</h4>
				<p class="quote-source">Philippians 3:13-14 (NASB)</p>
			</blockquote>
		</div>
	</section>

	<!-- SUPPORT | css:/components/support.scss -->
	<section class="section-support">
		<div class="support-left-circle"></div>
		<img src="/wp-content/themes/icci/credential-landing-page/public/img/talking-on-couch.jpg" class="support-picture" alt="" />
		<div class="container-md">
			<div class="support-container">
				<h4 class="support-title">Previous Training & Experience?</h4>
				<p class="support-description">Find out how to get credit.</p>
				<a class="button support-button button-icon" href="https://iccicoaching.com/contact/">
					<img src="/wp-content/themes/icci/credential-landing-page/public/img/icons/envelope.svg" alt="" />Contact Support
				</a>
			</div>
		</div>
	</section>

	<!-- FAQ | css:/components/faq.scss -->
	<section class="section-faq">
		<div class="container-lg">
			<h4 class="gradient-text faq-title">Frequently Asked Questions</h4>
			<details>
				<summary class="faq-question">
					What are the differences between Christian Life Coaching and
					counseling?
				</summary>
				<p class="faq-answer">
					Life coaching emphasizes future-oriented growth, focusing on
					unlocking potential and achieving personal or professional goals
					through a proactive and solution-focused approach. Unlike
					psychotherapy, which addresses past issues for symptom relief,
					coaching fosters motivational and behavioral change, viewing
					clients as capable of growth rather than needing repair. It aims
					for healthier maturity and independence, not clinical diagnosis or
					healing.
				</p>
			</details>

			<details>
				<summary class="faq-question">
					What are the benefits of having an ICCI credential?
				</summary>
				<p class="faq-answer">
					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit
					voluptatibus fugit beatae modi expedita iusto. Iste dolorum saepe,
					facere laudantium laboriosam dolore. Quibusdam neque commodi quasi
					magnam incidunt dolores voluptatibus?
				</p>
			</details>

			<details>
				<summary class="faq-question">
					What distinguishes an ICCI credential from other credentials in
					the field?
				</summary>
				<p class="faq-answer">
					Lorem ipsum dolor sit amet consectetur adipisicing elit.
					Architecto beatae eaque repellat reprehenderit sed assumenda at
					nostrum harum molestiae qui? Distinctio at veniam qui. Et minima
					velit rerum a architecto?
				</p>
			</details>

			<details>
				<summary class="faq-question">
					How is an ICCI credential different than one from the
					International Coaching Federation (ICF)?
				</summary>
				<p class="faq-answer">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
					nihil impedit totam doloremque natus placeat porro dolores odio
					quo voluptas blanditiis sint praesentium eligendi, eos, quod at
					consequatur excepturi enim.
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
					<li><a href="#why-icci">Why Us</a></li>
					<li><a href="#certification">Certification</a></li>
					<li><a href="#membership">Membership</a></li>
					<li><a href="#testimonials">Testimonial</a></li>
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