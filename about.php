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
                
                <?php /*include 'includes/google_ads.php'; */?>
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
                    <a href="Default.aspx">Click here</a> to go to the Diaper Calculator.
               
               
                
                
               <div style="display:block; float: left; height: 70px; width: 100%; text-align:center; margin-top: 30px;">
               
                
                </div>
                </div>

                
            <!-- Center Column: Ends -->
            </td>
            <td valign="top" style="width: 200px;">
            <!-- Right Column: Begins -->
            
            <div id="advertising">
                
                <?php /*include 'includes/google_ads.php'; */?>
                <br><br>
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