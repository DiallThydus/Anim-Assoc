import { FieldValues, useForm } from 'react-hook-form';
import { Link, useNavigate } from "react-router-dom";

import { toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';

import { API_URI, INPUT_OPTIONS } from '../../config';

interface FormSigninProps extends FieldValues {
	firstName: string;
	lastName: string;
	email: string;
	phoneNumber: number;

	password: string;
	passwordConfirm: string; // only front

	address: string;
	zipCode: number;
	city: string;


	terms: boolean; // only front
	remember: boolean; // only front
}

export default function Signin() {
	const navigate = useNavigate();
	const { register, setError, handleSubmit, formState: { errors } } = useForm();

	const onSubmit = async (formValues: FormSigninProps) => {
		if (formValues.password !== formValues.passwordConfirm) {
			return setError('passwordConfirm', {
				type: 'equals-password',
				message: 'Passwords does not match'
			});
		}

		const formData = Object
			.entries(formValues)
			.reduce(
				(formData, [key, value]) => {
					formData.append(key, value.toString())
					return formData;
				},
				new FormData()
			);

		// todo: fix cors
		const request = await fetch(API_URI + '/?controller=user&action=register', {
			method: 'POST',
			headers: {
				"Access-Control-Allow-Origin": "*"
			},
			body: formData
		});

		const result = await request.json();
		if (request.ok) {
			toast(result?.message || 'Account successfully created', { type: 'success' });
			navigate('/login');
		} else {
			toast(result?.[0] || 'Something went wront during account creation', { type: 'error' });
			console.error(result);
		}
	};

	return (
		<div className="w-full h-screen bg-zinc-900/90">
			<div className="flex justify-center items-center h-full">
				<form className="max-w-[500px] w-full mx-auto bg-white p-8" onSubmit={handleSubmit(onSubmit as any)}>
					<h1 className="text-4xl font-bold text-center py-4 mb-4">
						Sign in
					</h1>
					<div className="flex flex-col mb-4">
						<label htmlFor="firstName">
							First name
						</label>
						<input
							className="input input-bordered bg-gray-100 p-2"
							type="text"
							placeholder="Jean"
							{...register('firstName', INPUT_OPTIONS)}
						/>
						{errors.firstName?.type === 'required' && (
							<p className='text-red-600'>First name is required</p>
						)}
					</div>
					<div className="flex flex-col mb-4">
						<label htmlFor="lastName">
							Last name
						</label>
						<input
							className="input input-bordered bg-gray-100 p-2"
							type="text"
							placeholder="Dupont"
							{...register('lastName', INPUT_OPTIONS)}
						/>
						{errors.lastName?.type === 'required' && (
							<p className='text-red-600'>Last name is required</p>
						)}
					</div>
					<div className="flex flex-col mb-4">
						<label htmlFor="email">
							Email
						</label>
						<input
							className="input input-bordered bg-gray-100 p-2"
							type="email"
							placeholder="jean.dupont@gmail.com"
							{...register('email', INPUT_OPTIONS)}
						/>
						{errors.email?.type === 'required' && (
							<p className='text-red-600'>Email is required</p>
						)}
					</div>
					<div className="flex flex-col mb-4">
						<label htmlFor="phoneNumber">
							Phone Number
						</label>
						<input
							className="input input-bordered bg-gray-100 p-2"
							type="tel"
							placeholder="+33 7 77 77 77 77"
							{...register('phoneNumber', INPUT_OPTIONS)}
						/>
						{errors.phoneNumber?.type === 'required' && (
							<p className='text-red-600'>Phone Number is required</p>
						)}
					</div>
					<div className="flex flex-col mb-4">
						<label htmlFor="password">
							Password
						</label>
						<input
							className="input input-bordered bg-gray-100 p-2"
							type="password"
							placeholder="********"
							{...register('password', INPUT_OPTIONS)}
						/>
						{errors.password?.type === 'required' && (
							<p className='text-red-600'>Password is required</p>
						)}
					</div>
					<div className="flex flex-col mb-4">
						<label htmlFor="passwordConfirm">
							Confirm password
						</label>
						<input
							className="input input-bordered bg-gray-100 p-2"
							type="password"
							placeholder="********"
							{...register('passwordConfirm', INPUT_OPTIONS)}
						/>
						{errors.passwordConfirm?.type === 'required' && (
							<p className='text-red-600'>Password confirmation is required</p>
						)}
						{errors.passwordConfirm?.type === 'equals-password' && (
							<p className='text-red-600'>{errors.passwordConfirm?.message as string}</p>
						)}
					</div>
					<div className="flex flex-col mb-4">
						<label htmlFor="address">
							Address
						</label>
						<input
							className="input input-bordered bg-gray-100 p-2"
							type="text"
							placeholder="123 avenue de la rue"
							{...register('address', INPUT_OPTIONS)}
						/>
						{errors.address?.type === 'required' && (
							<p className='text-red-600'>Address is required</p>
						)}
					</div>
					<div className="flex flex-col mb-4">
						<label htmlFor="zipCode">
							ZIP Code
						</label>
						<input
							className="input input-bordered bg-gray-100 p-2"
							type="number"
							placeholder="75001"
							{...register('zipCode', INPUT_OPTIONS)}
						/>
						{errors.zipCode?.type === 'required' && (
							<p className='text-red-600'>ZIP Code is required</p>
						)}
					</div>
					<div className="flex flex-col mb-4">
						<label htmlFor="city">
							City
						</label>
						<input
							className="input input-bordered bg-gray-100 p-2"
							type="text"
							placeholder="Paris"
							{...register('city', INPUT_OPTIONS)}
						/>
						{errors.city?.type === 'required' && (
							<p className='text-red-600'>City is required</p>
						)}
					</div>
					<div className="flex flex-col mb-4">
						<div className="flex items-center mt-4">
							<input
								type="checkbox"
								className="checkbox checkbox-primary mr-2"
								{...register('terms', { required: true })}
							/>
							<label htmlFor="terms">
								I accept the
								{" "}
								<Link to="/#" className="text-purple-500 font-semibold">
									Terms of Use
								</Link>
								{" & "}
								<Link to="/#" className="text-purple-500 font-semibold">
									Privacy Policy
								</Link>
							</label>
						</div>
						{errors.terms?.type === 'required' && (
							<p className='text-red-600'>You must accept the terms of use and privacy policy</p>
						)}
					</div>
					<button type="submit" className="w-full py-3 mt-8 bg-indigo-600 hover:bg-indigo-500 relative text-white">
						Sign In
					</button>
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
						Already member?
						{" "}
						<Link to="/login" className="text-purple-500 font-semibold">
							Log in now
						</Link>
					</p>
				</form>
			</div>
		</div>
	);
}