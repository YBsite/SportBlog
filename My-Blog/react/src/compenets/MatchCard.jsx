import React from 'react';

function MatchCard({ team1, team2, team1Logo, team2Logo, date, time, stadium }) {
    return (
      <div className="bg-white shadow-lg rounded-lg overflow-hidden">
        <div className="px-4 py-2 bg-gray-100">
          <h2 className="text-gray-800 text-lg font-bold">
            Moroccan National 1 - <span className='text-sm text-gray-800 font-bold'>{date}</span>
          </h2>
        </div>
        <div className="flex justify-between items-center px-4 py-3 bg-gray-200">
          <div className="flex items-center">
            <img
              className="h-8 w-8 mr-2 object-contain"
              src={team1Logo}
              alt={`${team1} Logo`}
            />
            <h2 className="text-gray-800 text-md font-bold">{team1}</h2>
          </div>
          <div className="text-gray-800 text-sm font-bold">
            {time}
          </div>
          <div className="flex items-center">
            <h2 className="text-gray-800 text-md font-bold">{team2}</h2>
            <img
              className="h-8 w-8 ml-2 object-contain"
              src={team2Logo}
              alt={`${team2} Logo`}
            />
          </div>
        </div>
      </div>
    );
  }
  

export default MatchCard;
