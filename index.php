<!DOCTYPE html>
<html lang="en">
<head>
  <title>DiaperPlanner.com - Diaper Calculator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-40093317-2', 'diaperplanner.com');
        ga('send', 'pageview');

    </script>

  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }

    #header {
        background-image: url("Images/DiaperPlanner-Header.jpg"); 
        background-repeat:no-repeat; 
        background-position: left top;
        background-size: cover;
        background-color: #ffffff;
        
    }
    h2 {color: #21b1ab;}
    h3 {color: #21b1ab;}
    h4 {color: #21b1ab;}
    h5 {color: #21b1ab;}
    .nav-item a{color: #21b1ab;}

    .nav {background: #21b1ab;}
    a {color: #21b1ab;}

  
  </style>
</head>

<body>

<!-- Navigation: Begins -->
            
  <?php include 'includes/topnav.php';?>
            
<!-- Navigation: End -->



<div class="container" style="margin-top:30px">
  <div class="row">

    <div class="col-sm-8">
    <!-- Begin Center -->
    
            <div style="display: block; float: left; height: 20px; width: 100%; text-align: right; margin-bottom: 10px;">
            
                <div style="display:block; float:right; padding:4px;"><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.DiaperPlanner.com" data-hashtags="Diapers">Tweet</a>
</div>
                <script>    !function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = "//platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs); } } (document, "script", "twitter-wjs");</script>
                
                <div class="fb-like" data-href="http://www.diaperplanner.com" data-send="false" data-layout="button_count" data-width="20" data-show-faces="false" data-font="verdana"></div>
            
            </div>
            
                <div id="inputform">
                <h3>Diaper Calculator</h3>  

                    <p>
                        The Diaper Calculator below let's you input your estimated baby's weight and the number of 
                        children (for multiples) to find out how many diapers you will need for the first year. We've 
                        taken the average growth rate of a child and determined the size and count of diapers per week 
                        to provide a total of what you can expect for the first year (give or take). 
                        <br/><br/>
                        Make sure you're sitting down!
                    </p>
                
                    <h3>Enter Birth Weight & Number of Children</h3>  
                    <span id="lblMessage" style="color:Red;"></span>
                    
                   <?php
                   if (!isset($_POST["DropDownListNumberOfChildren"])){ 
                    $startingweight = "8.0";
                    $numberofchildren = "1";
                   
                    } else {
                        $startingweight = $_POST["txtStartingWeight"];
                        $numberofchildren = $_POST["DropDownListNumberOfChildren"];
                    }
                   ?>
                    
                    <form action="index.php#HowManyDiapers" method="post" id="calcform">
                    <table cellpadding="5" cellspacing="0" style="width: 100%;">
                        <tr>
                            <td valign="middle">
                                Enter your baby's estimated weight when born.
                            </td>
                            <td valign="top" nowrap>
                            <div class="form-group">
                                <input name="txtStartingWeight" type="text"  class="form-control" value="<?php echo $startingweight;?>" maxlength="5" id="txtStartingWeight" class="alignright" style="width:50px;" />
                            </div>
                            </td>
                            <td valign="middle" nowrap>
                                lbs.
                </td>
                        </tr>
                        <tr>
                            <td valign="middle">
                                How many children will be born?
                            </td>
                            <td valign="top"  colspan="2">
                            <div class="form-group">
                                 <select name="DropDownListNumberOfChildren" id="DropDownListNumberOfChildren" class="form-control">
									<option <?php if($numberofchildren == "1"){ echo "selected='selected'"; } ?> value="1">1</option>
									<option <?php if($numberofchildren == "2"){ echo "selected='selected'"; } ?> value="2">2</option>
									<option <?php if($numberofchildren == "3"){ echo "selected='selected'"; } ?> value="3">3</option>
									<option <?php if($numberofchildren == "4"){ echo "selected='selected'"; } ?> value="4">4</option>
									<option <?php if($numberofchildren == "5"){ echo "selected='selected'"; } ?> value="5">5</option>
								
								</select>   
                                </div>                   
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" colspan="2" style="text-align: right;">
                                <a id="linkSubmit" class="btn btn-info" href="javascript: document.getElementById('calcform').submit();">Calculate Diapers!</a>
                            </td>
                        </tr>
                    </table>
                    </form>
                
                </div>
                
                <br>
                
                    <?php 

                    if (isset($_POST["DropDownListNumberOfChildren"])){ 
                    
                        include 'includes/diapertable.php';

                    }?>

                 

    <!-- End Center -->
    </div>


    <div class="col-sm-4">
    <h5>Diaper Sizes</h5>
                <ul>
                    <li><b>Size NB/Newborn</b> (Up to 10 lb) - For small or average-sized newborn infants.</li>
                    <li><b>Size 1</b> (8-14 lb) - For larger newborns and infants up to 3 months old.</li>
                    <li><b>Size 2</b> (12-18 lb) - For infants from 2 to 6 months old.</li>
                    <li><b>Size 3</b> (16-28 lb) - For infants and toddlers from 5 months to 2 years old.</li>
                </ul>
                
                <br>
                
                <h5>First Year Average Diapers Per Day</h5>
                <ul>
                    <li><b>0-3  Months</b> up to 10/day</li>
                    <li><b>3-6  Months</b> up to 7/day</li>
                    <li><b>6-11 Months</b> up to 5/day</li>
                </ul>
                <br><br>
                <hr>
                
                <br><br>
                <?php include 'includes/google_ads.php'; ?>    </div>

    

  </div>
</div>


<div class="jumbotron text-center" style="margin-bottom:0">
  <p>
  <?php include 'includes/bottomnav.php';?>

  </p>
</div>


</body>
</html>