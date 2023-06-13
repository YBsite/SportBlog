import { useEffect } from "react";
import { react } from 'react'
import { useState } from "react";
import { useParams } from "react-router-dom";
import Details from "./Details";
import axios from "axios";
import moment from 'moment';
import Footer from "./Footer";
const LionssesDetails = () => {
    const { lionssesId } = useParams();
  
    const [news, setNews] = useState([]);
  
    useEffect(() => {
      axios.get(`http://127.0.0.1:8000/api/newsdetails`,{
        params:{
          id : {lionssesId}
        }
      })
        .then(response => setNews(response.data))
        .catch(error => console.error(error));
    }, [lionssesId]);
  

      
    if (!news){
      return (
        <>
        <div>
          loading...
      </div>
      <Footer/>
        </>
      )
      
  }

  return (
    
   <>
    <div className="max-w-5xl mx-auto p-12">
      <img src={`http://127.0.0.1:8000/images/${news.image_path}`} className="mb-8 w-full aspect-video" />
      <h1 className="text-5xl font-bold mb-4">{news.title}</h1>
      <p className="text-gray-700 text-l mb-6 italic">{moment(news.updated_at).fromNow()}</p>
      <p className="text-gray-700 text-xl font-light leading-relaxed mb-6">{news.description}</p>
      <br />
      <p className="text-gray-500 text-sm">Written by : {news.name}</p>
      {

        console.log('ews det')
      }
    </div>
    <Footer/>
   </>
    );
  };
  

export default LionssesDetails
