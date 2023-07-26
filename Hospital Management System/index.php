<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/eb3db8c5c8.js" crossorigin="anonymous"></script>
    
    <title>Document</title>
  <link rel="stylesheet" href="/assets/index.db965f83.css">
</head>
<body>
    <header class="space-y-2">
         <nav>
            <div class="bg-blue-600 text-white px-2 shadow-2xl py-4 font-serif text-lg text-center">Krishna Hospital Management <sub>services</sub></div>
            <nav class="bg-white shadow-lg">
                <div class="max-w-6xl mx-auto px-4">
                    <div class="flex justify-between">
                        <div class="flex space-x-7">
                            <div>
                                <!-- Website Logo -->
                                <a href="#" class="flex items-center py-4 px-2">
                                    <img src="/assets/1.762eb65a.jpg" alt="Logo" class="rounded-full h-8 w-8">
                                </a>
                            </div>
                            <!-- Primary Navbar items -->
                            <div class="hidden md:flex items-center space-x-1">
                                <a href="index.php" class="py-4 px-2 text-green-500 border-b-4 border-green-500 font-semibold ">Home</a>
                                <a href="queryForm.php" target="_blank" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Query?</a>
                                <a href="#contact" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Contact Us</a>
                                <a href="SignIn.php" target="_blank" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">SignIn</a>
                            </div>
                        </div>
                        <!-- Mobile menu button -->
                        <div class="md:hidden flex items-center">
                            <button class="outline-none mobile-menu-button">
                            <svg class=" w-6 h-6 text-gray-500 hover:text-green-500 "
                                x-show="!showMenu"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                        </div>
                    </div>
                </div>
                <!-- mobile menu -->
                <div class="hidden mobile-menu">
                    <ul class="">
                        <li class="active"><a href="index.php" class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">Home</a></li>
                        <li><a href="queryForm.php" target="_blank" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Query?</a></li>
                        <li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Contact Us</a></li>
                        <li><a href="SignIn.php" target="_blank" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">SignIn</a></li>
                    </ul>
                </div>
                <script>
                    const btn = document.querySelector("button.mobile-menu-button");
                    const menu = document.querySelector(".mobile-menu");
                    btn.addEventListener("click", () => {
                        menu.classList.toggle("hidden");
                    });
                </script>
            </nav>
         </nav>
    </header>
    <main>
        <img src="/assets/2.c5e315cf.jpeg" alt="" class="shadow-md rounded-md my-10 h-96 sm:mx-auto">
        <h1 class="text-sm font-semibold shadow-md ring-2 ring-black ring-inset rounded-full w-20 mx-28 px-2 text-center sm:px-5 sm:mx-64 md:mx-auto">About</h1>
        <p class="mx-2 px-2 py-2 rounded-md shadow-md">We are passionate about Technology and we are passionate about Healthcare. With a collective experience of more than 9+ years in Healthcare, Healthcare Technology, Marketing, Customer Service and Information Management, Team MocDoc has the experience and is uniquely positioned to understand and meet the challenges that are inherent in the Healthcare sector.</p>
        <div class="flex space-x-2 mx-2 my-4">
            <div>
            <h1 class="mx-3 ring-2 shadow-md ring-black ring-inset rounded-full w-28 px-2 text-center sm:px-5 sm:mx-20 md:mx-auto">Our Vision</h1>
            <img src="/assets/vision.ebbb7c52.jpg" alt="" class="mx-6 shadow-md rounded-full h-20 my-2 w-20 sm:mx-24 md:mx-auto">
            <p class="px-2 py-2 rounded-md shadow-md">Our Vision is to be a modern healthcare platform for care givers and general public to manage their medical records and access it anywhere anytime on any devices.</p>
            </div>
            <div>
                <h1 class="ring-2 shadow-md ring-black ring-inset rounded-full w-36 px-1 text-center sm:px-5 sm:mx-16 md:mx-auto">Our Commitment</h1>
                <img src="/assets/commitment.f3918537.jpg" alt="" class="mx-6 shadow-md rounded-full h-20 my-2 w-20 sm:mx-24 md:mx-auto">
                <p class="px-2 py-2 rounded-md shadow-md">Service & support is at the heart of what we do. As a true subscription based solutions vendor, we know the importance of keeping our customers happy.</p>
            </div>
        </div>
    </main>
    <footer class="bg-blue-600">
        <a name="contact"></a>
        <div class="flex items-center justify-around">
        <div>
        <h1 class="mx-2 bg-amber-500 px-2 py-1 rounded-md my-2 shadow-md">Contact Us....</h1>
        <span class="flex space-x-2 mx-2">
            <i class="fa fa-phone my-1"></i>
            <h1 class=" text-white">+011 9192643</h1>
        </span>
        <span class="flex space-x-2 mx-2">
            <i class="fa fa-envelope my-1"></i>
            <h1 class="mx-2 text-white">KHM@service.com</h1>
        </span>
        </div>
        <div>
          <h1 class=" bg-amber-500 px-2 py-1 rounded-md my-2 shadow-md">Follow Us....</h1>
          <button class=""><img src="/assets/facebook.31e7df38.jpg" alt="" class="rounded-full h-8 w-8 "></button>
          <button class=""><img src="/assets/twitter.34c51643.jpg" alt="" class="rounded-full h-8 w-8 "></button>
          <button class=""><img src="/assets/linkdein.dbe8de7e.jpg" alt="" class="rounded-full h-8 w-8 "></button>
        </div>
      </div>
    </footer>
</body>
</html>