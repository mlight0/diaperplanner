<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
	DiaperPlanner.com - Diaper Calculator
</title>

<link href="Styles/StyleSheet.css" rel="stylesheet" type="text/css" />

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
    
</head>
<body>

    <!-- Facebook Javascript SDK -->
    <div id="fb-root"></div>
    <script>    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    } (document, 'script', 'facebook-jssdk'));
    </script>
    
 <div id="content">
       
    <table cellpadding="5" cellspacing="0" style="width: 1000px;" border="0">
        <tr>
            <td valign="top" colspan="3" style="height: 100px;">
            <!-- Header: Begins -->
            &nbsp;
            <!-- Header: End -->
            </td>
        </tr>
        <tr>
            <td valign="top" colspan="3" style="height: 30px;">
            <!-- Navigation: Begins -->
            
				<?php include 'includes/topnav.php';?>
            
            <!-- Navigation: End -->
            </td>
        </tr>
        <tr>
            <td valign="top" style="width: 200px; height: 500px; padding-top: 100px;">
            <!-- Left Column: Begins -->
                
                <h3>Diaper Sizes</h3>
                <ul>
                    <li><b>Size NB/Newborn</b> (Up to 10 lb) - For small or average-sized newborn infants.</li>
                    <li><b>Size 1</b> (8-14 lb) - For larger newborns and infants up to 3 months old.</li>
                    <li><b>Size 2</b> (12-18 lb) - For infants from 2 to 6 months old.</li>
                    <li><b>Size 3</b> (16-28 lb) - For infants and toddlers from 5 months to 2 years old.</li>
                </ul>
                
                <br>
                
                <h3>First Year Average Diapers Per Day</h3>
                <ul>
                    <li><b>0-3  Months</b> up to 10/day</li>
                    <li><b>3-6  Months</b> up to 7/day</li>
                    <li><b>6-11 Months</b> up to 5/day</li>
                </ul>
                <br><br>
                <hr>
                <br><br>

                <?php include 'ads/adrotator.php'; ?>


                
            <!-- Left Column: Ends -->
            </td>
            <td valign="top" style="width: 570px;">
            <!-- Center Column: Begins -->
            
            <div style="display: block; float: left; height: 20px; width: 100%; text-align: right;">
            
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.DiaperPlanner.com" data-hashtags="Diapers">Tweet</a>
            <script>    !function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = "//platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs); } } (document, "script", "twitter-wjs");</script>
            
            <div class="fb-like" data-href="http://www.diaperplanner.com" data-send="false" data-layout="button_count" data-width="20" data-show-faces="false" data-font="verdana"></div>
            
            </div>
            
                <div id="inputform">
                    
                    The Diaper Calculator below let's you input your estimated baby's weight and the number of 
                    children (for multiples) to find out how many diapers you will need for the first year. We've 
                    taken the average growth rate of a child and determined the size and count of diapers per week 
                    to provide a total of what you can expect for the first year (give or take). 
                    
                    Make sure you're sitting down!
                
                
                    <h2>Enter Birth Weight & Number of Children</h2>  
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
                    
                    <form action="index.php" method="post" id="calcform">
                    <table cellpadding="5" cellspacing="0" style="width: 50%;">
                        <tr>
                            <td valign="middle">
                                Enter your baby's estimated weight when born.
                            </td>
                            <td valign="top" nowrap>
                                <input name="txtStartingWeight" type="text" value="<?php echo $startingweight;?>" maxlength="5" id="txtStartingWeight" class="alignright" style="width:40px;" /> lbs.
                            </td>
                        </tr>
                        <tr>
                            <td valign="middle">
                                How many children will be born?
                            </td>
                            <td valign="top">
                            
                                 <select name="DropDownListNumberOfChildren" id="DropDownListNumberOfChildren">
									<option <?php if($numberofchildren == "1"){ echo "selected='selected'"; } ?> value="1">1</option>
									<option <?php if($numberofchildren == "2"){ echo "selected='selected'"; } ?> value="2">2</option>
									<option <?php if($numberofchildren == "3"){ echo "selected='selected'"; } ?> value="3">3</option>
									<option <?php if($numberofchildren == "4"){ echo "selected='selected'"; } ?> value="4">4</option>
									<option <?php if($numberofchildren == "5"){ echo "selected='selected'"; } ?> value="5">5</option>
								
								</select>   
                                                        
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" colspan="2">
                                <a id="linkSubmit" class="button" href="javascript: document.getElementById('calcform').submit();">Calculate Diapers!</a>
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

                 
                
            <!-- Center Column: Ends -->
            </td>
            <td valign="top" style="width: 200px;">
            <!-- Right Column: Begins -->
            
            <div id="advertising">
            <br><br>    
            <?php  /*include 'includes/google_ads.php'; */?>
            
            <?php include 'ads/adrotator.php'; ?>

            </div>
            
            <!-- Right Column: Ends -->
            </td>
        </tr>
        <tr>
            <td valign="middle" colspan="3" style="height: 50px;">
             <!-- Footer: Begins -->
            
				<?php include 'includes/bottomnav.php';?>
				                          
             <!-- Footer: End -->
            </td>
        </tr>
    </table>
    
    </div>
 
</body>
</html>
    