<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");
//require_once("pgRedirect.php");
$paytmChecksum = "";
$paramList = array();

$isValidChecksum = "FALSE";

$paramList = $_POST;
//$EMAIL = $_POST["EMAIL"];
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	//echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction status is success</b>" . "<br/>";
		echo "<a href='https://www.msmrsinternationalindia.com' style='background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;'>Go To Home Page</a>";
		 echo "<div style='display:none;'>";
		 var_dump($_POST);
		 echo "</div>";
		      if (isset($_POST) && count($_POST)>0 )
{ 
		foreach($_POST as $paramName => $paramValue) {
			//	echo "<br/>" . $paramName . " = " . $paramValue;
				$value = $paramValue;
				//echo $value;
		    break;
		    
}
	
	
include("dbconfig.php");	
//$servername="localhost";
//$username="sattupandey1234";
//$password="sattu1234@";
//$database="allinonecyberteam2";
//$message="";
//$conn=new mysqli('localhost','sattupandey1234','sattu1234@','allinonecyberteam2');

//if($conn->connect_error)
//{
//  die("connection failed" . $conn->connect_error);
// }
 $sql="SELECT * FROM nehaverm_paytm.payment WHERE order_id='$value'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
  
    while($row = $result->fetch_assoc()) {
	
  echo "<table class='table'>";
   /* echo "<thead>";
      echo "<tr>";
        echo "<th>Order Id</th>";
        echo "<th>Name</th>";
        echo "<th>Email</th>";
		echo "<th>City</th>";
     echo  "</tr>";
    echo "</thead>";
    echo "<tbody>";
      echo "<tr>";*/
        //echo "<td>$x=".$row['order_id']."</td>";
        $x=$row['order_id'];
        //echo $x;
        $y=$row["name"];
        $z=$row["email"];
        //echo $z;
        $w=$row["city"];
        $b=$row["contact"];
        $a=$row["ticket_count"];
          //echo "<td>".$row["name"] ."</td>";
        //echo "<td>".$row["email"]."</td>";
		//echo "<td>".$row["city"]."</td>";
	//	echo "<td><button type='button' class='btn btn-danger' onclick='hello(this)' name='response' id=".$row['enquiry_id'].">unseen</button></td>";
    /* echo  "</tr>";
     echo "</tbody>";
  echo "</table>";*/

          }
          
}
      else 
       {
          echo "Error: " . $sql . "<br>" . $conn->error;
           
       }
      }
	
	
	ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "info@msmrsinternationalindia.com";
    $to = $z;
    $subject = "Welcome To MsMrInternational Event";
    $message1='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<!--[if gte mso 9]>
	<xml>
		<o:OfficeDocumentSettings>
		<o:AllowPNG/>
		<o:PixelsPerInch>96</o:PixelsPerInch>
		</o:OfficeDocumentSettings>
	</xml>
	<![endif]-->
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="format-detection" content="date=no" />
	<meta name="format-detection" content="address=no" />
	<meta name="format-detection" content="telephone=no" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i" rel="stylesheet" />
	<title>*|MC:SUBJECT|*</title>
	

	<style type="text/css" media="screen">
		[style*=sans-serif] { 
			font-family: sans-serif !important
		}

		.text-top a { color:#26252a; text-decoration:none }

		.text-footer a,
		.text-footer-r a { color:#1f1e23; text-decoration:none }

		.text-date2 a { color:#f6de17; text-decoration:none }

		.text-top-white a,
		.text2-center-white a { color:#ffffff; text-decoration:none }

		/* Linked Styles */
		body { padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#1f1e23; -webkit-text-size-adjust:none }
		a { color:#26252a; text-decoration:none }
		p { padding:0 !important; margin:0 !important } 
		img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }

		/* Mobile styles */
		@media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
			table[class="mobile-shell"] { width: 100% !important; min-width: 100% !important; }
			table[class="center"] { margin: 0 auto !important; }
			
			td[class="td"] { width: 100% !important; min-width: 100% !important; }

			div[class="mobile-br-5"] { height: 5px !important; }
			div[class="mobile-br-10"] { height: 10px !important; }
			div[class="mobile-br-15"] { height: 15px !important; }
			div[class="mobile-br-25"] { height: 25px !important; }

			th[class="m-td"],
			td[class="m-td"],
			table[class="m-td"],
			div[class="hide-for-mobile"], 
			span[class="hide-for-mobile"] { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }
			td[class="m-auto"] { width: auto !important; }

			span[class="mobile-block"] { display: block !important; }
			td[class="text-top"],
			td[class="text-top-r"],
			td[class="text-top-grey"],
			td[class="text-top-white"],
			div[class="text-1"],
			div[class="text-footer"],
			div[class="text-footer-r"],
			div[class="footer-title"],
			div[class="img-m-center"] { text-align: center !important; }

			div[class="img-m-left"] { text-align: left !important; }

			div[class="fluid-img"] img,
			td[class="fluid-img"] img { width: 100% !important; max-width: 100% !important; height: auto !important; }
			td[class="fluid-img2"] { width: auto !important; }
			td[class="fluid-img2"] img { width: 100% !important; max-width: 100% !important; height: auto !important; }

			th[class="column"],
			th[class="column-top"],
			th[class="column-bottom"],
			th[class="column-dir"] { float: left !important; width: 100% !important; display: block !important; }

			td[class="content-spacing"] { width: 10px !important; }

			td[class="text-2-c"] { width: 20px !important; }
			div[class="text-footer-c"] { font-size: 11px !important; line-height: 20px !important; }
		}
	</style>
</head>
<body class="body" style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#1f1e23; -webkit-text-size-adjust:none">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#1f1e23">
		<tr>
			<td align="center" valign="top">
				<!-- Header -->
				<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f6de17">
					<tr>
						<td align="center">
							<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
								<tr>
								  <td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; Margin:0">&nbsp;</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<!-- END Header -->
                                  
				<!-- Section 1 -->
				<div mc:repeatable="Select" mc:variant="Section 1">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f4f4f4">
						<tr>
							<td align="center">
								<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell" bgcolor="#800000">
									<tr>
										<td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; Margin:0">
											<!-- Full Width Image -->
											<div class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:left" mc:hideable><img src="https://www.msmrsinternationalindia.com/images/xx.jpeg" mc:edit="image_12" border="0" width="650" height="340" alt="" /></div>
											<!-- END Full Width Image -->

											<!-- Content -->
											<table width="100%" border="0" cellspacing="0" cellpadding="0">
												<tr>
													<td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="30"></td>
													<td>
														<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="30" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

														<div class="h2-black-center" style="color:#26252a; font-family:sans-serif; font-size:26px; line-height:32px; text-align:center; min-width:auto !important"><div mc:edit="text_3"><strong>Welcome To Ms Mr International India 2019</strong></div></div>
														<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="25" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

														<div class="text-center" style="color:white; font-family:sans-serif; font-size:14px; line-height:28px; text-align:center; min-width:auto !important">
															<div mc:edit="text_4">Miss and Mrs International 2019 is an upcoming Beauty Pageant for young girls and lovely ladies to fulfil their dreams in the field of Glamour and Fashion. This event is headed by Mrs. Neha Verma Gandotra.</div>
														</div>
														<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="22" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>


														<div mc:hideable>
															<!-- Button -->
															<table width="100%" border="0" cellspacing="0" cellpadding="0">
																<tr>
																	<td align="center">
																		<table bgcolor="#2e2d33" border="0" cellspacing="0" cellpadding="0">
																			<tr>
																				<td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="22"></td>
																				<td>
																					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="8" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

																					<div class="text-button-y" style="color:#f6de17; font-family:sans-serif; font-size:12px; line-height:16px; text-align:center; text-transform:uppercase; font-weight:bold; min-width:auto !important"><div mc:edit="text_5"><a href="https://www.msmrsinternationalindia.com/" target="_blank" class="link-yellow" style="color:#f6de17; text-decoration:none"><span class="link-yellow" style="color:#f6de17; text-decoration:none">READ MORE</span></a></div></div>
																					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="8" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

																				</td>
																				<td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="22"></td>
																			</tr>
																		</table>
																	</td>
																</tr>
															</table>
															<!-- END Button -->
															<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="12" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

														</div>
													</td>
													<td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="30"></td>
												</tr>
											</table>
											<!-- Content -->
										</td>
									</tr>
								</table>
								<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#1f1e23">
									<tr>
										<td align="center">
											<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell" bgcolor="#f6de17">
												<tr>
													<td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; Margin:0">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="22" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

														<div class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:left"><img src="https://www.allinonecyberteam.com/images/c/yellow_black_top_image.jpg" mc:edit="image_13" style="display: block;" border="0" width="650" height="30" alt="" /></div>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</div>
				<!-- END Section 1 -->

				<!-- Section 2 -->
				<div mc:repeatable="Select" mc:variant="Section 2">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#1f1e23">
						<tr>
						  <td align="center">
								<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell" bgcolor="#26252a">
									<tr>
									  <td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; Margin:0">&nbsp;</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</div>
				<!-- END Section 2 -->

				<!-- Section 3 -->
				<!-- Section 3 -->
				<div mc:repeatable="Select" mc:variant="Section 3">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#1f1e23">
						<tr>
							<td align="center">
								<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell" bgcolor="#26252a">
									<tr>
										<td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; Margin:0">
											<table width="100%" border="0" cellspacing="0" cellpadding="0">
												<tr>
													<td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="30"></td>
													<td>
														<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="50" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td>
														</tr></table>

																												<div class="h3-dark-center" style="color:white; font-family:sans-serif; font-size:22px; line-height:30px; text-align:center; font-weight:bold; min-width:auto !important"><div mc:edit="text_9">
																												Without Unique Id entry Will be Invalid 
<br />                                                                                                          Note:  Plz Come With Your Unique Id</div></div>
														<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="22" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

														<div class="text-white-center" style="color:#eeeeee; font-family:sans-serif; font-size:14px; line-height:28px; text-align:center; min-width:auto !important"><div mc:edit="text_10">
										
											
<div class="jumbotron bg-dark text-white" style="margin:auto;">
<div class="container">
   <table class="table">
    <thead>
      <tr>
        <th>ORDER ID</th>
        <th>NAME</th>
        <th>Email</th>
        <th>CITY</th>
        <th>Ticket Count</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>'.$x.'</td>
        <td>'.$y.'</td>
        <td>'.$b.'</td>
        <td>'.$w.'</td>
        <td>'.$a.'</td>
      </tr>
      </tbody>
  </table>
								
														</div></div>
														<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="24" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>


														<div mc:hideable>
															<!-- Button -->
															<table width="100%" border="0" cellspacing="0" cellpadding="0">
																<tr>
																	<td align="center">
																		<table bgcolor="#f6de17" border="0" cellspacing="0" cellpadding="0">
																			<tr>
																				<td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="22"></td>
																				<td>
																					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="10" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

																					<div class="text-button" style="color:#373737; font-family:sans-serif; font-size:12px; line-height:16px; text-align:left; font-weight:bold; text-transform:uppercase; min-width:auto !important"><div mc:edit="text_11"><a href="https://www.msmrsinternationalindia.com" target="_blank" class="link-black" style="color:#26252a; text-decoration:none"><span class="link-black" style="color:#26252a; text-decoration:none">Visit Website</span></a></div></div>
																					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="10" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

																				</td>
																				<td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="22"></td>
																			</tr>
																		</table>
																	</td>
																</tr>
															</table>
															<!-- END Button -->
															<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="50" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

														</div>
													</td>
													<td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="30"></td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
			  </div>
				<!-- END Section 3 -->

				<!-- Section 4 -->
				<div mc:repeatable="Select" mc:variant="Section 4">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#1f1e23">
						<tr>
						  <td align="center">
					    <table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell" bgcolor="#f6de17">
									<tr>
									  <td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; Margin:0">&nbsp;</td>
									</tr>
							</table>
						  </td>
						</tr>
					</table>
				</div>
				<!-- END Section 4 -->

				<!-- Section 5 -->
			  <div mc:repeatable="Select" mc:variant="Section 5"></div>
				<!-- END Section 5 -->
 
				<!-- Footer -->
				<div mc:repeatable="Select" mc:variant="Footer">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f4f4f4">
						<tr>
							<td align="center">
								<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
									<tr>
										<td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; Margin:0" align="center">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="40" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

											<div mc:hideable>
												<!-- Socials -->
												<table border="0" cellspacing="0" cellpadding="0">
													<tr>
														<td class="img" style="font-size:0pt; line-height:0pt; text-align:left"><a href="https://www.facebook.com/msmrsinternationalindia" target="_blank"><img src="https://www.allinonecyberteam.com/delhi/images/c/facebook.png" mc:edit="image_28" border="0" width="10" height="20" alt="facebook" /></a></td>
														<td class="text-2-c" style="color:#1f1e23; font-family:sans-serif; font-size:12px; line-height:16px; text-align:center; min-width:auto !important" width="27">&nbsp;</td>
														<td class="img" style="font-size:0pt; line-height:0pt; text-align:left">&nbsp;</td>
														<td class="text-2-c" style="color:#1f1e23; font-family:sans-serif; font-size:12px; line-height:16px; text-align:center; min-width:auto !important" width="27">&nbsp;</td>
		
														<td class="img" style="font-size:0pt; line-height:0pt; text-align:left"><a href="https://www.instagram.com/missmrsinternationalindia/" target="_blank"><img src="https://www.allinonecyberteam.com/delhi/images/c/instagram.png" mc:edit="image_32" border="0" width="19" height="21" alt="instagram" /></a></td>

													</tr>
												</table>
												<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="25" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

												<!-- END Socials -->
											</div>
											<div class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:left" mc:hideable><img src="https://www.allinonecyberteam.com/images/c/white_grey_top_image.jpg" mc:edit="image_36" style="display: block;" border="0" width="650" height="55" alt="" /></div>
									  </td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
					
					<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#1f1e23" mc:hideable>
						<tr>
							<td align="center">
								<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
									<tr>
									  <td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; Margin:0" align="center">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#373737">
												<tr>
													<td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="30"></td>
												  <td><div mc:hideable>
															<div class="text2-center-white" style="color:#ffffff; font-family:sans-serif; font-size:12px; line-height:20px; text-align:center; min-width:auto !important">
																<div mc:edit="text_30">Copyright &copy; 2019 Company Name: Ms Mrs International India 2019 </div>
															</div>
															<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="15" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

														</div>
														<div class="hide-for-mobile"></div></td>
													<td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="30"></td>
												</tr>
											</table>
									  </td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="5" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

				</div>
				<div class="hide-for-mobile"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="40" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>
</div>
				<!-- END Footer -->
			</td>
		</tr>
	</table>
</body>
</html>';

    $headers = "From: " .$from . "\r\n";
$headers .= "Reply-To: ". $from . "\r\n";
//$headers .= "CC: aman.srivastava2639@gmail.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    if(mail($to,$subject,$message1, $headers))
    {
    echo "<br><br>We have send email to you ...it will be system generated and it will take 20 to 30 second...
    <br> Please Find the Unique id from Email...Thank you";
    }
    else
    {
        echo "failed";
    }
		

		
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<b>Transaction status is failure </b>" ;
		//var_dump($_POST);
		
	}

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>