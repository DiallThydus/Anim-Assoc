import { useEffect, useState } from "react";
import { Button, Modal } from "react-daisyui";
import { FieldValues, useForm } from "react-hook-form";

import { API_URI, INPUT_OPTIONS } from "../../config";
import { Category } from "../../types";

interface AddAnimalProps extends FieldValues {
    email: string;
    password: string;
    remember: boolean;
}

export default function ModalAddAnimal() {
    const { register, handleSubmit, formState: { errors } } = useForm();

    const [isModalOpen, setModalOpen] = useState<boolean>(false);
    const [categories, setCategories] = useState<Category[] | undefined>(undefined);

    const handleOpenModal = () => setModalOpen(true);
    const handleCloseModal = () => setModalOpen(false);

    const onSubmit = async (formValues: AddAnimalProps) => {
        const formData = Object
            .entries(formValues)
            .reduce(
                (formData, [key, value]) => {
                    formData.append(key, value.toString())
                    return formData;
                },
                new FormData()
            );

        const request = await fetch(API_URI + '/?controller=animal&action=create', {
            method: 'POST',
            headers: {
                "Access-Control-Allow-Origin": "*"
            },
            body: formData
        });

        const result = await request.json();
        if (request.ok) {
            console.log('ok', result);
        } else {
            console.error('error', result);
        }
    }

    useEffect(() => {
        (async () => {
            const request = await fetch(API_URI + '/?controller=category&action=index', {
                headers: {
                    "Access-Control-Allow-Origin": "*"
                }
            });

            const result = await request.json();
            if (request.ok) {
                setCategories(result as Category[]);
            } else {
                console.log('error', result);
                console.error(result);
            }
        })();
    }, []);

    return (
        <>
            <Button onClick={handleOpenModal}>
                Add animal
            </Button>
            <Modal open={isModalOpen}>
                <form className="max-w-[400px] w-full mx-auto p-8" onSubmit={handleSubmit(onSubmit as any)}>
                    <h2 className="text-4xl font-bold text-center py-4 mb-4">
                        Add animal
                    </h2>
                    <div className="flex flex-col mb-4">
                        <label htmlFor="name">
                            Name
                        </label>
                        <input
                            className="border bg-gray-900 p-2"
                            type="text"
                            placeholder="Name"
                            {...register("name", INPUT_OPTIONS)}
                        />
                        {errors.name?.type === 'required' && (
                            <p className='text-red-600'>Name is required</p>
                        )}
                    </div>
                    <div className="flex flex-col mb-4">
                        <label htmlFor="age">
                            Age
                        </label>
                        <input
                            className="border bg-gray-900 p-2"
                            type="number"
                            placeholder="Age"
                            {...register("age", INPUT_OPTIONS)}
                        />
                        {errors.age?.type === 'required' && (
                            <p className='text-red-600'>Age is required</p>
                        )}
                    </div>
                    <div className="flex flex-col mb-4">
                        <label htmlFor="colors">
                            Color
                        </label>
                        <input
                            className="border bg-gray-900 p-2"
                            type="text"
                            placeholder="Color"
                            {...register("colors", INPUT_OPTIONS)}
                        />
                        {errors.colors?.type === 'required' && (
                            <p className='text-red-600'>Color is required</p>
                        )}
                    </div>
                    <div className="flex flex-col mb-4">
                        <label htmlFor="sexe">
                            Sexe
                        </label>
                        <select className="border bg-gray-900 p-2" {...register("sexe", INPUT_OPTIONS)}>
                            <option key={0} value={0} selected>
                                Male
                            </option>
                            <option key={1} value={1}>
                                Female
                            </option>
                        </select>
                        {errors.sexe?.type === 'required' && (
                            <p className='text-red-600'>Sexe is required</p>
                        )}
                    </div>
                    <div className="flex flex-col mb-4">
                        <label htmlFor="race">
                            Race
                        </label>
                        <input
                            className="border bg-gray-900 p-2"
                            type="text"
                            placeholder="Race"
                            {...register("race", INPUT_OPTIONS)}
                        />
                        {errors.race?.type === 'required' && (
                            <p className='text-red-600'>Race is required</p>
                        )}
                    </div>
                    <div className="flex flex-col mb-4">
                        <label htmlFor="picture">
                            Picture
                        </label>
                        <input
                            className="border bg-gray-900 p-2"
                            type="text"
                            placeholder="Picture"
                            {...register("pictures", INPUT_OPTIONS)}
                        />
                        {errors.pictures?.type === 'required' && (
                            <p className='text-red-600'>Picture is required</p>
                        )}
                    </div>
                    <div className="flex flex-col mb-4">
                        <label htmlFor="categoryid">
                            Category
                        </label>
                        <select className="border bg-gray-900 p-2" {...register("categoryid", INPUT_OPTIONS)}>
                            {categories?.map(({ id, name }) => (
                                <option key={id} value={id} selected={id === 0}>
                                    {name}
                                </option>
                            ))}
                        </select>
                        {errors.categoryid?.type === 'required' && (
                            <p className='text-red-600'>Category is required</p>
                        )}
                    </div>
                    <div className="modal-action">
                        <Button type="reset" onClick={handleCloseModal}>
                            Cancel
                        </Button>
                        <Button type="submit">
                            Add
                        </Button>
                    </div>
                </form>
            </Modal>
        </>
    );
}