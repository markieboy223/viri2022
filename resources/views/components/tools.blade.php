<html xml:lang="en" lang="en">
<head>
    <title>Tools</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/tools.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
    <h1>Tools</h1>

    {{--    Checked Backgroound--}}
    <div class="row" style="display: flex">
        <div id="tool1">
            <h2>Checked Background</h2>
            <div class="tool-item">
                <div class="item-checkedBg"><img src="#" alt="" height="100px"></div>
            </div>
        </div>

        {{--        Bell Animation--}}
        <div id="tool2" class="col-4">
            <h2>Bell Animation</h2>
            <div class="tool-item">
                <div class="icon-wrapper" data-number="1">
                    <img class="bell-icon" src="{{ asset('assets/images/icons/bell.png') }}" alt="">
                </div>
            </div>
            <p>(Hover on the bell)</p>
        </div>

        {{--        Toggle Button Animation Dark/Light--}}
        <div id="tool3" class="col-4">
            <h2>Toggle Button Animation Dark/Light</h2>
            <div class="tool-item bg-dark rounded-3 p-3">
                <input type="checkbox" id="toggle-darkLight">
                <label for="toggle-darkLight" class="button-darkLight"></label>
            </div>
        </div>
    </div>

    <div class="row">
        {{--        BMI Calculator--}}
        <div id="tool4" class="col-4">
            <h2>Body Mass Index Calculator</h2>

            <form class="form-bmiCalc" id="form-bmiCalc" onsubmit="return validateForm()">
                <div class="row-one-bmiCalc">
                    <label for="age"></label><input type="text" class="text-input-bmiCalc" id="age"
                                                    autocomplete="off"
                                                    required>
                    <p class="text-bmiCalc">Age</p>
                    <label class="container-bmiCalc">
                        <input type="radio" name="radio" id="f">
                        <p class="text-bmiCalc">Female</p>
                        <span class="checkmark-bmiCalc"></span>
                    </label>
                    <label class="container-bmiCalc">
                        <input type="radio" name="radio" id="m">
                        <p class="text-bmiCalc">Male</p>
                        <span class="checkmark-bmiCalc"></span>
                    </label>
                </div>
                <div class="row-two-bmiCalc">
                    <label for="height"></label><input type="text" class="text-input-bmiCalc" id="height"
                                                       autocomplete="off" required>
                    <p class="text-bmiCalc">Height (cm)</p>
                    <label for="weight"></label><input type="text" class="text-input-bmiCalc" id="weight"
                                                       autocomplete="off" required>
                    <p class="text-bmiCalc">Weight (kg)</p>
                </div>
                <div class="row-three-bmiCalc">
                    <div class="result-bmiCalc" id="result-bmiCalc"></div>
                </div>
                <button type="button" id="submit">Submit</button>
            </form>
        </div>

        {{--            card with zoom--}}
        <div id="tool5" class="col-4">
            <h2>Card with zoom</h2>
            <div class="card-custom">
                <img src="{{ asset('assets/images/p2.jpg') }}" alt="#" class="card-image-custom">
                <h3 class="card-title-custom">Coffee Beans</h3>
            </div>
        </div>

        {{--            overlapping gallery--}}
        <div id="tool6" class="col-4 overlapping-gallery">
            <h2>Overlapping Gallery</h2>
            <img class="overlapping-gallery" src="{{ asset('assets/images/p1.jpg') }}" alt="p1">
{{--            <img class="overlapping-gallery" src="{{ asset('assets/images/p2.jpg') }}" alt="p2">--}}
        </div>

        <div id="tool7" class="col-4">
            <h2>Search Box Custom</h2>
            <div class="search-box-custom">
                <input type="text" placeholder="search...."/>
                <a href="#" class="icon"><i class="fas fa-search"></i></a>
            </div>

        </div>
    </div>
</div>

<script src="{{ asset('js/bmiCalc.js') }}"></script>
</body>
</html>
