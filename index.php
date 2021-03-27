    <!-- head -->
    <?php require("inc/head.php"); ?>
    <!-- navbar -->
    <?php require("inc/nav.php"); ?>

    <!-- header -->
    <?php require("inc/header.php");?>
    <!-- about gitmonitor -->

    <section class="section">
        <div class="section-main">
            <!-- about g-monitor -->
            <div class="g-about" id="g-about">
                <h3>What is G<span class="deco">-Monitor</span></h3>
                <div class="brbtm"></div>
                <p class="body">
                    G-Monitor as the name goes, it a web application which is use in monitoring and viewing of other github accounts displaying it in a well structured and nice layout by making use of the github api.
                </p>
                <p>
                    With G <span class="deco">-monitor</span>, registered users are able to View his/her github accounts stat containing some <small>graphical chats, repositories, Followers, Following and issues and also a task management web app, where users could add, delete, edit their own tasks.</small>
                </p>
            </div>
            <!-- why use g-monitor -->
            <div class="why-g" id="why-g">
                <h3>Why use G<span class="deco">-Monitor</span></h3>
                <div class="brbtm"></div>
                <br>
                <div class="boxes">
                    <div class="box">
                        <div class="icon-cont"><i class="fa fa-flash"></i></div>
                        <div class="head">
                            <p>Real Time Update</p>
                        </div>
                        <div class="cont">
                            <small>With g-monitor users will be able to get a realtime update of their account.</small>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon-cont"><i class="fa fa-envira"></i></div>
                        <div class="head">
                            <p>UI / UX</p>
                        </div>
                        <div class="cont">
                            <small>Experience the best interface using g-monitor.</small>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon-cont"><i class="fa fa-group"></i></div>
                        <div class="head">
                            <p>Social Connect</p>
                        </div>
                        <div class="cont">
                            <small>Connect with other users on github.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- feautures -->
        <div class="feautures">
            <div class="f-cont">
                <div id="f-head">
                    <h3>Feautures of G<span class="deco">-Monitor</span></h3>
                    <div class="brbtm"></div>
                </div>
                <div class="f-boxes"  id="f-boxes">
                    <div class="box">
                        <div class="main">
                            <div class="f-icon"><ion-icon name="timer-outline" class="fa"></ion-icon></div>
                            <br>
                            <br>
                            <div class="f-head">
                                <p>Realtime Update.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="main">
                            <div class="f-icon"><i class="fa fa-envira"></i></div>
                            <br>
                            <br>
                            <div class="f-head">
                                <p>UI / UX Experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="main">
                            <div class="f-icon"><ion-icon name="today-outline"></ion-icon></div>
                            <br>
                            <br>
                            <div class="f-head">
                                <p>Task Scheduler</p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="main">
                            <div class="f-icon"><i class="fa fa-group"></i></div>
                            <br>
                            <br>
                            <div class="f-head">
                                <p>Connect with others</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- creator -->
        <div id="about"></div>
        <div class="creator">
            <div class="creator-card">
                <div class="img" id="creator-img"></div>
                <div class="cont" id="creator-cont">
                    <h5>About G<span class="deco">-Monitor</span></h5>
                    <!-- <hr> -->
                    <div class="brbtm"></div>
                    <p>G-Monitor was created by Benaiah purposely with the aim of getting update from my account by not visiting my github account. This web application was built using <i>Php, Mysql, Javascript & github api. </i>For more info about me please considering visiting the link below at the footer section or considering contacting me by using the form below.</p>
                </div>
            </div>
        </div>

        <!-- contact form -->
        <div id="contact"></div>
        <div class="contact-form">
            <div id="contact-head">
                <h5>Contact G<span class="deco">-Monitor</span></h5>
                <div class="brbtm"></div>
            </div>
            <form action="#" id="contact-form" method="post" class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control mt-1">
                <label>Email</label>
                <input type="text" name="email" class="form-control mt-1">
                <label>Message</label>
                <textarea name="msg" id="" cols="30" rows="6" class="form-control mt-1"></textarea>

                <input type="submit" value="Send" name="submit" class="btn mt-2 btn-default btn-block">
            </form>
        </div>
    </section>


    <!-- footer -->
    <?php require("inc/footer.php");?>
</body>
</html>