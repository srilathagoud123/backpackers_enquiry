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
                background-color:#fff7f2;
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
                line-height:3;
            }
        </style>
    </head>
    <body>
            <div class="container">
            <h2 class="text-center">Insert Form Data Into Database using Laravel</h2>
            <form action="save_enquiry" method="post" enctype='multipart/form-data'>
                @csrf
                <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
            </div>

            <div class="form-group">
            <label for="lname">Last Name:</label>
            <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
            </div>

            <div class="form-group">
            <label for="by">No.Of Business Years:</label>
            <input type="text" class="form-control" id="by" placeholder="Enter Business Years" name="by">
            </div>

            <div class="form-group">
            <label for="sc">No.of Siblings</label>
            <input type="text" class="form-control" id="sc" placeholder="Enter Sibling Count" name="sc">
            </div>

            <div class="form-group">
            <label for="bt">Bed Time:</label>
            <input type="text" class="form-control" id="bt" placeholder="Enter Bed Time" name="bt">
            </div>

            <div class="form-group">
            <label for="wt">Wakeup Time:</label>
            <input type="text" class="form-control" id="wt" placeholder="Enter Wake up Time" name="wt">
            </div>

            <div class="form-group">
            <label for="tvh">Time spent on watching TV:</label>
            <input type="text" class="form-control" id="tvh" placeholder="Enter time spend on watching TV" name="tvh">
            </div>

            <div class="form-group">
            <label for="gh">Time spent on Games:</label>
            <input type="text" class="form-control" id="gh" placeholder="Enter time spend on Games" name="gh">
            </div>

            <div class="form-group">
            <label for="osh">Time spent on Outside per day:</label>
            <input type="text" class="form-control" id="osh" placeholder="Enter time spend outside" name="osh">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
            </form>
            </div>
    </body>
</html>
