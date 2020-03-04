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
    <!-- Center Column: Begins -->
            
      <div style="display: block; float: left; height: 20px; width: 100%; text-align: right; margin-bottom: 10px;">

        <div style="display:block; float:right; padding:4px;"><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.DiaperPlanner.com" data-hashtags="Diapers">Tweet</a></div>
        <script>    !function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = "//platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs); } } (document, "script", "twitter-wjs");</script>

        <div class="fb-like" data-href="http://www.diaperplanner.com" data-send="false" data-layout="button_count" data-width="20" data-show-faces="false" data-font="verdana"></div>

      </div>
            
      <h2>About DiaperPlanner.com</h2>  
      <img src="Images/Michael-Light.jpg" width="100px" height="136" border="0" style="float:left; margin: 3px 10px  10px  10px; border: solid 1px #999999;" alt="Michael Light" />
      When Michael Light and his wife Toni found out they were pregnant they were very excited. When they discovered they were having twins they had to 
      do a double-take! Speachless actually!
      <br/><br/>

      Michael, being a project manager and all-around geek, went straight into planning mode to make sure they would be prepared for two new little ones on the way. 
      After some research he found the average growth rate of a child after a certain number of weeks, found the average measurements for diaper sizes and calculated 
      everything up for one year in a spreasheet. Factoring these calculations now by two, the count of the first year of diapers by size was complete!
      <br/><br/>

      After taking the advise of a family friend Michael decided to convert the spreadsheet into a webpage. Thus, DiaperPlanner.com was born <i>(pun intended)</i>. 
      Now everyone can input the estimated baby's weight and the number of children (for multiples) to find out how many diapers they will need for the first year. 
      Make sure you're sitting down!
      <br/><br/>
      <a href="index.php">Click here</a> to go to the Diaper Calculator.

    <!-- Center Column: Ends -->
    </div>

    <div class="col-sm-4">

      <br><br>
      <?php include 'includes/google_ads.php'; ?>
      <br><br>
      
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>
    <?php include 'includes/bottomnav.php';?>
  </p>
</div>

</body>
</html>