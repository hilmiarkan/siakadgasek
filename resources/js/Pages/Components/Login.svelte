<!-- import {inertia} from '@inertiajs/svelte' -->

<body class="overflow-hidden h-100 m-0">

    <!-- haedar -->


    <!-- content -->
    <section
        class="h-screen relative flex items-center justify-center bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
        <div
            class="bg-gradient-to-b from-green-50 to-emerald-100 dark:from-green-900 w-full h-full absolute top-0 left-0 z-0">
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
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8 shadow-2xl shadow-emerald-200">
                    <h1
                        class="text-center w-full text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Login <span class="italic">sek, kang!</span>
                    </h1>

                    <form class="space-y-4 md:space-y-6" action="proses-voter.php" method="POST">
                        <input type="hidden" name="aksi" value="login" />
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-emerald-500 focus:outline-none focus:ring-0 focus:border-emerald-600 peer" placeholder=" " required />
                            <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-emerald-600 peer-focus:dark:text-emerald-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="password" name="floating_password" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-emerald-500 focus:outline-none focus:ring-0 focus:border-emerald-600 peer" placeholder=" " required />
                            <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-emerald-600 peer-focus:dark:text-emerald-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Masuk
                            </button>
                        <p class="flex items-center justify-center font-light text-gray-500 dark:text-gray-400">
                            Belum punya akun?<a  href="/login"
                                class="ml-2 font-medium text-green-600 hover:underline dark:text-green-500">Klik saya</a>
                        </p>
                    </form>

                </div>
            </div>
            <br><br>
            <p class="flex items-center justify-center flex-col text-sm font-light">Siakad Gasek © - 2024 </p>
        </div>



    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>
