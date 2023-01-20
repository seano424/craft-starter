/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ['../templates/**/*'],
	plugins: [require('@tailwindcss/typography')],
	prefix: 'g-',
	corePlugins: {
		preflight: false,
	},
}
