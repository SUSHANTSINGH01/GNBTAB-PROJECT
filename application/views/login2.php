<html>
    <head>
        <!--<link rel="stylesheet" href="<?php //s echo base_url("assets/pagecss.css")?>">-->
        <link href="<?php echo base_url("assets/css/pagecss.css")?>" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
<div class="login-wrap">
    
	<div class="login-html">
                <?= $this->session->flashdata('msg');?> 
                <?= $this->session->flashdata('msg2');?>
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
                    <form class="sign-in-htm"  action="<?php echo site_url("construction/login")?>" method="post">
                <!--flashdata-->
                                                 
                        <div class="group">
                                <label for="user" class="label">Username</label>

                                <input id="uname" name="uname" type="text" class="input">
                        </div>
                        <div class="group">

                            <label for="pass" class="label">Password</label>

                            <input id="psw" name="psw" type="password" class="input" data-type="password">
                        </div>

                        <div class="group">
                                <input id="check" type="checkbox" class="check" checked>
                                <label for="check"><span class="icon"></span> Keep me Signed in</label>
                        </div>

                        <div class="group">
                            <input type="submit" class="button" value="Sign In">
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <a href="#forgot">Forgot Password?</a>
                        </div>
                    </form>
                    <form class="sign-up-htm" action="<?php echo site_url("construction/signup")?>" method="post">
                         
                        <div class="group">
                                <label for="user" class="label">Username</label>
                                <input id="user" name="user" type="text" class="input">
                        </div>
                        <div class="group">
                                <label for="pass" class="label">Password</label>
                                <input id="pass" name="pass" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                                <label for="pass" class="label">Repeat Password</label>
                                <input id="rpass" name="rpass" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                                <label for="pass" class="label">Email Address</label>
                                <input id="email" name="email" type="text" class="input">
                        </div>
                        <div class="group">
                                <input type="submit" class="button" value="Sign Up">
                        </div>

                        <div class="foot-lnk">
                                <label for="tab-1">Already Member?</a>
                        </div>
                    </form>
		</div>
	</div>
</div>
</body>
</html>