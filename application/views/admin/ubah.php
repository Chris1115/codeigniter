<?=validation_errors();?>

<div class="text-gray-600 body-font font-serif exlg">
        <form action="" method="post" class=" container px-75 py-24 mx-auto flex flex-row items-center">
            <div class="flex flex-col text-center w-full mb-10"><br><br>
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">SIGN-UP FORM:</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever Lorem ipsum dolor sit, amet consectetur adipisicini, sit error. Non illo ipsa cumque.</p>
            </div>

            <div class="container grid grid-cols-2 gap-x-2 gap-y-4">

                <div class="container flex flex-col">
                    <label for="id"><b>Input ID</b></label>
                    <label for="id"><b><?=$akun['id']?></b></label>
                </div>

                <div class="container flex flex-col">
                    <label for="email"><b>Email</b></label>
                    <input type="email" placeholder="Input email" name="email" id="email" class="rounded" value="<?=$akun['email']?>">
                </div>

                <div class="container flex flex-col">
                    <label for="nickname"><b>Nickname</b></label>
                    <input type="text" placeholder="Input Nickname" name="nickname" id="nickname" class="rounded" value="<?=$akun['nickname']?>">
                </div>

                <div class="container flex flex-col">
                    <label for="role"><b>Role</b></label>
                    <select name="role" id="role">
                        <option value="student">student</option>
                        <option value="tutor">tutor</option>
                        <option value="staff">staff</option>
                    </select>
                </div>

                <div class="container">
                    <label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                    </label>
                </div>

                <div class="container">
                    <p>By creating an account you agree to our <a href="#" style="color:rgb(137, 138, 139)">Terms & Privacy</a>.</p>
                </div>

                <div class="container col-span-2 text-center bg-green-400 hover:bg-red-400 rounded">
                    <button type="submit">submit</button>
                </div>
            </div>
        </form>
    </div>