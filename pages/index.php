<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment Page</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.1/dist/flowbite.min.css" />
    <script>
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: {
                    montserrat: ["Montserrat"],
                },
                colors: {
                    "dark-green": "#1E3F41",
                    "light-green": "#659093",
                    "cream": "#DDB07F",
                    "cgray": "#F5F5F5",
                }
            }
        }
    }
    </script>
    <style>
    .in-active {
        width: 80px !important;
        padding: 20px 15px !important;
        transition: .5s ease-in-out;
    }

    .in-active ul li p {
        display: none !important;
    }

    .in-active ul li a {
        padding: 15px !important;
    }

    .in-active h2,
    .in-active h4,
    .in-active .logo-incareer {
        display: none !important;
    }

    .hidden {
        display: none !important;
    }

    .sidebar {
        transition: .5s ease-in-out;
    }
    </style>

</head>

<body>
    <div class="flex items-center">
        <!-- Left side (Sidebar) -->
        <div class="bg-white w-[350px] h-screen px-8 py-6 flex flex-col justify-between sidebar in-active">
            <!-- Top nav -->
            <div class="flex flex-col gap-y-6">
                <!-- Header -->
                <div class="flex items-center space-x-4 px-2">
                    <img src="Img/icons/toggle_icons.svg" alt="toggle_dashboard" class="w-8 cursor-pointer"
                        id="btnToggle">
                    <img class="w-[150px] logo-incareer" src="../src/logofix.png" alt="Logo In Career">
                </div>

                <hr class="border-[1px] border-opacity-50 border-[#93BFC1]">

                <!-- List Menus -->
                <div>
                    <ul class="flex flex-col gap-y-1">
                        <li>
                            <a href="#"
                                class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-cream text-dark-green hover:text-white">
                                <img class="w-5" src="./Img/icons/home_icon.svg" alt="Dashboard Icon">
                                <p class="font-semibold">Dashboard</p>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-cream text-dark-green hover:text-white">
                                <img class="w-5" src="./Img/icons/course_icon.svg" alt="Course Icon">
                                <p class="font-semibold">Course</p>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-cream text-dark-green hover:text-white">
                                <img class="w-5" src="./Img/icons/discussion_icon.svg" alt="Forum Icon">
                                <p class="font-semibold">Forum Dicussion</p>
                            </a>
                        </li>
                        <li>
                            <a href=""
                                class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-cream text-dark-green hover:text-white">
                                <img class="w-5" src="./Img/icons/schedule_icon.svg" alt="Schedule Icon">
                                <p class="font-semibold">Schedule</p>
                            </a>
                        </li>
                        <li>
                            <a href=""
                                class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-cream text-dark-green hover:text-white">
                                <img class="w-5" src="./Img/icons/attendance_icon.svg" alt="Attendance Icon">
                                <p class="font-semibold">Attendance</p>
                            </a>
                        </li>
                        <li>
                            <a href=""
                                class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-cream text-dark-green hover:text-white">
                                <img class="w-5" src="./Img/icons/score_icon.svg" alt="Score Icon">
                                <p class="font-semibold">Score</p>
                            </a>
                        </li>
                        <li>
                            <a href="" class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 bg-cream">
                                <img class="w-5" src="./Img/icons/consult_icon.svg" alt="Consult Icon">
                                <p class="text-white font-semibold">Consult</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom nav -->
            <div>
                <ul class="flex flex-col ">
                    <li>
                        <a href="#"
                            class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-cream text-dark-green hover:text-white">
                            <img class="w-5" src="./Img/icons/help_icon.svg" alt="Help Icon">
                            <p class="font-semibold">Help</p>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-cream text-dark-green hover:text-white">
                            <img class="w-5" src="./Img/icons/logout_icon.svg" alt="Log out Icon">
                            <p class="font-semibold">Log out</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <!-- Right side -->
        <div class="bg-cgray w-full h-screen px-10 py-6 flex flex-col gap-y-6 overflow-y-scroll">
            <!-- Header / Profile -->
            <div class="flex items-center gap-x-4 justify-end">
                <img class="w-10" src="./Img/icons/default_profile.svg" alt="Profile Image">
                <p class="text-dark-green font-semibold">Mentor Name</p>
            </div>

            <!-- Breadcrumb -->
            <div>
                <ul class="flex items-center gap-x-4">
                    <li>
                        <a class="text-light-green" href="#">Home</a>
                    </li>
                    <li>
                        <span class="text-light-green">/</span>
                    </li>
                    <li>
                        <a class="text-light-green" href="#">Consult</a>
                    </li>
                </ul>
            </div>
            <!-- <div class="bg-white h-12 w-auto rounded-xl">
                <ul class="flex items-center gap-x-12 p-2.5 pl-10">
                    <li>
                        <a class="text-[#1E3F41]" href="#">Session</a>
                    </li>
                    <li>
                        <a class="text-[#DDB07F]" href="#">Booking</a>
                        <hr class="border-[2px] border-opacity-100 border-[#DDB07F]">
                    </li>
                </ul>
            </div> -->
            <div class="flex flex-col sm:flex-row bg-white h-24 sm:h-12 w-full rounded-xl pl-3 sm:pl-5">
                <!-- <div><a class="text-[#1E3F41]" href="#">Session</a></div>
                <div>
                    <a class="text-[#DDB07F]" href="#">Booking</a>
                    <hr class="border-[2px] border-opacity-100 border-[#DDB07F]">
                </div> -->
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                    class="flex justify-start items-center py-2 pr-4 pl-3 w-2/5 font-medium text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Booking
                    <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar"
                    class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                        <li>
                            <a href="#"
                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Session</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Booking</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div
                class="grid justify-items-center gap-4 gap-y-[50px] grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 w-auto">
                <a href="#" class="bg-white h-48 w-full sm:w-4/5 rounded-xl shadow-lg text-center" type="button"
                    data-modal-toggle="defaultModal">
                    <div class="bg-blue-200 opacity-50 h-32 w-auto rounded-t-xl">
                    </div>
                </a>
                <a href="#" class="bg-white h-48 w-full sm:w-4/5 rounded-xl shadow-lg text-center" type="button"
                    data-modal-toggle="defaultModal">
                    <div class="bg-blue-200 h-32 w-auto rounded-t-xl">Test</div>
                </a>
                <a href="#" class="bg-white h-48 w-full sm:w-4/5 rounded-xl shadow-lg text-center" type="button"
                    data-modal-toggle="defaultModal">
                    <div class="bg-blue-200 h-32 w-auto rounded-t-xl">Test</div>
                </a>
                <a href="#" class="bg-white h-48 w-full sm:w-4/5 rounded-xl shadow-lg text-center" type="button"
                    data-modal-toggle="defaultModal">
                    <div class="bg-blue-200 h-32 w-auto rounded-t-xl">Test</div>
                </a>
                <a href="#" class="bg-white h-48 w-full sm:w-4/5 rounded-xl shadow-lg text-center" type="button"
                    data-modal-toggle="defaultModal">
                    <div class="bg-blue-200 h-32 w-auto rounded-t-xl">Test</div>
                </a>
                <a href="#" class="bg-white h-48 w-full sm:w-4/5 rounded-xl shadow-lg text-center" type="button"
                    data-modal-toggle="defaultModal">
                    <div class="bg-blue-200 h-32 w-auto rounded-t-xl">Test</div>
                </a>

            </div>
            <!-- Main modal -->
            <div id="defaultModal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 lg:text-2xl dark:text-white">
                                Terms of Service
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-toggle="defaultModal">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                With less than a month to go before the European Union enacts new consumer privacy laws
                                for its citizens, companies around the world are updating their terms of service
                                agreements to comply.
                            </p>
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on
                                May 25 and is meant to ensure a common set of data rights in the European Union. It
                                requires organizations to notify users as soon as possible of high-risk data breaches
                                that could personally affect them.
                            </p>
                        </div>
                        <!-- Modal footer -->
                        <div
                            class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                            <button data-modal-toggle="defaultModal" type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                                accept</button>
                            <button data-modal-toggle="defaultModal" type="button"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <script>
    let btnToggle = document.getElementById('btnToggle');
    let sidebar = document.querySelector('.sidebar');
    btnToggle.onclick = function() {
        sidebar.classList.toggle('in-active');
    }
    </script>
</body>

</html>