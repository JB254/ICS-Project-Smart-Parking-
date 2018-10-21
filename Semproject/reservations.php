<?php 
include('functions.php');
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'semproject'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error()); 
}

$sql = 'SELECT *
        FROM reserve';
$query = mysqli_query($conn, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}


?>
<!DOCTYPE html>
<html lang="en-GB" dir="ltr" prefix="og: http://ogp.me/ns#">
<head>
	<title>Car Parking Company | Reservations</title><meta name="description" content="Book your parking space" />	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="shortcut icon" type="image/x-icon" href="http://vevs.website/web-demo/car-parking-website/app/web/upload/medium/favicon-28.ico">
	<base href="project.html" />
	<style>.preload * {-webkit-transition: none !important;-moz-transition: none !important;-ms-transition: none !important;-o-transition: none !important;}
	#hideAll {position: fixed; left: 0; right: 0; top: 0; bottom: 0; background: #fff; overflow: hidden; z-index: 9999}</style>
	<link rel="stylesheet" href="style.css" /> 
    
    <style type="text/css">
        body {
            font-size: 15px;
            color: #343d44;
            font-family: "segoe-ui", "open-sans", tahoma, arial;
            padding: 0;
            margin: 0;
        }
        table {
            margin: auto;
            font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
            font-size: 12px;
        }

        h1 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            font-size: 17px;
        }

        table td {
            transition: all .5s;
        }
       
        /* Table */
        .data-table {
            border-collapse: collapse;
            font-size: 13px;
            min-width: 537px;
        }

        .data-table th,
        .data-table td {
            border: 1px solid #e1edff;
            padding: 7px 17px;
        }
        .data-table caption {
            margin: 7px;
        }

        /* Table Header */
        .data-table thead th {
            background-color: #508abb;
            color: #FFFFFF;
            border-color: #6ea1cc !important;
            text-transform: uppercase;
        }

        /* Table Body */
        .data-table tbody td {
            color: #353535;
        }
        .data-table tbody td:first-child,
        .data-table tbody td:nth-child(4),
        .data-table tbody td:last-child {
            text-align: right;
        }

        .data-table tbody tr:nth-child(odd) td {
            background-color: #f4fbff;
        }
        .data-table tbody tr:hover td {
            background-color: #ffffa2;
            border-color: #ffff0f;
        }

        /* Table Footer */
        .data-table tfoot th {
            background-color: #e5f5ff;
            text-align: right;
        }
        .data-table tfoot th:first-child {
            text-align: left;
        }
        .data-table tbody td:empty
        {
            background-color: #ffcccc;
        }
    </style>


	</head>
<body class="preload" 
	data-action="Reservations" 
	data-page="reservations.php" 
	data-editor="project.php">
		<div style="display: none" id="hideAll">&nbsp;</div>
	<script id="hideScript">document.getElementById("hideAll").style.display = "block";</script> 
	<div id="pjWrapper" class="wrapper">
	    <div class="bar">
	<div class="shell clearfix">
			<div class="barSocials cms-e-section" >
			<ul>
				<li><a href="https://www.facebook.com" target="_blank" class="linkFacebook">facebook</a></li><li><a href="https://plus.google.com" target="_blank" class="linkGooglePlus">googlePlus</a></li><li><a href="https://www.instagram.com" target="_blank" class="linkInstagram">Instagram</a></li><li><a href="https://www.linkedin.com" target="_blank" class="linkLinkedin">Linkedin</a></li><li><a href="https://www.pinterest.com" target="_blank" class="linkPinterest">Pinterest</a></li><li><a href="https://twitter.com" target="_blank" class="linkTwitter">twitter</a></li>			</ul>
		</div>
						<div class="dropdown-languages">
					<a href="#" class="nav-languages" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<span class="">EN</span>
							<img src="/web-demo/car-parking-website/app/plugins/pjCms/framework/libs/pj/img/flags/gb.png" alt="">
													<span class="caret"></span>
					</a>
			
					<ul class="dropdown-menu">
													<li class="active">
								<a href="reservations.html">
								English&#x200E;<img src="/web-demo/car-parking-website/app/plugins/pjCms/framework/libs/pj/img/flags/gb.png" alt="English"></a>
							</li>
														<li>
								<a href="reservations.html">
								Kiswahili&#x200E;<img src="/web-demo/car-parking-website/app/plugins/pjCms/framework/libs/pj/img/flags/bg.png" alt="Kiswahili"></a>
							</li>
												</ul>
				</div>
						
		<div class="barContacts cms-e-section" >
			<ul class="listContacts">
				<li><i class="ico icoPhone"></i> 0717278364</li>
                <li><i class="ico icoPhone"></i> 0717009692</li>
                <li><a href=""><i class="ico icoMail"></i>jamez.k.boro@gmail.com</a></li>
                <li><a href=""><i class="ico icoMail"></i>bakari.rodney@gmail.com</a></li>
			</ul>
		</div>
	</div>
</div>

<header id="header">
	<div class="shell clearfix">
		<div class="logo wc-thumb btn-gallery-replace" >
			<a href=""><img src="sps3.jpg" alt="" title="" data-id="14" class="wc-image"></a>
		</div><!-- /.logo -->
		
		<nav class="nav">
			<ul>
				<li><a href="project.php">Home</a></li><li class=""><a href="reservations.php">Reservations</a></li><li><a href="locations.html">Locations</a></li><li><a href="contactus.html">Contact Us</a></li>			</ul>
		</nav><!-- /.nav -->
	</div>

</header>	    <div class="main">
	<div class="shell">
		<article class="article articleReservations sectionHeadReservations sectionHeadSearch">
			<header class="articleHead cms-e-section" >
				<h1><span class="wc-editable" data-pk="ws_reservations_title" data-type="text">Reservations</span></h1>
				
				<div class="paragraph"><div class="wc-editable" data-pk="ws_reservations_desc" data-type="textarea">STEP 1 of the car booking process. Replace the dummy content here with your own. You can add different content on each step.<div><span style="line-height: 20.3px;"><br></span><div>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div></div></div></div>
			</header>
		</article>
		<article class="article articleReservations sectionHeadReservations sectionHeadSpaces">
			<header class="articleHead cms-e-section" >
				<h1><span class="wc-editable" data-pk="ws_choose_your_space" data-type="text">Choose your space</span></h1>
				
				<div class="paragraph"><span class="wc-editable" data-pk="ws_choose_your_space_desc" data-type="textarea">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span></div>
			</header>
		</article>
		<article class="article articleReservations sectionHeadReservations sectionHeadExtras">
			<header class="articleHead cms-e-section" >
				<h1><span class="wc-editable" data-pk="ws_add_extras" data-type="text">Extras</span></h1>
				
				<div class="paragraph"><span class="wc-editable" data-pk="ws_add_extras_desc" data-type="textarea">Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</span></div>
			</header>
		</article>
		<article class="article articleReservations sectionHeadReservations sectionHeadCheckout">
			<header class="articleHead cms-e-section" >
				<h1><span class="wc-editable" data-pk="ws_checkout" data-type="text">Checkout</span></h1>
				
				<div class="paragraph"><div class="wc-editable" data-pk="ws_checkout_desc" data-type="textarea">STEP 4 of the car booking process. Replace the dummy content here with your own. You can add different content on each step.
<div>
<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;">Excepteur </span>sint<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;"> </span>occaecat<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;"> </span>cupidatat<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;"> </span>non<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;"> </span>proident<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;">, </span>sunt<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;"> in culpa </span>qui<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;"> </span>officia<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;"> </span>deserunt<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;"> </span>mollit<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;"> </span>anim<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;"> id est </span>laborum<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;">. Lorem ipsum dolor sit </span>amet<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;">, </span>consectetur<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;"> </span>adipisicing<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;"> </span>elit<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;">, </span>sed<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;"> do </span>eiusmod<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;"> </span>tempor<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;"> </span>incididunt<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;"> ut </span>labore<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;"> et </span>dolore<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;"> </span>magna<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;"> </span>aliqua<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;">. Ut </span>enim<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;"> ad minim </span>veniam<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;">, </span>quis<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;"> </span>nostrud<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;"> </span>exercitation<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;"> </span>ullamco<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;"> </span>laboris<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;"> nisi ut </span>aliquip<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;"> ex ea </span>commodo<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;"> </span>consequat<span style="line-height: 1.4em; word-spacing: normal; background-color: initial;">.</span></div></div></div>
			</header>
		</article>
		
		<article class="article articleReservations sectionHeadReservations sectionHeadConfirm">
			<header class="articleHead cms-e-section" >
				<h1><span class="wc-editable" data-pk="ws_review_confirm" data-type="text">Review & Confirm</span></h1>
				
				<div class="paragraph"><span class="wc-editable" data-pk="ws_review_confirm_desc" data-type="text"></span></div>
			</header>
		</article>
		
		<article class="article articleReservations sectionHeadReservations sectionHeadComplete">
			<header class="articleHead cms-e-section" >
				<h1><span class="wc-editable" data-pk="ws_complete" data-type="text">Booking Completed</span></h1>
				
				<div class="paragraph"><span class="wc-editable" data-pk="ws_complete_desc" data-type="text">Thank you! Your booking has been made. Please click on the "Start over" button to make new booking.</span></div>
			</header>
		</article>

		<section class="sectionCarRentalScript section sectionReservations articleReservations">
			 <div id="wrapper">
        <section id="admin">
    <h1>RESERVATIONS MADE</h1>
    <table class="data-table"> 
        <thead>
            <tr>
                <th>NO</th>
                <th>Location</th>
                <th>Entry Date</th>
                <th>Entry Time</th>
                <th>Exit Date</th>
                <th>Exit Time</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $no     = 1;
        while ($row = mysqli_fetch_array($query))
        {
            echo '<tr>
                    <td>'.$no.'</td>
                    <td>'.$row['location_id'].'</td>
                    <td>'.$row['entry_date'].'</td>
                    <td>'.$row['entry_time'].'</td>
                    <td>'.$row['exit_date'].'</td>
                    <td>'.$row['exit_time'].'</td>
                </tr>';
            $no++;
        }?>
        </tbody>
    </table>
</section>
    </div>
			<div id="pjCpContainer"></div>
		</section>
	</div>
</div>
<style>
	.sectionHeadReservations{display: none;}
</style>
	    <footer id="footer">
	<div class="shell">
		<div class="footer-top">
			<div class="logo wc-thumb btn-gallery-replace" >
				<a href=""><img src="sps3.jpg" alt="" title="" data-id="14" class="wc-image"></a>
			</div><!-- /.logo -->
							<div class="socials cms-e-section"  >
					<ul>
						<li><a href="https://www.facebook.com" target="_blank" class="linkFacebook">facebook</a></li><li><a href="https://plus.google.com" target="_blank" class="linkGooglePlus">googlePlus</a></li><li><a href="https://www.instagram.com" target="_blank" class="linkInstagram">Instagram</a></li><li><a href="https://www.linkedin.com" target="_blank" class="linkLinkedin">Linkedin</a></li><li><a href="https://www.pinterest.com" target="_blank" class="linkPinterest">Pinterest</a></li><li><a href="https://twitter.com" target="_blank" class="linkTwitter">twitter</a></li>					</ul>
				</div>
						</div><!-- /.footer-top -->

		<p class="copyright">
			<span class="cms-e-ib cms-e-section">

				&copy; 2018 <a href="">Car Park Company</a> <span class="wc-editable" data-pk="ws_rights_reserved" data-type="text">All rights reserved.</span> 
				<a href="terms.html"><span class="wc-editable" data-pk="ws_menu_terms" data-type="action">Terms</span></a>			</span>
		</p><!-- /.copyright -->

		<p class="credits"><a href="https://www.vevs.com/car-parking-websites/" target="_blank">Car Parking Website Builder</a> by <a href="https://www.vevs.com/" target="_blank">VEVS.com</a></p>	</div>
</footer>	</div>
	<noscript id="deferred-styles">
		<link rel="stylesheet" type="text/css" href="http://vevs.website/web-demo/car-parking-website/index.php?controller=pjFront&action=pjActionLoadCss&a=pjActionReservations&widget=on&script_id=8&demo=3&template=template_3&theme=theme1" id="deferred-sheet" />
    </noscript>
	<script>
    (function (w, d) {
		var loadDeferredStyles = function() {
			var addStylesNode = d.getElementById("deferred-styles");
			var replacement = d.createElement("div");
			replacement.innerHTML = addStylesNode.textContent;
			d.body.appendChild(replacement);
			
			var img = d.createElement('img');
			img.onerror = function () {
				var el = d.getElementById("hideAll");
				el.parentNode.removeChild(el);
				el = d.getElementById("hideScript");
				el.parentNode.removeChild(el);
				w.setTimeout(function() {
					d.body.className = '';
				}, 0);
			};
			img.src = d.getElementById('deferred-sheet').getAttribute('href');

			addStylesNode.parentElement.removeChild(addStylesNode);
		};
		var raf = w.requestAnimationFrame || w.mozRequestAnimationFrame || w.webkitRequestAnimationFrame || w.msRequestAnimationFrame;
		if (raf) raf(function() { w.setTimeout(loadDeferredStyles, 0); });
		else w.addEventListener('load', loadDeferredStyles);
	
		w.addEventListener('load', function () {
			var i, iCnt, v,
				vizimgDefer = d.getElementsByTagName('img');
			for (i = 0, iCnt = vizimgDefer.length; i < iCnt; i += 1) {
				v = vizimgDefer[i].getAttribute('data-v');
				if (v) {
					vizimgDefer[i].setAttribute('src', v);
				}
			}
		}, true);
	
		var fired = false;
		w.addEventListener("scroll", function() {
			if ((d.documentElement.scrollTop != 0 && fired === false) || (d.body.scrollTop != 0 && fired === false)) {
				var i, iCnt, src, imgDefer = d.getElementsByTagName('img');
				for (i = 0, iCnt = imgDefer.length; i < iCnt; i += 1) {
					src = imgDefer[i].getAttribute('data-src');
					if (src) {
						imgDefer[i].setAttribute('src', src);
					}
				}
				fired = true;
			}
		}, true);
    })(window, document);
	WebFontConfig = {
		classes: false,
		events: false,
		google: {
			families: ['Amiri:400,400i,700,700i:arabic',
				'Arimo:400,700i,700,400i:hebrew',
				'Open Sans:400,300,400i,300i,600,600i,700,700i,800,800i:latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
				'Noto Serif:400,700,700i,400i:latin,cyrillic,greek-ext,vietnamese,latin-ext,cyrillic-ext,greek',
				'Raleway:300,300i,400,400i,700,700i']
		}
	};
	(function(d) {
		var wf = d.createElement('script'), s = d.scripts[0];
		wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
		wf.async = true;
		s.parentNode.insertBefore(wf, s);
	})(document);	</script>
	</body>
</html>