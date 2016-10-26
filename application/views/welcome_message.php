<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Januar Fonti</title>
    <link href="https://fonts.googleapis.com/css?family=Cousine" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="<?php echo base_url('bower_components/bootstrap/dist/css/bootstrap.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('dist')?>/css/style.css" rel="stylesheet">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bower_components/sweetalert2/dist/sweetalert2.min.css'); ?>">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container text-center">



</div>

<div class="col-md-8 col-md-offset-2 result">
    <div class="panel panel-default panel-transparent">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-4">
                    <i class="ion-ios-circle-filled left"></i> <i class="ion-ios-circle-filled middle"></i> <i class="ion-ios-circle-filled right"></i>
                </div>
                <div class="col-md-4 text-center">
                    <i class="ion-home"></i> kmzwa88saa - bash
                </div>
                <div class="col-md-4 text-right">
                    <a href="<?php echo base_url('manage'); ?>"><i class="ion-refresh"></i> Manage</a>
                </div>
            </div>


        </div>
        <div class="panel-body">
            <p><span class="satu typed"></span></d>
            <p><span class="dua typed"></span></p>
        </div>
    </div>
</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url('bower_components/jquery/jquery.js'); ?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url('bower_components/bootstrap/dist/js/bootstrap.js'); ?>"></script>
<script src="<?php echo base_url('bower_components/typed.js/js/typed.js'); ?>"></script>
<script src="<?php echo base_url('bower_components/jquery-backstretch/jquery.backstretch.min.js'); ?>"></script>
<script src="<?php echo base_url('bower_components/es6-promise/es6-promise.auto.min.js'); ?>"></script>
<script src="<?php echo base_url('bower_components/sweetalert2/dist/sweetalert2.min.js'); ?>"></script>
<script>
    $(function(){

        var isi;
        $.ajax({
            url: '<?php echo base_url('api/profile'); ?>',
            success: function(data) {
                isi = data['isi'];
                $(".satu").typed({
                    strings: [isi],
                    contentType: 'html',
                    typeSpeed: 30,
                    showCursor: true,
                    loop:true,
                });
            }
        });

        $.backstretch("<?php echo base_url('dist'); ?>/img/bg.jpg");

    });
</script>
</body>
</html>
