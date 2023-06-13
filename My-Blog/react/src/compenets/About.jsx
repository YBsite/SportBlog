import React from 'react'
import item from '../image/about.jpg'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import Footer from './Footer'
import { faFacebook, faInstagram, faTwitter } from '@fortawesome/free-brands-svg-icons'
import { Link } from 'react-router-dom'


const About = () => {
  return (

  <>
    <div className="max-w-5xl mx-auto p-12">
  <img src={item} className="mb-8 w-full " />
  <h1 className="text-gray-700 text-l">MVN_EN is a football news page established on May 5, 2018. 

  It was created to share news about emerging Moroccan talents and the entire Moroccan football, from youth to Botola. 

  Since 2019, the page has also started to focus on women's football, which was very limited at the time.

  MVN_EN is known as one of the largest Moroccan football pages when it comes to content and football news. 

  The page has developed into a fully-fledged Moroccan news medium in the past 5 years.

  The three of us (Abdessadek, Alaedinne and Ali) think it is important to give attention to all Moroccan teams and in recent years we have interviewed several players about their career and future.

  In addition to sharing football news, we also think about the future of Moroccan football and what it takes to develop. 

  In the coming years, as a page, we want to continue developing ourselves in all aspects.

  MVN_EN, created by football fans, for football fans 

  MVN_EN | Home of Moroccan Football</h1>


  <div className="text-center underline">
  <h1>Follow Us:</h1> <br />
  </div>

  <div className="flex justify-center">
    
    <a href="https://www.facebook.com/MVNENGLISH" target="_blank" rel="noopener noreferrer" className="mx-4">
      <FontAwesomeIcon icon={faFacebook} size="2x" />
    </a>
    <a href="https://www.instagram.com/p/Cr3evs5Ne6r/" target="_blank" rel="noopener noreferrer" className="mx-4">
      <FontAwesomeIcon icon={faInstagram} size="2x" />
    </a>
    <a href="https://twitter.com/MVN_EN?t=YBZ13gVrXDrZ5XVodBcvWg&s=09" target="_blank" rel="noopener noreferrer" className="mx-4">
      <FontAwesomeIcon icon={faTwitter} size="2x" />
    </a>
  </div>
  
</div>
<Footer/>


</>


  )
}

export default About
