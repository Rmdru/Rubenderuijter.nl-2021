//preloader
$(window).on("load", function() {
    setTimeout(function() {
        $(".preloaderBg").fadeOut();
        typeWriter("landingPageTitle", "Ruben de Ruijter");
    }, 500);
})

//change navbar tabs with intersection observer api
if ($(".homePage").length > 0) {
    var sections = document.querySelectorAll(".landingPage, .section");
    var optionsIntersectionObserver = {
        rootMargin: "-50px 0px -55%"
    };
    var intersectionObserver = new IntersectionObserver(function(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                var id = entry.target.id;
                var oldActive = document.querySelector(".navbar .navbarLinksContainer .navbarLink.navbarLinkActive");
                var newActive = document.querySelector(".navbar .navbarLinksContainer .navbarLink[data-ref=" + id + "]");
    
                if (oldActive) {
                    oldActive.classList.remove("navbarLinkActive");
                }
                if (newActive) {
                    newActive.classList.add("navbarLinkActive");
                }
            }
        });
    }, optionsIntersectionObserver);
    
    sections.forEach(section => {
        intersectionObserver.observe(section);
    })
}

//open and close hidden menu with animated hamburger icon
$(".hamburgerIcon, .hiddenMenuLink").on("click", function() {
    var hiddenMenu = $(".hiddenMenu");
    $("html").toggleClass("hamburgerOpen");

    if (hiddenMenu.hasClass("hiddenMenuOpened") == false) {
        if ($(window).width() < 1024) {
            hiddenMenu.css({"transform": "translateX(0px)", "border-width": "1px", "width": "100vw"});
        } else {
            hiddenMenu.css({"transform": "translateX(0px)", "border-width": "1px", "width": "25vw"});
        }
    } else {
        hiddenMenu.css({"transform": "translateX(-350px)", "border-width": "0px", "width": "0vw"});
    }
    hiddenMenu.toggleClass("hiddenMenuOpened");
});

//close hidden menu when mobile link is touched
$(".hiddenMenuLinks .mobileOnly a").on("click", function() {
    var hiddenMenu = $("#hiddenMenu");
    hiddenMenu.toggleClass("hiddenMenuOpened");
    hiddenMenu.css({"width": "0vw", "border-width": "0px"});
    hiddenMenu.toggleClass("hiddenMenuOpened");
    hiddenMenu.css({"width": "0vw", "border-width": "0px"});
})

//theme toggle
$(".themeToggleInput").on("change", function() {
    if ($(this).prop("checked") == true) {
        var theme = "light";
    } else {
        var theme = "dark";
    }
    $.ajax({
        url: "includes/changeTheme.php",
        method: "POST",
        data: {
            'theme': theme
        }
    })
    .done(function() {
        $("#themeCssLink").attr("href", "css/" + theme + "Theme.css");
    })
});

//type writer effect
var i = 0;
function typeWriter(element, txt) {
    var j = -1;
    var speed = 50;

    writeTxt();

    function writeTxt() {
        if (j < txt.length) {
            $("#" + element).append(txt.charAt(j));
            j++;
            setTimeout(writeTxt, speed);
            
            if (j == txt.length && i == 0) {
                i++;
                $.when(typeWriter("landingPageSubTitle", "Full-stack Developer")).then(function() {
                    $(".landingPage .centeredContainer .btnGroup .primaryBtn").each(function(i) {
                        transitionDelay = 1 + i * 0.5;
                        $(this).css("transition-delay", `${transitionDelay}s, 0s`);
                        $(this).css("opacity", "1");
                    })
                });
            }
        }
    }
}

//scroll down btn
$(window).on("scroll", function() {
    var scrollDownBtn = $("#scrollDownBtn");
    if ($(window).scrollTop() == 0) {
        scrollDownBtn.fadeIn();
    } else {
        scrollDownBtn.fadeOut();
    }
});

//slide animation with intersection observer api
var animatedContainer = document.querySelector(".animatedContainer");
var animatedContainerAll = document.querySelectorAll(".animatedContainer");
var optionsIntersectionObserver = {
    root: null,
    rootMargin: "0px",
    threshold: 0.2
};
var intersectionObserver = new IntersectionObserver(function(entries, observer) {
    entries.forEach(entry => {
        var el = entry.target;
        var animationSlideLeft = $(el).find(".animationSlideLeft");
        var animationSlideRight = $(el).find(".animationSlideRight");
        if (entry.isIntersecting) {
            animationSlideLeft.removeClass("animationSlideLeft");
            animationSlideRight.removeClass("animationSlideRight");
            animationSlideLeft.addClass("animationSlideLeftActivated");
            animationSlideRight.addClass("animationSlideRightActivated");
            if ($(el).find(".animationLoadSkillCircle")) {
                loadSkillCircles();
            }
        }
    });
}, optionsIntersectionObserver);

animatedContainerAll.forEach(animatedContainer => {
    intersectionObserver.observe(animatedContainer);
})

//animation load skill circle
function loadSkillCircles() {
    var values = [80, 90, 70, 85];
    $(values).each(function(index) {
        var progress = 0;
        var circleProgress = $("#circleProgress" + index);
        var txtPercentage = $("#circlePercent" + index);
        var inputPercentage;
        var percentage;
        var sleep = setInterval(animateCircle, 25);
        function animateCircle(percent = values[index]) {
            inputPercentage = (percent / 100) * 445;
            percentage = (progress / 100) * 445;
            txtPercentage.html(progress + '%');
            if (percentage >= inputPercentage) {
                clearInterval(sleep);
            } else {
                progress++;
                circleProgress.attr("stroke-dasharray", percentage + ',445');
            }
        }
    }) 
}

//toggle scroll
function toggleScroll() {
	$(document).on("scroll", function() {
        if ($("#hiddenSkillsBg").css("display") == "block") {
            $("*").css("scroll-behavior", "auto");
            $(document).scrollTop($(document).height());
        } else {
            $("*").css("scroll-behavior", "smooth");
        }
    });
}

//skills window toggle
$("#openSkillsBtn").on("click", function() {
    $("#hiddenSkillsBg").fadeIn("normal", loadProgressBars(), toggleScroll());
});
$("#closeSkillsBtn").on("click", function() {closeHiddenSkillsWindow()});
$("#closeHiddenSkillsWindow").on("click", function() {closeHiddenSkillsWindow()});

function closeHiddenSkillsWindow() {
    $("#hiddenSkillsBg").fadeOut("normal", toggleScroll());
}

//load progress bars
function loadProgressBars() {
    $("[class*='progressBarPercent']").each(function(i, element) {
        var percentClass = $(this).attr("class");
        var percent = percentClass.match(/\d+/);
        var percent = percent + "%";
        $(this).animate({width: percent});
    });
}

//generate random number
function generateRandomNumber() {
    var randomNumber = Math.floor(Math.random() * (5 - -5 + 1)) + -5;
    return randomNumber;
}

//destroy 404 page
setTimeout(function() {
    destroyImg();
}, 1500);

function destroyImg() {
    $(".brokenImg").css("transform", "rotate(180deg) translateY(-120px)");
    setTimeout(function() {
        destroyTxt();
    }, 1000);
}

function destroyTxt() {
    $(".brokenTxtChar").each(function(i, element) {
        if ($(element).text() == "0") {
            $(element).css({"transform": "rotate(180deg) translateY(-15px)", "transition": "1s", "transition-timing-function": "ease", "letter-spacing": "5px"});
        } else {
            $(element).css("transform", "rotate(" + generateRandomNumber() + "deg) translateY(" + generateRandomNumber() + "px)");
        }
    })
    setTimeout(function() {
        destroyBtn();
    }, 1000);
}

function destroyBtn() {
    $(".brokenBtn").css("transform", "rotate(5deg) translateY(10px)");
}

//load portfolio items with ajax
if ($(".portfolioPage").length > 0) {
    $(window).on("load", function() {
        loadPortfolioItems("dateDesc");
    })
}

$("#sortPortfolioItems").on("change", function() {
    $("#portfolioItems").fadeOut();
    setTimeout(function() {
        loadPortfolioItems($("#sortPortfolioItems").val());
    }, 400)
})

//open requested portfolio item
function openRequestedPortfolioItem() {
    if ($(".portfolioPage").length > 0) {
        $(".portfolioItems .tile").each(function() {
            var popupUrl = $(this).data("url");
            var url = window.location.hash;
            url = url.replace("#", "");
    
            if (popupUrl == url) {
                $(this).click();
            }
        })
        
    }
}

//load portfolio items
function loadPortfolioItems(sortBy) {
    var output = "";
    $.getJSON("includes/loadPortfolioItems.php?sortBy=" + sortBy, function(data) {
        for (var i in data) {
            var uuid = data[i].uuid;
            var name = data[i].name;
            var shortDescription = data[i].shortDescription;
            var dateFinished = data[i].dateFinishedFormatted;
            if (dateFinished == null) {
                dateFinished = "in ontwikkeling";
            }
            var result = data[i].result;
            if (result == null) {
                result = "geen schoolopdracht";
            }
            result = result.replace(".", ",");
            var onclickEvent = 'openPortfolioItemWindow("' + uuid + '");';
            var popupUrl = data[i].popupUrl;

            output += "<div class='tile' onclick='" + onclickEvent + "' data-url='" + popupUrl + "'>";
                output += "<img src='img/" + uuid + ".jpg' class='portfolioItemImg' alt='" + name + "' />";
                output += "<h2 class='title'>" + name + "</h2>";
                output += "<p class='txt'>" + shortDescription + "</p>";
                if (sortBy == "dateDesc" || sortBy == "dateAsc") {
                    output += "<p class='txt'>Datum project afgerond: " + dateFinished + "</p>";
                } else if (sortBy == "resultDesc" || sortBy == "resultAsc") {
                    output += "<p class='txt'>Cijfer: " + result + "</p>";
                }
                output += "<button class='primaryBtn portfolioItemBtn'>Bekijk dit project</button>";
            output += "</div>";
        }
        $("#portfolioItems").html(output);
        $("#portfolioItems").fadeIn();
        openRequestedPortfolioItem();
    })
}

//load portfolio item detail window when user clicks on a project
function openPortfolioItemWindow(uuid) {
    var output = "";
    $.getJSON("includes/loadPortfolioItemDetail.php?uuid=" + uuid, function(data) {
        var popupUrl = data[0].popupUrl;
        history.pushState({}, "", "#" + popupUrl);
        for (var i in data) {
            var uuid = data[i].uuid;
            var name = data[i].name;
            var linkType = data[i].linkType;
            if (linkType == 1) {
                var link = name.replace(/[&\/\\#,+()$~%.'":*?<>{}]/, "");
                link = link.replace(/ /g, "-");
                link = link.toLowerCase();
                link = "/portfolio-item/" + link;
            } else if (linkType == 2) {
                var link = data[i].link;
            }
            var status = data[i].status;
            if (status == 1) {
                status = "afgerond";
            } else {
                status = "in ontwikkeling";
            }
            var dateFinished = data[i].dateFinishedFormatted;
            var suitableForDesktop = data[i].suitableForDesktop;
            if (suitableForDesktop == 1) {
                suitableForDesktopIcon = "<i class='material-icons'>check</i>";
            } else {
                suitableForDesktopIcon = "<i class='material-icons'>close</i>";
            }
            var suitableForMobile = data[i].suitableForMobile;
            if (suitableForMobile == 1) {
                suitableForMobileIcon = "<i class='material-icons'>check</i>";
            } else {
                suitableForMobileIcon = "<i class='material-icons'>close</i>";
            }
            var schoolAssignment = data[i].schoolAssignment;
            if (schoolAssignment == 1) {
                schoolAssignmentIcon = "<i class='material-icons'>check</i>";
            } else {
                schoolAssignmentIcon = "<i class='material-icons'>close</i>";
            }
            var groupAssignment = data[i].groupAssignment;
            if (groupAssignment == 1) {
                groupAssignmentIcon = "<i class='material-icons'>check</i>";
            } else {
                groupAssignmentIcon = "<i class='material-icons'>close</i>";
            }
            var result = data[i].result;
            if (result != null) {
                result = result.replace(".", ",");
            }
            var technicsAndSkillsUsed = data[i].technicsAndSkillsUsed;
            var description = data[i].description;
            var linkType = data[i].linkType;
            var githubLink = data[i].githubLink;
            
            $("#portfolioItemTitle").html(name);
            output += "<div class='btnGroup'>";
                if ((linkType != 0) && (suitableForDesktop == 1 && $(window).width() > 1024 || suitableForMobile == 1 && $(window).width() < 1024)) {
                    output += "<a class='primaryBtn' href='" + link + "' target='_blank' rel='noopener'>Bekijk project</a>";
                }
                if (githubLink != "") {
                    output += "<a class='primaryBtn' href=" + githubLink + " target='_blank' rel='noopener'>Bekijk de GitHub repository</a>";
                }
            output += "</div>";
            output += "<div class='shareGroup'>";
                output += "<p class='txt'><span class='material-icons'>share</span> Delen: </p>";
                output += "<a onclick='copyLink()' data-url='https://rubenderuijter.nl/portfolio#" + popupUrl + "'><span class='material-icons'>link</span></a>";
                output += "<a target='_blank' rel='noopener' href='https://www.linkedin.com/cws/share?url=https://rubenderuijter.nl/portfolio#" + popupUrl + "'><span class='fab fa-linkedin'></span></a>";
                output += "<a target='_blank' rel='noopener' href='mailto:?body=https://rubenderuijter.nl/portfolio#" + popupUrl + "'><span class='material-icons'>email</span></a>";
                output += "<a target='_blank' rel='noopener' href='https://wa.me/?text=https://rubenderuijter.nl/portfolio#" + popupUrl + "'><span class='fab fa-whatsapp'></span></a>";
                output += "<a target='_blank' rel='noopener' href='http://www.facebook.com/sharer/sharer.php?u=https://rubenderuijter.nl/portfolio#" + popupUrl + "'><span class='fab fa-facebook'></span></a>";
                output += "<a target='_blank' rel='noopener' href='https://twitter.com/intent/tweet?url=https://rubenderuijter.nl/portfolio#" + popupUrl + "'><span class='fab fa-twitter'></span></a>";
                if (navigator.share) {
                    output += "<a id='shareOther' target='_blank' rel='noopener' data-url='https://rubenderuijter.nl/portfolio#" + popupUrl + "'><span class='material-icons'>more_horiz</span></a>";
                }
            output += "</div>";
            output += "<p class='txt'><b>Status:</b> " + status + "<br />";
            if (dateFinished != null) {
                output += "<b>Datum project afgerond:</b> " + dateFinished + "<br />";
            }
            output += "<b>Geschikt voor desktops:</b> " + suitableForDesktopIcon + "<br />";
            output += "<b>Geschikt voor mobiele apparaten:</b> " + suitableForMobileIcon + "<br />";
            output += "<b>Schoolproject:</b> " + schoolAssignmentIcon + "<br />";
            output += "<b>Groepsproject:</b> " + groupAssignmentIcon + "<br />";
            if (result != null) {
                output += "<b>Beoordeling:</b> " + result + "<br />";
            }
            output += "<b>Gebruikte vaardigheden en technieken:</b> " + technicsAndSkillsUsed + "<br />";
            if (description != "") {
                output += "<b>Beschrijving:</b> " + description + "<br />";
            }
            output += "<img src='img/" + uuid + ".jpg' class='portfolioItemDetailImg' alt='" + name + "' />";
        }
        $("#portfolioItemDetail").html(output);
        $("#hiddenPortfolioItemBg").fadeIn();
    })
}

$(document).on("click", "#shareOther", function() {
    var url = $(this).data("url");
    navigator.share({
        url: url
    })
})

$("#closePortfolioItemBtn").on("click", function() {closeHiddenPortfolioItemWindow()});
$("#closeHiddenPortfolioItemWindow").on("click", function() {closeHiddenPortfolioItemWindow()});

function closeHiddenPortfolioItemWindow() {
    history.pushState({}, "", "#");
    $("#hiddenPortfolioItemBg").fadeOut();
}

//validate and submit contact form with ajax
$("#submitContactFormBtn").on("click", function() {
    var error = "";
    var csrfToken = $("#csrfToken").val();
    var name = $("#name").val();
    var emailPattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var email = $("#email").val();
    var subject = $("#subject").val();
    var msg = $("#msg").val();
    var captcha = $("#captcha").val();
    var invisibleField = $("#invisibleField").val();

    if (name == "") {
        error += "<span class='material-icons'>close</span> Vul een naam in!<br />";
    }

    if (!emailPattern.test(email)) {
        error += "<span class='material-icons'>close</span> Vul een geldig e-mailadres in!<br />";
    }

    if (subject == "") {
        error += "<span class='material-icons'>close</span> Vul het onderwerp in!<br />";
    }

    if (msg == "") {
        error += "<span class='material-icons'>close</span> Vul een bericht in!<br />";
    }

    if (msg.search("http") != -1) {
        error += "<span class='material-icons'>close</span> Je mag geen linkjes plaatsen in je bericht!<br />";
    }

    if (captcha == "") {
        error += "<span class='material-icons'>close</span> Vul de CAPTCHA in!<br />";
    }

    if (error == "") {
        $.ajax({
            url: "includes/contactForm.php",
            method: "POST",
            data: {
                'csrfToken': csrfToken,
                'name': name,
                'email': email,
                'subject': subject,
                'msg': msg,
                'captcha': captcha,
                'invisibleField': invisibleField
            }
        })
        .done(function(data) {
            if (data == "success") {
                $("#status").html("<p class='txt success'><i class='material-icons'>check</i> Contactformulier succesvol verzonden!</p>");
            } else {
                $("#status").html("<p class='txt error'><i class='material-icons'>close</i> Er is iets fout gegaan! Probeer te pagina te herladen en vul vervolgens de velden correct in!</p>");
            }
        })
    } else {
        $("#status").html("<p class='txt error'>" + error + "</p>");
    }
    $("#captcha").val("");
    $("#captchaImg").attr("src", "img/captchaImg.php");
})

$("#captchaReloadBtn").on("click", function() {
    $("#captchaImg").fadeOut();
    setTimeout(function() {
        $.ajax({
            url: "includes/captcha.php",
            method: "POST"
        })
        .done(function() {
            $("#captchaImg").attr("src", "img/captchaImg.php");
        }) 
    }, 500);
    $("#captchaImg").fadeIn();
})

//particles.js
if ($(".homePage header.particlesJs").length > 0) {
    particlesJS("home", {"particles":{"number":{"value":60,"density":{"enable":true,"value_area":800}},"color":{"value":"#808080"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#808080","opacity":0.4,"width":1},"move":{"enable":true,"speed":3,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"repulse"},"onclick":{"enable":false,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});
}

//show notification
function showNotification() {
    $("html").addClass("showNotification");
    setTimeout(function() {
        $("html").removeClass("showNotification");
    }, 3000);
}

$(function() {
    $(document).on('click', '.checkbox label', function(e){
        if(e.target.tagName == 'LABEL') {
          $(this).parent().toggleClass('checked');
        }
    });
});

//copy link
function copyLink() {
    var url = $(this).data("url");
    navigator.clipboard.writeText(url);
    $(".notification").html("<p class='primaryTxt'><span class='material-icons'>check</span> Link succesvol gekopieerd!</p>");
    showNotification();
}

//CTA typewriter
var ctaTypewriterEl = document.getElementById("ctaTypewriter");

var ctaTypewriter = new Typewriter(ctaTypewriterEl, {
    loop: true,
    cursor: "",
    delay: 30
});

ctaTypewriter.typeString("Heeft u <span class='highlighted'>interesse</span>?<br />Kom in <span class='highlighted'>contact</span>.")
    .pauseFor(5000)
    .deleteAll()
    .typeString("Opzoek naar een <span class='highlighted'>Software Developer</span>?<br />Ontdek wat ik voor je kan <span class='highlighted'>betekenen</span>.")
    .pauseFor(5000)
    .deleteAll()
    .typeString("Heeft u een <span class='highlighted'>applicatie</span> nodig?<br />Ontdek wat ik voor je kan <span class='highlighted'>doen</span>.")
    .pauseFor(5000)
    .start();