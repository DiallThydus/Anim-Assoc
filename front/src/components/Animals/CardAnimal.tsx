import { Link } from "react-router-dom";
import { Animal } from "../../types";

function CardAnimal({ animal }: { animal: Animal; }) {
	const { id, name, pictures } = animal;
	return (
		<Link to={`/animals/${id}`} className="bg-slate-700 p-5 shadow-lg rounded-md">
			<p className="text-indigo-500">
				{name}
			</p>
			<div>
				<img
					src={`/images/${pictures}`}
					className="rounded-md my-4 md:h-52 w-full"
					alt="Animal"
				/>
			</div>
		</Link>
	);
};

export default CardAnimal;