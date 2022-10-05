<div class='topdiv'>
    <a class='homebutton' href='#'>
        <h2 class='logotext1'>Framtiden Inc.</h2>
        <h2 class='logotext2'>⋒</h2>
        <h2 class='logotext3'>Framtiden är imorgon, sov tills dess.</h2>
    </a>
        <?php echo "<div class='userandbutton'><li class='name'><a class='user' onclick=\"selectModal('id03', 'block')\">" . ucfirst($_SESSION["userUid"]) . "</a></li>"; //ucfirst = versal som första ?>
        <li class='logoutbutton'><a href="includes/logout.inc.php">
                <button style='width: auto; margin: 1rem;'>Logga ut</button>
            </a></li>
    </div>
</div>
<div id="id03" class="modal">
  <span onclick="document.getElementById('id03').style.display='none'"
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
            <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>
