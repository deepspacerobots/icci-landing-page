const specializations = [
	{
		title: 'Leadership',
		courses: [13094, 2177, 2179, 2189, 2181, 11958, 2204, 3126, 12513, 2185],
	},
	{
		title: 'Marriage and Family Coaching',
		courses: [
			13094, 2189, 2166, 2168, 2173, 2206, 4700, 5518, 12438, 2204, 3126, 12513,
			3976,
		],
	},
	{
		title: 'Performance Coaching',
		courses: [2187, 13094, 2185, 2175, 2189, 2204, 3126, 12513],
	},
	{
		title: 'Relationship Coaching',
		courses: [
			2158, 2161, 2163, 2189, 2200, 2166, 2168, 2173, 4700, 5518, 12438, 2204,
			3126, 12513, 2206,
		],
	},
	{
		title: 'Spiritual Transformation and Discipleship Coaching',
		courses: [2183, 2158, 2161, 2163, 2189, 2194, 12513],
	},
];

const courses = [
	{
		id: 2158,
		title: 'Transformed Living: Key Fundamentals',
	},
	{
		id: 2161,
		title: 'Transformed Living: Core Principles',
	},
	{
		id: 2163,
		title: 'Transformed Living: Practical Applications',
	},
	{
		id: 2166,
		title: 'Marriage Coaching: The Basics',
	},
	{
		id: 2168,
		title: 'Marriage Coaching: Hot Topics',
	},
	{
		id: 2173,
		title: 'Marriage Coaching: Before Saying, “I Do”',
	},
	{
		id: 2175,
		title: 'Resilience Coaching for Individuals',
	},
	{
		id: 2177,
		title: 'Resilience Coaching for Leaders',
	},
	{
		id: 2179,
		title: 'Leadership Coaching: Ministry Leaders and the “Business” of Church',
	},
	{
		id: 2181,
		title: 'Leadership Coaching: Senior and Executive Leaders',
	},
	{
		id: 2183,
		title: 'Life Recovery Coaching: A Journey through the 12 Steps',
	},
	{
		id: 2185,
		title: 'Performance Coaching: Maximizing Your Potential',
	},
	{
		id: 2187,
		title: 'Career Coaching: Envisioning the Future',
	},
	{
		id: 2189,
		title: 'Personal Development Coaching: The Equipping Profile',
	},
	{
		id: 2194,
		title: 'Coaching Women: Spiritual Strength',
	},
	{
		id: 2200,
		title: 'Coaching Women: Real Relationships',
	},
	{
		id: 2204,
		title: 'Relationship and Attachment Coaching: LifeMapping',
	},
	{
		id: 2206,
		title: 'Blended Family Coaching: Blending to Succeed',
	},
	{
		id: 3126,
		title: 'Relationship and Attachment Coaching: Strengths Coaching',
	},
	{
		id: 3976,
		title: 'Resilience Coaching: Resilience for Key Demographics',
	},
	{
		id: 4700,
		title: 'Blended Not Broken I: Foundations for a Strong Family Core',
	},
	{
		id: 5518,
		title: 'Blended, Not Broken II: Blender vs. Blending',
	},
	{
		id: 11958,
		title: 'Coaching Women: Life Leadership',
	},
	{
		id: 12438,
		title:
			'Blended, Not Broken III: Navigating Conflict, Trauma, and Difficulty',
	},
	{
		id: 12513,
		title: 'Relationship and Attachment Coaching: The Blessing',
	},
	{
		id: 13094,
		title: 'Financial Coaching: How to Build Your Best Plan Now',
	},
];

export const SpecializationForm = () => {
	// important elements
	const selector = document.querySelector('[name="specialization"]');
	const courseWrapper = document.querySelector('#courses');
	const button = document.querySelector('#go-next-btn');

	const state = {
		selectedCourses: [],
		canContinue: false,
	};

	// build the select menu
	buildSelector();

	function checkboxListener() {
		const checkboxes = document.querySelectorAll('#courses [type="checkbox"]');
		checkboxes.forEach((checkbox) => {
			console.log('here');
			checkbox.addEventListener('change', () => {
				if (checkbox.checked) {
					//add to selected courses
					state.selectedCourses.push(checkbox.value);
				} else {
					//remove from selected courses
					const index = state.selectedCourses.indexOf(checkbox.value);
					if (index > -1) {
						state.selectedCourses.splice(index, 1);
					}
				}
				state.canContinue = state.selectedCourses.length === 3 ? true : false;
				checkboxes.forEach((c) => {
					c.disabled = state.canContinue && !c.checked ? true : false;
				});
				console.log(state);
				if (state.canContinue) {
					// add params to the button
					// eneble button
					button.setAttribute(
						'href',
						'https://iccicoaching.com/cart/?clear-cart=true&add-to-cart=1218,' +
							state.selectedCourses.join(',') +
							',19650,2152,2154,1201'
					);
					button.removeAttribute('disabled');
				} else {
					button.setAttribute('href', '#');
					button.setAttribute('disabled', '');
					//remove params from button
					//disable button
				}
			});
		});
	}

	function buildCourses(courseIds = []) {
		let checkboxes = '<div class="instructions">Choose 3 Options:</div>';

		if (courseIds.length > 0) {
			checkboxes += courses
				.filter((c) => courseIds.includes(c.id))
				.map((c) => {
					return `<label class="specialization-label">
						<input type="checkbox" value="${c.id}" id=${c.id} />
						<span class="title">${c.title}</span>
					</label>`;
				})
				.join('');
		}
		courseWrapper.innerHTML = checkboxes;

		checkboxListener();

		// listen for changes
		/*
		const inputs = courseWrapper.querySelectorAll('[type="checkbox"]');
		inputs.forEach((input) => {
			input.addEventListener('change', () => {
				const goNextButton = document.querySelector('#go-next-btn');
				if (getSelectedCheckboxes() === 3) {
					goNextButton.disabled = false;
				} else {
					goNextButton.disabled = true;
				}
			});
		});*/
	}

	function buildSelector() {
		// build the options
		let options =
			'<option selected value="no-selection">Choose Specialization</option>';
		options += specializations
			.map((s) => {
				return `<option value="${s.title}">${s.title}</option>`;
			})
			.join('');

		// add them to the dom
		selector.insertAdjacentHTML('beforeend', options);
		// listen for changes
		selector.addEventListener('change', (e) => {
			const caclcCard = document.querySelector('#caclc');
			const cmclcCard = document.querySelector('#cmclc');

			if (e.target.value !== 'no-selection') {
				const specialization = specializations.find(
					(s) => s.title == selector.value
				);
				caclcCard?.classList.add('level-card-disabled');
				cmclcCard?.classList.add('level-card-disabled');
				buildCourses(specialization.courses);
			} else {
				const labels = document.querySelectorAll('#courses label');
				caclcCard?.classList.remove('level-card-disabled');
				cmclcCard?.classList.remove('level-card-disabled');
				labels.forEach((label) => label.remove());
			}
		});
	}
};

function getSelectedCheckboxes() {
	const form = document.getElementById('specializations-form'); // Select the form element
	const fieldset = form.querySelector('fieldset'); // Get the fieldset within the form
	// Check if a fieldset is found
	if (!fieldset) {
		console.error('No fieldset found within the form');
		return;
	}
	const checkboxes = fieldset.querySelectorAll("input[type='checkbox']"); // Get all checkboxes
	let count = 0;
	for (const checkbox of checkboxes) {
		if (checkbox.checked) {
			count++; // Increment count for each checked checkbox
		}
	}
	return count;
}
