<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/ca602dea7a.js" crossorigin="anonymous"></script>
  <title>E-Learning Project</title>
  <!-- Tailwind CSS -->
  <link rel="stylesheet" href="<?= base_url('css/style.css');?>">
  <!-- Style Css -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('css/style2.css');?>">
  <!-- Icon -->
  <link rel="shortcut icon" href="<?= base_url('assets/logo.jpeg');?>">  
</head>
<body>
    <header class="text-gray-600 body-font bg-gray-100">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-white p-2 bg-green-500 rounded-full" viewBox="0 0 24 24">
            </svg>
            <span class="ml-3 text-xl">Ngoding.com</span>
          </a>

          <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
          <a class="mr-7 transition duration-400 ease-out btnn" href="<?=base_url('home/index')?>">Home</a>
            <a class="mr-7 transition duration-400 ease-out btnn" href="<?=base_url('study/index')?>">Study</a>
            <a class="mr-7 transition duration-400 ease-out btnn" href="<?=base_url('exercise/index')?>">Exercises</a>
            <a class="mr-7 transition duration-400 ease-out btnn" href="<?=base_url('roadmap/index')?>">Road Map</a>
            <a class="mr-7 transition duration-400 ease-out btnn" href="<?=base_url('about/index')?>">About</a>
            <a class="mr-7 transition duration-400 ease-out btnn" href="<?=base_url('user/forum')?>">Forum</a>
          </nav>

          <button class="inline-flex items-center bg-green-500  border-0 py-1 px-3 focus:outline-none text-white hover:bg-green-600 rounded text-base mt-4 md:mt-0 transition duration-500 ease-out"><a href="<?=base_url('auth/logout')?>">LOGOUT</a>
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>

        </div>
    </header>

    <section class="text-gray-100 body-font bgup">

        <div>.</div>

    </section>