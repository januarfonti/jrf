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
    <link href="<?php echo base_url('dist')?>/css/bootstrap.css" rel="stylesheet">

    <link href="<?php echo base_url('dist')?>/css/style.css" rel="stylesheet">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">

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
                <div class="col-md-4">
                </div>
            </div>


        </div>
        <div class="panel-body">
            <div class="form-group">
                <textarea id="isi" class="form-control jrf" rows="20"></textarea>
            </div>
            <button id="submit" class="btn btn-jrf btn-block">Submit</button>
        </div>
    </div>
</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url('dist')?>/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('dist')?>/js/typed.js"></script>
<script src="<?php echo base_url('dist')?>/js/jquery.backstretch.min.js"></script>
<script>
    $(function(){
        getdata();

        function getdata(){
        var isi;
        $.ajax({
            url: '<?php echo base_url('api/profile'); ?>',
            success: function(data) {
                isi = data['isi'];
                $('textarea[id=isi]').html(isi);
            }
        });
        }

        $(document).on("click","#submit",function(){
            var isi = $('textarea#isi').val();
            $.ajax({
              type:"POST",
              url:"<?php echo base_url('api/update'); ?>",
              data:{"isi":isi},
              cache: false,
              success:function(){
                getdata();
              },
           });
        });

        $.backstretch("<?php echo base_url('dist'); ?>/img/bg.jpg");

    });
</script>
</body>
</html>
