import { BrowserRouter, Route, Routes } from "react-router-dom";

import Login from './components/auth/Login';
import Signin from './components/auth/Signin';
import Navbar from "./components/navbar/Navbar";
import ListAnimals from './components/Animals/ListAnimals';
import DetailsAnimal from "./components/Animals/DetailsAnimal";
import Cart from "./components/Cart/Cart";
import './App.css';
import Home from "./components/home/Home";
import { Header } from './components/Header';
import { Page, usePage } from './contexts/Page';
import { ArticleIndex } from './pages/Articles/index';
import { AuthorIndex } from './pages/Author';

const App: React.FC = () => {
	const { page } = usePage();
  
	const renderSwitch = () => {
	  switch (page) {
		case Page.Articles:
		  return <ArticleIndex />;
		case Page.Authors:
		  return <AuthorIndex />;
		default:
		  return '';
	  }
	};
  
	return (
	  <div className="App">
		<Header />
		{renderSwitch()}
	  </div>
	);
  };

// function App() {
// 	return (
// 		<div className="App">
// 			<BrowserRouter>
// 				<Navbar />
// 				<Routes>

// 				<Route path="/login" element={<Login />} />
// 						<Route path="/signin" element={<Signin />} />

// 						<Route path="/animals" element={<ListAnimals />} />
// 						<Route path="/animals/:animalId" element={<DetailsAnimal />} />

// 						<Route path="/cart" element={<Cart />} />
// 						{/* <Route path="/home" element={<Home />} /> */}


// 						<Route path="*" element={<Home />} />
// 				</Routes>
// 			</BrowserRouter>
// 		</div>
// 	);
// }

function NoPageFound() {
	return (
		<div className="flex flex-col space-y-4 text-center">
			<h1 className="text-3xl">404 | Not Found</h1>
			<p>Could not find the page</p>		</div>
	);
}

export default App;
