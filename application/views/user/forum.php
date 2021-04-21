        <!-- content -->
        <div class="container flex flex-row grid grid-cols-7 gap-4 mx-auto">

          <div class="col-span-2 my-5">
            <ul class="bg-blue-200 rounded-xl">
              <li class="bg-blue-400 py-10 px-5 text-center rounded-lg">Topic</li>
              <li class="hover:bg-blue-300 py-8 px-5">HTML</li>
              <li class="hover:bg-blue-300 py-8 px-5">CSS</li>
              <li class="hover:bg-blue-300 py-8 px-5">Javascript</li>
              <li class="hover:bg-blue-300 py-8 px-5">PHP</li>
              <li class="hover:bg-blue-300 py-8 px-5">SQL</li>
            </ul>
          </div>

          <div class="col-span-5 my-5 py-5 flex flex-col">
            <!-- Question -->
            <?php foreach($forum as $show):?>
              <div class="container bg-gray-100 hover:bg-gray-400 p-10 rounded">
                <a class="text-3xl font-medium hover:text-red-600" href="<?php base_url();?>forum_detail/<?=$show['forum_id']?>"><?=$show['headline'];?></a>
                <p class="text-base my-5"><?=$show['question']?></p>
                <br><br><br><br>
              </div>
              <?php endforeach;?>  
          </div>

          </div>
        </div>
  