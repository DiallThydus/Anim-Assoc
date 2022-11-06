import React from 'react';
import { Link } from "react-router-dom";


const FicheAnimal = () => {
  return (
    <div>
      <div className="flex justify-center mobile:flex-col mobile:mt-4 mobile:p-3">
        <div className="flex-1 flex items-center justify-center">
          <img
            src="https://pixabay.com/fr/photos/cat-jeune-animal-chaton-chat-gris-2083492/"
            className="product_img"
            alt="product_image"
          />
        </div>
        <div className="flex-[1.3] flex flex-col items-start  justify-items-center mt-10 mobile:items-center">
          <h1 className="title text-[40px] mobile:text-[30px]">
            Nom
          </h1>
          <p className="disription pr-[4rem] text-justify mt-4 mobile:pr-0">
            Description de l'animal
          </p>
          <div className="flex flex-col place-self-start">
            <p className="mt-7 text-3xl">
               <b>Disponibilité</b>
            </p>

            <div className="colors flex mt-7 text-2xl">
              Age
            </div>

            <div className="mt-7 text-2xl">
              Race
              <select className="border-[2px] border-silver rounded-md ml-5">
                <option selected>Select</option>
                <option>Race1</option>
                <option>Race2</option>
                <option>Race3</option>
              </select>
            </div>
            <div className="mt-7">
            </div>
          </div>

          <button className="text-white bg-[#8a4af3] rounded-md shadow-md mt-[30px] p-3">
            Réserver l'animal
          </button>
        </div>
      </div>
    </div>
  );
};

export default FicheAnimal;

// const FicheAnimal = ({ }) => {
//   return (
//     <div className="bg-slate-100 p-5 shadow-lg rounded-md">
//       <h2 className="text-indigo-500">
//         <span className="text-indigo-300 mr-2">{}</span>
//         {}
//       </h2>
//       <div>
//         <img
//           src={""}
//           className="rounded-md my-4 md:h-52 w-full"
//           alt=""
//         />

//         <div className="flex justify-between items-center">
//           <a className="text-lg flex items-center" href="#">
//             <div className="mr-1" />
//             View Challenge
//           </a>
//           <a
//             href="http://github.com/username/repo"
//             className="flex items-center text-lg"
//           >
//             <div className="mr-1" />
//             Source Code
//           </a>
//         </div>
//       </div>
//     </div>
//   );
// };

// export default FicheAnimal;