import { BrowserRouter, Route, Routes } from "react-router-dom";

import Login from './components/auth/Login';
import Signin from './components/auth/Signin';
import Home from './components/home/Home';
import Navbar from "./components/navbar/Navbar";
import PageAnimaux from './components/card/PageAnimaux';
import FicheAnimal from './components/card/FicheAnimal';
import Cart from "./components/card/cart";

import './App.css';

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
						<Route path="PageAnimaux" element={<PageAnimaux />} />
						<Route path="FicheAnimal" element={<FicheAnimal />} />
						<Route path="Cart" element={<Cart />} />
					</Route>
				</Routes>
			</BrowserRouter>
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
