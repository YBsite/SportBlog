import { useEffect } from "react";
import { react } from 'react'
import { useState } from "react";
import { useParams } from "react-router-dom";
import MatchCard from "./MatchCard";
import axios from "axios";
import moment from 'moment';
import Footer from "./Footer";
const FixturesDetails = () => {
    const { fixId } = useParams();
  
    const [news, setNews] = useState(null);
  
    useEffect(() => {
      axios.get(`http://127.0.0.1:8000/api/nextfix`,{
        params:{
          id : {fixId}
        }
      })
        .then(response => setNews(response.data))
        .catch(error => console.error(error));
    }, [fixId]);
  
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
        <img src={`http://127.0.0.1:8000/images/${news.image_cover}`} className="mb-8 w-full aspect-video" />
        <h1 className="text-5xl font-bold mb-4">{news.title}</h1>
        <p className="text-gray-700 text-l mb-6 italic">{moment(news.updated_at).fromNow()}</p>
        <MatchCard
  title={news.equipe}
  team1Name="Morocco"
  team1Logo="https://w1.pngwing.com/pngs/536/1022/png-transparent-football-logo-2018-world-cup-morocco-morocco-national-football-team-royal-moroccan-football-federation-morocco-national-under20-football-team-international-friendlies-morocco.png"
  team2Name={news.team_name}
  team2Logo={`http://127.0.0.1:8000/images/${news.team_logo}`}
  time={news.match_time.slice(0, 5)}
  date={news.match_date}
/>
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
  

export default FixturesDetails
