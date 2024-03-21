<?php

include('about.php');
?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="subpixel-antialiased font-Montserrat ">
<nav class="sticky top-0 h-20 bg-[#243c5a] p-5 sm:px-24 xl:px-64">
    <div class="mx-auto flex justify-between items-center">
        <a href="#"
           class="uppercase text-white text-xl xl:text-3xl font-bold whitespace-no-wrap font-Montserrat leading-normal tracking-tighter">Start
            Tailwind</a>
        <button class="block md:hidden uppercase inline-flex items-center bg-green-500 px-3 py-2 rounded-lg text-white">Menu <svg class="h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/></svg></button>
        <div class="hidden md:block">
            <a href="" class="px-4 uppercase text-white text-base font-bold whitespace-no-wrap font-Montserrat leading-normal tracking-tighter hover:text-green-500">Portfolio</a>
            <a href="" class="px-4 uppercase text-white text-base font-bold whitespace-no-wrap font-Montserrat leading-normal tracking-tighter hover:text-green-500">About</a>
            <a href="" class="px-4 uppercase text-white text-base font-bold whitespace-no-wrap font-Montserrat leading-normal tracking-tighter hover:text-green-500">Contact</a>
        </div>
    </div>
</nav>
<main>
    <section class="bg-green-500 py-32 ">
        <figure class="container px-16 pt-12 mx-auto">
            <img class="mb-12 h-64 mx-auto" src="https://francescomansi.me/img/start-tailwind/avataaars.svg" alt="">
        </figure>
        <h1 class="text-center uppercase text-white text-5xl lg:text-6xl font-bold  leading-none tracking-normal">
            Start
            Tailwind
        </h1>
        <div class="flex flex-row items-center justify-center py-4">
            <span class="h-1 w-24 bg-white rounded-full mx-2"></span>
            <svg class="h-12 fill-current text-white " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                        d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/>
            </svg>
            <span class="h-1 w-24 bg-white rounded-full mx-2"></span>
        </div>
        <p class="px-12 text-center text-white text-xl font-normal font-sans">Graphic Artist - Web Designer -
            Illustrator</p>
    </section>
    <section class="bg-white -mt-12 py-16">
        <div class="flex items-center justify-center min-h-screen grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1">
            <?php
            while ($row = $result->fetch_assoc()) {
                $building = new Building($row['price'], $row['name'], $row['address'], $row['phone'], $row['image'], $row['bedrooms'], $row['bathrooms']);
                $building->displayDetails();
            }
            ?>
        </div>

        <center> <a style="color:blue;" href="?houses=<?php echo $showMoreHouses + 3; ?>" class="btn-show-more"><h1>show more</h1></a></center>

        <h1 class="text-center uppercase text-black text-4xl font-bold  leading-none tracking-normal">
            Portfolio
        </h1>
        <div class="flex flex-row items-center justify-center py-4">
            <span class="h-1 w-24 bg-black rounded-full mx-2"></span>
            <svg class="h-12 fill-current text-black " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                        d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/>
            </svg>
            <span class="h-1 w-24 bg-black rounded-full mx-2"></span>
        </div>
        <div class="flex flex-col sm:flex-row sm:flex-wrap px-6 max-w-md md:max-w-6xl mx-auto">
            <div class="w-full sm:w-1/2 md:w-1/3 p-4 rounded-lg">
                <img alt="" class="rounded-lg" src="https://francescomansi.me/img/start-tailwind/portfolio/cabin.png">
            </div>
            <div class="w-full sm:w-1/2 md:w-1/3 p-4">
                <img alt="" class="rounded-lg" src="https://francescomansi.me/img/start-tailwind/portfolio/cake.png">
            </div>
            <div class="w-full sm:w-1/2 md:w-1/3 p-4">
                <img alt="" class="rounded-lg" src="https://francescomansi.me/img/start-tailwind/portfolio/circus.png">
            </div>
            <div class="w-full sm:w-1/2 md:w-1/3 p-4">
                <img alt="" class="rounded-lg" src="https://francescomansi.me/img/start-tailwind/portfolio/game.png">
            </div>
            <div class="w-full sm:w-1/2 md:w-1/3 p-4">
                <img alt="" class="rounded-lg" src="https://francescomansi.me/img/start-tailwind/portfolio/safe.png">
            </div>
            <div class="w-full sm:w-1/2 md:w-1/3 p-4">
                <img alt="" class="rounded-lg" src="https://francescomansi.me/img/start-tailwind/portfolio/submarine.png">
            </div>
        </div>
    </section>
    <?php echo getAboutSection(); ?>
    <section class="bg-white -mt-12 py-16">
        <h1 class="text-center uppercase text-black text-4xl font-bold  leading-none tracking-normal">
            Contact Me
        </h1>
        <div class="flex flex-row items-center justify-center py-4">
            <span class="h-1 w-24 bg-black rounded-full mx-2"></span>
            <svg class="h-12 fill-current text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                        d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/>
            </svg>
            <span class="h-1 w-24 bg-black rounded-full mx-2"></span>
        </div>
        <form class="px-6 pb-12 max-w-2xl mx-auto" method="POST">
            <div class="flex items-center border-b border-b-2 border-gray-400 py-10">
                <input class="appearance-none bg-transparent border-none w-full placeholder-gray-700 mr-3 py-1 leading-tight text-2xl focus:outline-none"
                       type="text" name="name" placeholder="Name" aria-label="Name" required>
            </div>
            <div class="flex items-center border-b border-b-2 border-gray-400 py-10">
                <input class="appearance-none bg-transparent border-none w-full placeholder-gray-700 mr-3 py-1 leading-tight text-2xl focus:outline-none"
                       type="text" name="email" placeholder="Email Address" aria-label="Email Address" required>
            </div>
            <div class="flex items-center border-b border-b-2 border-gray-400 py-10">
                <input class="appearance-none bg-transparent border-none w-full placeholder-gray-700 mr-3 py-1 leading-tight text-2xl focus:outline-none"
                       type="text" name="phone" placeholder="Phone Number" aria-label="Phone Number" required>
            </div>
            <div class="flex items-center border-b border-b-2 border-gray-400 py-10">
                <label>
            <textarea
                    class="appearance-none border-none w-full placeholder-gray-700 mr-3 py-1 leading-tight text-2xl focus:outline-none"
                    name="message" placeholder="Message" required></textarea>
                </label>
            </div>
            <div class="py-5">
                <button type="submit" class="bg-green-500 px-8 py-5 rounded-lg text-white">Send</button>
            </div>
            <p><?php  echo $mes; ?></p>

        </form>
]



    </section>
    <section class="bg-gray-800 -mt-12 py-16">
        <div class="flex flex-col md:flex-row text-white text-center">
            <div class="p-6 md:w-1/3">
                <h1 class="uppercase text-2xl font-bold leading-none tracking-normal pb-5">Location</h1>
                <p> <?php echo $location;?></p>
            </div>
            <div class="p-6 md:w-1/3">
                <h1 class="uppercase text-2xl font-bold  leading-none tracking-normal">Around the web</h1>
                <div class="flex justify-center py-5 ">
                    <span class="items-center rounded-full border-2 p-3 hover:bg-white mx-1">
                        <svg class="fill-current w-5 h-5 hover:text-blue-900" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20"><title>Twitter</title><path
                                d="M6.29 18.25c7.55 0 11.67-6.25 11.67-11.67v-.53c.8-.59 1.49-1.3 2.04-2.13-.75.33-1.54.55-2.36.65a4.12 4.12 0 0 0 1.8-2.27c-.8.48-1.68.81-2.6 1a4.1 4.1 0 0 0-7 3.74 11.65 11.65 0 0 1-8.45-4.3 4.1 4.1 0 0 0 1.27 5.49C2.01 8.2 1.37 8.03.8 7.7v.05a4.1 4.1 0 0 0 3.3 4.03 4.1 4.1 0 0 1-1.86.07 4.1 4.1 0 0 0 3.83 2.85A8.23 8.23 0 0 1 0 16.4a11.62 11.62 0 0 0 6.29 1.84"></path></svg>
                    </span>
                    <span class="items-center rounded-full border-2 p-3 hover:bg-white mx-1">
                        <svg class="fill-current w-5 h-5 hover:text-blue-900" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20"><title>Twitter</title><path
                                d="M6.29 18.25c7.55 0 11.67-6.25 11.67-11.67v-.53c.8-.59 1.49-1.3 2.04-2.13-.75.33-1.54.55-2.36.65a4.12 4.12 0 0 0 1.8-2.27c-.8.48-1.68.81-2.6 1a4.1 4.1 0 0 0-7 3.74 11.65 11.65 0 0 1-8.45-4.3 4.1 4.1 0 0 0 1.27 5.49C2.01 8.2 1.37 8.03.8 7.7v.05a4.1 4.1 0 0 0 3.3 4.03 4.1 4.1 0 0 1-1.86.07 4.1 4.1 0 0 0 3.83 2.85A8.23 8.23 0 0 1 0 16.4a11.62 11.62 0 0 0 6.29 1.84"></path></svg>
                    </span>
                    <span class="items-center rounded-full border-2 p-3 hover:bg-white mx-1">
                        <svg class="fill-current w-5 h-5 hover:text-blue-900" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20"><title>Twitter</title><path
                                d="M6.29 18.25c7.55 0 11.67-6.25 11.67-11.67v-.53c.8-.59 1.49-1.3 2.04-2.13-.75.33-1.54.55-2.36.65a4.12 4.12 0 0 0 1.8-2.27c-.8.48-1.68.81-2.6 1a4.1 4.1 0 0 0-7 3.74 11.65 11.65 0 0 1-8.45-4.3 4.1 4.1 0 0 0 1.27 5.49C2.01 8.2 1.37 8.03.8 7.7v.05a4.1 4.1 0 0 0 3.3 4.03 4.1 4.1 0 0 1-1.86.07 4.1 4.1 0 0 0 3.83 2.85A8.23 8.23 0 0 1 0 16.4a11.62 11.62 0 0 0 6.29 1.84"></path></svg>
                    </span>
                    <span class="items-center rounded-full border-2 p-3 hover:bg-white mx-1">
                        <svg class="fill-current w-5 h-5 hover:text-blue-900" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20"><title>Twitter</title><path
                                d="M6.29 18.25c7.55 0 11.67-6.25 11.67-11.67v-.53c.8-.59 1.49-1.3 2.04-2.13-.75.33-1.54.55-2.36.65a4.12 4.12 0 0 0 1.8-2.27c-.8.48-1.68.81-2.6 1a4.1 4.1 0 0 0-7 3.74 11.65 11.65 0 0 1-8.45-4.3 4.1 4.1 0 0 0 1.27 5.49C2.01 8.2 1.37 8.03.8 7.7v.05a4.1 4.1 0 0 0 3.3 4.03 4.1 4.1 0 0 1-1.86.07 4.1 4.1 0 0 0 3.83 2.85A8.23 8.23 0 0 1 0 16.4a11.62 11.62 0 0 0 6.29 1.84"></path></svg>
                    </span>
                </div>

            </div>
            <div class="p-6 md:w-1/3">
                <h1 class="uppercase text-2xl font-bold leading-none tracking-normal pb-5">About freelancer</h1>
                <p class="text-xl break-normal">Freelance is a free to use, MIT licensed Tailwindcss theme created by
                    <a class="text-green-500" href="https://twitter.com/framansi">Francesco Mansi</a>
                </p>
            </div>
        </div>
    </section>
</main>
<footer class="bg-gray-900 h-16">
    <p class="pt-5 text-center text-white">Copyright © Your Website  <?php echo $year ?> </p>

</footer>
</body>
</html>
