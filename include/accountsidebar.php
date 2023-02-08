  <!-- Header -->
  <nav class="fixed z-50 w-full border-b border-gray-200 bg-sky-900 ">
      <div class="px-3 py-3 lg:px-5 lg:pl-3">
          <div class="flex items-center justify-between">
              <div class="flex items-center justify-start">
                  <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar"
                      class="p-2 mr-2 text-gray-600 rounded cursor-pointer lg:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100">
                      <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd"
                              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                              clip-rule="evenodd"></path>
                      </svg>
                      <svg id="toggleSidebarMobileClose" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                      </svg>
                  </button>

                  <div>
                      <img class="bg-white rounded-lg "
                          src="https://res.cloudinary.com/drywqd3hf/image/upload/v1675425966/care_1_vroxw3.png"
                          alt="logo" />
                  </div>
              </div>
              <div class="flex items-center ">
                  <p class="text-xl font-semibold text-white ">
                      Purchase Management
                  </p>
              </div>

              <div class="flex items-center space-x-5">
                  <button id="toggleSidebarMobileSearch" type="button"
                      class="p-2 text-gray-500 rounded-lg lg:hidden hover:text-gray-900 hover:bg-gray-100">

                  </button>

                  <a href="logout.php"
                      class="hidden sm:inline-flex ml-5 text-white bg-pink-500 hover:bg-pink-600 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center items-center mr-3">
                      <svg class="w-8 h-8 mr-2 -ml-1 text-white svg-inline--fa fa-gem" viewBox="0 0 24 24" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                          <g id="SVGRepo_iconCarrier">
                              <path
                                  d="M14 20H6C4.89543 20 4 19.1046 4 18L4 6C4 4.89543 4.89543 4 6 4H14M10 12H21M21 12L18 15M21 12L18 9"
                                  stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              </path>
                          </g>
                      </svg>
                      Log Out
                  </a>
              </div>
          </div>
      </div>
  </nav>
  <!-- ./Header -->

  <!-- Sidebar -->
  <div
      class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-sky-900  h-full text-white transition-all duration-300 border-none z-10 sidebar">
      <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
          <ul class="flex flex-col py-4 space-y-1">
              <li class="px-5 hidden md:block">
                  <div class="flex flex-row items-center h-8">
                      <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
                  </div>
              </li>
              <li>
                  <a href="accountapproval.php"
                      class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-sky-900  text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-pink-500 pr-6">
                      <span class="inline-flex justify-center items-center ml-4">
                          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                              </path>
                          </svg>
                      </span>
                      <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                  </a>
              </li>
              <li>
                  <a href="vendorlist.php"
                      class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-sky-900  text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-pink-500 d pr-6">
                      <span class="inline-flex justify-center items-center ml-4">
                          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                              </path>
                          </svg>
                      </span>
                      <span class="ml-2 text-sm tracking-wide truncate">Vendorlist</span>
                      <span
                          class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-500 bg-indigo-50 rounded-full">New</span>
                  </a>
              </li>
              <li>
                  <a href="accountsummary.php"
                      class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-sky-900 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-pink-500  pr-6">
                      <span class="inline-flex justify-center items-center ml-4">
                          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                              </path>
                          </svg>
                      </span>
                      <span class="ml-2 text-sm tracking-wide truncate">Account Summary</span>
                  </a>
              </li>
              <!-- <li>
                            <a href="#"
                                class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-sky-900  text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-pink-500  pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                                        </path>
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Notifications</span>
                                <span
                                    class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 bg-red-50 rounded-full">1.2k</span>
                            </a>
                        </li>
                        <li class="px-5 hidden md:block">
                            <div class="flex flex-row items-center mt-5 h-8">
                                <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Settings</div>
                            </div>
                        </li>
                        <li>
                            <a href="#"
                                class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-sky-900  text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-pink-500  pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-sky-900  text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-pink-500  pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
                            </a>
                        </li> -->
          </ul>
          <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2023</p>
      </div>
  </div>
  <!-- ./Sidebar -->