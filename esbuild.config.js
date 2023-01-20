const esbuild = require('esbuild')

const isProd = process.env.NODE_ENV === 'production'

esbuild
	.build({
		bundle: true,
		entryPoints: ['scripts/_main.js'],
		inject: ['./scripts/apps/inject.js'],
		loader: { '.js': 'jsx' },
		minify: isProd,
		outfile: 'web/bundle/main.bundle.js',
		watch: !isProd,
	})
	.catch(() => process.exit(1))
