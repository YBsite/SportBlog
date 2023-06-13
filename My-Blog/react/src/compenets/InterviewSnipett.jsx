import React from 'react'
import { Link } from 'react-router-dom'

const InterviewSnipett = ({image, title, description}) => {
  return (
    <div className="bg-white shadow-md rounded-md overflow-hidden flex flex-col">
      <div className="relative w-full h-48">
        <img src={image} alt={title} className="w-full h-full object-cover" />
        <Link to='/interviews' className="absolute inset-0 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
          <span className="sr-only">Watch video</span>
          <svg xmlns="http://www.w3.org/2000/svg" className="h-12 w-12 text-white" viewBox="0 0 20 20" fill="currentColor">
            <path fillRule="evenodd" d="M7.5 4.5v11l8-5.5-8-5.5z" />
          </svg>
        </Link>
      </div>
      <div className="p-4">
        <h2 className="text-xl font-semibold mb-2">{title}</h2>
        <p className="text-gray-600">{description}</p>
      </div>
    </div>
  )
}

export default InterviewSnipett
