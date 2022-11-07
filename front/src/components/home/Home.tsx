import React from 'react';

const CategoryPage = () => {
          return <div>  
              <div className='flex flex-col p-5'>
                  <h1 className='text-[30px]'>Animals</h1>
                  <div className='flex items-center justify-between mt-3'>
                      <div className='flex mobile:flex-col'>
                          <p>Filter by</p> 
                          <select className='ml-3 border-2 border-silver mobile:ml-0'>
                              <option selected disabled>Choix</option>
                              <option>Chien</option>
                              <option>Chat</option>
                              <option>Rongeur</option>
                              <option>Autres</option>
                          </select>
                          {/* <select className='ml-3 border-2 border-silver mobile:ml-0'>
                              <option selected disabled>Color</option>
                              <option>Yellow</option>
                              <option>Blue</option>
                              <option>Red</option>
                              <option>Green</option>
                          </select> */}
                      </div>
                      <div className='flex mobile:flex-col mobile:items-end'>
                          <p>Sort by</p>
                      <select className='ml-3 border-2 border-silver'>
                              <option selected >AgeMin (first)</option>
                              <option>AgeMax(first)</option>
                              <option>Ancienneté (asc)</option>
                              <option>Ancienneté (desc)</option>
                          </select>
                      </div>
                  </div>
              </div>
              <p>Toto</p>
        
          </div>;
        
        };
        
        export default CategoryPage;
;

// import data from "./data/data.json";
// import FicheAnimal from './FicheAnimal';

// export default function Home() {
//     return (
//         <div className="flex flex-col space-y-4 text-center">
//             <h1 className="text-3xl">Ma super page d'accueil</h1>
//             <p>Site de l'association "Anim' Assoc"</p>
//         </div>