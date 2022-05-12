<!DOCTYPE html>
<html lang="en" xml:lang="en">
@include('includes.head')
<body>
<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 JMSoft-display-container JMSoft-opacity-min" id="home">
    <div class="JMSoft-display-middle nowrap">
        {{--        <span class="JMSoft-center JMSoft-padding-large JMSoft-black JMSoft-xlarge JMSoft-wide JMSoft-animate-opacity">MY <span class="JMSoft-hide-small">WEBSITE</span> LOGO</span>--}}
        <img src="{{ asset('assets/images/Viri-logo-400x400-removebg.png') }}" alt="Viri">
    </div>
</div>

@include('includes.footer')
@include('includes.scripts')
</body>
</html>
