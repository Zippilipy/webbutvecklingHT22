<div class='topdiv'>
    <a class='homebutton' href='#'><h2 class='logotext1'>Framtiden Inc.</h2><h2 class='logotext2'>⋒</h2><h2 class='logotext3'>Framtiden är imorgon, sov tills dess.</h2></a>
<!-- Button to open the modal login form -->
<div class="logindiv"><img onclick="toggleLogIn()" class="avatarbutton" src="assets/th-3077032434.jpg" height="20px"><button onclick="document.getElementById('id02').style.display='block'" style="width: auto; margin: 1rem;">Register</button><button onclick="document.getElementById('id01').style.display='block'" style="width: auto; margin: 1rem;">Login</button></div>
<!-- The Modal -->
<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'"
        class="close" title="Close Modal">&times;</span>

    <!-- Modal Content -->
    <form class="modal-content animate" action="includes/signup.inc.php" method="post">

        <div class="container">
            <h2 class="registerh2">Register</h2>

            <label for="email"><b>Email</b>
                <input type="text" placeholder="Enter Email" name="email" required></label>

            <label for="uid"><b>Username</b>
                <input type="text" placeholder="Enter Username" name="uid" required></label>

            <label for="pwd"><b>Password</b>
                <input type="password" placeholder="Enter Password" name="pwd" required></label>

            <label for="pwdrepeat"><b>Confirm password</b>
                <input type="password" placeholder="Enter Password" name="pwdrepeat" required></label>

            <button type="submit" name="submit">Register</button>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
    </form>
</div>


<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
        class="close" title="Close Modal">&times;</span>

    <!-- Modal Content -->
    <form class="modal-content animate" action="includes/login.inc.php" method="post">
        <div class="imgcontainer">
            <img src="img_avatar2.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="logemail"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="logemail" required>

            <label for="logpwd"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="logpwd" required>

            <button type="submit" name="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>
</div>
<div class="loginorregister" id="loginorRegister" style="height: 15%; display: none;"><button class="loginbutton" onclick="document.getElementById('id01').style.display='block'" style="width: auto; margin: 1rem;">Login</button><button class="registerbutton"onclick="document.getElementById('id02').style.display='block'" style="width: auto; margin: 1rem;">Register</button></div>
