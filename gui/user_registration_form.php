<div id="myModal2" class="span12 modal message hide fade">
<form  action="" method="post">
    <fieldset>
        <legend>Create Account</legend>
        <div class="control-group">
            <div class="controls">
                <div class="input-prepend">
                    <span class="add-on">First Name</span>
                    <input type="text" id="firstName" placeholder="First Name" name="firstName" required="">
                </div>
            </div>
        </div>

        <div class="control-group">
            <div class="controls">
                <div class="input-prepend">
                    <span class="add-on">Last Name</span>
                        <input type="text" id="lastName" placeholder="Last Name" name="lastName" required="">
                </div>
            </div>
        </div>
        <input type="hidden" value="create" name="create">
		<input type="hidden" value="<?php echo $_SESSION['nonce'] ?>" name="nonce">
        <div class="control-group">
            <div class="controls">
                <div class="input-prepend">
                    <span class="add-on" for="inputEmail">Email</span>
                        <input type="email" id="inputEmail" placeholder="someone@example.com" name="email" required="">
                </div>
            </div>
        </div>

        <div class="control-group">
            <div class="controls">
                <div class="input-prepend">
                    <span class="add-on" for="username">Username</span>
                        <input type="text" id="username" placeholder="username" name="username" min="6" max="20" required="">
                </div>
            </div>
        </div>

        <div class="control-group">
            <div class="controls">
                <div class="input-prepend">
                    <span class="add-on" for="password">Password</span>
                        <input type="password" id="password" placeholder="Password" name="password1" min="6" max="12" required="">
                </div>
            </div>
        </div>

        <div class="control-group">
            <div class="controls">
                <div class="input-prepend">
                    <span class="add-on" for="passwordc">Confirm Password</span>
                        <input type="password" id="passwordc" placeholder="Re-type password" name="password2" min="6" max="12" required="">
                </div>
            </div>
        </div>

        <div class="control-group">
            <div class="controls">
                <div class="control-group">
                    <button type="submit" class="btn btn-primary" id="register-submit-btn">Create Account</button>
                </div>
            </div>
        </div>
    </fieldset>
</form>
</div>