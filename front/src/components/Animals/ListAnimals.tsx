import { useEffect, useState } from 'react';
import { Animal } from '../../types';
import FicheAnimal from './CardAnimal';
import data from './data.json';

export default function ListAnimals() {
	const [animals] = useState<Animal[]>(data.animals as Animal[]);

	useEffect(() => {
		(async () => {
			const headers = new Headers();
			headers.set('Access-Control-Allow-Origin', '*');
			headers.set('Content-Type', 'application/json');

			// todo: fetch good endpoint
			const request = await fetch('http://localhost/animals', {
				mode: 'no-cors',
				headers
			});

			request
				.json()
				.then(console.log)
				.catch(console.error);
		})();
	}, [])

	return (
		<div className="max-w-6xl py-12 min-h-[88vh] mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
			{animals && animals.map((animal) => (
				<FicheAnimal key={animal.id} animal={animal} />
			))}
		</div>
	);
}