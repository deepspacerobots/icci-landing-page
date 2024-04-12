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

	const state = {
		woocommerceQuery: new URLSearchParams(),
		selectedCourses: 0,
		canContinue: false,
	};

	// build the select menu
	buildSelector();

	function checkboxListener(courseWrapper) {
		const checkboxes = courseWrapper.querySelectorAll('[type="checkbox"]');
	}

	function buildCourses(courseIds = []) {
		let checkboxes = '';
		if (courseIds.length > 0) {
			checkboxes += courses
				.filter((c) => courseIds.includes(c.id))
				.map((c) => {
					return `<label>
						<input type="checkbox" value="${c.id}" />
						<span class="title">${c.title}</span>
					</label>`;
				})
				.join('<br>');
		}
		courseWrapper.innerHTML = checkboxes;

		// listen for changes
		const inputs = courseWrapper.querySelectorAll('[type="checkbox"]');
		inputs.forEach((input) => {
			input.addEventListener('change', () => {});
		});
	}

	function buildSelector() {
		// build the options
		let options =
			'<option selected disabled value="">Select a Specialization</option>';
		options += specializations
			.map((s) => {
				return `<option value="${s.title}">${s.title}</option>`;
			})
			.join('');

		// add them to the dom
		selector.insertAdjacentHTML('beforeend', options);

		// listen for changes
		selector.addEventListener('change', () => {
			const specialization = specializations.find(
				(s) => s.title == selector.value
			);
			buildCourses(specialization.courses);
		});
	}
};
