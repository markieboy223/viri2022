<!DOCTYPE html>
<html lang="en" xml:lang="en">
<head>
    <title>Viri</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="JMSoft-top">
    <div class="JMSoft-bar" id="myNavbar">
        <a class="JMSoft-bar-item JMSoft-button JMSoft-hover-black JMSoft-hide-medium JMSoft-hide-large JMSoft-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
            <i class="fa fa-bars"></i>
        </a>
        <a href="#home" class="JMSoft-bar-item JMSoft-button">HOME</a>
        <a href="#about" class="JMSoft-bar-item JMSoft-button JMSoft-hide-small"><i class="fa fa-user"></i> ABOUT</a>
        <a href="#portfolio" class="JMSoft-bar-item JMSoft-button JMSoft-hide-small"><i class="fa fa-th"></i> PORTFOLIO</a>
        <a href="#contact" class="JMSoft-bar-item JMSoft-button JMSoft-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
        <a href="#" class="JMSoft-bar-item JMSoft-button JMSoft-hide-small JMSoft-right JMSoft-hover-red">
            <i class="fa fa-search"></i>
        </a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="JMSoft-bar-block JMSoft-white JMSoft-hide JMSoft-hide-large JMSoft-hide-medium">
        <a href="#about" class="JMSoft-bar-item JMSoft-button" onclick="toggleFunction()">ABOUT</a>
        <a href="#portfolio" class="JMSoft-bar-item JMSoft-button" onclick="toggleFunction()">PORTFOLIO</a>
        <a href="#contact" class="JMSoft-bar-item JMSoft-button" onclick="toggleFunction()">CONTACT</a>
        <a href="#" class="JMSoft-bar-item JMSoft-button">SEARCH</a>
    </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 JMSoft-display-container JMSoft-opacity-min" id="home">
    <div class="JMSoft-display-middle nowrap">
{{--        <span class="JMSoft-center JMSoft-padding-large JMSoft-black JMSoft-xlarge JMSoft-wide JMSoft-animate-opacity">MY <span class="JMSoft-hide-small">WEBSITE</span> LOGO</span>--}}
        <img src="{{ asset('assets/images/Viri-logo-400x400-removebg.png') }}" alt="Viri">
    </div>
</div>

<!-- Container (About Section) -->
<div class="JMSoft-content JMSoft-container JMSoft-padding-64" id="about">
    <h3 class="JMSoft-center">ABOUT ME</h3>
    <p class="JMSoft-center"><em>I love photography</em></p>
    <p>We have created a fictional "personal" website/blog, and our fictional character is a hobby photographer. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
        qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <div class="JMSoft-row">
        <div class="JMSoft-col m6 JMSoft-center JMSoft-padding-large">
            <p><b><i class="fa fa-user JMSoft-margin-right"></i>My Name</b></p><br>
            <img src="{{ asset('assets/images/websiteTemplates/parallax/avatarHat.jpg') }}" class="JMSoft-round JMSoft-image JMSoft-opacity JMSoft-hover-opacity-off" alt="Photo of Me" width="500" height="333">
        </div>

        <!-- Hide this text on small devices -->
        <div class="JMSoft-col m6 JMSoft-hide-small JMSoft-padding-large">
            <p>Welcome to my website. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
    <p class="JMSoft-large JMSoft-center JMSoft-padding-16">Im really good at:</p>
    <p class="JMSoft-wide"><i class="fa fa-camera"></i>Photography</p>
    <div class="JMSoft-light-grey">
        <div class="JMSoft-container JMSoft-padding-small JMSoft-dark-grey JMSoft-center w-90">90%</div>
    </div>
    <p class="JMSoft-wide"><i class="fa fa-laptop"></i>Web Design</p>
    <div class="JMSoft-light-grey">
        <div class="JMSoft-container JMSoft-padding-small JMSoft-dark-grey JMSoft-center w-85">85%</div>
    </div>
    <p class="JMSoft-wide"><i class="fa fa-photo"></i>Photoshop</p>
    <div class="JMSoft-light-grey">
        <div class="JMSoft-container JMSoft-padding-small JMSoft-dark-grey JMSoft-center w-75">75%</div>
    </div>
</div>

<div class="JMSoft-row JMSoft-center JMSoft-dark-grey JMSoft-padding-16">
    <div class="JMSoft-quarter JMSoft-section">
        <span class="JMSoft-xlarge">14+</span><br>
        Partners
    </div>
    <div class="JMSoft-quarter JMSoft-section">
        <span class="JMSoft-xlarge">55+</span><br>
        Projects Done
    </div>
    <div class="JMSoft-quarter JMSoft-section">
        <span class="JMSoft-xlarge">89+</span><br>
        Happy Clients
    </div>
    <div class="JMSoft-quarter JMSoft-section">
        <span class="JMSoft-xlarge">150+</span><br>
        Meetings
    </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 JMSoft-display-container JMSoft-opacity-min">
    <div class="JMSoft-display-middle">
        <span class="JMSoft-xxlarge JMSoft-text-white JMSoft-wide">PORTFOLIO</span>
    </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="JMSoft-content JMSoft-container JMSoft-padding-64" id="portfolio">
    <h3 class="JMSoft-center">MY WORK</h3>
    <p class="JMSoft-center"><em>Here are some of my latest lorem work ipsum tipsum.<br> Click on the images to make them bigger</em></p><br>

    <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
    <div class="JMSoft-row-padding JMSoft-center">
        <div class="JMSoft-col m3">
            <img src="{{ asset('assets/images/websiteTemplates/parallax/p1.jpg') }}" onclick="onClick(this)" class="JMSoft-hover-opacity img-100" alt="The mist over the mountains">
        </div>

        <div class="JMSoft-col m3">
            <img src="{{ asset('assets/images/websiteTemplates/parallax/p2.jpg') }}" onclick="onClick(this)" class="JMSoft-hover-opacity img-100" alt="Coffee beans">
        </div>

        <div class="JMSoft-col m3">
            <img src="{{ asset('assets/images/websiteTemplates/parallax/p3.jpg') }}" onclick="onClick(this)" class="JMSoft-hover-opacity img-100" alt="Bear closeup">
        </div>

        <div class="JMSoft-col m3">
            <img src="{{ asset('assets/images/websiteTemplates/parallax/p4.jpg') }}" onclick="onClick(this)" class="JMSoft-hover-opacity img-100" alt="Quiet ocean">
        </div>
    </div>

    <div class="JMSoft-row-padding JMSoft-center JMSoft-section">
        <div class="JMSoft-col m3">
            <img src="{{ asset('assets/images/websiteTemplates/parallax/p5.jpg') }}" onclick="onClick(this)" class="JMSoft-hover-opacity img-100" alt="The mist">
        </div>

        <div class="JMSoft-col m3">
            <img src="{{ asset('assets/images/websiteTemplates/parallax/p6.jpg') }}" onclick="onClick(this)" class="JMSoft-hover-opacity img-100" alt="My beloved typewriter">
        </div>

        <div class="JMSoft-col m3">
            <img src="{{ asset('assets/images/websiteTemplates/parallax/p7.jpg') }}" onclick="onClick(this)" class="JMSoft-hover-opacity img-100" alt="Empty ghost train">
        </div>

        <div class="JMSoft-col m3">
            <img src="{{ asset('assets/images/websiteTemplates/parallax/p8.jpg') }}" onclick="onClick(this)" class="JMSoft-hover-opacity img-100" alt="Sailing">
        </div>
        <button class="JMSoft-button JMSoft-padding-large JMSoft-light-grey btn-mt-custom">LOAD MORE</button>
    </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="JMSoft-modal JMSoft-black" onclick="this.style.display='none'">
    <span class="JMSoft-button JMSoft-large JMSoft-black JMSoft-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
    <div class="JMSoft-modal-content JMSoft-animate-zoom JMSoft-center JMSoft-transparent JMSoft-padding-64">
        <img id="img01" class="JMSoft-image">
        <p id="caption" class="JMSoft-opacity JMSoft-large"></p>
    </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 JMSoft-display-container JMSoft-opacity-min">
    <div class="JMSoft-display-middle">
        <span class="JMSoft-xxlarge JMSoft-text-white JMSoft-wide">CONTACT</span>
    </div>
</div>

<!-- Container (Contact Section) -->
<div class="JMSoft-content JMSoft-container JMSoft-padding-64" id="contact">
    <h3 class="JMSoft-center">WHERE I WORK</h3>
    <p class="JMSoft-center"><em>I'd love your feedback!</em></p>

    <div class="JMSoft-row JMSoft-padding-32 JMSoft-section">
        <div class="JMSoft-col m4 JMSoft-container">
            <img src="{{ asset('assets/images/websiteTemplates/parallax/map.jpg') }}" class="JMSoft-image JMSoft-round" style="width:100%">
        </div>
        <div class="JMSoft-col m8 JMSoft-panel">
            <div class="JMSoft-large JMSoft-margin-bottom">
                <i class="fa fa-map-marker fa-fw JMSoft-hover-text-black JMSoft-xlarge JMSoft-margin-right"></i> Chicago, US<br>
                <i class="fa fa-phone fa-fw JMSoft-hover-text-black JMSoft-xlarge JMSoft-margin-right"></i> Phone: +00 151515<br>
                <i class="fa fa-envelope fa-fw JMSoft-hover-text-black JMSoft-xlarge JMSoft-margin-right"></i> Email: mail@mail.com<br>
            </div>
            <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>
            <form action="/action_page.php" target="_blank">
                <div class="JMSoft-row-padding" style="margin:0 -16px 8px -16px">
                    <div class="JMSoft-half">
                        <input class="JMSoft-input JMSoft-border" type="text" placeholder="Name" required name="Name">
                    </div>
                    <div class="JMSoft-half">
                        <input class="JMSoft-input JMSoft-border" type="text" placeholder="Email" required name="Email">
                    </div>
                </div>
                <input class="JMSoft-input JMSoft-border" type="text" placeholder="Message" required name="Message">
                <button class="JMSoft-button JMSoft-black JMSoft-right JMSoft-section" type="submit">
                    <i class="fa fa-paper-plane"></i> SEND MESSAGE
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="JMSoft-center JMSoft-black JMSoft-padding-64 JMSoft-opacity JMSoft-hover-opacity-off">
    <a href="#home" class="JMSoft-button JMSoft-light-grey"><i class="fa fa-arrow-up JMSoft-margin-right"></i>To the top</a>
    <div class="JMSoft-xlarge JMSoft-section">
        <i class="fa fa-facebook-official JMSoft-hover-opacity"></i>
        <i class="fa fa-instagram JMSoft-hover-opacity"></i>
        <i class="fa fa-snapchat JMSoft-hover-opacity"></i>
        <i class="fa fa-pinterest-p JMSoft-hover-opacity"></i>
        <i class="fa fa-twitter JMSoft-hover-opacity"></i>
        <i class="fa fa-linkedin JMSoft-hover-opacity"></i>
    </div>
    <p>Powered by <a href="#" title="JMSoft" target="_blank" class="JMSoft-hover-text-green">JMSoft</a></p>
</footer>

<script src="{{ asset('js/websiteTemplates/parallax/parallax.js') }}"></script>

</body>
</html>
