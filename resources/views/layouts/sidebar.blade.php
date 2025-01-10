<!-- MOHAMMAD KAHIRUL ANWAR (202253078) -->
@extends('layouts.main')
@section('container')
<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <a href="/dashboard" class="flex ms-2 md:me-24">
                    <span
                        class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Himapro
                        SI UMK</span>
                </a>
            </div>
            <div class="flex items-center">
                <div class="flex items-center ms-3">
                    <div>
                        <button type="button" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                            <span class="sr-only">Open user menu</span>
                            <svg class="w-8 h-8" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1"
                                viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="coffee_x5F_cup">
                                    <path class="st0"
                                        d="M23,24c0.7,0.3,1.4,0.5,2.1,0.5c2.6,0,4.9-2.3,4.9-4.9c0-2.7-2.1-4.9-4.7-5c0,0,0,0,0,0H4.2   C3,14.6,2,15.5,2,16.6c0,0,0,0.1,0,0.1c0,5.2,3.4,9.6,8.1,11.1h-7c-0.6,0-1.1,0.5-1.1,1.1C2,29.5,2.5,30,3.1,30h23.2   c0.6,0,1.1-0.5,1.1-1.1c0-0.6-0.5-1.1-1.1-1.1h-8.8C19.6,27.2,21.5,25.8,23,24z M25.5,16.8L25.5,16.8c1.6,0.2,2.7,1.8,2.3,3.5   c-0.3,1.2-1.4,2-2.6,2c-0.3,0-0.7,0-1-0.1C25,20.5,25.5,18.7,25.5,16.8z" />
                                    <path class="st0"
                                        d="M9.4,10.1c-1.5,0.5-0.8,2.8,0.6,2.3c1.7-0.6,2.3-2.3,1.9-4c-0.2-0.8-0.7-1.6-1.1-2.4c-0.2-0.4-0.7-1.4-0.1-1.8   c1.3-0.8,0.1-2.9-1.2-2.1C8.1,3.1,7.8,4.8,8.3,6.3C8.5,6.8,10.5,9.8,9.4,10.1z" />
                                    <path class="st0"
                                        d="M16,11c-1.5,0.5-0.8,2.8,0.6,2.3c1.7-0.6,2.3-2.3,1.9-4c-0.2-0.8-0.7-1.6-1.1-2.4c-0.2-0.4-0.7-1.4-0.1-1.8   c1.3-0.8,0.1-2.9-1.2-2.1c-1.4,0.9-1.7,2.6-1.2,4.1C15.1,7.7,17.1,10.6,16,11z" />
                                </g>
                            </svg>
                        </button>
                    </div>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm text-gray-900 dark:text-white" role="none">
                                {{ auth()->user()->nama }}
                            </p>
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                {{ auth()->user()->email }}
                            </p>
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit"
                                        class="w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Sign out</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="/dashboard"
                    class="flex items-center p-2 text-gray-500 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group {{ Request::is('dashboard') ? 'bg-gray-100 text-gray-900' : '' }}">
                    <svg class="w-5 h-5 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white {{ Request::is('dashboard') ? 'text-gray-900' : '' }}"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('events.index') }}"
                    class="flex items-center p-2 text-gray-500 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group {{ Request::is('events') ? 'bg-gray-100  text-gray-900' : '' }}">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white {{ Request::is('events') ? 'text-gray-900' : '' }}"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path
                            d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Event</span>
                </a>
            </li>
            <li>
                <a href="{{ route('documents.index') }}"
                    class="flex items-center p-2 text-gray-500 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group {{ Request::is('documents') ? 'bg-gray-100 text-gray-900' : '' }}">
                    <svg class="flex-shrink-0 w-5 h-5 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white {{ Request::is('documents') ? 'text-gray-900' : '' }}"
                        style="enable-background:new 0 0 24 24;" fill="currentColor" version="1.1" viewBox="0 0 24 24"
                        xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="info" />
                        <g id="icons">
                            <g id="new">
                                <path
                                    d="M17.5,8C16.1,8,15,6.9,15,5.5V2c0-0.6-0.4-1-1-1H6C3.8,1,2,2.8,2,5v14c0,2.2,1.8,4,4,4h12c2.2,0,4-1.8,4-4V9    c0-0.6-0.4-1-1-1H17.5z M14,17H8c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1h6c0.6,0,1,0.4,1,1C15,16.6,14.6,17,14,17z M16,13H8    c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1h8c0.6,0,1,0.4,1,1C17,12.6,16.6,13,16,13z" />
                            </g>
                        </g>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Dokumen</span>
                </a>
            </li>
            <li>
                <a href="{{ route('users.index') }}"
                    class="flex items-center p-2 text-gray-500 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group {{ Request::is('users') ? 'bg-gray-100 text-gray-900' : '' }}">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white {{ Request::is('users') ? 'text-gray-900' : '' }}"
                        enable-background="new 0 0 24 24" fill="currentColor" id="Layer_1" version="1.0"
                        viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g>
                            <path
                                d="M9,9c0-1.7,1.3-3,3-3s3,1.3,3,3c0,1.7-1.3,3-3,3S9,10.7,9,9z M12,14c-4.6,0-6,3.3-6,3.3V19h12v-1.7C18,17.3,16.6,14,12,14z   " />
                        </g>
                        <g>
                            <g>
                                <circle cx="18.5" cy="8.5" r="2.5" />
                            </g>
                            <g>
                                <path
                                    d="M18.5,13c-1.2,0-2.1,0.3-2.8,0.8c2.3,1.1,3.2,3,3.2,3.2l0,0.1H23v-1.3C23,15.7,21.9,13,18.5,13z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <circle cx="18.5" cy="8.5" r="2.5" />
                            </g>
                            <g>
                                <path
                                    d="M18.5,13c-1.2,0-2.1,0.3-2.8,0.8c2.3,1.1,3.2,3,3.2,3.2l0,0.1H23v-1.3C23,15.7,21.9,13,18.5,13z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <circle cx="5.5" cy="8.5" r="2.5" />
                            </g>
                            <g>
                                <path
                                    d="M5.5,13c1.2,0,2.1,0.3,2.8,0.8c-2.3,1.1-3.2,3-3.2,3.2l0,0.1H1v-1.3C1,15.7,2.1,13,5.5,13z" />
                            </g>
                        </g>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Anggota</span>
                </a>
            </li>
            <li>
                <a href="{{ route('departments.index') }}"
                    class="flex items-center p-2 text-gray-500 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group {{ Request::is('departments') ? 'bg-gray-100 text-gray-900' : '' }}">
                    <svg class="flex-shrink-0 w-5 h-5 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white {{ Request::is('departments') ? 'text-gray-900' : '' }}"
                        viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                        <title />
                        <path
                            d="M477.64,38.26a4.75,4.75,0,0,0-3.55-3.66c-58.57-14.32-193.9,36.71-267.22,110a317,317,0,0,0-35.63,42.1c-22.61-2-45.22-.33-64.49,8.07C52.38,218.7,36.55,281.14,32.14,308a9.64,9.64,0,0,0,10.55,11.2L130,309.57a194.1,194.1,0,0,0,1.19,19.7,19.53,19.53,0,0,0,5.7,12L170.7,375a19.59,19.59,0,0,0,12,5.7,193.53,193.53,0,0,0,19.59,1.19l-9.58,87.2a9.65,9.65,0,0,0,11.2,10.55c26.81-4.3,89.36-20.13,113.15-74.5,8.4-19.27,10.12-41.77,8.18-64.27a317.66,317.66,0,0,0,42.21-35.64C441,232.05,491.74,99.74,477.64,38.26ZM294.07,217.93a48,48,0,1,1,67.86,0A47.95,47.95,0,0,1,294.07,217.93Z" />
                        <path
                            d="M168.4,399.43c-5.48,5.49-14.27,7.63-24.85,9.46-23.77,4.05-44.76-16.49-40.49-40.52,1.63-9.11,6.45-21.88,9.45-24.88a4.37,4.37,0,0,0-3.65-7.45,60,60,0,0,0-35.13,17.12C50.22,376.69,48,464,48,464s87.36-2.22,110.87-25.75A59.69,59.69,0,0,0,176,403.09C176.37,398.91,171.28,396.42,168.4,399.43Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Departemen</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

<div class="p-4 sm:ml-64">
    <div class="p-4 mt-14">
        @yield('content')
    </div>
</div>
@endsection