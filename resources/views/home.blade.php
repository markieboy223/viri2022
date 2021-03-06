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
    <p class="JMSoft-center">
        Viri is a private company that provides sustainability labels to other
        companies so that they can let their customers know that they care about
        ecological issues.
    </p>
    <div class="JMSoft-row">
        <div class="JMSoft-col m6 JMSoft-center JMSoft-padding-large">
            <img src="{{ asset('assets/images/us.png') }}"
                 class="JMSoft-round JMSoft-image JMSoft-hover-opacity-off" alt="Photo of Me"
                 width="500"
                 height="333">
        </div>

        <!-- Hide this text on small devices -->
        <div class="JMSoft-col m6 JMSoft-hide-small JMSoft-padding-large">
            <p>Do you know that you eat a credit card of plastic every week? This has
                serious consequences in our lives. Our company Viri Solutions is here to
                help you to know which companies sustainable and which products are safe
                to use. We create sustainability and transparency and enhance
                responsibility in business.
                <br>
                <br>
                Companies using our quality marks called Virification are
                environmentally safe and you will know that you are not harming the
                environment and spoiling your health with microplastic when using their
                products. We believe that every business has responsibility over the
                whole cycle of their processes, and we should be able to be free to
                choose ecologically sustainable and friendly products.
                <br>
                <br>
                We are convinced that it is essential to work to undo the mistakes we
                have done with the ecosystem. You are welcome to read more about us and
                to take care of your life, our planet and the health of the whole
                ecosystem with us.</p>
        </div>
    </div>
</div>
<div id="chart">

<div class="JMSoft-row JMSoft-center JMSoft-dark-grey JMSoft-padding-16">
    <div style="padding-top: 20px"><span class="JMSoft-xlarge">Plastic Statistics In 2010</span></div>
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
            <img class="img-100" width="380px"
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

<div id="services">

<!-- Four Parallax Image with Services Text -->
<div class="bgimg-4 JMSoft-display-container JMSoft-opacity-min">
    <div class="JMSoft-display-middle">
        <span class="JMSoft-xxlarge JMSoft-text-white JMSoft-wide">SERVICES</span>
    </div>
</div>

    <div class="JMSoft-row JMSoft-center">
        {{--        <div><span class="JMSoft-xlarge">Choose Sector</span></div>--}}
        <div class="JMSoft-third JMSoft-section bg-white">
            <div class="card-custom">
                <img src="{{ asset('assets/images/Checkmarks/bronze-check-mark.png') }}" alt="Bronze Checkmark"
                     class="card-image-custom">
                <div class="JMSoft-display-middle">
                    <span class="card-title-custom JMSoft-text-white JMSoft-xxlarge">Bronze</span>
                </div>
            </div>
        </div>

        <div class="JMSoft-third JMSoft-section">
            <div class="card-custom">
                <img src="{{ asset('assets/images/Checkmarks/silver-check-mark.png') }}" alt="Silver Checkmark"
                     class="card-image-custom">
                <div class="JMSoft-display-middle">
                    <span class="card-title-custom JMSoft-text-white JMSoft-xxlarge">Silver</span>
                </div>
            </div>
        </div>

        <div class="JMSoft-third JMSoft-section">
            <div class="card-custom">
                <img src="{{ asset('assets/images/gold-check-mark-removebg.png') }}" alt="Gold Checkmark"
                     class="card-image-custom">
                <div class="JMSoft-display-middle">
                    <span class="card-title-custom JMSoft-text-white JMSoft-xxlarge">Gold</span>
                </div>
            </div>
        </div>
    </div>
    <div id="companys">
        <div class="card-custom">
            <img src="{{ asset('assets/images/ict-factory.jpg') }}" alt="Gold Checkmark"
                 class="card-image-custom"
                 style="max-height: 890px !important;"
            >
            <div class="JMSoft-display-middle">
                <a href="/forms/create"><span class="card-title-custom JMSoft-text-white JMSoft-xxlarge">CLICK HERE TO CHANGE THE WORLD!</span></a>
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
<div class="JMSoft-content JMSoft-container" id="contact">
    <h3 class="JMSoft-center">WHERE I WORK</h3>
    <p class="JMSoft-center"><em>I'd love your feedback!</em></p>

    <div class="JMSoft-row JMSoft-padding-32 JMSoft-section">
        <div class="JMSoft-col m4 JMSoft-container">
            <img style="width: 800px" src="{{ asset('assets/images/map.jpg') }}" class="JMSoft-image JMSoft-round">
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
