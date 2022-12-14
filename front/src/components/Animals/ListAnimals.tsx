import { useContext, useEffect, useState } from 'react';

import FicheAnimal from './CardAnimal';
import ModalAddAnimal from './ModalAddAnimal';

import { UserContext } from '../../App';
import { API_URI } from '../../config';
import { Animal } from '../../types';

export default function ListAnimals() {
	const user = useContext(UserContext);
	const [animals, setAnimals] = useState<Animal[]>();

	useEffect(() => {
		(async () => {
			const request = await fetch(API_URI + '/?controller=animal&action=index', {
				headers: {
					"Access-Control-Allow-Origin": "*"
				}
			});

			const result = await request.json();
			if (request.ok) {
				setAnimals(result as Animal[]);
			} else {
				console.log('error', result);
				console.error(result);
			}
		})();
	}, [])

	return (
		<>
			{user?.isAdmin && <ModalAddAnimal />}
			<div className="max-w-6xl py-12 min-h-[88vh] mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
				{animals && animals.map((animal) => (
					<FicheAnimal key={animal.id} animal={animal} />
				))}
			</div>
		</>
	);
}