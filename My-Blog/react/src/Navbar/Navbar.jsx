import { Fragment } from 'react'
import { Disclosure, Menu, Transition } from '@headlessui/react'
import { Bars3Icon, BellIcon, XMarkIcon } from '@heroicons/react/24/outline'
import logo from '../image/logo.png'
import { useLocation } from 'react-router-dom'
import { Link } from 'react-router-dom'

const navigation = [
  { name: 'Home', to:'/', current: true },
  { name: 'News', to:'/news', current: false },
  { name: 'Interviews', to:'/interviews', current: false },
  { name: 'Next Fixtures', to:'/fixtures', current: false },
  { name: 'About MVN_EN', to:'/about', current: false },
]

function classNames(...classes) {
  return classes.filter(Boolean).join(' ')
}

export default function Example() {
  const location = useLocation('')
  return (
    <Disclosure as="nav" className="bg-gray-800">
      {({ open }) => (
        <>
          <div className="mx-auto max-w-8xl px-2 sm:px-6 lg:px-8">
            <div className="relative flex h-16 items-center justify-between">
              <div className="absolute inset-y-0 left-0 flex items-center sm:hidden">
                {/* Mobile menu button*/}
                <Disclosure.Button className="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                  <span className="sr-only">Open main menu</span>
                  {open ? (
                    <XMarkIcon className="block h-6 w-6" aria-hidden="true" />
                  ) : (
                    <Bars3Icon className="block h-6 w-6" aria-hidden="true" />
                  )}
                </Disclosure.Button>
              </div>
              <div className="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div className="flex flex-shrink-0 items-center">
                  <img
                    className="block h-8 w-auto lg:hidden"
                    src={logo}
                    alt="Your Company"
                  />
                  <img
                    className="hidden h-8 w-auto lg:block"
                    src={logo}
                    alt="Your Company"
                  />
                </div>
                <div className="hidden sm:ml-6 sm:block justify-center">
  <div className="flex justify-center space-x-4">
    {navigation.map((item) => (
      <Link
        key={item.name}
        to={item.to}
        className={classNames(
          item.current ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white',
          'rounded-md px-3 py-2 text-sm font-medium'
        )}
        aria-current={item.current ? 'page' : undefined}
      >
        {item.name}
      </Link>
    ))}
  </div>
</div>

              </div>
              <div className="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                

                {/* Profile dropdown */}
                <Menu as="div" className="relative ml-3">
                  <div>
                    <Menu.Button className="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                      <span className="sr-only">Open user menu</span>
                      <img
                        className="h-auto w-8 rounded-full"
                        src='data:image/png;base64,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'
                        alt=""
                      />
                    </Menu.Button>
                  </div>
                  <Transition
                    as={Fragment}
                    enter="transition ease-out duration-100"
                    enterFrom="transform opacity-0 scale-95"
                    enterTo="transform opacity-100 scale-100"
                    leave="transition ease-in duration-75"
                    leaveFrom="transform opacity-100 scale-100"
                    leaveTo="transform opacity-0 scale-95"
                  >
                    <Menu.Items className="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                      <Menu.Item>
                        {({ active }) => (
                          <Link
                            to='atlaslions'
                            className={classNames(active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700')}
                          >
                            ATLAS LIONS
                          </Link>
                        )}
                      </Menu.Item>
                      <Menu.Item>
                        {({ active }) => (
                          <Link
                            to='atlaslionsses'
                            className={classNames(active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700')}
                          >
                            ATLAS LIONSSES
                          </Link>
                        )}
                      </Menu.Item>
                      <Menu.Item>
                        {({ active }) => (
                          <Link
                            to='futsal'
                            className={classNames(active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700')}
                          >
                            FUTSAL
                          </Link>
                        )}
                      </Menu.Item>
                      <Menu.Item>
                        {({ active }) => (
                          <Link
                            to='youth'
                            className={classNames(active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700')}
                          >
                            YOUTH
                          </Link>
                        )}
                      </Menu.Item>
                    </Menu.Items>
                  </Transition>
                </Menu>
              </div>
            </div>
          </div>

          <Disclosure.Panel className="sm:hidden">
            <div className="space-y-1 px-2 pb-3 pt-2">
              {navigation.map((item) => (
                <Link
                  key={item.name}
                  to={item.to}
                  href={item.href}
                  className={classNames(
                    item.current ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white',
                    'block rounded-md px-3 py-2 text-base font-medium'
                  )}
                  aria-current={item.current ? 'page' : undefined}
                >
                  {item.name}
                </Link>
              ))}
            </div>
          </Disclosure.Panel>
        </>
      )}
    </Disclosure>
  )
}