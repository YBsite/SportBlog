import { useState } from 'react'
import AtlasLions from './compenets/AtlasLions';
import { BrowserRouter, Routes, Route } from "react-router-dom";
import Example from './Navbar/Navbar'
import Home from './compenets/Home';
import Iterview from './compenets/Iterview';
import About from './compenets/About';
import Fixtures from './compenets/Fixtures';
import NewsDetails from './compenets/NewsDetails';
import InterviewDetails from './compenets/interviwaDetails';
import Youth from './compenets/youth';
import AtlassLionsses from './compenets/AtlassLionsses';
import Futsal from './compenets/Futsal';
import News from './compenets/News';
import YothDetails from './compenets/YothDetails';
import LionsDetails from './compenets/LionsDeatils';
import LionssesDetails from './compenets/LionssesDetails';
import FutsalDetails from './compenets/FutsalDetails';
import FixturesDetails from './compenets/FixturesDetails';

function App() {
  const [count, setCount] = useState(0)

  return (
   <BrowserRouter>
   <Example/>
      <Routes>
        <Route path='/' element={<Home/>}></Route>
        <Route path='interviews' element={<Iterview/>}></Route>
        <Route path='interviews/:id' element={<InterviewDetails/>}></Route>
        <Route path='fixtures' element={<Fixtures/>}></Route>
        <Route path='fixtures/:fixId' element={<FixturesDetails/>}></Route>
        <Route path='news' element={<News/>}></Route>
        <Route path='news/:newsId' element={<NewsDetails/>}></Route>
        
        <Route path='/about' element={<About/>}></Route>
        <Route path='atlaslions' element={<AtlasLions/>}></Route>
        <Route path='atlaslions/:lionsId' element={<LionsDetails/>}></Route>
        <Route path='futsal' element={<Futsal/>}></Route>
        <Route path='futsal/:futsalId' element={<FutsalDetails/>}></Route>
        <Route path='atlaslionsses' element={<AtlassLionsses/>}></Route>
        <Route path='atlaslionsses/:lionssesId' element={<LionssesDetails/>}></Route>
        <Route path='youth' element={<Youth/>}></Route>
        <Route path='youth/:youthId' element={<YothDetails/>}></Route>
      </Routes>
   </BrowserRouter>
  )
}

export default App

