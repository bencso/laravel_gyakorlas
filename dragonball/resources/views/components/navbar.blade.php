<nav class="bg-black w-full mx-auto border-b-2 border-[#FBE32C] top-0 sticky">
    <div class="flex flex-row">
        <div class="flex shrink-0 align-middle justify-center px-5 items-center border-e-2 border-[#FBE23C] relative overflow-hidden"
            style="background-color: transparent;">
            <div class="absolute inset-0 z-0"
                style="background-color: white; background-image: url('{{ asset('images/navbar-bg.jpg') }}'); background-size: 150%; background-repeat: no-repeat; background-position: center center; background-blend-mode: difference; opacity: 0.5;">
            </div>
            <img onclick="window.location.href='{{ url('/') }}'" src="{{ asset('images/navbar-title.png') }}"
                alt="Dragon Ball csata" class="h-8 mx-auto w-auto z-10 relative" style="opacity: 1;" />
        </div>
        <div class="relative py-5 px-5 flex items-center justify-between w-full">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button type="button" command="--toggle" commandfor="mobile-menu"
                    class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:-outline-offset-1 focus:outline-yellow-500">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Menü megnyitása</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon"
                        aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon"
                        aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                        <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 w-full items-center justify-start">
                <div class="hidden sm:block">
                    <div class="flex space-x-4">
                        <a href="/"
                            class="rounded-md px-3 py-2 text-sm font-medium transition-colors duration-300 ease-in-out motion-reduce:transition-none motion-reduce:hover:transform-none data-[active]:text-[#FBE32C] data-[active]:hover:text-yellow-200 hover:bg-white/5 text-gray-300 hover:text-gray-200"
                            @if (Request::segment(1) == '') data-active=true @endif>Kezdőlap</a>
                        @auth
                            <a href="/csapat"
                                class="rounded-md px-3 py-2 text-sm font-medium transition-colors duration-300 ease-in-out motion-reduce:transition-none motion-reduce:hover:transform-none data-[active]:text-[#FBE32C] data-[active]:hover:text-yellow-200 hover:bg-white/5 text-gray-300 hover:text-gray-200"
                                @if (Request::segment(1) == 'csapat') data-active=true @endif>Csapatom</a>
                        @endauth
                        <a href="/karakterek"
                            class="rounded-md px-3 py-2 text-sm font-medium transition-colors duration-300 ease-in-out motion-reduce:transition-none motion-reduce:hover:transform-none data-[active]:text-[#FBE32C] data-[active]:hover:text-yellow-200 hover:bg-white/5 text-gray-300 hover:text-gray-200"
                            @if (Request::segment(1) == 'karakterek') data-active=true @endif>Karakterek</a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                @auth
                    <button>
                        Beállítások
                    </button>
                @endauth
                @guest
                    <a href="/bejelentkezes"
                        class="rounded-md px-3 py-2 text-sm font-medium transition-colors duration-300 ease-in-out motion-reduce:transition-none motion-reduce:hover:transform-none data-[active]:text-[#FBE32C] data-[active]:hover:text-yellow-200 hover:bg-white/5 text-gray-300 hover:text-gray-200"
                        @if (Request::segment(1) == 'bejelentkezes' || Request::segment(1) == 'regisztracio') data-active=true @endif> <svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24">
                            <circle cx="12" cy="6" r=" 4" fill="currentColor" />
                            <path fill="currentColor"
                                d="M20 17.5c0 2.485 0 4.5-8 4.5s-8-2.015-8-4.5S7.582 13 12 13s8 2.015 8 4.5" />
                        </svg>
                    </a>
                @endguest
                </el-dropdown>
            </div>
        </div>
    </div>

    <el-disclosure id="mobile-menu" hidden class="block sm:hidden">
        <div class="space-y-1 px-2 pt-2 pb-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
            <a href="#" aria-current="page"
                class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Dashboard</a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Team</a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Projects</a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Calendar</a>
        </div>
    </el-disclosure>
</nav>
