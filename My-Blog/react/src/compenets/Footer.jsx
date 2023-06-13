import React from 'react'
import logo from '../image/logo.png'
import { Link } from 'react-router-dom'
const Footer = () => {
  return (
    <footer class=" w-full bg-gray-800  shadow dark:bg-gray-900 mt-auto">
    <div class="w-full   p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <Link to='/ 'class="flex items-center mb-4 sm:mb-0">
                <img src={logo} class="h-8 mr-3" alt="mrv Logo" />
            </Link>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-300 sm:mb-0 dark:text-gray-400">
                <li>
                    <Link to='/news' class="mr-4 hover:underline md:mr-6 ">News</Link>
                </li>
                <li>
                    <Link to='/fixtures' class="mr-4 hover:underline md:mr-6">Next Fixtures</Link>
                </li>
                <li>
                    <Link to='/interviews' class="mr-4 hover:underline md:mr-6 ">Interviews</Link>
                </li>
                
            </ul>
        </div>
        <hr class="my-6 border-gray-200  sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-300 sm:text-center dark:text-gray-400">© 2023 <Link href="/" class="hover:underline">mrv_en™</Link>. All Rights Reserved.</span>
    </div>
</footer>


  )
}

export default Footer
