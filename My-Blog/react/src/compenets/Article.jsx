import React from 'react'
import { Link } from 'react-router-dom'
const Article = ({imgSrc , title ,description,date}) => {
  return (
    <div class=" w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

           
            <article class="overflow-hidden rounded-lg shadow-lg">

                <a href="#">
                    <img alt="Placeholder" class="w-full h-48 object-cover object-center" src={imgSrc} />
                </a>

                <header class="flex items-center justify-between leading-tight p- md:p-4">
                    <h1 class="text-lg">
                        <a class="no-underline hover:underline text-xl font-semibold" href="#">
                            {title}...
                        </a>
                    </h1>
                    <p class="text-grey-darker text-xs">
                        {date}
                    </p>
                </header>

                <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                <Link
        to='/news'
        className="inline-block px-7 py-3 border-2 border-black text-black font-medium text-sm leading-snug uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
        data-mdb-ripple="true"
        data-mdb-ripple-color="light"
      >
        Read More
      </Link>
                </footer>

            </article>
            

        </div>
  )
}

export default Article
