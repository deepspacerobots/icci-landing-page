'use strict';
import { SpecializationForm } from './components/specializationForm';
import { Testimonials } from './components/testimonials';

// import global scss
import './style.scss';

// import all component scss
import.meta.glob('./components/**/*.scss', { eager: true });

const slider = document.querySelector('.testimonials');
if (slider) {
	Testimonials(slider);
}
SpecializationForm();
