import React, { useState, useEffect } from 'react';
import axios from 'axios';
import MatchCard from './MatchCard';
import Example from './InterviewSnipett';
import InterviewSnipett from './InterviewSnipett';
import moment from 'moment';
import Article from './Article';
import Footer from './Footer';

function Home() {
  const [posts, setPosts] = useState([]);
  const [newsSni , setNewsSn] = useState([]);
  const [interSni , setInterSn] = useState([]);
  const [fixSni,setFix] = useState([]);

  useEffect(() => {
    axios.get('http://127.0.0.1:8000/api/hero-posts')
      .then(response => {
        setPosts(response.data);
      })
      .catch(error => {
        console.log(error);
      });
      axios.get('http://127.0.0.1:8000/api/newss')
      .then(response => {
        setNewsSn(response.data);
      })
      .catch(error => {
        console.log(error);
      });
      axios.get('http://127.0.0.1:8000/api/interviewsnip')
      .then(response => {
        setInterSn(response.data);
      })
      .catch(error => {
        console.log(error);
      });
      axios.get('http://127.0.0.1:8000/api/match')
      .then(response => {
        setFix(response.data);
      })
      .catch(error => {
        console.log(error);
      });
  }, []);

  return (
    
<div>

  <section className="mb-40">
    
  {posts.map(post => (

<div
key={post.id}
className="relative overflow-hidden bg-no-repeat bg-cover"
style={{
  backgroundPosition: '50%',
  backgroundImage: `url(http://127.0.0.1:8000/images/${post.image_path})`,
  height: '600px'
}}
>
<div
  className="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
  style={{ backgroundColor: 'rgba(0, 0, 0, 0.75)' }}
>
  <div className="flex justify-center items-center h-full">
    <div className="text-center text-white px-6 md:px-12">
      <h1 className="text-3xl md:text-xl xl:text-7xl font-bold tracking-tight mb-12">
       {post.title}
      </h1>
      <button
        type="button"
        className="inline-block px-7 py-3 border-2 border-white text-white font-medium text-sm leading-snug uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
        data-mdb-ripple="true"
        data-mdb-ripple-color="light"
      >
        Get started
      </button>
    </div>
  </div>
</div>
</div>
        
      ))}
       <div className="container mx-auto mt-6">
     
{fixSni.map((item) => (
        <MatchCard
        key={item.id}
        title={item.equipe}
        team1Name="Morocco"
        team1Logo="https://w1.pngwing.com/pngs/536/1022/png-transparent-football-logo-2018-world-cup-morocco-morocco-national-football-team-royal-moroccan-football-federation-morocco-national-under20-football-team-international-friendlies-morocco.png"
        team2Name={item.team_name}
        team2Logo={`http://127.0.0.1:8000/images/${item.team_logo}`}
        time={item.match_time.slice(0, 5)}
        date={item.match_date}
      />
      ))}

    </div>
   <div className="w-full my-12 mx-auto px-4 md:px-12">
    <h1 className="text-5xl uppercase text-bold text-center">latest</h1>
    <div className="w-full flex flex-wrap -mx-1 lg:-mx-4">

        
    {newsSni.map((item) => (
        <Article
          key={item.id}
          title={item.title.substring(0,50)}
          imgSrc={`http://127.0.0.1:8000/images/${item.image_path}`}
          date={moment(item.updated_at).fromNow()}
          // any other props you want to pass to the Card component
        />
      ))}
    
    
        
       

    </div>
    
</div>


<div className="grid grid-cols-1 lg:grid-cols-2 gap-4">

{interSni.map((item) => (
       <InterviewSnipett
       title={item.title}
       description={item.description}
       image={`http://127.0.0.1:8000/images/${item.image}`}
     />
      ))}

      
      
    </div>
    
  </section>
  


<Footer/>


</div>

    
  )
}

export default Home;
