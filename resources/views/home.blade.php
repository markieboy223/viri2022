<!DOCTYPE html>
<html lang="en" xml:lang="en">
@include('includes.head')
<body>
@include('includes.navbar')
<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 JMSoft-display-container JMSoft-opacity-min" id="home">
    <div class="JMSoft-display-middle nowrap">
        {{--        <span class="JMSoft-center JMSoft-padding-large JMSoft-black JMSoft-xlarge JMSoft-wide JMSoft-animate-opacity">MY <span class="JMSoft-hide-small">WEBSITE</span> LOGO</span>--}}
        <img src="{{ asset('assets/images/Viri-logo-400x400-removebg.png') }}" alt="Viri">
    </div>
</div>

<!-- Container (About Section) -->
<div class="JMSoft-content JMSoft-container JMSoft-padding-64" id="about">
    <h3 class="JMSoft-center">ABOUT VIRI</h3>
    <p class="JMSoft-center"><em>The verification for sustainability</em></p>
    <p class="JMSoft-center">Viri is a private company that provides sustainability labels to film production
        companies
        and factories so that they can let their customers know that they care about ecological issues..</p>
    <div class="JMSoft-row">
        <div class="JMSoft-col m6 JMSoft-center JMSoft-padding-large">
            <p><b><i class="fa fa-user JMSoft-margin-right"></i>Our Team</b></p><br>
            <img src="{{ asset('assets/images/team.jpg') }}"
                 class="JMSoft-round JMSoft-image JMSoft-opacity JMSoft-hover-opacity-off" alt="Photo of Me"
                 width="500"
                 height="333">
        </div>

        <!-- Hide this text on small devices -->
        <div class="JMSoft-col m6 JMSoft-hide-small JMSoft-padding-large">
            <p>Welcome to Viri Solutions one of the newest but most professional companies out there. We are trying to
                create name and impact in the sustainability plans of a company. Our goal is to make every company so
                sustainable as possible. A lot of companies aren’t clear about how sustainable their products are and
                their packaging is. With the Virification they can change that. The Virification is a quality mark that
                gives a look into the sustainability of a company.</p>
        </div>
    </div>
</div>

<div class="JMSoft-row JMSoft-center JMSoft-dark-grey JMSoft-padding-16">
    <div><span class="JMSoft-xlarge">Plastic Statistics In 2010</span></div>
    <div class="JMSoft-center JMSoft-medium"><span>(MT = Million Tonnes)</span></div>

    <div class="JMSoft-third JMSoft-section">
        <span class="JMSoft-xlarge">270+ MT</span><br>
        Global Plastic Production
    </div>
    <div class="JMSoft-third JMSoft-section">
        <span class="JMSoft-xlarge">275+ MT</span><br>
        Global Plastic Waste
    </div>
    <div class="JMSoft-third JMSoft-section">
        <span class="JMSoft-xlarge">99.5+ MT</span><br>
        Coastal Plastic Waste
    </div>
    <div class="JMSoft-third JMSoft-section">
        <span class="JMSoft-xlarge">31.9+ MT</span><br>
        Mismanaged Coastal Plastic Waste
    </div>
    <div class="JMSoft-third JMSoft-section">
        <span class="JMSoft-xlarge">8+ MT</span><br>
        Plastic Inputs To The Oceans
    </div>
    <div class="JMSoft-third JMSoft-section">
        <span class="JMSoft-xlarge">10k+ to 100k+ MT</span><br>
        Plastic In Surface Waters
    </div>
</div>

<!-- Slideshow container -->
<div class="slideshow-container" id="slider-height">
    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
        {{--            <div class="numbertext">1 / 3</div>--}}
        <img class="img-100" width="400px"
             src="{{ asset('assets/images/plasticInfo/global-plastics-production.svg') }}"
             alt="global plastics production">
        <div class="text">Global Plastics Production</div>
    </div>
    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img class="img-100" src="{{ asset('assets/images/plasticInfo/plastic-waste-by-sector.svg') }}"
             alt="plastic waste by sector">
        <div class="text">Plastic Waste By Sector</div>
    </div>
    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img class="img-100" src="{{ asset('assets/images/plasticInfo/cumulative-global-plastics.svg') }}"
             alt="cumulative global plastics">
        <div class="text">Cumulative Global Plastics</div>
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>
<!-- The dots/circles -->
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 JMSoft-display-container JMSoft-opacity-min">
    <div class="JMSoft-display-middle">
        <span class="JMSoft-xxlarge JMSoft-text-white JMSoft-wide">PORTFOLIO</span>
    </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="JMSoft-content JMSoft-container JMSoft-padding-64" id="portfolio">
    <h3 class="JMSoft-center">OUR WORK</h3>
    <p class="JMSoft-center"><em>Here are some of my latest lorem work ipsum tipsum.<br> Click on the images to make
            them bigger</em></p><br>

    <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
    <div class="JMSoft-row-padding JMSoft-center">
        <div class="JMSoft-col m3">
            <img src="{{ asset('assets/images/p1.jpg') }}" onclick="onClick(this)"
                 class="JMSoft-hover-opacity img-100"
                 alt="The mist over the mountains">
        </div>

        <div class="JMSoft-col m3">
            <img src="{{ asset('assets/images/p2.jpg') }}" onclick="onClick(this)"
                 class="JMSoft-hover-opacity img-100"
                 alt="Coffee beans">
        </div>

        <div class="JMSoft-col m3">
            <img src="{{ asset('assets/images/p3.jpg') }}" onclick="onClick(this)"
                 class="JMSoft-hover-opacity img-100"
                 alt="Bear closeup">
        </div>

        <div class="JMSoft-col m3">
            <img src="{{ asset('assets/images/p4.jpg') }}" onclick="onClick(this)"
                 class="JMSoft-hover-opacity img-100"
                 alt="Quiet ocean">
        </div>
    </div>

    <div class="JMSoft-row-padding JMSoft-center JMSoft-section">
        <div class="JMSoft-col m3">
            <img src="{{ asset('assets/images/p5.jpg') }}" onclick="onClick(this)"
                 class="JMSoft-hover-opacity img-100"
                 alt="The mist">
        </div>

        <div class="JMSoft-col m3">
            <img src="{{ asset('assets/images/p6.jpg') }}" onclick="onClick(this)"
                 class="JMSoft-hover-opacity img-100"
                 alt="My beloved typewriter">
        </div>

        <div class="JMSoft-col m3">
            <img src="{{ asset('assets/images/p7.jpg') }}" onclick="onClick(this)"
                 class="JMSoft-hover-opacity img-100"
                 alt="Empty ghost train">
        </div>

        <div class="JMSoft-col m3">
            <img src="{{ asset('assets/images/p8.jpg') }}" onclick="onClick(this)"
                 class="JMSoft-hover-opacity img-100"
                 alt="Sailing">
        </div>
        <button class="JMSoft-button JMSoft-padding-large JMSoft-light-grey btn-mt-custom">LOAD MORE</button>
    </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="JMSoft-modal JMSoft-black" onclick="this.style.display='none'">
    <span class="JMSoft-button JMSoft-large JMSoft-black JMSoft-display-topright" title="Close Modal Image"><i
            class="fa fa-remove"></i></span>
    <div class="JMSoft-modal-content JMSoft-animate-zoom JMSoft-center JMSoft-transparent JMSoft-padding-64">
        <img id="img01" class="JMSoft-image">
        <p id="caption" class="JMSoft-opacity JMSoft-large"></p>
    </div>
</div>

<!-- Four Parallax Image with Services Text -->
<div class="bgimg-4 JMSoft-display-container JMSoft-opacity-min">
    <div class="JMSoft-display-middle">
        <span class="JMSoft-xxlarge JMSoft-text-white JMSoft-wide">SERVICES</span>
    </div>
</div>

<div id="services">
    <div class="JMSoft-row JMSoft-center JMSoft-padding-16">
        <div><span class="JMSoft-xlarge">Choose Sector</span></div>
        <div class="JMSoft-center JMSoft-medium"><span>(To get a expert for u verification)</span></div>

        <div class="JMSoft-half JMSoft-section">
            <div class="card-custom">
                <img src="{{ asset('assets/images/ict-factory.jpg') }}" alt="factory image"
                     class="card-image-custom">
                <div class="JMSoft-display-middle">
                    <span class="card-title-custom JMSoft-text-white JMSoft-xxlarge">ICT</span>
                </div>
            </div>
        </div>
        <div class="JMSoft-half JMSoft-section">
            <div class="card-custom">
                <img src="{{ asset('assets/images/media1.jpg') }}" alt="media image"
                     class="card-image-custom">
                <div class="JMSoft-display-middle">
                    <span class="card-title-custom JMSoft-text-white JMSoft-xxlarge">Media</span>
                </div>
            </div>
        </div>
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
            <img src="{{ asset('assets/images/map.jpg') }}" class="JMSoft-image JMSoft-round">
        </div>
        <div class="JMSoft-col m8 JMSoft-panel">
            <div class="JMSoft-large JMSoft-margin-bottom">
                <i class="fa fa-map-marker fa-fw JMSoft-hover-text-black JMSoft-xlarge JMSoft-margin-right"></i>
                The
                Netherlands & Finland<br>
                {{--                <i class="fa fa-phone fa-fw JMSoft-hover-text-black JMSoft-xlarge JMSoft-margin-right"></i> Phone: +00 151515<br>--}}
                <i class="fa fa-envelope fa-fw JMSoft-hover-text-black JMSoft-xlarge JMSoft-margin-right"></i>
                Email:
                info@viri-solution.com<br>
            </div>
            {{--            <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>--}}
            <form action="/action_page.php" target="_blank">
                <div class="JMSoft-row-padding" style="margin:0 -16px 8px -16px">
                    <div class="JMSoft-half">
                        <input class="JMSoft-input JMSoft-border" type="text" placeholder="Name" required
                               name="Name">
                    </div>
                    <div class="JMSoft-half">
                        <input class="JMSoft-input JMSoft-border" type="text" placeholder="Email" required
                               name="Email">
                    </div>
                </div>
                <input class="JMSoft-input JMSoft-border" type="text" placeholder="Message" required
                       name="Message">
                <button class="JMSoft-button JMSoft-black JMSoft-right JMSoft-section" type="submit">
                    <i class="fa fa-paper-plane"></i> SEND MESSAGE
                </button>
            </form>
        </div>
    </div>
</div>

@include('includes.footer')
@include('includes.scripts')
</body>
</html>
