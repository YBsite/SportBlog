import React, { useState, useEffect } from 'react';
import Card from './Card';
import Footer from './Footer';

function Fixtures() {
  const [data, setData] = useState([]);

  useEffect(() => {
    fetch('http://127.0.0.1:8000/api/showfix')
      .then(response => response.json())
      .then(data => {
        setData(data);
      });
  }, []);

  return (
    <>
    <div className="mt-5 grid grid-cols-1 sm:grid-cols-4 md:grid-cols-3 lg:grid-cols-4 gap-4">
      {data.length === 0 ? (
  <p>No fixtures found</p>
) : (
 <>
  {data.map(item => (
    <Card
      key={item.title}
      title={item.title.substring(0,30)}
      description={item.title.substring(0,30)}
      imagePath={`http://127.0.0.1:8000/images/${item.image_cover}`}
      id={`/fixtures/${item.id}`}
    />
  ))}
 </>
)}
      
      
    </div>
    <Footer/>
    </>
  );
}

export default Fixtures;

