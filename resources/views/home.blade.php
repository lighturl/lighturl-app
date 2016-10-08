<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="keywords" content="1shortener,url-shortener,url,cms"/>
    <meta name="description" content="LightURL -lighten to your long url-" />
    <title>LightURL -lighten to your long url-</title>
    <link rel="stylesheet" href="css/foundation.css"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Covered+By+Your+Grace' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Cabin+Sketch' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/clipboard.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>
<body>
<div class="empty-space large-12 large-centered"><span class="subtitle"></span><br><br>Always <span
            class="title"></span>
</div>
<form action="#">
    <div class="row search">
        <div class="container large-offset-1 large-10 large-centered columns">
            <div class="input large-8 columns">
                <input class="light-url" type="url" placeholder="Paste and lighten to your long url" autocomplete="off"
                       autocorrect="off" autocapitalize="off" required/>
            </div>
            <div class="btn large-3 left columns">
                <div class="button-text">Get LightURL</div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="statusShow large-8 large-offset-2" id="status">
            <div class="row">
                <div class="large-12 columns">
                    <div class="row collapse">
                        <div class="small-10 columns">
                            <input type="url" id="statusSuccessMsg" readonly>
                        </div>
                        <div class="small-2 columns">
                            <button data-copytarget="#statusSuccessMsg" id="btnCopy" data-clipboard-action="copy"
                                    data-clipboard-target="#statusSuccessMsg" class="button postfix"><i
                                        class="fi-[icon]"></i>Copy
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</form>
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="js/app.js"></script>
<script src="js/typed.js"></script>
<script src="js/clipboard.min.js"></script>
<script>
    $(function () {
        //new Clipboard('#btnCopy');
        $(".title").typed({
            strings: ["Short", "Light"],
            // Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
            stringsElement: null,
            // typing speed
            typeSpeed: 0,
            // time before typing starts
            startDelay: 100,
            // backspacing speed
            backSpeed: 0,
            // time before backspacing
            backDelay: 2000,
            // loop
            loop: true,
            // false = infinite
            loopCount: 3,
            // show cursor
            showCursor: true,
            // character for cursor
            cursorChar: "|",
            // attribute to type (null == text)
            attr: null,
            // either html or text
            contentType: 'html',
            // call when done callback function
            callback: function () {
            },
            // starting callback function before each string
            preStringTyped: function () {
            },
            //callback for every typed string
            onStringTyped: function () {
            },
            // callback for reset
            resetCallback: function () {
            }
        });
    });
</script>
</body>
</html>
