<!-- import {inertia} from '@inertiajs/svelte' -->

<body class="overflow-hidden h-100 m-0">

    <!-- haedar -->


    <!-- content -->
    <section
        class="h-screen relative flex items-center justify-center bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
        <div
            class="bg-gradient-to-b from-green-50 to-transparent dark:from-green-900 w-full h-full absolute top-0 left-0 z-0">
        </div>

        <div class="py-8 px-4 mx-auto max-w-screen-xl  lg:py-16 z-10 relative">
            <div class="flex items-center justify-center flex-col">
                <!-- Center vertically and display items in columns -->
                <div class="flex items-center mb-3"> <!-- Center horizontally -->
                    <img src="https://ponpesgasek.id/wp-content/uploads/2023/02/cropped-vektor-logo-sabros.png"
                        class="mr-5 h-6 sm:h-9" alt="Flowbite Logo" />
                    <div class="flex flex-col"> <!-- Center horizontally and vertically for the text div -->
                        <span class="text-x4 whitespace-nowrap dark:text-white">Pondok Pesantren</span>
                        <span class="text-x4 font-extrabold whitespace-nowrap dark:text-white">Sabilurrosyad</span>
                    </div>
                </div>


            </div>
            <br>

            <div
                class="w-72 bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700 z-10">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1
                        class="text-center w-full text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Login sek, kang !
                    </h1>

                    <form class="space-y-4 md:space-y-6" action="proses-voter.php" method="POST">
                        <input type="hidden" name="aksi" value="login" />
                        <div>
                            <label for="nik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                            <input type="text" name="nik" id="nik"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Username anda" required="">
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                                required="">
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Masuk
                            </button>
                        <p class="flex items-center justify-center font-light text-gray-500 dark:text-gray-400">
                            Belum punya akun?<a  href="/login" use:inertia
                                class="ml-2 font-medium text-green-600 hover:underline dark:text-green-500">Klik saya</a>
                        </p>
                    </form>

                </div>
            </div>
            <br><br>
            <p class="flex items-center justify-center flex-col text-sm font-light">Sistem Pilkades Online © - 2023 </p>
        </div>



    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>
