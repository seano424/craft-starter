require('dotenv').config()

module.exports = {
	files: ['./templates/**/*', './web/bundle/**/*'],
	notify: false,
	open: false,
	proxy: process.env.PRIMARY_SITE_URL,
	snippetOptions: {
		rule: {
			fn: function (snippet, match) {
				return snippet + match
			},
			match: /<\/head>/i,
		},
	},
}
