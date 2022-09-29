<nav class="nav">
    <div class="topdiv">
        <!--<a href="#" class="homebutton"><img class="logoimg" src="assets/oie_0XS8ZpJxNDWx75.png"></a>-->
        <a class="homebutton" href="#"><h2 class="logotext1">Framtiden Inc.</h2><h2 class="logotext2">⋒</h2><h2 class="logotext3">Framtiden är imorgon, sov tills dess.</h2></a>
        <?php
        if (isset($_SESSION["userUid"])) {  //checking if there is a user logged in
            echo "<li><a href=\"profile.php\">" . ucfirst($_SESSION["userUid"]) . "</a></li>"; //ucfirst = versal som första
            echo "<li><a href=\"includes/logout.inc.php\"><button style='width: auto; margin: 1rem;'>Logga ut</button></a></li>";
        }
        else {
            include_once 'notloggedin.php';
        }
        ?>
    </div>

    <div class="navdiv">
        <a href="">
            <div><p>1</p></div>
        </a>
        <a href="">
            <div><p>2</p></div>
        </a>
        <a href="">
            <div><p>3</p></div>
        </a>
        <a href="">
            <div><p>4</p></div>
        </a>
    </div>
</nav>
<div class="sidebar" id="sideBar" style="height: 0; display: none;"></div>