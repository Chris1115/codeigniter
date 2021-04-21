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

            <div class="container flex flex-col">

              <h1 class="text-3xl font-medium"><?=$info['headline']?></h1>
              <p class="text-base my-5"><?=$info['question']?></p>
              <br><br><br><br>

              <div class="container flex flex-col border-8 rounded-lg">
                <span><span>&lt;</span>!DOCTYPE<span > html</span><span>&gt;</span></span><br>
                <span><span>&lt;</span>html<span>&gt;</span></span><br>

                <span><span>&lt;</span>h1<span>&gt;</span></span>This is a Heading<span ><span>&lt;</span>/h1<span>&gt;</span></span><br>

                <span><span>&lt;</span>/html<span>&gt;</span></span>
              </div>
              

              <!-- comments -->
              <div class="bg-gray-200 rounded-lg my-5">
                <h1 class="text-lg px-3 py-3">COMMENTS</h1>
                <!-- Individual -->

<?php
    if (empty($detail))
    {
        $detail[0]['comments'] = 'no comments yet XD';
        $detail[0]['nickname'] = '';
    }
?>        
                <?php foreach($detail as $dtl):?>
                <div class="bg-gray-100 my-3 mx-3 px-2 py-2 rounded-lg">
                  <h1 class="text-base"><?=$dtl['nickname']?></h1>
                  <p class="text-sm"><?=$dtl['comments']?></p>
                </div>
                <?php endforeach;?>

                <form action="" method="post" class="bg-gray-100 my-3 mx-3 px-2 py-2 rounded-lg">
                    <label for="comments" class="text-base"><?=$user['nickname'];?></label>
                    <input type="text" name="comments" placeholder="Input your comments here" class="w-full">
                    <button type="submit">add comment</button>
                </form>
              </div>
            </div>

          </div>
        </div>