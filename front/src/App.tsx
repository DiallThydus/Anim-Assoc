import { BrowserRouter, Route, Routes } from "react-router-dom";
import { ToastContainer } from 'react-toastify';

import Login from './components/auth/Login';
import Signin from './components/auth/Signin';
import Adoption from './components/card/Adoption';
import Home from './components/home/Home';
import Navbar from "./components/navbar/Navbar";

import './App.css';
import ProjectCart from "./components/Project/ProjectCart";
// import ProjectListing from "./components/Project/ProjectListing";

function App() {
	return (
		<div className="App">
			<BrowserRouter>
				<Navbar />
				<Routes>
					<Route path="/">
						<Route index element={<Home />} />
						<Route path="login" element={<Login />} />
						<Route path="signin" element={<Signin />} />
						<Route path="adoption" element={<Adoption />} />
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
			<p>La page que vous cherchez est introuvable.</p>
		</div>
	);
}

export default App;
