<?php
    //load main.php
    require "../main.php";
?>
<!doctype html>
<html lang="nl-NL" class="portfolioPage">
    <head>
        <title>Portfolio - Ruben de Ruijter</title>
        <?php require "../head.php"; ?>
    </head>
    <body>
        <?php require "../preloader.php"; ?>
        <?php require "../navigation.php"; ?>
        <div class="notification"></div>
        <section class="section sectionPrimary onlySection">
            <div class="txtCenter">
                <div class="sectionTitleContainer">
                    <h1 class="sectionTitle">Portfolio</h1>
                </div>
            </div>
            <div class="innerSection">
                <div class="wrapper">
                    <!--sort by-->
                    <p class="txt displayInline">Sorteren op:</p>
                    <select id="sortPortfolioItems" class="inputField material-icons displayInline">
                        <option value="dateDesc" selected>Datum nieuw - oud</option>
                        <option value="dateAsc">Datum oud - nieuw</option>
                        <option value="nameAsc">A - Z</option>
                        <option value="nameDesc">Z - A</option>
                    </select>
                    <div id="portfolioItems" class="portfolioItems row"></div>
                </div>
            </div>
        </section>
        <!--hidden portfolio item window-->
        <div class="hiddenWindowBg" id="hiddenPortfolioItemBg">
                <div class="closeHiddenWindow" id="closeHiddenPortfolioItemWindow"></div>
                <div class="hiddenWindow">
                    <button class="primaryBtn closeBtn" id="closePortfolioItemBtn"><i class="material-icons">close</i></button>
                    <div class="sectionTitleContainer">
                        <h2 class="sectionTitle" id="portfolioItemTitle"></h2>
                    </div>
                    <div class="hiddenWindowScrollablePart">
                        <div id="portfolioItemDetail"></div>
                    </div>
                </div>
            </div>
        </div>
        <?php require "../footer.php"; ?>
    </body>
</html>