<!--footer-->
<!--particles.js-->
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<!--typewriter.js-->
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<!--js files-->
<script src="js/script.js"></script>
<?php
//load theme if cookie isset otherwise set cookie with system preferred theme
if (isset($_COOKIE['theme'])) {
    $theme = $_COOKIE['theme'];
    echo "<link id='themeCssLink' href='css/{$theme}Theme.css' rel='stylesheet' type='text/css' />";
    if ($theme == "light") {
        echo "<script>$('.themeToggleInput').prop('checked', true);</script>";
    }
    setcookie("theme", $theme, time() + (86400 * 366), "/", "rubenderuijter.nl", true, true);
} else {
    echo "<link id='themeCssLink' rel='stylesheet' type='text/css' />";
    echo "<script>
    if (window.matchMedia('(prefers-color-scheme: light)').matches) {
        var theme = 'light';
        $('#themeCssLink').attr('href', 'css/lightTheme.css');
        $('.themeToggleInput').prop('checked', true);
    } else {
        var theme = 'dark';
        $('#themeCssLink').attr('href', 'css/darkTheme.css');
    }
    $.ajax({
        url: 'includes/changeTheme.php',
        method: 'POST',
        data: {
            'theme': theme
        }
    })
    </script>";
}
?>