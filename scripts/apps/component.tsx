import { useState } from 'react'

export default function Counter() {
	// Using Typescript
	type State = 'READY' | 'NOT_READY'
	const [state, setState] = useState<State>('READY')

	return (
		<section className="container py-8">
			<p className="font-bold text-3xl">React Component!</p>
			<p className="my-4">
				The current state is: <strong>{state}</strong>
			</p>
			<button
				className="button"
				onClick={() => {
					state === 'READY' ? setState('NOT_READY') : setState('READY')
				}}
			>
				Toggle State!
			</button>
		</section>
	)
}
