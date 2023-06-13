import React from 'react'

const Details = ({imgSrc , title , description , date, name}) => {
  return (
    <div className="max-w-5xl mx-auto p-12">
    <image src={imgSrc} className="mb-8" />
    <h1 className="text-5xl font-bold mb-4">{title}</h1>
    <p className="text-gray-700 text-l mb-6 italic">{date}</p>
    <p className="text-gray-700 text-xl font-light leading-relaxed mb-6">{description}</p>
    <br />
    <p className="text-gray-500 text-sm">Written by : {authName}</p>
    {

      console.log('ews det')
    }
  </div>
  )
}

export default Details
