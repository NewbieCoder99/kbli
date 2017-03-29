<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Pencarian Kode KBLI</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index, follow">
    <meta name="description" content="Pencarian Kode KBLI Online Sensus Ekonomi 2016">
    <meta name="keywords" content="Pencarian Kode KBLI Online Sensus Ekonomi 2016, Sensus Ekonomi 2016, KBLI Online, Pencarian Kode KBLI Online 2016, Kode KBLI,">
    <meta http-equiv="Copyright" content="FajarPunya[Com]">
    <meta name="author" content="FajarPunya[Com]">
    <meta http-equiv="imagetoolbar" content="no">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7">
    <meta name="webcrawlers" content="all">
    <meta name="rating" content="general">
    <meta name="spiders" content="all">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- [if It If 9] > <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script> <![Endif] -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css">
    <link rel="stylesheet" href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        function kbli(param) {
            if (param == 1) {
                document.getElementsByName("div_kbli2")[0].style.display = "inline";
                document.getElementsByName("div_kbli3")[0].style.display = "none";
                document.getElementsByName("div_kbli4")[0].style.display = "none";
                document.getElementsByName("div_kbli5")[0].style.display = "none";
                document.getElementsByName("ads")[0].style.display = "inline";
                $("#div2").html("<i class='fa fa-spinner fa-spin'></i> Please Wait...");
                $.get("<?php echo base_url();?>home/kbli2/" + document.getElementsByName("kbli")[0].value, function(data, status) {
                    $("#div2").html(data);
                });
            } else if (param == 2) {
                document.getElementsByName("div_kbli3")[0].style.display = "inline";
                document.getElementsByName("div_kbli4")[0].style.display = "none";
                document.getElementsByName("div_kbli5")[0].style.display = "none";
                $("#div3").html("<i class='fa fa-spinner fa-spin'></i> Please Wait...");
                $.get("<?php echo base_url();?>home/kbli3/" + document.getElementsByName("kbli")[0].value + '/' + document.getElementsByName("pilKbli2")[0].value, function(data, status) {
                    $("#div3").html(data);
                });
            } else if (param == 3) {
                document.getElementsByName("div_kbli4")[0].style.display = "inline";
                document.getElementsByName("div_kbli5")[0].style.display = "none";
                $("#div4").html("<i class='fa fa-spinner fa-spin'></i> Please Wait...");
                $.get("<?php echo base_url();?>home/kbli4/" + document.getElementsByName("kbli")[0].value + '/' + document.getElementsByName("pilKbli2")[0].value + '/' + document.getElementsByName("pilKbli3")[0].value, function(data, status) {
                    $("#div4").html(data);
                });
            } else if (param == 4) {
                document.getElementsByName("div_kbli5")[0].style.display = "inline";
                $("#div5").html("<i class='fa fa-spinner fa-spin'></i> Please Wait...");
                $.get("<?php echo base_url();?>home/kbli5/" + document.getElementsByName("kbli")[0].value + '/' + document.getElementsByName("pilKbli2")[0].value + '/' + document.getElementsByName("pilKbli3")[0].value + '/' + document.getElementsByName("pilKbli4")[0].value, function(data, status) {
                    var clsV5 = document.getElementsByName("pilKbli5");
                    clsV5.className += "form-control";
                    $("#div5").html(data);
                });
            }
        }
    </script>
    <style type="text/css">
        @import url('http://fonts.googleapis.com/css?family=Lato');
        ::selection {
            background-color: #E13300;
            color: white
        }
        
        ::-moz-selection {
            background-color: #E13300;
            color: white
        }
        
        body {
            background-color: #D4DBC8;
            margin: 40px;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;
            font-family: 'Lato', serif;
            font-size: 1.2em
        }
    </style>
</head>

<body onload="this.focus();">
<!--     <div class="container">
      <div class="row">
        <div class="col-md-12">
          <center><iframe data-aa='168803' name="ads" src='https://ad.a-ads.com/168803?size=990x90' scrolling='no' style='width:100%;height:90px;border:0px;padding:0;overflow:hidden;' class="embed-responsive-item" allowtransparency='true' frameborder='0'></iframe></center>
        </div>
      </div>
    </div> -->
    <div class="container">
        <div class="row" style="background:#fff;padding-bottom:30px;">
            <div class="col-md-12 col-xs-12">
                <center> <strong><h3>PENCARIAN KODE KBLI</h3><h4>Sensus Ekonomi 2016</h4></strong></center>
                <div class="clearfix" style="padding-top:15px;"></div>               
            </div>
            <div class="col-md-12 col-xs-12" style="padding-bottom:15px;">
                <select class="form-control input-md" name="kbli" onchange="kbli(1);">
                    <option selected="" value=""> === KBLI 1 ===</option>
                    <?php for($i=1;$i < 21;$i++) { echo $pecah1[$i]."</option>"; } ?>
                </select>
            </div>
            <div class="col-md-12 col-xs-12" name="div_kbli2" id="div2" style="display:none;"></div>
            <div class="col-md-12 col-xs-12" name="div_kbli3" id="div3" style="display:none;"></div>
            <div class="col-md-12 col-xs-12" name="div_kbli4" id="div4" style="display:none;padding-top:15px;"></div>
            <div class="col-md-12 col-xs-12" name="div_kbli5" id="div5" style="display:none;padding-top:15px;"></div>
            <div class="col-md-12 col-xs-12" >
            <div class="clearfix" style="padding-top:10px;"></div>
              <center><iframe data-aa='168803' name="ads" src='https://ad.a-ads.com/168803?size=990x90' scrolling='no' style='width:100%;height:90px;border:0px;padding:0;overflow:hidden;' class="embed-responsive-item" allowtransparency='true' frameborder='0'></iframe></center>
            </div>
        </div>
        <div class="row" style="background:#FD5B03;padding-bottom:1px;color:#fff;">
            <center>
                <p>Copyright &copy; Sensus Ekonomi 2016 | Created By :
                    <a href="http://www.fajarpunya.com" style="color:#fff;" target="_blank ">www.fajarpunya.com</a>
                </p>
            </center>           
        </div>
    </div>
  </body>
</html>
