<!-- content -->
<div class="container grid grid-cols-5 gap-x-2 px-5">
  <div class="container my-28">
    <ul class="bg-blue-400 rounded-xl">
      <li class="py-8 px-5 hover:bg-blue-100">Details</li>
      <li class="py-8 px-5 hover:bg-blue-100">Achievement</li>
      <li class="py-8 px-5 hover:bg-blue-100">Shop</li>
      <li class="py-8 px-5 hover:bg-blue-100">Tasks</li>
      <li class="py-8 px-5 hover:bg-blue-100">Class</li>
    </ul>
  </div>
  <div class="container col-span-4">
    <div class="container mx-auto my-10 flex flex-col">
      <p class="text-5xl text-center">Selamat datang <span class="hover:text-green-500"><?=$detail['nickname']?></span>!</p>
      <div class="container grid grid-cols-7 bg-gray-300 rounded-lg my-5">
        <div class="container">
            <ul>
              <li class="px-10 py-4 text-2xl">ID</li>
              <li class="px-10 py-4 text-2xl">Nickname</li>
              <li class="px-10 py-4 text-2xl">Email</li>
              <li class="px-10 py-4 text-2xl">Role</li>
              <li class="px-10 py-4 text-2xl">Point</li>
              <li class="px-10 py-4 text-2xl">Status</li>
              <li class="px-10 py-4 text-2xl">Rank</li>
              <li class="px-10 py-4 text-2xl">Rate</li>
            </ul>
        </div>
        <div class="container text-center">
            <ul>
                  <li class="py-4 text-2xl">:</li>
                  <li class="py-4 text-2xl">:</li>
                  <li class="py-4 text-2xl">:</li>
                  <li class="py-4 text-2xl">:</li>
                  <li class="py-4 text-2xl">:</li>
                  <li class="py-4 text-2xl">:</li>
                  <li class="py-4 text-2xl">:</li>
                  <li class="py-4 text-2xl">:</li>
                </ul>
            </div>
        <div class="container col-span-5">
            <ul>
              <li class="py-4 text-2xl"><?=$detail['id'];?></li>
              <li class="py-4 text-2xl"><?=$detail['nickname'];?></li>
              <li class="py-4 text-2xl"><?=$detail['email'];?></li>
              <li class="py-4 text-2xl"><?=$detail['role'];?></li>
              <li class="py-4 text-2xl"><?=$detail['point'];?></li>
              <li class="py-4 text-2xl"><?=$detail['status'];?></li>
              <li class="py-4 text-2xl"><?=$detail['rank'];?></li>
              <li class="py-4 text-2xl"><?=$detail['rate'];?></li>
            </ul>
        </div>
      </div>

      <div class="container bg-indigo-400">
      <?=var_dump($transaction)?>
      </div>

      <br><br><br>

      <h1 class="text-center">Class Available</h1>
      <div class="container bg-purple-500 grid grid-cols-5 p-10">
      
        <?php foreach($course as $crs):?>
          <div course="container bg-indigo-300 hover:bg-blue-100 text-center items-center py-4">
            <p><?=$crs['course_name'];?></p>
            <p><?=$crs['status'];?></p>
            <br><br>
            <a href="<?= base_url('classes/register')?>/<?=$crs['id'];?>" class="hover:text-white">REGISTER</a>
          </div>
        <?php endforeach;?>
      </div>

      <br><br><br>


      <h1 class="text-center">Registered Class</h1>
      <div class="container bg-purple-500 grid grid-cols-5 p-10">

        <?php foreach($registered as $rgs):?>
          <div course="container bg-indigo-300 hover:bg-blue-100 text-center items-center py-4">
            <p><?=$rgs['course_id'];?></p>
            <p><?=$rgs['class_id'];?></p>
            <p><?=$rgs['participant_id'];?></p>
          </div>
        <?php endforeach;?>
      </div>

      <br><br><br>


      <h1 class="text-center">Item Inventory</h1>
      <div class="container bg-purple-500 grid grid-cols-5 p-10">

        <?php foreach($inventory as $inv):?>
          <div course="container bg-indigo-300 hover:bg-blue-100 text-center items-center py-4">
            <p><?=$inv['user_id'];?></p>
            <p><?=$inv['item_id'];?></p>
            <p><?=$inv['quantity'];?></p>
          </div>
        <?php endforeach;?>
      </div>


    </div>
  </div>
</div>