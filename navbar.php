<nav class="navbar navbar-light main-nav" data-toggle="collapse" style="background-color: white;">
    <div class="container mynav">
        <ul class="nav navbar-nav">
            <li class="nav-item"><a href="index.php" id="home" style="color:black!important;
">Домой</a></li>
            <li class="nav-item"><a href="ads.php" style="color:black!important;">Просмотр рекламы</a></li>
            <li class="nav-item"><a href="profile.php" style="color:black!important;">Профиль</a></li>
            <!-- <li class="nav-item"><a href="./dating/pvt/admin/staff.php"style="color:black!important;
">Знайомства</a></li> -->
            <?php if (isset($_SESSION['userName'])) {
                echo '<li class="nav-item"><a href="./logout.php"style="color:black!important;">Выйти</a></li>';
            } else {
            } ?>
        </ul>
        <!--                This Logo Set "transtext" is shown on navbar in desktop and will be hidden but replaced with a second set below when in mobile.-->
        <div class="transtext text-center">
            <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@900&display=swap" rel="stylesheet">
            <a class="navbar-brand p-0 text-center" href="#"><span class="" style="color:rgb(16,8,255)!important; text-shadow: 2px 1px
                                    2px white;
">Montreal</span><span class="" style="color:rgb(236, 217, 55)!important;text-shadow: 2px 1px
                                    2px gray;

">ovka</span></a><br>
            <div class="logoguide text-right" style="font-size: .75em;  font-style: italic; margin-left:-1em; margin-top:0;
                                     padding:0; color: black">
                Український Хаб
                &nbsp<i class="fas fa-fire text-warning flameglow" style="text-shadow:1px 1px black"></i></div>
        </div>
        <!--                This Logo Set is "transtext" shown on navbar in desktop and will be hidden but replaced with a second set below when in mobile.-->
    </div>
</nav>
</div>