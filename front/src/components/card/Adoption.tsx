import React from 'react';

// import { Image } from 'react-native';

// // @ts-ignore
// import BoraBora from '../assets/borabora.jpg';
// // @ts-ignore
// import BoraBora2 from '../assets/borabora2.jpg';
// // @ts-ignore
// import Maldives from '../assets/maldives.jpg';
// @ts-ignore
import Maldives3 from "../assets/maldives3.jpeg";
// // @ts-ignore
// import Maldives2 from './maldives2.jpeg';
// // @ts-ignore
// import KeyWest from '../assets/keywest.jpg';
import Anim from './Anim';

const Adoption = () => {
  return (
    <div className='max-w-[1240px] mx-auto px-4 py-16 grid sm:grid-cols-2 lg:grid-cols-3 gap-4'>

    {/* <Anim bg={BoraBora} text='Bora Bora' />
    <Anim bg={BoraBora2} text='Maldives' />
    <Anim bg={Maldives} text='Antigua' />
    <Anim bg={Maldives2} text='Cozumel' /> */}
    <Anim bg={Maldives3} text='Jamaica' />
    {/* <Anim bg={KeyWest} text='Key West' /> */}
    
        <p>hello</p>
    </div>
  )
}

export default Adoption

















// import React from 'react';
// // import { Image } from 'react-native';
// import React, { Component } from 'react';


// const imageUrl = "https://raw.githubusercontent.com/fireclint/react-travel-tailwind/main/src/assets/maldives3.jpg";

// export class MyComponent extends React.Component {
//   render(){
//     return (
//       <img src={{uri: "https://raw.githubusercontent.com/fireclint/react-travel-tailwind/main/src/assets/maldives3.jpg"}} />
//     );
//   }
// };
