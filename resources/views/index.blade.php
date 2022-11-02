@extends('layouts.app2')

@section('header.container')
    <div class="" style="">
        <div class="relative bg-white overflow-hidden">
            <div class="hidden lg:block lg:absolute lg:inset-0" aria-hidden="true">
                <svg class="absolute top-0 left-1/2 transform translate-x-64 -translate-y-8" width="640" height="784"
                     fill="none" viewBox="0 0 640 784">
                    <defs>
                        <pattern id="9ebea6f4-a1f5-4d96-8c4e-4c2abf658047" x="118" y="0" width="20" height="20"
                                 patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
                        </pattern>
                    </defs>
                    <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor"></rect>
                    <rect x="118" width="404" height="784" fill="url(#9ebea6f4-a1f5-4d96-8c4e-4c2abf658047)"></rect>
                </svg>
            </div>
            <div class="relative pt-6 pb-16 sm:pb-24 lg:pb-32">
                <div x-data="Components.popover({ open: false, focus: true })" x-init="init()"
                     @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
                    <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6"
                         aria-label="Global">
                        <div class="flex items-center flex-1">
                            <div class="flex items-center justify-between w-full md:w-auto"><a href="#"> <span
                                        class="sr-only">PlazaPlanner</span> <img class="h-8 w-auto sm:h-10"
                                                                                 src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                                                                                 alt=""> </a>
                                <div class="-mr-2 flex items-center md:hidden">
                                    <button type="button"
                                            class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                                            @click="toggle" @mousedown="if (open) $event.preventDefault()"
                                            aria-expanded="false" :aria-expanded="open.toString()"><span
                                            class="sr-only">Open main menu</span>
                                        <svg class="h-6 w-6" x-description="Heroicon name: outline/menu"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M4 6h16M4 12h16M4 18h16"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="hidden md:block md:ml-10 md:space-x-10"><a href="#Product-Catalog"
                                                                                   class="font-medium text-gray-500 hover:text-gray-900">Product
                                    Catalog</a>
                                <a
                                    href="#Video-Product" class="font-medium text-gray-500 hover:text-gray-900">Video
                                    Product</a>
                                <a href="#Testimonials" class="font-medium text-gray-500 hover:text-gray-900">Testimonials</a>
                                <a
                                    href="#About-Us" class="font-medium text-gray-500 hover:text-gray-900">About Us</a>

                            </div>
                        </div>
                        <div class="hidden md:block text-right">
                            <span class="inline-flex rounded-3xl shadow-md ring-1 ring-black ring-opacity-5">
                                <a href="https://wa.me/6281250205040/?text=Halo,%20saya%20mau%20beli%20"
                                   class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-3xl text-black bg-[#FF8141] hover:bg-[#F08141]"> Buy Now !!! </a>
                            </span>
                        </div>
                    </nav>
                    <div x-show="open" x-transition:enter="duration-150 ease-out"
                         x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                         x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100"
                         x-transition:leave-end="opacity-0 scale-95"
                         x-description="Mobile menu, show/hide based on menu open state."
                         class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden"
                         x-ref="panel" @click.away="open = false" style="display: none;">
                        <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="px-5 pt-4 flex items-center justify-between">
                                <div><img class="h-8 w-auto"
                                          src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
                                </div>
                                <div class="-mr-2">
                                    <button type="button"
                                            class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                                            @click="toggle"><span class="sr-only">Close main menu</span>
                                        <svg class="h-6 w-6" x-description="Heroicon name: outline/x"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="px-2 pt-2 pb-3 space-y-1"><a href="#Product-Catalog"
                                                                     class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Product
                                    Catalog</a>
                                <a href="#Video-Product"
                                   class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Video
                                    Product</a>
                                <a href="#Testimonials"
                                   class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Testimonials</a>
                                <a href="#About-Us"
                                   class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">About
                                    Us</a>

                            </div>
                            <a href="https://wa.me/6281250205040/?text=Halo,%20saya%20mau%20beli%20"
                               class="block w-full px-5 py-3 text-center font-medium text-[#FF8141] bg-gray-50 hover:bg-gray-100">
                                Buy Now !!! </a></div>
                    </div>
                </div>
                <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6 lg:mt-32">
                    <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                        <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
                            <h1>
                                <span class="mt-1 block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl">
                                   <span class="block text-gray-900">{{$headers['title']}}</span>
                                </span>
                            </h1>
                            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl"> {{$headers["subTitle"]}} </p>
                            {{--START EMAIL SECTION--}}
                            <div class="hidden mt-8 sm:max-w-lg sm:mx-auto sm:text-center lg:text-left lg:mx-0"><p
                                    class="text-base font-medium text-gray-900"> Sign up to get notified when it’s
                                    ready. </p>
                                <form action="#" method="POST" class="mt-3 sm:flex"><label for="email" class="sr-only">Email</label>
                                    <input type="email" name="email" id="email"
                                           class="block w-full py-3 text-base rounded-md placeholder-gray-500 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:flex-1 border-gray-300"
                                           placeholder="Enter your email">
                                    <button type="submit"
                                            class="mt-3 w-full px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 shadow-sm hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:flex-shrink-0 sm:inline-flex sm:items-center sm:w-auto">
                                        Notify me
                                    </button>
                                </form>
                                <p class="mt-3 text-sm text-gray-500"> We care about the protection of your data. Read
                                    our <a href="#" class="font-medium text-gray-900 underline">Privacy Policy</a>. </p>
                            </div>
                            {{--END EMAIL SECTION--}}
                            <div class="py-4">
                                <span class="inline-flex rounded-3xl shadow-md ring-1 ring-black ring-opacity-5 mr-2">
                                <a href="https://wa.me/6281250205040/?text=Halo,%20saya%20mau%20beli%20"
                                   class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-3xl text-black bg-[#FF8141] hover:bg-[#F08141]"> Buy Now !!! </a>
                            </span>
                                <span class="inline-flex rounded-3xl shadow-md ring-1 ring-black ring-opacity-5 ml-2">
                                <a href="#Product-Catalog"
                                   class="inline-flex items-center px-4 py-2 border border-[#FF8141] text-base font-medium rounded-3xl text-black bg-white hover:bg-gray-50"> Read More </a>
                            </span>
                            </div>
                        </div>
                        <div
                            class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
                            <svg
                                class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-8 scale-75 origin-top sm:scale-100 lg:hidden"
                                width="640" height="784" fill="none" viewBox="0 0 640 784" aria-hidden="true">
                                <defs>
                                    <pattern id="4f4f415c-a0e9-44c2-9601-6ded5a34a13e" x="118" y="0" width="20"
                                             height="20" patternUnits="userSpaceOnUse">
                                        <rect x="0" y="0" width="4" height="4" class="text-gray-200"
                                              fill="currentColor"></rect>
                                    </pattern>
                                </defs>
                                <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor"></rect>
                                <rect x="118" width="404" height="784"
                                      fill="url(#4f4f415c-a0e9-44c2-9601-6ded5a34a13e)"></rect>
                            </svg>
                            <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
                                <div class="relative block w-full bg-white rounded-lg overflow-hidden">
                                    <img src="/images/{{$headers['image']}}">
                                </div>
                                <button type="button"
                                        class="hidden relative block w-full bg-white rounded-lg overflow-hidden focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    <span class="sr-only">Watch our video to learn more</span>

                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/FfWdTMQZUCM"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen>
                                    </iframe>
                                </button>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection

@section('footer.container')
    <div class="" style="">
        <footer class="bg-white" aria-labelledby="footer-heading"><h2 id="footer-heading" class="sr-only">
                Footer</h2>
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">

                <p class="hidden mt-2 text-base text-gray-400 md:mt-0 md:order-1"> Laman ini dibuat untuk pemenuhan AFL
                    (UTS) Becoming Indonesia (2022/2023 Ganjil).<br>
                    Sepenuhnya dibuat dan dianalisis berdasarkan data, fakta, dan berita yang ada
                    Opini, pandangan, dan artikel dibuat nyata dan dapat dipertanggungjawabkan </p>
                <div class="mt-8 border-t border-gray-700 pt-8 md:flex md:items-center md:justify-between">
                    <div class="hidden flex space-x-6 md:order-2"><a href="#"
                                                                     class="text-gray-400 hover:text-gray-300"> <span
                                class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </a> <a href="#" class="text-gray-400 hover:text-gray-300"> <span
                                class="sr-only">Instagram</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </a> <a href="#" class="text-gray-400 hover:text-gray-300"> <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                            </svg>
                        </a> <a href="#" class="text-gray-400 hover:text-gray-300"> <span class="sr-only">GitHub</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </a> <a href="#" class="text-gray-400 hover:text-gray-300"> <span
                                class="sr-only">Dribbble</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </a></div>
                    <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1"> © 2022 plazaplanner.com | All rights
                        reserved.</p>
                </div>
            </div>
        </footer>
    </div>

@endsection


@section('main.container')
    <div id="Product-Catalog" class="relative max-w-7xl mx-auto items-center justify-between px-4 sm:px-6">
        <div class="text-center">
            <h2 class="text-3xl md:text-4xl font-extrabold mb-4">
                Product Catalog
            </h2>
        </div>
        <div class="" style="">
            <div class="bg-white">
                <div class=" mx-auto py-0 px-4 sm:py-24 sm:px-6 lg:px-8">
                    <div class="mt-0 grid grid-cols-1 gap-x-8 gap-y-8 sm:grid-cols-2 sm:gap-y-10 lg:grid-cols-3">
                        <!--START LOOP-->
                        @php($i = 0)
                        @foreach($products as $product)
                            <div class="relative group">
                                <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden bg-gray-100"><img
                                        src="/images/{{$product['image']}}"
                                        alt="Payment application dashboard screenshot with transaction table, financial highlights, and main clients on colorful purple background."
                                        class="object-center object-cover">
                                    <div class="flex items-end opacity-0 p-4 group-hover:opacity-100"
                                         aria-hidden="true">
                                        <div
                                            class="w-full bg-white bg-opacity-75 backdrop-filter backdrop-blur py-2 px-4 rounded-md text-sm font-medium text-gray-900 text-center">
                                            View Product
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mt-4 flex items-center justify-between text-base font-medium text-gray-900 space-x-8">
                                    <h3><a href="#"> <span aria-hidden="true"
                                                           class="absolute inset-0"></span> {{$product['title']}}
                                        </a>
                                    </h3>
                                    <p class="hidden">$49</p></div>
                                <p class="hidden mt-1 text-sm text-gray-500"> UI Kit </p>
                            </div>
                            @php($i++)
                        @endforeach
                        <!--END LOOP-->


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="Video-Product" class="relative max-w-7xl mx-auto items-center justify-between px-4 sm:px-6">
        <div class="text-center">
            <h2 class="text-3xl mb-12 md:text-4xl font-extrabold mb-4">
                Video Product
            </h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                <iframe class="aspect-w-3 aspect-h-2" width="100vw" src="https://www.youtube.com/embed/MsVS4MJD0bQ"
                        title="Student Planner by Plaza Planner" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                <iframe width="600" height="400" src="https://www.youtube.com/embed/-yJrjddfAZM"
                        title="Undated Desk Calendar - Kalendar sepanjang tahun" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div id="Testimonials" class="relative max-w-7xl mx-auto items-center justify-between px-4 sm:px-6">
        <!-- Testimonials Section: Boxed Multiple -->
        <div class="bg-white">
            <div class="space-y-16 container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-32">
                <!-- Heading -->
                <div class="text-center">
                    <div class="text-sm uppercase font-bold tracking-wider mb-1 text-orange-700">
                        Real Feedback
                    </div>
                    <h2 class="text-3xl md:text-4xl font-extrabold mb-4">
                        Customer Testimonials
                    </h2>
                </div>
                <!-- END Heading -->

                <!-- Feedback -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                    {{--START LOOP--}}
                    @php($i = 0)
                    @foreach($testimonies as $testimoni)
                        <div class="border rounded-md bg-gray-50 shadow-sm relative">
                            <div
                                class="absolute top-0 right-0 text-9xl mt-3 mr-5 text-orange-200 opacity-75 font-serif">
                                “
                            </div>
                            <div class="px-6 pt-16 pb-6 md:px-12 md:pb-10 relative text-center">
                                <div class="mb-3">


                                    <div class="inline-flex items-center bg-orange-100 px-2 py-1 rounded-lg">
                                        @for($i = 1; $i <= $testimoni['rating']; $i++)
                                            <svg fill="currentColor" viewBox="0 0 20 20"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 class="text-yellow-500 hi-solid hi-star inline-block w-5 h-5">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                        @endfor
                                        @if($testimoni['rating'] < 5)
                                            @for($k = 1; $k <= (5 - $testimoni['rating']); $k++)
                                                <svg fill="currentColor" viewBox="0 0 20 20"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     class="text-gray-500 hi-solid hi-star inline-block w-5 h-5">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                            @endfor
                                        @endif
                                    </div>

                                </div>
                                <blockquote class="lg:w-4/5 xl:w-4/5 mx-auto">
                                    <p class="font-semibold text-xl leading-8 mb-5">
                                        {{$testimoni['comment']}}
                                    </p>
                                    <footer class="space-y-4">
                                        <a href="javascript:void(0)"
                                           class="block mx-auto rounded-full overflow-hidden w-20 h-20 transform transition ease-out duration-150 border-2 border-gray-50 hover:border-white hover:shadow-md hover:scale-125 active:border-gray-50 active:shadow-sm active:scale-110">
                                            <img src="/images/{{$testimoni['img_people']}}"
                                                 alt="Avatar Photo">
                                        </a>
                                        <div>
                                            <a href="javascript:void(0)"
                                               class="text-lg font-semibold text-orange-600 hover:text-orange-400">
                                                {{$testimoni['name']}}
                                            </a>
                                            <div class="mx-auto w-10 h-1 my-1 rounded-lg bg-orange-200"></div>
                                            <p class="text-gray-500 font-medium">
                                                {{$testimoni['timestamp']}}
                                            </p>
                                        </div>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                        @php($i++)
                    @endforeach
                    {{--END LOOP--}}
                </div>
                <!-- END Feedback -->
            </div>
        </div>
        <!-- END Testimonials Section: Boxed Multiple -->
    </div>
    <div id="Information" class="relative max-w-7xl mx-auto items-center justify-between px-4 sm:px-6">
        <div class="">
            <h2 class="text-center text-3xl md:text-4xl font-extrabold mb-4">
                Shipping Information
            </h2>
            <ul class="text-2xl list-disc mb-4 ml-24 list-outside">
                <li>Dikirm di hari yang sama</li>
                <li>Terima H-1 Order</li>
                <li>Packing Aman</li>
            </ul>


        </div>
    </div>
    <div id="Warranty" class="relative max-w-7xl mx-auto items-center justify-between px-4 sm:px-6">
        <div class="">
            <h2 class="text-center text-3xl md:text-4xl font-extrabold mb-4">
                Customer Warranty
            </h2>
            <ul class="text-2xl list-disc mb-4 ml-24 list-outside">
                <li>Jaminan Hasil print jelas</li>
                <li>Produk anti air</li>
                <li>Kertas tidak menguning</li>
            </ul>

        </div>
    </div>
    <div id="About-Us" class="relative max-w-7xl mx-auto items-center justify-between px-4 sm:px-6">
        <div class="">
            <h2 class="text-center text-3xl md:text-4xl font-extrabold mb-4">
                About Us
            </h2>
            <p class="font-semibold text-2xl leading-8 mb-5">lorem ipsum</p>

        </div>
    </div>
@endsection
