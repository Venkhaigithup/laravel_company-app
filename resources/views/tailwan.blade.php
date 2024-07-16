<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/tailwind_vite.css')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!--
              Icon when menu is closed.

              Menu open: "hidden", Menu closed: "block"
            -->
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!--
              Icon when menu is open.

              Menu open: "block", Menu closed: "hidden"
            -->
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex flex-shrink-0 items-center">
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="#" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Dashboard</a>
                            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Team</a>
                            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Projects</a>
                            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Calendar</a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">View notifications</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </button>

                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <div>
                            <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="/assets/images/s4.jpg" alt="">
                            </button>
                        </div>

                        <!--
              Dropdown menu, show/hide based on menu state.

              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
                        <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Dashboard</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Team</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Projects</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Calendar</a>
            </div>
        </div>
    </nav>
    {{-- navicate bar header --}}

    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold leading-7 text-indigo-600">Deploy faster</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Everything you need to deploy your app</p>
                <p class="mt-6 text-lg leading-8 text-gray-600">Quis tellus eget adipiscing convallis sit sit eget aliquet quis. Suspendisse eget egestas a elementum pulvinar et feugiat blandit at. In mi viverra elit nunc.</p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                                </svg>
                            </div>
                            Push to deploy
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Morbi viverra dui mi arcu sed. Tellus semper adipiscing suspendisse semper morbi. Odio urna massa nunc massa.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                            </div>
                            SSL certificates
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Sit quis amet rutrum tellus ullamcorper ultricies libero dolor eget. Sem sodales gravida quam turpis enim lacus amet.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                </svg>
                            </div>
                            Simple queues
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Quisque est vel vulputate cursus. Risus proin diam nunc commodo. Lobortis auctor congue commodo diam neque.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                                </svg>
                            </div>
                            Advanced security
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Arcu egestas dolor vel iaculis in ipsum mauris. Tincidunt mattis aliquet hac quis. Id hac maecenas ac donec pharetra eget.</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
    {{-- feature section --}}


    <!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
    <div class="bg-white" style="margin-top: -180px">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
                <h2 class="text-2xl font-bold text-gray-900">Collections</h2>

                <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                    <div class="group relative">
                        <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-6 text-sm text-gray-500">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Desk and Office
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900">Work from home accessories</p>
                    </div>
                    <div class="group relative">
                        <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-02.jpg" alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-6 text-sm text-gray-500">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Self-Improvement
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900">Journals and note-taking</p>
                    </div>
                    <div class="group relative">
                        <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-03.jpg" alt="Collection of four insulated travel bottles on wooden shelf." class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-6 text-sm text-gray-500">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Travel
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900">Daily commute essentials</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- category previview --}}

    <!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="sr-only">Products</h2>

            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">Earthen Bottle</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">$48</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">Nomad Tumbler</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-03.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">Focus Paper Refill</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">$89</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-04.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">Machined Mechanical Pencil</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
                </a>

                <!-- More products... -->
            </div>
        </div>
    </div>
    {{-- product list--}}

    <!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    theme: {
      extend: {
        gridTemplateRows: {
          '[auto,auto,1fr]': 'auto auto 1fr',
        },
      },
    },
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
    <div class="bg-white">
        <div class="pt-6">
            <nav aria-label="Breadcrumb">
                <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                    <li>
                        <div class="flex items-center">
                            <a href="#" class="mr-2 text-sm font-medium text-gray-900">Men</a>
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                            </svg>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <a href="#" class="mr-2 text-sm font-medium text-gray-900">Clothing</a>
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                            </svg>
                        </div>
                    </li>

                    <li class="text-sm">
                        <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">Basic Tee 6-Pack</a>
                    </li>
                </ol>
            </nav>

            <!-- Image gallery -->
            <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
                <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-secondary-product-shot.jpg" alt="Two each of gray, white, and black shirts laying flat." class="h-full w-full object-cover object-center">
                </div>
                <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                    <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-01.jpg" alt="Model wearing plain black basic tee." class="h-full w-full object-cover object-center">
                    </div>
                    <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-02.jpg" alt="Model wearing plain gray basic tee." class="h-full w-full object-cover object-center">
                    </div>
                </div>
                <div class="aspect-h-5 aspect-w-4 lg:aspect-h-4 lg:aspect-w-3 sm:overflow-hidden sm:rounded-lg">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-featured-product-shot.jpg" alt="Model wearing plain white basic tee." class="h-full w-full object-cover object-center">
                </div>
            </div>

            <!-- Product info -->
            <div class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
                <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Basic Tee 6-Pack</h1>
                </div>

                <!-- Options -->
                <div class="mt-4 lg:row-span-3 lg:mt-0">
                    <h2 class="sr-only">Product information</h2>
                    <p class="text-3xl tracking-tight text-gray-900">$192</p>

                    <!-- Reviews -->
                    <div class="mt-6">
                        <h3 class="sr-only">Reviews</h3>
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <!-- Active: "text-gray-900", Default: "text-gray-200" -->
                                <svg class="h-5 w-5 flex-shrink-0 text-red-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                                <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                                <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                                <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                                <svg class="h-5 w-5 flex-shrink-0 text-gray-200" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="sr-only">4 out of 5 stars</p>
                            <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117 reviews</a>
                        </div>
                    </div>

                    <form class="mt-10">
                        <!-- Colors -->
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">Color</h3>

                            <fieldset aria-label="Choose a color" class="mt-4">
                                <div class="flex items-center space-x-3">
                                    <!-- Active and Checked: "ring ring-offset-1" -->
                                    <label aria-label="White" class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-400 focus:outline-none">
                                        <input type="radio" name="color-choice" value="White" class="sr-only">
                                        <span aria-hidden="true" class="h-8 w-8 rounded-full border border-black border-opacity-10 bg-white"></span>
                                    </label>
                                    <!-- Active and Checked: "ring ring-offset-1" -->
                                    <label aria-label="Gray" class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-400 focus:outline-none">
                                        <input type="radio" name="color-choice" value="Gray" class="sr-only">
                                        <span aria-hidden="true" class="h-8 w-8 rounded-full border border-black border-opacity-10 bg-gray-200"></span>
                                    </label>
                                    <!-- Active and Checked: "ring ring-offset-1" -->
                                    <label aria-label="Black" class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-900 focus:outline-none">
                                        <input type="radio" name="color-choice" value="Black" class="sr-only">
                                        <span aria-hidden="true" class="h-8 w-8 rounded-full border border-black border-opacity-10 bg-gray-900"></span>
                                    </label>
                                </div>
                            </fieldset>
                        </div>

                        <!-- Sizes -->
                        <div class="mt-10">
                            <div class="flex items-center justify-between">
                                <h3 class="text-sm font-medium text-gray-900">Size</h3>
                                <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Size guide</a>
                            </div>

                            <fieldset aria-label="Choose a size" class="mt-4">
                                <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                                    <!-- Active: "ring-2 ring-indigo-500" -->
                                    <label class="group relative flex cursor-not-allowed items-center justify-center rounded-md border bg-gray-50 px-4 py-3 text-sm font-medium uppercase text-gray-200 hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6">
                                        <input type="radio" name="size-choice" value="XXS" disabled class="sr-only">
                                        <span>XXS</span>
                                        <span aria-hidden="true" class="pointer-events-none absolute -inset-px rounded-md border-2 border-gray-200">
                                            <svg class="absolute inset-0 h-full w-full stroke-2 text-gray-200" viewBox="0 0 100 100" preserveAspectRatio="none" stroke="currentColor">
                                                <line x1="0" y1="100" x2="100" y2="0" vector-effect="non-scaling-stroke" />
                                            </svg>
                                        </span>
                                    </label>
                                    <!-- Active: "ring-2 ring-indigo-500" -->
                                    <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6">
                                        <input type="radio" name="size-choice" value="XS" class="sr-only">
                                        <span>XS</span>
                                        <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                    -->
                                        <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                    </label>
                                    <!-- Active: "ring-2 ring-indigo-500" -->
                                    <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6">
                                        <input type="radio" name="size-choice" value="S" class="sr-only">
                                        <span>S</span>
                                        <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                    -->
                                        <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                    </label>
                                    <!-- Active: "ring-2 ring-indigo-500" -->
                                    <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6">
                                        <input type="radio" name="size-choice" value="M" class="sr-only">
                                        <span>M</span>
                                        <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                    -->
                                        <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                    </label>
                                    <!-- Active: "ring-2 ring-indigo-500" -->
                                    <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6">
                                        <input type="radio" name="size-choice" value="L" class="sr-only">
                                        <span>L</span>
                                        <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                    -->
                                        <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                    </label>
                                    <!-- Active: "ring-2 ring-indigo-500" -->
                                    <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6">
                                        <input type="radio" name="size-choice" value="XL" class="sr-only">
                                        <span>XL</span>
                                        <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                    -->
                                        <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                    </label>
                                    <!-- Active: "ring-2 ring-indigo-500" -->
                                    <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6">
                                        <input type="radio" name="size-choice" value="2XL" class="sr-only">
                                        <span>2XL</span>
                                        <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                    -->
                                        <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                    </label>
                                    <!-- Active: "ring-2 ring-indigo-500" -->
                                    <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6">
                                        <input type="radio" name="size-choice" value="3XL" class="sr-only">
                                        <span>3XL</span>
                                        <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                    -->
                                        <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                    </label>
                                </div>
                            </fieldset>
                        </div>

                        <button type="submit" class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add to bag</button>
                    </form>
                </div>

                <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
                    <!-- Description and details -->
                    <div>
                        <h3 class="sr-only">Description</h3>

                        <div class="space-y-6">
                            <p class="text-base text-gray-900">The Basic Tee 6-Pack allows you to fully express your vibrant personality with three grayscale options. Feeling adventurous? Put on a heather gray tee. Want to be a trendsetter? Try our exclusive colorway: &quot;Black&quot;. Need to add an extra pop of color to your outfit? Our white tee has you covered.</p>
                        </div>
                    </div>

                    <div class="mt-10">
                        <h3 class="text-sm font-medium text-gray-900">Highlights</h3>

                        <div class="mt-4">
                            <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                                <li class="text-gray-400"><span class="text-gray-600">Hand cut and sewn locally</span></li>
                                <li class="text-gray-400"><span class="text-gray-600">Dyed with our proprietary colors</span></li>
                                <li class="text-gray-400"><span class="text-gray-600">Pre-washed &amp; pre-shrunk</span></li>
                                <li class="text-gray-400"><span class="text-gray-600">Ultra-soft 100% cotton</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-10">
                        <h2 class="text-sm font-medium text-gray-900">Details</h2>

                        <div class="mt-4 space-y-6">
                            <p class="text-sm text-gray-600">The 6-Pack includes two black, two white, and two heather gray Basic Tees. Sign up for our subscription service and be the first to get new, exciting colors, like our upcoming &quot;Charcoal Gray&quot; limited release.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- product overview --}}

    <div class="mb-12 flex font-sans mx-auto max-w-2xl items-center sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="flex-none w-48 relative">
            <img src="/assets/images/cutegirl.jpg" alt="" class="inset-0 w-full h-full object-cover" loading="lazy" />
        </div>
        <form class="flex-auto p-6">
            <div class="flex flex-wrap">
                <h1 class="flex-auto text-lg font-semibold text-slate-900">
                    Utility Jacket
                </h1>
                <div class="text-lg font-semibold text-slate-500">
                    $110.00
                </div>
                <div class="w-full flex-none text-sm font-medium text-slate-700 mt-2">
                    In stock
                </div>
            </div>
            <div class="flex items-baseline mt-4 mb-6 pb-6 border-b border-slate-200">
                <div class="space-x-1 flex text-sm">
                    <label>
                        <input class="sr-only peer" name="size" type="radio" value="xs" checked />
                        <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700 peer-checked:font-semibold peer-checked:bg-slate-900 peer-checked:text-white">
                            XS
                        </div>
                    </label>
                    <label>
                        <input class="sr-only peer" name="size" type="radio" value="s" />
                        <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700 peer-checked:font-semibold peer-checked:bg-slate-900 peer-checked:text-white">
                            S
                        </div>
                    </label>
                    <label>
                        <input class="sr-only peer" name="size" type="radio" value="m" />
                        <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700 peer-checked:font-semibold peer-checked:bg-slate-900 peer-checked:text-white">
                            M
                        </div>
                    </label>
                    <label>
                        <input class="sr-only peer" name="size" type="radio" value="l" />
                        <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700 peer-checked:font-semibold peer-checked:bg-slate-900 peer-checked:text-white">
                            L
                        </div>
                    </label>
                    <label>
                        <input class="sr-only peer" name="size" type="radio" value="xl" />
                        <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700 peer-checked:font-semibold peer-checked:bg-slate-900 peer-checked:text-white">
                            XL
                        </div>
                    </label>
                </div>
            </div>
            <div class="flex space-x-4 mb-6 text-sm font-medium">
                <div class="flex-auto flex space-x-4">
                    <button class="h-10 px-6 font-semibold rounded-md bg-black text-white" type="submit">
                        Buy now
                    </button>
                    <button class="h-10 px-6 font-semibold rounded-md border border-slate-200 text-slate-900" type="button">
                        Add to bag
                    </button>
                </div>
                <button class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-slate-300 border border-slate-200" type="button" aria-label="Like">
                    <svg width="20" height="20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                    </svg>
                </button>
            </div>
            <p class="text-sm text-slate-700">
                Free shipping on all continental US orders.
            </p>
        </form>
    </div>
    {{-- girl style --}}

    <div class="mb-6 font-sans mx-auto max-w-2xl items-center sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="flex gap-x-6 h-44 overflow-scroll">
            <div col-md>
                <ul role="list" class="p-6 divide-y divide-slate-200">
                    <!-- Remove top/bottom padding when first/last child -->

                    <li class="flex py-4 first:pt-0 last:pb-0">
                        <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                        <div class="ml-3 overflow-hidden">
                            <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                            <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                        </div>
                    </li>
                    <li class="flex py-4 first:pt-0 last:pb-0">
                        <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                        <div class="ml-3 overflow-hidden">
                            <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                            <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div col-md>
                <ul role="list" class="p-6 divide-y divide-slate-200">
                    <!-- Remove top/bottom padding when first/last child -->

                    <li class="flex py-4 first:pt-0 last:pb-0">
                        <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                        <div class="ml-3 overflow-hidden">
                            <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                            <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                        </div>
                    </li>
                    <li class="flex py-4 first:pt-0 last:pb-0">
                        <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                        <div class="ml-3 overflow-hidden">
                            <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                            <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div col-md>
                <ul role="list" class="p-6 divide-y divide-slate-200">
                    <!-- Remove top/bottom padding when first/last child -->

                    <li class="flex py-4 first:pt-0 last:pb-0">
                        <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                        <div class="ml-3 overflow-hidden">
                            <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                            <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                        </div>
                    </li>
                    <li class="flex py-4 first:pt-0 last:pb-0">
                        <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                        <div class="ml-3 overflow-hidden">
                            <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                            <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div col-md>
                <ul role="list" class="p-6 divide-y divide-slate-200">
                    <!-- Remove top/bottom padding when first/last child -->

                    <li class="flex py-4 first:pt-0 last:pb-0">
                        <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                        <div class="ml-3 overflow-hidden">
                            <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                            <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                        </div>
                    </li>
                    <li class="flex py-4 first:pt-0 last:pb-0">
                        <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                        <div class="ml-3 overflow-hidden">
                            <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                            <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div col-md>
                <ul role="list" class="p-6 divide-y divide-slate-200">
                    <!-- Remove top/bottom padding when first/last child -->

                    <li class="flex py-4 first:pt-0 last:pb-0">
                        <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                        <div class="ml-3 overflow-hidden">
                            <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                            <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                        </div>
                    </li>
                    <li class="flex py-4 first:pt-0 last:pb-0">
                        <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                        <div class="ml-3 overflow-hidden">
                            <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                            <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div col-md>
                <ul role="list" class="p-6 divide-y divide-slate-200">
                    <!-- Remove top/bottom padding when first/last child -->

                    <li class="flex py-4 first:pt-0 last:pb-0">
                        <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                        <div class="ml-3 overflow-hidden">
                            <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                            <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                        </div>
                    </li>
                    <li class="flex py-4 first:pt-0 last:pb-0">
                        <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                        <div class="ml-3 overflow-hidden">
                            <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                            <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div col-md>
                <ul role="list" class="p-6 divide-y divide-slate-200">
                    <!-- Remove top/bottom padding when first/last child -->

                    <li class="flex py-4 first:pt-0 last:pb-0">
                        <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                        <div class="ml-3 overflow-hidden">
                            <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                            <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                        </div>
                    </li>
                    <li class="flex py-4 first:pt-0 last:pb-0">
                        <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                        <div class="ml-3 overflow-hidden">
                            <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                            <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div col-md>
                <ul role="list" class="p-6 divide-y divide-slate-200">
                    <!-- Remove top/bottom padding when first/last child -->

                    <li class="flex py-4 first:pt-0 last:pb-0">
                        <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                        <div class="ml-3 overflow-hidden">
                            <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                            <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                        </div>
                    </li>
                    <li class="flex py-4 first:pt-0 last:pb-0">
                        <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                        <div class="ml-3 overflow-hidden">
                            <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                            <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    {{-- bootstrap --}}

    <div class="mb-10 flex font-sans mx-auto max-w-2xl items-center sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="overflow-x-scroll w-auto ">
            <ul role="list" class="d-flex gap-x-8 p-6 divide-y divide-slate-200">
                <!-- Remove top/bottom padding when first/last child -->
                <li class="flex py-4 first:pt-0 last:pb-0">
                    <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                    <div class="ml-3 overflow-hidden">
                        <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                        <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                    </div>
                </li>
                <li class="flex py-4 first:pt-0 last:pb-0">
                    <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                    <div class="ml-3 overflow-hidden">
                        <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                        <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                    </div>
                </li>
                <li class="flex py-4 first:pt-0 last:pb-0">
                    <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                    <div class="ml-3 overflow-hidden">
                        <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                        <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                    </div>
                </li>
                <li class="flex py-4 first:pt-0 last:pb-0">
                    <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                    <div class="ml-3 overflow-hidden">
                        <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                        <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                    </div>
                </li>
                <li class="flex py-4 first:pt-0 last:pb-0">
                    <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                    <div class="ml-3 overflow-hidden">
                        <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                        <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                    </div>
                </li>
                <li class="flex py-4 first:pt-0 last:pb-0">
                    <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                    <div class="ml-3 overflow-hidden">
                        <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                        <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                    </div>
                </li>
                <li class="flex py-4 first:pt-0 last:pb-0">
                    <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                    <div class="ml-3 overflow-hidden">
                        <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                        <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                    </div>
                </li>
                <li class="flex py-4 first:pt-0 last:pb-0">
                    <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                    <div class="ml-3 overflow-hidden">
                        <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                        <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                    </div>
                </li>
                <li class="flex py-4 first:pt-0 last:pb-0">
                    <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                    <div class="ml-3 overflow-hidden">
                        <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                        <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                    </div>
                </li>
                <li class="flex py-4 first:pt-0 last:pb-0">
                    <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                    <div class="ml-3 overflow-hidden">
                        <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                        <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                    </div>
                </li>
                <li class="flex py-4 first:pt-0 last:pb-0">
                    <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                    <div class="ml-3 overflow-hidden">
                        <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                        <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                    </div>
                </li>
                <li class="flex py-4 first:pt-0 last:pb-0">
                    <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                    <div class="ml-3 overflow-hidden">
                        <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                        <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                    </div>
                </li>
            </ul>
        </div>
        {{-- horro --}}
        <div class="overflow-y-auto h-52 w-full">
            <ul role="list" class="p-6 divide-y divide-slate-200">
                <!-- Remove top/bottom padding when first/last child -->
                <li class="flex py-4 first:pt-0 last:pb-0">
                    <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                    <div class="ml-3 overflow-hidden">
                        <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                        <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                    </div>
                </li>
                <li class="flex py-4 first:pt-0 last:pb-0">
                    <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                    <div class="ml-3 overflow-hidden">
                        <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                        <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                    </div>
                </li>
                <li class="flex py-4 first:pt-0 last:pb-0">
                    <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                    <div class="ml-3 overflow-hidden">
                        <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                        <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                    </div>
                </li>
                <li class="flex py-4 first:pt-0 last:pb-0">
                    <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                    <div class="ml-3 overflow-hidden">
                        <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                        <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                    </div>
                </li>
                <li class="flex py-4 first:pt-0 last:pb-0">
                    <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                    <div class="ml-3 overflow-hidden">
                        <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                        <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                    </div>
                </li>
                <li class="flex py-4 first:pt-0 last:pb-0">
                    <img class="h-10 w-10 rounded-full" src="/assets/images/cutegirl1.jpg" alt="" />
                    <div class="ml-3 overflow-hidden">
                        <p class="text-sm font-medium text-slate-900">Mr. Vangkor Jong</p>
                        <p class="text-sm text-slate-500 truncate">Vangkorjong937@gmail.com</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    {{-- vertical --}}

    <div class="mb-12 flex font-sans mx-auto max-w-2xl items-center sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="table">
            <div class="table-header-group ...">
                <div class="table-row">
                    <h5 class="table-cell text-left ...">Song</h>
                    <h5 class="table-cell text-left ...">Artist</h>
                    <h5 class="table-cell text-left ...">Year</h>
                </div>
            </div>
            <div class="table-row-group">
                <div class="table-row">
                    <div class="table-cell ...">The Sliding Mr. Bones (Next Stop, Pottersville)</div>
                    <div class="table-cell ...">Malcolm Lockyer</div>
                    <div class="table-cell ...">1961</div>
                </div>
                <div class="table-row">
                    <div class="table-cell ...">Witchy Woman</div>
                    <div class="table-cell ...">The Eagles</div>
                    <div class="table-cell ...">1972</div>
                </div>
                <div class="table-row">
                    <div class="table-cell ...">Shining Star</div>
                    <div class="table-cell ...">Earth, Wind, and Fire</div>
                    <div class="table-cell ...">1975</div>
                </div>
            </div>
        </div>
    </div>
    {{-- table --}}
</body>
</html>
