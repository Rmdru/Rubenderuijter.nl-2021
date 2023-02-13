<?php
    //load main.php
    require "../main.php";
?>
<!doctype html>
<html lang="nl-NL" class="homePage">
    <head>
        <title>Home - Ruben de Ruijter</title>
        <?php require "../head.php"; ?>
        <?php include "../metaTags.php"; ?>
    </head>
    <body>
        <?php require "../preloader.php"; ?>
        <?php require "../navigation.php"; ?>
        <!--landingPage-->
        <header class="landingPage particlesJs" id="home">
            <div class="centeredContainer">
                <h1 class="landingPageTitle" id="landingPageTitle"></h1>
                <h3 class="landingPageSubTitle" id="landingPageSubTitle"></h3>
                <div class="btnGroup">
                    <a class="primaryBtn opacityZero" href="/portfolio"><span class="material-icons">work</span> Portfolio</a>
                    <a class="primaryBtn opacityZero" target="_blank" rel="noopener" href="https://www.linkedin.com/in/ruben-de-ruijter/"><span class="fab fa-linkedin"></span> Linkedin</a>
                    <a class="primaryBtn opacityZero" target="_blank" rel="noopener" href="https://github.com/Rmdru"><span class="fab fa-github"></span> GitHub</a>
                </div>
            </div>
            <a href="#overMij" class="scrollDownBtn" id="scrollDownBtn"><i class="material-icons scrollDownBtnIcon">keyboard_arrow_down</i></a>
        </header>
        <!--about me-->
        <section id="overMij" class="section sectionSecondary">
            <div class="sectionTitleContainer">
                <h2 class="sectionTitle">Over mij</h2>
            </div>
            <div class="row90 animatedContainer">
                <div class="column column70 columnLeft animationSlideLeft">
                    <div class="txtBox">
                        <p class="txt">Hallo, mijn naam is Ruben de Ruijter, een gepassioneerde Full-stack Developer. Ik ben <?php echo $age; ?> jaar, en woon in Hellevoetsluis. Ik doe de opleiding Assiocate Degree Software Development op de Hogeschool Rotterdam. Ook werk ik bij Miniworld Rotterdam en Studentaanhuis. Naast mijn werk en school ben ik ook erg geïnteresseerd in de ICT wereld en programmeer ik regelmatig.</p>
                        <a href="/files/CV.pdf" target="_blank" rel="noopener" class="primaryBtn"><span class="material-icons">work</span> Bekijk CV</a>
                    </div>
                </div>
                <div class="column column30 columnRight animationSlideRight">
                    <img src="img/rubenDeRuijter200x200.jpg" class="aboutMeImg" alt="Ruben de Ruijter" width="200" height="200" />
                </div>
            </div>
        </section>
        <!--education-->
        <section id="opleiding" class="section sectionPrimary">
            <div class="sectionTitleContainer">
                <h2 class="sectionTitle">Opleiding</h2>
            </div>
            <div class="timeline animatedContainer">
                <div class="container right animationSlideRight">
                    <div class="content">
                        <h2 class="title">Hogeschool Rotterdam</h2>
                        <p class="txt"><b>2022 t/m heden<br /><br />Opleiding:</b> Associate Degree Software Development<br /><br /><b>Niveau:</b> HBO Niveau 5</p>
                        <a class="primaryBtn animated fullWidth" rel="noopener" target="_blank" href="https://www.hogeschoolrotterdam.nl/opleidingen/associate-degree/software-development/voltijd/">Meer informatie <i class="material-icons">keyboard_arrow_right</i></a>
                    </div>
                </div>
                <div class="container left animationSlideLeft">
                    <div class="content">
                        <h2 class="title">Grafisch Lyceum Rotterdam</h2>
                        <p class="txt"><b>2019 t/m 2022<br /><br />Opleiding:</b> Mediatechnologie<br /><br /><b>Niveau:</b> MBO Niveau 4<br /><br /><b>Specialisatie:</b> Applicatie- en mediaontwikkelaar<br /><br /><b>Keuzedeel:</b> Special input/output<br /><br /><b>Gemiddeld cijfer van alle leerlijnen:</b> 7,9<br /><br />Op deze opleiding leer ik vooral websites bouwen en programmeren. Ik leer op mijn opleiding onder andere CRUD applicaties bouwen, dus bijvoorbeeld reserveringsystemen, loginsystemen en webshops.<br /><br /><i class="material-icons">check</i> Diploma behaald</b></p>
                        <a class="primaryBtn animated fullWidth" rel="noopener" target="_blank" href="https://www.glr.nl/mbo/opleidingen/mediatechnologie/software-developer">Meer informatie <i class="material-icons">keyboard_arrow_right</i></a>
                    </div>
                </div>
                <div class="container right animationSlideRight">
                    <div class="content">
                        <h2 class="title">Bahûrim</h2>
                        <p class="txt"><b>2015 t/m 2019<br /><br />Niveau: MAVO<br /><br /><i class="material-icons">check</i> Diploma behaald</b></p>
                        <a class="primaryBtn animated fullWidth" rel="noopener" target="_blank" href="https://bm.penta.nl/">Meer informatie <i class="material-icons">keyboard_arrow_right</i></a>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!--work experience-->
        <section id="werkervaring" class="section sectionSecondary">
            <div class="sectionTitleContainer">
                <h2 class="sectionTitle">Werkervaring</h2>
            </div>
            <div class="timeline animatedContainer">
                <div class="container left animationSlideLeft">
                    <div class="content">
                        <h2 class="title">Miniworld Rotterdam</h2>
                        <p class="txt"><b>April 2022 t/m heden<br /><br />Functie:</b> Operator<br /><br /><b>Dienstverband:</b> Parttime<br /><br />Als Operator hou ik de miniatuurwereld in beweging door storingen van treinen en auto's te verhelpen. Ook start ik de attractie op en sluit ik die weer af.</p>
                        <a class="primaryBtn animated fullWidth" rel="noopener" target="_blank" href="https://www.miniworldrotterdam.com/">Meer informatie <i class="material-icons">keyboard_arrow_right</i></a>
                    </div>
                </div>
                <div class="container right animationSlideRight">
                    <div class="content">
                        <h2 class="title">Studentaanhuis</h2>
                        <p class="txt"><b>Oktober 2019 t/m heden<br /><br />Functie:</b> IT specialist<br /><br /><b>Dienstverband:</b> Parttime<br /><br /><b>Gemiddelde beoordeling:</b> 4,5 ster<br /><br /><b>Aantal tevreden klanten:</b> Meer dan 100<br /><br />Als IT specialist kom ik bij mensen thuis om hun te helpen met hun computers, smartphones, tablets en andere digitale apparaten. Ik los problemen op, beantwoord vragen en geef onafhankelijk en vrijblijvend advies.</p>
                        <a class="primaryBtn animated fullWidth" rel="noopener" target="_blank" href="https://www.studentaanhuis.nl/">Meer informatie <i class="material-icons">keyboard_arrow_right</i></a>
                    </div>
                </div>
                <div class="container left animationSlideLeft">
                    <div class="content">
                        <h2 class="title">PADDAP</h2>
                        <p class="txt"><b>September 2021 t/m April 2022<br /><br />Functie:</b> Front-end Developer<br /><br /><b>Dienstverband:</b> Stage<br /><br />Als stagiair pas ik mijn kennis en kunde toe om het development team van A tot Z te ondersteunen. Hierbij ligt mijn voornaamste bezigheid bij Front-end Development. Het proces waarin een design wordt omgezet naar een goed functionerende applicatie vind ik prachtig om te zien.</p>
                        <a class="primaryBtn animated fullWidth" rel="noopener" target="_blank" href="https://www.paddap.nl/">Meer informatie <i class="material-icons">keyboard_arrow_right</i></a>
                    </div>
                </div>
                <div class="container right animationSlideRight">
                    <div class="content">
                        <h2 class="title">Bouwman Reclameverspreiding</h2>
                        <p class="txt"><b>November 2017 t/m september 2019<br /><br />Functie:</b> Krantenbezorger<br /><br /><b>Dienstverband:</b> Parttime</p>
                        <a class="primaryBtn animated fullWidth" rel="noopener" target="_blank" href="https://www.bouwman-reclame.nl/">Meer informatie <i class="material-icons">keyboard_arrow_right</i></a>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!--skills-->
        <section id="vaardigheden" class="section sectionPrimary">
            <div class="sectionTitleContainer">
                <h2 class="sectionTitle">Vaardigheden</h2>
            </div>
            <div class="skillCircles animationContainer">
                <div class="skillCircle animationLoadSkillCircle">
                    <svg height="150" width="150" class="skillCircleSvg">
                        <circle id="circleBg0" cx="75" cy="75" r="70" stroke-width="5"></circle>
                        <circle id="circleProgress0" cx="75" cy="75" r="70" stroke="#B30000" stroke-width="5"  stroke-dasharray="0,1000" fill="none"></circle>
                        <text x="50%" y="50%" text-anchor="middle" stroke="none" stroke-width="1px" dy=".3em" id="circlePercent0" class="title">0%</text>
                    </svg>
                    <p class="title">PHP</p>
                </div>
                <div class="skillCircle animationLoadSkillCircle">
                    <svg height="150" width="150" class="skillCircleSvg">
                        <circle id="circleBg1" cx="75" cy="75" r="70" stroke-width="5"></circle>
                        <circle id="circleProgress1" cx="75" cy="75" r="70" stroke="#B30000" stroke-width="5"  stroke-dasharray="0,1000" fill="none"></circle>
                        <text x="50%" y="50%" text-anchor="middle" stroke="none" stroke-width="1px" dy=".3em" id="circlePercent1" class="title">0%</text>
                    </svg>
                    <p class="title">JavaScript</p>
                </div>
                <div class="skillCircle animationLoadSkillCircle">
                    <svg height="150" width="150" class="skillCircleSvg">
                        <circle id="circleBg2" cx="75" cy="75" r="70" stroke-width="5"></circle>
                        <circle id="circleProgress2" cx="75" cy="75" r="70" stroke="#B30000" stroke-width="5"  stroke-dasharray="0,1000" fill="none"></circle>
                        <text x="50%" y="50%" text-anchor="middle" stroke="none" stroke-width="1px" dy=".3em" id="circlePercent2" class="title">0%</text>
                    </svg>
                    <p class="title">Python</p>
                </div>
                <div class="skillCircle animationLoadSkillCircle">
                    <svg height="150" width="150" class="skillCircleSvg">
                        <circle id="circleBg3" cx="75" cy="75" r="70" stroke-width="5"></circle>
                        <circle id="circleProgress3" cx="75" cy="75" r="70" stroke="#B30000" stroke-width="5"  stroke-dasharray="0,1000" fill="none"></circle>
                        <text x="50%" y="50%" text-anchor="middle" stroke="none" stroke-width="1px" dy=".3em" id="circlePercent3" class="title">0%</text>
                    </svg>
                    <p class="title">(S)CSS</p>
                </div>
            </div>
            <button class="primaryBtn" id="openSkillsBtn">Bekijk alle vaardigheden</button>
            <!--hidden skills window-->
            <div class="hiddenWindowBg" id="hiddenSkillsBg">
                <div class="closeHiddenWindow" id="closeHiddenSkillsWindow"></div>
                <div class="hiddenWindow">
                    <button class="primaryBtn closeBtn" id="closeSkillsBtn"><i class="material-icons">close</i></button>
                    <div class="sectionTitleContainer">
                        <h2 class="sectionTitle">Vaardigheden</h2>
                    </div>
                    <div class="hiddenWindowScrollablePart">
                        <div class="progressBarWrapper">
                            <div class="txtWrapper">
                                <p class="txt">PHP</p>
                                <p class="txt">75%</p>
                            </div>
                            <div class="progressBar">
                                <div class="progressBarProgress progressBarPercent75"></div>
                            </div>
                        </div>
                        <div class="progressBarWrapper">
                            <div class="txtWrapper">
                                <p class="txt">JavaScript</p>
                                <p class="txt">90%</p>
                            </div>
                            <div class="progressBar">
                                <div class="progressBarProgress progressBarPercent90"></div>
                            </div>
                        </div>
                        <div class="progressBarWrapper">
                            <div class="txtWrapper">
                                <p class="txt">Python</p>
                                <p class="txt">70%</p>
                            </div>
                            <div class="progressBar">
                                <div class="progressBarProgress progressBarPercent90"></div>
                            </div>
                        </div>
                        <div class="progressBarWrapper">
                            <div class="txtWrapper">
                                <p class="txt">(S)CSS</p>
                                <p class="txt">80%</p>
                            </div>
                            <div class="progressBar">
                                <div class="progressBarProgress progressBarPercent80"></div>
                            </div>
                        </div>
                        <div class="progressBarWrapper">
                            <div class="txtWrapper">
                                <p class="txt">HTML</p>
                                <p class="txt">95%</p>
                            </div>
                            <div class="progressBar">
                                <div class="progressBarProgress progressBarPercent90"></div>
                            </div>
                        </div>
                        <div class="progressBarWrapper">
                            <div class="txtWrapper">
                                <p class="txt">jQuery</p>
                                <p class="txt">85%</p>
                            </div>
                            <div class="progressBar">
                                <div class="progressBarProgress progressBarPercent85"></div>
                            </div>
                        </div>
                        <div class="progressBarWrapper">
                            <div class="txtWrapper">
                                <p class="txt">SQL</p>
                                <p class="txt">80%</p>
                            </div>
                            <div class="progressBar">
                                <div class="progressBarProgress progressBarPercent80"></div>
                            </div>
                        </div>
                        <div class="progressBarWrapper">
                            <div class="txtWrapper">
                                <p class="txt">JSON</p>
                                <p class="txt">90%</p>
                            </div>
                            <div class="progressBar">
                                <div class="progressBarProgress progressBarPercent90"></div>
                            </div>
                        </div>
                        <div class="progressBarWrapper">
                            <div class="txtWrapper">
                                <p class="txt">XML</p>
                                <p class="txt">90%</p>
                            </div>
                            <div class="progressBar">
                                <div class="progressBarProgress progressBarPercent90"></div>
                            </div>
                        </div>
                        <div class="progressBarWrapper">
                            <div class="txtWrapper">
                                <p class="txt">WordPress</p>
                                <p class="txt">70%</p>
                            </div>
                            <div class="progressBar">
                                <div class="progressBarProgress progressBarPercent70"></div>
                            </div>
                        </div>
                        <div class="progressBarWrapper">
                            <div class="txtWrapper">
                                <p class="txt">Git</p>
                                <p class="txt">70%</p>
                            </div>
                            <div class="progressBar">
                                <div class="progressBarProgress progressBarPercent70"></div>
                            </div>
                        </div>
                        <div class="progressBarWrapper">
                            <div class="txtWrapper">
                                <p class="txt">VMware</p>
                                <p class="txt">70%</p>
                            </div>
                            <div class="progressBar">
                                <div class="progressBarProgress progressBarPercent70"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA contact section-->
        <section id="contact" class="section sectionSecondary">
            <div class="sectionTitleContainer">
                <h2 class="title" id="ctaTypewriter"></h2>
            </div>
            <div class="btnGroup">
                <a class="primaryBtn" target="_blank" rel="noopener" href="https://www.linkedin.com/in/ruben-de-ruijter/"><span class="fab fa-linkedin"></span> Linkedin</a>
                <a class="primaryBtn" href="/contact"><span class="material-icons">mail</span> Contact</a>
            </div>
        <?php require "../footer.php"; ?>
    </body>
</html>