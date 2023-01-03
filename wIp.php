<!DOCTYPE HTML>
<html>
<head>
    <title>Coming soon </title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href='http://fonts.googleapis.com/css?family=Petit+Formal+Script' rel='stylesheet' type='text/css'>
    <style>

        body {
            background: url(../assets/stars_wallpaper.jpg) no-repeat #fff;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            font-family: "Open Sans", arial, sans-serif;
            font-weight: 300;

        }

        .wrap {
            width: 80%;
            margin: 0px auto;
        }

        .content {
            min-height: 46em;
        }

        .content-grid {
            text-align: center;
        }

        .content-grid p img {
            text-align: center;
            z-index: -9999;
            margin-top: -9em;
        }

        .grid {
            text-align: center;
            margin-top: 1em;
        }

        .grid h3 {
            font-family: 'Petit Formal Script', cursive;
            color: #FFF;
            display: block;
            padding-bottom: 2.5em;
            font-size: 1.6em;
            padding-top: 1.5em;
            font-weight: 600;
            text-align: center;
        }

        .grid h1 {
            font-family: 'Petit Formal Script', cursive;
            color: #FFF;
            display: block;
            padding-bottom: 0.5em;
            font-size: 7em;
            padding-top: 0.5em;
            font-weight: 600;
            text-align: center;
        }


        /*-----start-responsive-design------*/
        @media only screen and (max-width: 1366px) and (min-width: 1280px) {
            .wrap {
                width: 95%;
            }


        }

        @media only screen and (max-width: 1024px) and (min-width: 768px) {
            .wrap {
                width: 95%;
            }

            .grid p {
                margin-top: 1em;
            }

            .grid h3 {
                padding-top: 1.2em;
                padding-bottom: 2em;
            }

        }

        @media only screen and (max-width: 768px) and (min-width: 480px) {
            .wrap {
                width: 95%;
            }

            .content-grid p {
                margin-top: 3em;
            }

            .grid p {
                margin-top: 0em;
            }

            .grid h3 {
                font-size: 1em;
                padding-top: 1.5em;
                padding-bottom: 3em;
            }

        }

        @media only screen and (max-width: 480px) and (min-width: 320px) {
            .wrap {
                width: 95%;
            }


            .content-grid {
                text-align: center;
                margin: 0px auto;
            }

            .grid {
                margin-top: 0em;
            }

            .grid p {
                margin-top: 0em;
            }

            .grid h3 {
                font-size: 0.9em;
                padding-top: 1.2em;
                padding-bottom: 1.7em;
            }
        }
    </style>

</head>
<body>

<div class="content">
    <div class="wrap">
        <div class="grid">
            <h1>Coming Soon</h1>
            <h3>We are Still Working on it.</h3>
        </div>
    </div>
</div>
</body>
</html>
