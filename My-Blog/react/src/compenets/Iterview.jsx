import React from 'react'
import axios from 'axios'
import { useState } from 'react'
import { useEffect } from 'react'
import Card from './Card'
import Footer from './Footer'
const Iterview = () => {
  const [data, setData] = useState([]);

  useEffect(() => {
    fetch('http://127.0.0.1:8000/api/interview')
      .then(response => response.json())
      .then(data => {
        setData(data);
      });
  }, []);


  return (
    <>
    <div className="mt-5 grid grid-cols-1 sm:grid-cols-4 md:grid-cols-3 lg:grid-cols-4 gap-4">
      {data.length === 0 ? (
  <p>No interviews found</p>
) : (
 <>
 
 
  {data.map(item => (
    
    <Card
      key={item.title}
      title={item.title.substring(0,40)}
      description={item.description.substring(0,60)}
      imagePath={`http://127.0.0.1:8000/images/${item.image}`}
      id={`/interviews/${item.id}`}
    />
  ))}


 </>
)}
      
      
    </div>
    <Footer/>
    </>
  )
}

export default Iterview
