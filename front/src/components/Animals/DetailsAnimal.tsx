import { useEffect, useState } from "react";
import { useParams } from "react-router-dom";
import { Animal } from "../../types";
import data from './data.json';

export default function DetailsAnimal() {
    const { animalId } = useParams();
    const [animal, setAnimal] = useState<Animal | undefined>(undefined);

    useEffect(() => {
        // fetch les données
        const animal = data.animals.find((a) => a.id === Number(animalId));
        if (!animal) {
            return console.error('Unable to find animal with id', animalId);
        }

        setAnimal(animal);
    }, [animalId]);

    if (!animal) {
        return (<p>loading...</p>)
    }

    const { name, age, colors, sexe, race, image } = animal;
    return (
        <div className="flex justify-center mobile:flex-col mobile:mt-4 mobile:p-3">
            <div className="flex-1 flex items-center justify-center">
                <img
                    src={`/images/${image}`}
                    className="product_img"
                    alt="product_image"
                />
            </div>
            <div className="flex-[1.3] flex flex-col items-start justify-items-center mt-10 mobile:items-center">
                <p className="text-xl normal-case">
                    Name: {name}
                </p>
                <p className="text-xl normal-case">
                    Age: {age}
                </p>
                <p className="text-xl normal-case">
                    Colors: {colors.join(', ')}
                </p>
                <p className="text-xl normal-case">
                    Sexe: {sexe === 0 ? 'Male' : 'Female'}
                </p>
                <p className="text-xl normal-case">
                    Breed: {race}
                </p>
                <button className="text-white bg-[#8a4af3] rounded-md shadow-md mt-[30px] p-3" disabled>
                    Réserver l'animal
                </button>
            </div>
        </div>
    );
}