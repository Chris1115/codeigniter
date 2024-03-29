    <!-- Account  -->
    <div class="container mx-auto text-left">
      <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200 text-center">
                <thead class="bg-gray-50">
                    <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      ID
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      nickname
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      email
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Role
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Point
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      status
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Rank
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Rate
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                    </tr>
                </thead>

                <?php foreach($akun as $akn):?>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class=" py-4 whitespace-nowrap">
                            <div class="flex items-center">
                            <div class="ml-4">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    <?=$akn['id'];?>
                                </span>
                            </div>
                            </div>
                        </td>
                        <td class=" py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900"><?=$akn['nickname'];?></div>
                        </td>
                        <td class=" py-4 whitespace-nowrap">
                          <div class="text-sm font-medium text-gray-900">
                            <?=$akn['email'];?>
                          </div>
                        </td>
                        <td class=" py-4 whitespace-nowrap text-sm text-gray-500">
                          <?=$akn['role'];?>
                        </td>
                        <td class=" py-4 whitespace-nowrap text-sm text-gray-500">
                          <?=$akn['point'];?>
                        </td>
                        <td class=" py-4 whitespace-nowrap text-sm text-gray-500">
                          <?=$akn['status'];?>
                        </td>
                        <td class=" py-4 whitespace-nowrap text-sm text-gray-500">
                          <?=$akn['rank'];?>
                        </td>
                        <td class=" py-4 whitespace-nowrap text-sm text-gray-500">
                          <?=$akn['rate'];?>
                        </td>
                        <td class=" py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="<?=base_url()?>admin/ubah/<?=$akn['id']?>" class="text-indigo-600 hover:text-indigo-900">Edit |</a>
                            <a href="<?=base_url()?>admin/hapus/<?=$akn['id']?>" class="text-indigo-600 hover:text-red-900">Hapus</a>
                        </td>
                    </tr>

                    <!-- More items... -->
                </tbody>
                <?php endforeach;?>
                </table>
            </div>
            </div>
        </div>
    </div>
    </div>

<br><br><br><br>

        <!-- Access  -->
    <div class="container mx-auto text-left">
      <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200 text-center">
                <thead class="bg-gray-50">
                    <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      ID
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      username
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      password
                    </th>
                </thead>

                <?php foreach($akunAkses as $aks):?>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class=" py-4 whitespace-nowrap">
                            <div class="flex items-center">
                            <div class="ml-4">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    <?=$aks['id'];?>
                                </span>
                            </div>
                            </div>
                        </td>
                        <td class=" py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900"><?=$aks['username'];?></div>
                        </td>
                        <td class=" py-4 whitespace-nowrap">
                          <div class="text-sm font-medium text-gray-900">
                            <?=$aks['password'];?>
                          </div>
                        </td>
                    </tr>

                    <!-- More items... -->
                </tbody>
                <?php endforeach;?>
                </table>
            </div>
            </div>
        </div>
      </div>
    </div>

<br><br><br><br>

    <div class="container mx-auto text-left">
      <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200 text-center">
                <thead class="bg-gray-50">
                    <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Forum ID
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Headline
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Question
                    </th>
                </thead>

                <?php foreach($forum as $frm):?>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class=" py-4 whitespace-nowrap">
                            <div class="flex items-center">
                            <div class="ml-4">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    <?=$frm['forum_id'];?>
                                </span>
                            </div>
                            </div>
                        </td>
                        <td class=" py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900"><?=$frm['headline'];?></div>
                        </td>
                        <td class=" py-4 whitespace-nowrap">
                          <div class="text-sm font-medium text-gray-900">
                            <?=$frm['question'];?>
                          </div>
                        </td>
                        <td class=" py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="<?=base_url()?>admin/gantiForum/<?=$frm['forum_id']?>" class="text-indigo-600 hover:text-indigo-900">Edit |</a>
                            <a href="<?=base_url()?>admin/hapusForum/<?=$frm['forum_id']?>" class="text-indigo-600 hover:text-red-900">Hapus</a>
                        </td>
                    </tr>

                    <!-- More items... -->
                </tbody>
                <?php endforeach;?>
                <button class="inline-flex items-center bg-green-500  border-0 py-1 px-3 focus:outline-none text-white hover:bg-green-600 rounded text-base mt-4 md:mt-0 transition duration-500 ease-out"><a href="<?=base_url('admin/newForum')?>">New Forum</a>
                <path d="M5 12h14M12 5l7 7-7 7"></path>
                </button>
                </table>
            </div>
            </div>
        </div>
      </div>
    </div>

    <br><br><br><br>

    <div class="container mx-auto text-left">
      <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200 text-center">
                <thead class="bg-gray-50">
                    <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Course ID
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Course Name
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Status
                    </th>
                </thead>

                <?php foreach($course as $crs):?>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class=" py-4 whitespace-nowrap">
                            <div class="flex items-center">
                            <div class="ml-4">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    <?=$crs['id'];?>
                                </span>
                            </div>
                            </div>
                        </td>
                        <td class=" py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900"><?=$crs['course_name'];?></div>
                        </td>
                        <td class=" py-4 whitespace-nowrap">
                          <div class="text-sm font-medium text-gray-900">
                            <?=$crs['status'];?>
                          </div>
                        </td>
                        <td class=" py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="<?=base_url()?>admin/gantiCourse/<?=$crs['id']?>" class="text-indigo-600 hover:text-indigo-900">Edit |</a>
                            <a href="<?=base_url()?>admin/hapusCourse/<?=$crs['id']?>" class="text-indigo-600 hover:text-red-900">Hapus</a>
                        </td>
                    </tr>

                    <!-- More items... -->
                </tbody>
                <?php endforeach;?>
                <button class="inline-flex items-center bg-green-500  border-0 py-1 px-3 focus:outline-none text-white hover:bg-green-600 rounded text-base mt-4 md:mt-0 transition duration-500 ease-out"><a href="<?=base_url('admin/newCourse')?>">New Class</a>
                <path d="M5 12h14M12 5l7 7-7 7"></path>
                </button>
                </table>
            </div>
            </div>
        </div>
      </div>
    </div>