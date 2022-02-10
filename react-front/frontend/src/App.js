import './App.css';
import {Route, Routes} from "react-router-dom";
import Home from "./components/Home.js"
import Signup from "./components/Signup.js"
import Navbar from './components/Navbar';
import * as React from 'react';
import ReactDOM from 'react-dom';
import Button from '@mui/material/Button';
function App() {
  return (

      <div className="App">
        <Navbar />
        <header className="App-header">
          <h1>User managment</h1>

        </header>
        <main className="mainContent">
          <div className="sectorPrincipal">
          <Routes>
              <Route path="/" element={<Home />} />
              <Route path="/signup" element={<Signup />} />
          </Routes>
          </div>
        </main>
      </div>

  );
}

export default App;
