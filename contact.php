<?php
    //load main.php
    require "../main.php";

    //load captcha.php
    require "includes/captcha.php";
?>
<!doctype html>
<html lang="nl-NL" class="contactPage">
    <head>
        <title>Contact - Ruben de Ruijter</title>
        <?php require "../head.php"; ?>
    </head>
    <body>
        <?php require "../preloader.php"; ?>
        <?php require "../navigation.php"; ?>
        <section class="section sectionPrimary onlySection">
            <div class="txtCenter">
                <div class="sectionTitleContainer">
                    <h1 class="sectionTitle">Contact</h1>
                </div>
            </div>
            <div class="innerSection">
                <div class="wrapper">
                    <div class="row animatedContainer">
                        <div class="column50 animationSlideLeft">
                            <div class="form">
                                <div id="status"></div>
                                <?php
                                $csrfToken = bin2hex(openssl_random_pseudo_bytes(32));
                                $_SESSION['csrfToken'] = $csrfToken;
                                ?>
                                <input type="text" id="name" class="inputField" placeholder="Naam*" />
                                <input type="email" id="email" class="inputField" placeholder="E-mailadres*" />
                                <input type="text" id="subject" class="inputField" placeholder="Onderwerp*" />
                                <textarea type="msg" id="msg" rows="5" class="inputField" placeholder="Bericht*"></textarea>
                                <div class="subColumns">
			                        <img src="img/captchaImg.php" alt="CAPTCHA" class="captchaImg" id="captchaImg" />
                                    <button class="primaryBtn captchaReloadBtn" id="captchaReloadBtn"><span class="material-icons">refresh</span></button>
                                </div>
			                    <input type="text" class="inputField" id="captcha" placeholder="CAPTCHA*" />
			                    <input type="hidden" id="invisibleField" />
                                <button class="primaryBtn" id="submitContactFormBtn">Verzenden</button>
			                    <input type="hidden" id="csrfToken" value="<?php echo $csrfToken; ?>" />
                            </div>
                        </div>
                        <div class="column50 animationSlideRight">
                            <a href="mailto:info@rubenderuijter.nl" target="_blank" rel="noopener" class="tile txtCenter">
                                <i class="material-icons">email</i>
                                <h2 class="title">info@rubenderuijter.nl</h2></a>
                            </a>
                            <a href="#locatie" class="tile txtCenter">
                                <i class="material-icons">location_on</i>
                                <h2 class="title">Hellevoetsluis, Zuid-Holland</h2></a>
                            </a>
                            <a href="https://www.linkedin.com/in/ruben-de-ruijter/" target="_blank" rel="noopener" class="tile txtCenter">
                                <i class="fab fa-linkedin"></i>
                                <h2 class="title">Ruben de Ruijter</h2></a>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <iframe class="openstreetmap" id="locatie" width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=3.041839599609375%2C51.47111882613948%2C4.854583740234376%2C52.21265572004473&amp;layer=mapnik&amp;marker=51.83641395142784%2C4.131031036376953"></iframe>
        <?php require "../footer.php"; ?>
    </body>
</html>