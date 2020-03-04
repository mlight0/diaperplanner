<h3 id="HowManyDiapers">Diaper Table</h3>
                    
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
                <br/>
                 <a name="Totals">
                 	<h3>First Year Diaper Totals By Size</h3></a>
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
                              <?php echo number_format($TotalNBCount) ?>
                            </td>
                            <td valign="top" style="text-align: right;">
                              <?php echo number_format($Total1Count) ?>
                            </td>
                            <td valign="top" style="text-align: right;">
                              <?php echo number_format($Total2Count) ?>
                            </td>
                            <td valign="top" style="text-align: right;">
                              <?php echo number_format($Total3Count) ?>
                            </td>
                            <td valign="top" style="text-align: right;">
                              <?php echo number_format($TotalNBCount + $Total1Count + $Total2Count + $Total3Count) ?>
                            </td>
                        </tr>
                     </table>
<br><br>
					 <?php include 'ads/adrotator_bottom.php'; ?>

               <div style="display:block; float: left; height: 70px; width: 100%; text-align:center; margin-top: 30px;">
              
                </div>
                </div>

                