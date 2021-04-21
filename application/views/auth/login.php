<section class="text-gray-600 body-font exlg">
        <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
        <div class="lg:w-3/5 md:w-1/2 md:text-x1 mb-5">
            <h1 class="title-font font-medium text-3xl text-gray-900 font-serif">PLEASE
              <span class="title-font md:text-x1 text-3xl mb-5 font-serif bg-clip-text text-transparent bg-gradient-to-r from-green-800 to-green-400">
                LOG IN
              </span>THE WEBSITE BEFORE STUDY!
            </h1>
            <p class="leading-relaxed mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, in quibusdam voluptates beatae illo neque repudiandae saepe dolorum eos exercitationem assumenda consequuntur, fugit, temporibus repellat quae accusantium nesciunt? Esse, provident!</p>
        </div>
        <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
          <h2 class="title-font md:text-lg text-3xl mb-5 font-serif text-gray-700">Let's Login First!</h2>


          <form action="<?=base_url('auth')?>" method="post"> 
            <div class="relative mb-4">
            <label for="username" class="leading-7 text-sm text-gray-600">Username</label>
            <input type="text" id="username" name="username" class="w-full bg-white rounded border border-green-300 focus:border-green-500 focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
            <label for="password" class="leading-7 text-sm text-gray-600">Password</label>
            <input type="password" id="password" name="password" class="w-full bg-white rounded border border-green-300 focus:border-green-500 focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <button class="text-white border-0 py-2 px-8 focus:outline-none rounded text-lg bgupp">Submit</button>
            <p class="text-xs text-gray-500 mt-3">Terima kasih telah belajar di website ini.</p>
            </form>


        </div>
        </div>
    </section>