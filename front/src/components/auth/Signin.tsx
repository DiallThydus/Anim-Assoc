import { FieldValues, RegisterOptions, useForm } from 'react-hook-form';
import { Link } from "react-router-dom";

interface FormSigninProps extends FieldValues {
	firstName: string;
	lastName: string;
	email: string;
	password: string;
	passwordConfirm: string;
	terms: boolean;
	remember: boolean;
}

export const STRING_INPUT_OPTIONS = {
	required: true,
	minLength: 0,
	maxLength: 150
} as RegisterOptions;

export default function Signin() {
	const { register, setError, handleSubmit, formState: { errors } } = useForm();

	const onSubmit = (formValues: FormSigninProps) => {
		if (formValues.password !== formValues.passwordConfirm) {
			return setError('passwordConfirm', {
				type: 'equals-password',
				message: 'Passwords does not match'
			});
		}

		// send request
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
							{...register('firstName', STRING_INPUT_OPTIONS)}
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
							{...register('lastName', STRING_INPUT_OPTIONS)}
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
							{...register('email', STRING_INPUT_OPTIONS)}
						/>
						{errors.email?.type === 'required' && (
							<p className='text-red-600'>Email is required</p>
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
							{...register('password', STRING_INPUT_OPTIONS)}
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
							{...register('passwordConfirm', STRING_INPUT_OPTIONS)}
						/>
						{errors.passwordConfirm?.type === 'required' && (
							<p className='text-red-600'>Password confirmation is required</p>
						)}
						{errors.passwordConfirm?.type === 'equals-password' && (
							<p className='text-red-600'>{errors.passwordConfirm?.message as string}</p>
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