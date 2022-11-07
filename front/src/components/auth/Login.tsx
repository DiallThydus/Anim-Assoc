import { FieldValues, useForm } from "react-hook-form";
import { Link, useNavigate } from "react-router-dom";

import { toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';

import { API_URI, INPUT_OPTIONS } from "../../config";
import { BaseUser } from "../../types";

interface FormLoginProps extends FieldValues {
    email: string;
    password: string;
    remember: boolean;
}

export default function Login({ onLogin }: { onLogin: (user: BaseUser) => void; }) {
    const navigate = useNavigate();
    const { register, handleSubmit, formState: { errors } } = useForm();

    const onSubmit = async (formValues: FormLoginProps) => {
        const formData = Object
            .entries(formValues)
            .reduce(
                (formData, [key, value]) => {
                    formData.append(key, value.toString())
                    return formData;
                },
                new FormData()
            );

        const request = await fetch(API_URI + '/?controller=user&action=login', {
            method: 'POST',
            headers: {
                "Access-Control-Allow-Origin": "*"
            },
            body: formData
        });

        const result = await request.json();
        if (request.ok) {
            toast('Connected', { type: 'success' });
            onLogin(result);
            navigate('/');
        } else {
            toast(result?.[0] || 'Something went wront during account creation', { type: 'error' });
            console.error(result);
        }
    }

    return (
        <div className="w-full h-screen bg-zinc-900/90">
            <div className="flex justify-center items-center h-full">
                <form className="max-w-[400px] w-full mx-auto bg-white p-8" onSubmit={handleSubmit(onSubmit as any)}>
                    <h2 className="text-4xl font-bold text-center py-4 mb-4">Login</h2>
                    <div className="flex flex-col mb-4">
                        <label htmlFor="email">
                            Email
                        </label>
                        <input
                            className="border bg-gray-100 p-2"
                            type="email"
                            placeholder="Email"
                            {...register("email", INPUT_OPTIONS)}
                        />
                        {errors.email?.type === 'required' && (
                            <p className='text-red-600'>Email is required</p>
                        )}
                    </div>
                    <div className="flex flex-col ">
                        <label htmlFor="password">
                            Password
                        </label>
                        <input
                            className="border bg-gray-100 p-2"
                            type="password"
                            placeholder="Password"
                            {...register("password", INPUT_OPTIONS)}
                        />
                        {errors.password?.type === 'required' && (
                            <p className='text-red-600'>Password is required</p>
                        )}
                    </div>
                    <button type="submit" className="w-full py-3 mt-8 bg-indigo-600 hover:bg-indigo-500 relative text-white">Log in</button>
                    <div className="flex items-center mt-2">
                        <input
                            className="checkbox checkbox-primary mr-2"
                            type="checkbox"
                            {...register('remember', { required: false })}
                        />
                        <label htmlFor="remember">
                            Remember Me
                        </label>
                    </div>
                    <p className="text-center mt-8">
                        Create account?
                        {" "}
                        <Link to="/Signin" className="text-purple-500 font-semibold">
                            Create now
                        </Link>
                    </p>
                </form>
            </div>
        </div>
    )
}