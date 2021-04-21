<div class="text-gray-600 body-font font-serif exlg">
        <form action="" method="post" class=" container px-75 py-24 mx-auto flex flex-row items-center">
            <div class="flex flex-col text-center w-full mb-10"><br><br>
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">SIGN-UP FORM:</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever Lorem ipsum dolor sit, amet consectetur adipisicini, sit error. Non illo ipsa cumque.</p>
            </div>

            <div class="container grid grid-cols-3 gap-x-2">

                <div class="container flex flex-col">
                    <label for="id"><b>Input ID</b></label>
                    <input type="text" placeholder="id 10 character" name="id" id="id" class="rounded" value="<?= set_value('id');?>">
                    <?=form_error('id','<p class="text-red-600 text-base rounded-lg">','</p>');?>
                </div>

                <div class="container flex flex-col">
                    <label for="username"><b>Username</b></label>
                    <input type="text" placeholder="Input username" name="username" id="username" class="rounded" value="<?= set_value('username');?>">
                    <?=form_error('username','<p class="text-red-600 text-base rounded-lg">','</p>');?>
                </div>

                <div class="container flex flex-col">
                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Input password" name="password" id="password" class="rounded">
                    <?=form_error('password','<p class="text-red-600 text-base rounded-lg">','</p>');?>
                </div>


                <div class="container flex flex-col">
                    <label for="email"><b>Email</b></label>
                    <input type="email" placeholder="Input email" name="email" id="email" class="rounded" value="<?= set_value('email');?>">
                    <?=form_error('email','<p class="text-red-600 text-base rounded-lg">','</p>');?>
                </div>

                <div class="container flex flex-col">
                    <label for="nickname"><b>Nickname</b></label>
                    <input type="text" placeholder="Input Nickname" name="nickname" id="nickname" class="rounded">
                    <?=form_error('nickname','<p class="text-red-600 text-base rounded-lg">','</p>');?>
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

                <div class="container col-span-2">
                    <p>By creating an account you agree to our <a href="#" style="color:rgb(137, 138, 139)">Terms & Privacy</a>.</p>
                </div>

                <div class="container col-span-3">
                    <button type="submit">submit</button>
                </div>
            </div>
        </form>
    </div>
