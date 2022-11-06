import React from 'react';
import data from "./data/data.json";
import FicheAnimal from './FicheAnimal';


const ProjectsListing = () => {
    const { animals } = data;
    return (
      <div className="max-w-6xl py-12 min-h-[88vh] mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
        {animals.map((animal, i) => (
          <FicheAnimal key={animal.id} index={i+1} animal={animal}/>
        ))}
      </div>
    );
  };
// const CategoryPage = () => {
//   return <div>  
//       <div className='flex flex-col p-5'>
//           <h1 className='text-[30px]'>Animals</h1>
//           <div className='flex items-center justify-between mt-3'>
//               <div className='flex mobile:flex-col'>
//                   <p>Filter by</p> 
//                   <select className='ml-3 border-2 border-silver mobile:ml-0'>
//                       <option selected disabled>Choix</option>
//                       <option>Chien</option>
//                       <option>Chat</option>
//                       <option>Rongeur</option>
//                       <option>Autres</option>
//                   </select>
//               </div>
//               <div className='flex mobile:flex-col mobile:items-end'>
//                   <p>Sort by</p>
//               <select className='ml-3 border-2 border-silver'>
//                       <option selected >AgeMin (first)</option>
//                       <option>(first)</option>
//                       <option>Price (asc)</option>
//                       <option>Price (desc)</option>
//                   </select>
//               </div>
//           </div>
//       </div>
      
//   </div>;

// };



  export default ProjectsListing;
// export default CategoryPage;