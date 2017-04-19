<!DOCTYPE html>
<html lang="en">
    <head>
     

        <title>SAKEC</title>

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap-social.css" rel="stylesheet">
        <link href="bootstrap/css/font-awesome.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">


    </head>
    <body>


        <div class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://www.shahandanchor.com/mgmt/" target="_blank"><span class="fa fa-home"></span>SAKEC</a>
                </div>


                <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1" >
                    

                </div>
            </div>

        </div>

        <div class="container mainbody">
            <div class="page-header">
                <h1><?php echo $title ?></h1>
            </div>
            <div class="clearfix"></div>
            <div class="clearfix"></div>
            <div class="container-fluid">

                <?php if ($ERROR_MSG <> "") { ?>
                    <div class="col-lg-12">
                        <div class="alert alert-dismissable alert-<?php echo $ERROR_TYPE ?>">
                            <button data-dismiss="alert" class="close" type="button">x</button>
                            <p><?php echo $ERROR_MSG; ?></p>
                        </div>
                        <div style="height: 10px;">&nbsp;</div>
                    </div>
                <?php } ?>