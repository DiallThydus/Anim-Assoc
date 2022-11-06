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
                      <option>Price (asc)</option>
                      <option>Price (desc)</option>
                  </select>
              </div>
          </div>
      </div>
  </div>;
};

export default CategoryPage;