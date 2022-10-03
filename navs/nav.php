<nav class="nav">
        <?php
        if (isset($_SESSION["userUid"])) {  //checking if there is a user logged in
            echo "<div class='topdiv'><a class='homebutton' href='#'><h2 class='logotext1'>Framtiden Inc.</h2><h2 class='logotext2'>⋒</h2><h2 class='logotext3'>Framtiden är imorgon, sov tills dess.</h2></a>";
            echo "<div><li class='name'><a href=\"profile.php\">" . ucfirst($_SESSION["userUid"]) . "</a></li>"; //ucfirst = versal som första
            echo "<li class='logoutbutton'><a href=\"includes/logout.inc.php\"><button style='width: auto; margin: 1rem;'>Logga ut</button></a></li></div>";
            echo "</div>";
        }
        else {
            include_once 'notloggedin.php';
        }
            ?>

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