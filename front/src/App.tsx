import { BrowserRouter, Route, Routes } from "react-router-dom";
import { ToastContainer } from 'react-toastify';

import Navbar from "./components/navbar/Navbar";

import Login from './components/auth/Login';
import Signin from './components/auth/Signin';
import Cart from "./components/Cart/Cart";

import Home from './components/home/Home';
import ListAnimals from './components/Animals/ListAnimals';
import DetailsAnimal from "./components/Animals/DetailsAnimal";

import './App.css';

function App() {
	return (
		<div className="App">
			<BrowserRouter>
				<Navbar />
				<Routes>
					<Route path="/">
						<Route index element={<Home />} />

						<Route path="/login" element={<Login />} />
						<Route path="/signin" element={<Signin />} />

						<Route path="/animals" element={<ListAnimals />} />
						<Route path="/animals/:animalId" element={<DetailsAnimal />} />

						<Route path="/cart" element={<Cart />} />

						<Route path="*" element={<NoPageFound />} />
					</Route>
				</Routes>
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

export default App;
