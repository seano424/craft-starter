/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		'./templates/**/*',
		'./scripts/**/*',
		'./config/designtokens/*.json',
	],
	theme: {
		container: {
			center: true,
			padding: '2rem',
		},
		debugScreens: {
			position: ['bottom', 'right'],
			style: {
				backgroundColor: '#262626e6',
				borderRadius: '4px',
				boxShadow: 'none',
				color: 'white',
				padding: '8px',
				margin: '18px 16px',
				opacity: '100%',
			},
		},
		screens: {
			xs: '480px',
			sm: '640px',
			md: '768px',
			lg: '1024px',
			xl: '1280px',
		},
		extend: {},
	},
	plugins: [
		require('@tailwindcss/forms'),
		require('@tailwindcss/line-clamp'),
		require('tailwindcss-debug-screens'),
	],
}
