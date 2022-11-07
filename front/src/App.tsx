import { useState, createContext } from "react";
import { BrowserRouter, Route, Routes } from "react-router-dom";
import { ToastContainer } from 'react-toastify';

import Navbar from "./components/navbar/Navbar";

import Login from './components/auth/Login';
import Signin from './components/auth/Signin';
import Cart from "./components/Cart/Cart";

import DetailsAnimal from "./components/Animals/DetailsAnimal";
import ListAnimals from './components/Animals/ListAnimals';
import Home from './components/home/Home';

import { BaseUser, User } from "./types";

import './App.css';

export const UserContext = createContext<User | undefined>(undefined);

function App() {
	const [user, setUser] = useState<User>();
	const handleLoginUser = (user: BaseUser) => setUser(BuildUser(user));

	return (
		<div className="App">
			<BrowserRouter>
				<UserContext.Provider value={user}>
					<Navbar />
					<Routes>
						<Route path="/">
							<Route index element={<Home />} />

							<Route path="/login" element={<Login onLogin={handleLoginUser} />} />
							<Route path="/signin" element={<Signin />} />

							<Route path="/animals" element={<ListAnimals />} />
							<Route path="/animals/add" element={<ListAnimals />} />
							<Route path="/animals/:animalId" element={<DetailsAnimal />} />

							<Route path="/cart" element={<Cart />} />

							<Route path="*" element={<NoPageFound />} />
						</Route>
					</Routes>
				</UserContext.Provider>
			</BrowserRouter>
			<ToastContainer />
		</div>
	);
}

function NoPageFound() {
	return (
		<div className="flex flex-col space-y-4 text-center">
			<h1 className="text-3xl">404 | Not Found</h1>
			<p>Could not find the page</p>
		</div>
	);
}

function BuildUser(baseUser: BaseUser) {
	return {
		...baseUser,
		isAdmin: baseUser.role === 1
	}
}

export default App;
