<?=validation_errors();?>

<div class="text-gray-600 body-font font-serif exlg">
        <form action="" method="post" class=" container px-75 py-24 mx-auto flex flex-row items-center">
            <div class="flex flex-col text-center w-full mb-10"><br><br>
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">SIGN-UP FORM:</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever Lorem ipsum dolor sit, amet consectetur adipisicini, sit error. Non illo ipsa cumque.</p>
            </div>

            <div class="container flex flex-col gap-x-2 gap-y-4">

                <div class="container flex flex-col">
                    <label for="forum_d"><b>Input Forum ID</b></label>
                    <label for="forum_d"><b><?=$detail['id']?></b></label>
                </div>

                <div class="container flex flex-col">
                    <label for="course_name"><b>course_name</b></label>
                    <input type="course_name" placeholder="Input course_name" name="course_name" id="course_name" class="rounded" value="<?=$detail['course_name']?>">
                </div>

                <div class="container flex flex-col">
                    <label for="status"><b>status</b></label>
                    <input type="status" placeholder="Input status" name="status" id="status" class="rounded" value="<?=$detail['status']?>">
                </div>

                <div class="container col-span-2 text-center bg-green-400 hover:bg-red-400 rounded">
                    <button type="submit">submit</button>
                </div>
            </div>
        </form>
    </div>