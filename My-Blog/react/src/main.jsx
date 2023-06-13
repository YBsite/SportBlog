import React, { StrictMode } from 'react'
import ReactDOM from 'react-dom/client'
import App from './App.jsx'
import './index.css'
import { BrowserRouter } from 'react-router-dom'

ReactDOM.createRoot(document.getElementById('root')).render(
  <div className="container mx-auto bg-gray-100 min-h-screen flex flex-col">
    <React.StrictMode>
        <App/>
  </React.StrictMode>
  </div>
)
