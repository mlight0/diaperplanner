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
                
                <br><br><br>
                
                <script type="text/javascript"><!--
                    google_ad_client = "ca-pub-6086280429221108";
                    /* DiaperPlanner.com 160x600 */
                    google_ad_slot = "8317855121";
                    google_ad_width = 160;
                    google_ad_height = 600;
                    //-->
                    </script>
                    <script type="text/javascript"
                    src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                </script>
                
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
                    
                   
                    
                    <form action="index.php" method="post" id="calcform">
                    <table cellpadding="5" cellspacing="0" style="width: 50%;">
                        <tr>
                            <td valign="middle">
                                Enter your baby's estimated weight when born.
                            </td>
                            <td valign="top" nowrap>
                                <input name="txtStartingWeight" type="text" value="8.0" maxlength="5" id="txtStartingWeight" class="alignright" style="width:40px;" /> lbs.
                            </td>
                        </tr>
                        <tr>
                            <td valign="middle">
                                How many children will be born?
                            </td>
                            <td valign="top">
                            
                                 <select name="DropDownListNumberOfChildren" id="DropDownListNumberOfChildren">
									<option selected="selected" value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								
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
                
                 <h2>Diaper Table</h2>
                    
                    Based on the information provided above this table shows the Week, Estimated Weight, Diaper Size and Total Diapers 
                    expected per week for the first year. You can find the total number of diapers for each size in the 
                    <a href="#Totals">First Year Diapers Total By Size</a> at the bottom of the page.
                    <br/><br/>
                    
                 <table cellpadding="5" cellspacing="0" style="width: 100%;" border="1">
                   	<tr style="background-color: #21b1ab; color: #ffffff; font-weight: bold;">
                		<td valign="top" style="text-align: center;">Weeks</td>
                		<td valign="top" style="text-align: center;">Est. Weight</td>
                		<td valign="top" style="text-align: center;">Diaper Size</td>
                		<td valign="top" style="text-align: center;">Total Diapers</td>
                	</tr>
                	<?php 
                	// Get form data.
                	$childrencount = $_POST["DropDownListNumberOfChildren"];
                	$estweight = $_POST["txtStartingWeight"];
                	
                	$TotalNBCount = 0;
                	$Total1Count = 0;
                	$Total2Count = 0;
                	$Total3Count = 0;
                	
                	$BabyWeight = 0.0;
                	
                	$AveGrowthRate6Months = 0.375;
                	$AveGrowthRate12Months = 0.25;
                	
                	$AveDiapersPerDay3Months = 10;
                	$AveDiapersPerDay6Months = 7;
                	$AveDiapersPerDay12Months = 5;
                	
                	$DaysInWeek = 7;
                	
                	// Populate table with data.
                	for($x=1; $x<=52;$x++)
                	{
                		
                		// Calculate baby weight based on growth rate.
                		if($x == 1)
                		{
                			$BabyWeight = $estweight;
                		}
                		elseif ($x <= 24)
                		{
                			$BabyWeight = $BabyWeight + $AveGrowthRate6Months;
                		}
                		elseif ($x > 24)
                		{
                			$BabyWeight = $BabyWeight + $AveGrowthRate12Months;
                		}
                		
                		// Calculate average diapers per day.
                		if($x <= 13)
                		{
                			$AveDiapersPerDay = $AveDiapersPerDay3Months;
                		}
                		elseif (($x > 13) and ($x <= 26))
                		{
                			$AveDiapersPerDay = $AveDiapersPerDay6Months;
                		}
                		elseif (($x > 26) and ($x <= 52))
                		{
                			$AveDiapersPerDay = $AveDiapersPerDay12Months;
                		}
                		
                		$WeeklyTotal = ($AveDiapersPerDay * $childrencount) * $DaysInWeek;
                		
                		
                		// Calculate total diaper sizes.
                		if (getDiaperSize($BabyWeight) == "NB")
                		{
                			$TotalNBCount = $TotalNBCount + $WeeklyTotal;
                		}
                		elseif (getDiaperSize($BabyWeight) == "1")
                		{
                			$Total1Count = $Total1Count + $WeeklyTotal;
                		}
                		elseif (getDiaperSize($BabyWeight) == "2")
                		{
	                		$Total2Count = $Total2Count + $WeeklyTotal;
                		}
                		elseif (getDiaperSize($BabyWeight) == "3")
                		{
                			$Total3Count = $Total3Count + $WeeklyTotal;
                		}
                		
                		?>
                		<tr>
	                		<td style="text-align: center;"><?php echo $x?></td>
	                		<td style="text-align: center;"><?php echo number_format($BabyWeight,2) ?></td>
	                		<td style="text-align: center;"><?php echo getDiaperSize($BabyWeight) ?></td>
	                		<td style="text-align: center;"><?php echo $WeeklyTotal ?></td>
                		</tr>
                	<?php 
                	
                	}
                	
                	function getDiaperSize($Weight)
                	{
                		$diaperSize = "";
                		
                		if($Weight <= 10)
                		{
                			$diaperSize = "NB";
                		}
                		elseif (($Weight > 10) and ($Weight < 14))
                		{
                			$diaperSize = "1";
                		}
                		elseif (($Weight >= 14) and ($Weight < 18))
                		{
                			$diaperSize = "2";
                		}
                		elseif (($Weight >= 18) and ($Weight < 28))
                		{
                			$diaperSize = "3";
                		}
                		else
                		{
                			$diaperSize = "N/A";
                		}
                		
                		return $diaperSize;
                	}
                	
                	?>
                	
                </table>
                
                 <div id="totals">
                
                 <a name="Totals">
                 	<h2>First Year Diaper Totals By Size</h2></a>
                     <table cellpadding="5" cellspacing="0" style="width: 100%;" border="1">
                        <tr style="background-color: #21b1ab; color: #ffffff; font-weight: bold;">
                           
                            <td valign="top" style="text-align: center;">NB</td>
                            <td valign="top" style="text-align: center;">1</td>
                            <td valign="top" style="text-align: center;">2</td>
                            <td valign="top" style="text-align: center;">3</td>
                            <td valign="top" style="text-align: center;">Total</td>
                        </tr>
                         <tr>
                            
                            <td valign="top" style="text-align: right;">
                              <?php echo $TotalNBCount ?>
                            </td>
                            <td valign="top" style="text-align: right;">
                              <?php echo $Total1Count ?>
                            </td>
                            <td valign="top" style="text-align: right;">
                              <?php echo $Total2Count ?>
                            </td>
                            <td valign="top" style="text-align: right;">
                              <?php echo $Total3Count ?>
                            </td>
                            <td valign="top" style="text-align: right;">
                              <?php echo $TotalNBCount + $Total1Count + $Total2Count + $Total3Count ?>
                            </td>
                        </tr>
                     </table>
                
               <div style="display:block; float: left; height: 70px; width: 100%; text-align:center; margin-top: 30px;">
              
                </div>
                </div>
                
            <!-- Center Column: Ends -->
            </td>
            <td valign="top" style="width: 200px;">
            <!-- Right Column: Begins -->
            
            <div id="advertising">
                
            <?php include 'includes/google_ads.php';?>
                                    
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
    