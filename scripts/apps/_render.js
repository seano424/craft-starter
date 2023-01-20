// Import apps
import { createRoot } from 'react-dom/client'
import Component from './component'

// Bind apps to dom
document.querySelectorAll('[data-component]').forEach((node) => {
	const root = createRoot(node)
	root.render(<Component />)
})
