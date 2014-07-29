﻿<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta http-equiv="refresh" content="3; URL=<?php echo $_SERVER['REQUEST_URI'] ?>"> -->
    <title>Wunschsong - Überblick</title>

    <!-- Bootstrap -->
    <link href="../common/css/bootstrap.min.css" rel="stylesheet">
    <link href="../common/css/bootstrap.cyborg.min.css" rel="stylesheet">
    <link href="../common/css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1>Wunschsong</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <table class="table table-striped" id=refresh>

                    <!-- script calls table in refresh.php -->

                </table>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="center-block" style="text-align:center;">
                    <button type="button" class="btn btn-default btn-lg" onclick="window.location.href='./input.html'">
                        <span class="glyphicon glyphicon-plus largeicon"></span><br />Wünsch dir einen Song
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../common/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        function refresh() {
            $('#refresh').load('refresh.php?' + 1 * new Date());
        }
        var auto_refresh = setInterval(function () { refresh() }, 1000);

        refresh();
    </script>
</body>
</html>