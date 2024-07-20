import React from 'react';
import Navbar from './Navbar';
import HomeBody from './HomeBody';
import 'bootstrap/dist/css/bootstrap.min.css';

const Home = () => {
  return (
    <div>
      <Navbar />
      <HomeBody />
    </div>
  );
};

export default Home;