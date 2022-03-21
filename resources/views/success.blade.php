<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Enquiry Form in Laravel Blade</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #ffffe0;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .container{
                text-align:center;
                font-weight:bold;
                font-color:green;
            }
            
        </style>
    </head>
    <body>
            <div class="container">
            <p> Great!. Thanks {{ $fname }} for responding to our survey.
            </p>
            <p>  {{ $fname }} have {{ $siblings }} siblings,
                 {{$businessYears}} years in business,
                 {{$wakeupTime}} is wakeupTime,
                 {{$bedTime}} is bedtime, {{$tvHours}} is tvHours, 
                 {{$gameHours}} is gameHours, {{$outsideHours}} is outsideHours.
           </p>
           <p>
           <p style="color :green; "> Based on the information you've entered, you will spend: <br> </p>
           <p style="color :green; "> {{$yearlyTvHours}} hours watching Tv per year, <br> </p>
           <p style="color :green; ">    {{$yearlyGameHours}} hours playing games per year, <br> </p>
           <p style="color :green; ">    {{$yearlySleepHours}} hours per year in sleeping. </p>
           </p>
    



            </div>
    </body>
</html>
