<?php 
include('functions.php');
?>
<!DOCTYPE html>
<html lang="en-GB" dir="ltr" prefix="og: http://ogp.me/ns#">
<head>
    <title>Smart Parking | Home</title><meta name="description" content="Welcome to Car Parking Company website." />  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="">
    <base href="project.html" />
    <style>.preload * {-webkit-transition: none !important;-moz-transition: none !important;-ms-transition: none !important;-o-transition: none !important;}
    #hideAll {position: fixed; left: 0; right: 0; top: 0; bottom: 0; background: #fff; overflow: hidden; z-index: 9999}</style>
    <link rel="stylesheet" href="style.css" />  <script type="text/javascript" src="function.js" charset="UTF-8"></script><script>
    function loadScript(src, attr) {
        var element = document.createElement("script");
        element.src = src; element.defer = true; element.async = true;
        if (attr) {
            for (var x in attr) {
                if (attr.hasOwnProperty(x)) {
                    element.setAttribute(x, attr[x]);
                }
            }
        }
        document.body.appendChild(element);
    }
    function downloadJSAtOnload() {
        loadScript('http://vevs.website/web-demo/car-parking-website/index.php?controller=pjFront&a=pjActionIndex&action=pjActionLoadScript&locale_id=1&template=template_3&theme=theme1');
        loadScript('../../../api/widget/script.js', {
                'id': 'vevs-signup-widget',
                'data-template': 'template_3',
                'data-sid': '8',
                'data-demo': '3'
            }); }
    if (window.addEventListener) {
        window.addEventListener("load", downloadJSAtOnload, false);
    } else if (window.attachEvent) {
        window.attachEvent("onload", downloadJSAtOnload);
    } else { 
        window.onload = downloadJSAtOnload;
    }
    </script>
    </head>
<body class="preload" 
    data-action="reservations.html" 
    data-page="home" 
    data-editor="reservations.html">
        <div style="display: none" id="hideAll">&nbsp;</div>
    <script id="hideScript">document.getElementById("hideAll").style.display = "block";</script> 
    <div id="pjWrapper" class="wrapper">
        <div class="bar">
    <div class="shell clearfix">
            <div class="barSocials cms-e-section" >
            <ul>
                <li><a href="https://www.facebook.com" target="_blank" class="linkFacebook">facebook</a></li><li><a href="https://plus.google.com" target="_blank" class="linkGooglePlus">googlePlus</a></li><li><a href="https://www.instagram.com" target="_blank" class="linkInstagram">Instagram</a></li><li><a href="https://www.linkedin.com" target="_blank" class="linkLinkedin">Linkedin</a></li><li><a href="https://www.pinterest.com" target="_blank" class="linkPinterest">Pinterest</a></li><li><a href="https://twitter.com" target="_blank" class="linkTwitter">twitter</a></li>            </ul>
        </div>
                        <div class="dropdown-languages">
                    <a href="#" class="nav-languages" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="">EN</span>
                            <img src="/web-demo/car-parking-website/app/plugins/pjCms/framework/libs/pj/img/flags/gb.png" alt="">
                                                    <span class="caret"></span>
                    </a>
            
                    <ul class="dropdown-menu">
                                                    <li class="active">
                                <a href="locale/en-GB/home/">
                                English&#x200E;<img src="/web-demo/car-parking-website/app/plugins/pjCms/framework/libs/pj/img/flags/gb.png" alt="English"></a>
                            </li>
                                                        <li>
                                <a href="locale/bg-BG/home/">
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
                <li class="current"><a href="">Home</a></li><li><a href="reservations.php">Reservations</a></li><li><a href="locations.html">Locations</a></li><li><a href="contactus.html">Contact Us</a></li>           </ul>
        </nav><!-- /.nav -->
    </div>
</header>       <div class="intro cms-e-section" >
    <div class="introImage">
        <img src="http://vevs.website/web-demo/car-parking-website/app/web/upload/medium/intro-image-19-1510560799-16-1535111248.jpg" alt="" title="" data-id="16" class="wc-image"/>
        
        <span class="introImageOverlay"></span>
    </div>
            <div class="introContent">
            <div class="shell clearfix">
                <div class="formRent form formFilter">
                    <form action="project.php" method="post"  class="pjCpSearchForm" data-url="reservations.html">
                        <?php echo display_error(); ?>
                        <div id="pjCpCalendarLocale" style="display: none;" data-months="January_February_March_April_May_June_July_August_September_October_November_December" data-days="Su_Mo_Tu_We_Th_Fr_Sa"></div>
                        <header class="formHead">
                            <h1><span class="wc-editable" data-pk="ws_select_your_dates" data-type="text">Select your dates</span></h1>
                        </header>
    
                        <div class="formBody">
                            <div class="formRow">
                                <label class="formLabel"><span class="wc-editable" data-pk="ws_location" data-type="text">Location</span></label>
                                
                                <div class="formControls">
                                    <select name="location_id" id="location_id" class="select">
                                        <option>Select Parking Sites</option>
                                        <option value="Junction Mall Parkin">Junction Mall Parking</option>
                                        <option value="Intercontinental Parking">Intercontinental Parking</option>
                                        <option value="Reinsurance Plaza Parking">Reinsurance Plaza Parking</option>
                                        <option value="University of Nairobi">University of Nairobi</option>
                                        <option value="Prestige Plaza Parking">Prestige Plaza Parking</option>
                                        <option value="Yaya Plaza Parking">Yaya Plaza Parking</option>
                                        <option value="Nyayo House Parking">Nyayo House Parking</option>
                                    </select>
                                </div>
                                                                    <div class="formRowActions">
                                        <p>
                                            <i class="ico icoPin"></i>
                                            <span class="wc-editable" data-pk="ws_cannot_find_location" data-type="text">Can't find the location?</span> <a href="map marker.html"><span class="wc-editable" data-pk="ws_view_map" data-type="text">View Map</span></a>
                                        </p>
                                    </div>
                                                            
                            </div>
    
                            <div class="formCols">
                                <div class="formCol formCol1of2">
                                    <div class="formRow form-group dateTimePick dateTimePickFrom">
                                        <label for="" class="formLabel"><span class="wc-editable" data-pk="ws_entry_date_time" data-type="text">Entry date & time</span></label>
                                        
                                        <div class="formControls">
                                            <div class="formCols formColsSmall">
                                                <div class="formCol formCol1of2">
                                                    <div class="input-group datePick datePickFrom">
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                                        </span>
                                                        <input type="text" id="cp_date_from" name="entry_date" class="form-control field required" value="18-10-2018" readonly="readonly" data-msg-required="Entry date is required."/>
                                                    </div>
                                                </div>
    
                                                <div class="formCol formCol1of2">
                                                    <div class="input-group timePick timePickFrom" data-rel="from">
                                                        <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                        </span>
                                                        <input type="text" id="cp_time_from" name="entry_time" class="form-control field required" value="09:00" readonly data-msg-required="Entry time is required."/>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" id="cp_hour_from" name="hour_from" value="9" />
                                            <input type="hidden" id="cp_minutes_from" name="minutes_from" value="0" />
                                        </div>
                                    </div>
                                </div>
    
                                <div class="formCol formCol1of2">
                                    <div class="formRow form-group dateTimePick dateTimePickTo">
                                        <label for="" class="formLabel"><span class="wc-editable" data-pk="ws_exit_date_time" data-type="text">Exit date & time</span></label>
                                            
                                        <div class="formControls">
                                            <div class="formCol formCol1of2">
                                                <div class="input-group datePick datePickTo">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                                    </span>
                            
                                                    <input type="text" id="cp_date_to" name="exit_date" class="form-control field required" value="19-10-2018" readonly="readonly" data-msg-required="Exit date is required."/>
                                                </div>
                                            </div>
                                                                
                                            <div class="formCol formCol1of2">
                                                <div class="input-group timePick timePickTo" data-rel="to">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                    </span>
                            
                                                    
                            
                                                    <input type="text" id="cp_time_to" name="exit_time" class="form-control field required" value="09:00" readonly data-msg-required="Exit time is required."/>
                                                </div>
                                            </div>
                                            <input type="hidden" id="cp_hour_to" name="hour_to" value="9" />
                                            <input type="hidden" id="cp_minutes_to" name="minutes_to" value="0" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <footer class="formFoot">
                            <div class="formActions">

                               <!-- <button type="submit" name="space" class="btn btn-primary" id="reservations.html"><span class="reservations.html" data-pk="reservations.html" data-type="action">Choose Your Space</span></button> -->


                                <span class="reservations.html" data-pk="reservations.html" data-type="action">
                                    <input type="submit" name="space_btn" value="Choose Your Space" class="btn btn-primary"/></span> 
                                <p id="pjCpSearchErrorMsg" class="crError text-danger" style="display: none;">Exit date & time must be greater than entry date & time.</p>
                            </div>
                        </footer>
                    </form>
                </div>
            </div>
        </div>
        </div>

<div class="main">
                <section class="sectionOffers">
                <div class="shell">
                    <header class="sectionHead">
                        <div class="cms-e-ib cms-e-section">
                            <h2><span class="wc-editable" data-pk="ws_special_offers" data-type="text">Special Offers</span></h2>
                        </div>
                    </header>
        
                    <div class="sectionBody">
                        <ul class="offers clearfix">
                                                            <li class="offer cms-e-section" >
                                    <div class="offerContent">
                                        <h4>Offer #1</h4>
            
                                        <div class="paragraph">
                                            Book a parking space with us and get a parking space at a lower cost a day                                       </div>
            
                                        <div class="offerActions">
                                            <p>
                                                for <strong>Ksh 400.00</strong>
                                                per day                                         </p>
                                            <a href="SeatPreview/index.php" class="btn btn-secondary">book now</a>                                      </div>
                                    </div>
                                                                        <div class="offerImage">
                                                                            <a href="SeatPreview/index.php">
                                            <img src="http://vevs.website/web-demo/car-parking-website/app/web/upload/source/080776b7ef19ee6e708f4e3e4f5d5bdf.jpg" alt="Offer #1">
                                        </a>
                                                                            </div>
                                </li>
                                                                <li class="offer cms-e-section" >
                                    <div class="offerContent">
                                        <h4>Offer #2</h4>
            
                                        <div class="paragraph">
                                             Book a parking space with us and get a parking space at a lower cost per week.                                       </div>
            
                                        <div class="offerActions">
                                            <p>
                                                for <strong>Ksh 1500.00</strong>
                                                per week                                            </p>
                                            <a href="SeatPreview/index.php" class="btn btn-secondary">book now</a>                                      </div>
                                    </div>
                                                                        <div class="offerImage">
                                                                            <a href="SeatPreview/index.php">
                                            <img src="http://vevs.website/web-demo/car-parking-website/app/web/upload/source/44416370388fe1796ab2c6670f308cc5.jpg" alt="Offer #2">
                                        </a>
                                                                            </div>
                                </li>
                                                                <li class="offer cms-e-section" >
                                    <div class="offerContent">
                                        <h4>Offer #3</h4>
            
                                        <div class="paragraph">
                                              Book a parking space with us and get a parking space at a lower cost per month.                                        </div>
            
                                        <div class="offerActions">
                                            <p>
                                                for <strong>Ksh 4500.00</strong>
                                                per month                                           </p>
                                            <a href="SeatPreview/index.php" class="btn btn-secondary">book now</a>                                      </div>
                                    </div>
                                                                        <div class="offerImage">
                                                                            <a href="SeatPreview/index.php">
                                            <img src="http://vevs.website/web-demo/car-parking-website/app/web/upload/source/4fab65c4487e5c3252e543bf788c5ae8.jpg" alt="Offer #3">
                                        </a>
                                                                            </div>
                                </li>

                                 <li class="offer cms-e-section" >
                                    <div class="offerContent">
                                        <h4>Offer #4</h4>
            
                                        <div class="paragraph">
                                            Get your car washed.                                       </div>
            
                                        <div class="offerActions">
                                            <p>
                                                for <strong>Ksh 300.00</strong>
                                                per vehicle                                       </p>
                                            <a href="SeatPreview/index.php" class="btn btn-secondary">book now</a>                                      </div>
                                    </div>
                                                                        <div class="offerImage">
                                                                            <a href="SeatPreview/index.php">
                                            <img src="cwash.jpg" alt="Offer #1">
                                        </a>
                                                                            </div>
                                </li>
                                                        </ul>
                    </div>
                </div>
            </section>
            
    <section class="sectionAbout">
        <div class="shell">
            <header class="sectionHead">
                <div class="cms-e-ib cms-e-section">
                    <h2><span class="wc-editable" data-pk="ws_who_we_are" data-type="text">Who We Are</span></h2>
                </div>
            </header>

            <div class="sectionBody">
                <ul class="articles">
                    

                    

                    <li class="articleExcerpt cms-e-section" >
                        <div class="articleExcerptImage">
                            <img src="http://vevs.website/web-demo/car-parking-website/app/web/upload/medium/article-about-image-2-21-1510560799-18-1535111248.jpg" alt="" title="" data-id="18" class="wc-image">
                        </div>

                        <div class="articleExcerptContent">
                            <h6><span class="wc-editable" data-pk="ws_article_title_2" data-type="text">About Us</span></h6>

                            <div class="paragraph">
                                <span class="wc-editable" data-pk="ws_article_desc_2" data-type="textarea">We provide an easy and fast way to locate and reserve parking spots all around Nairobi. We aim to please!</span>                          </div>
                        </div>
                    </li>

                </ul>

            </div>

            <p>
                <div class="logout">
                    <a href="login.php" class="btn btn-secondary">Logout</a>
                </div>

            </p>
        </div>
       
    </section>

    <section class="sectionServices">
        <div class="shell">
            
            <div class="tabs">
                <div class="tab-content tabsBody">
                    <div role="tabpanel" class="tab-pane active cms-e-section"  id="service1">
                        <div class="row articleContent">
<!-- /.col-md-8 -->
                        </div><!-- /.row -->
                    </div>
                </div>
            </div>
        </div><!-- /.shell -->
    </section>
</div>      <footer id="footer">
    <div class="shell">
        <div class="footer-top">
            <div class="logo wc-thumb btn-gallery-replace" >
                <a href=""><img src="sps3.jpg" alt="" title="" data-id="14" class="wc-image"></a>
            </div><!-- /.logo -->
                            <div class="socials cms-e-section"  >
                    <ul>
                        <li><a href="https://www.facebook.com" target="_blank" class="linkFacebook">facebook</a></li><li><a href="https://plus.google.com" target="_blank" class="linkGooglePlus">googlePlus</a></li><li><a href="https://www.instagram.com" target="_blank" class="linkInstagram">Instagram</a></li><li><a href="https://www.linkedin.com" target="_blank" class="linkLinkedin">Linkedin</a></li><li><a href="https://www.pinterest.com" target="_blank" class="linkPinterest">Pinterest</a></li><li><a href="https://twitter.com" target="_blank" class="linkTwitter">twitter</a></li>                    </ul>
                </div>
                        </div><!-- /.footer-top -->

        <p class="copyright">
            <span class="cms-e-ib cms-e-section">

                &copy; 2018 <a href="">Smart Parking </a> <span class="wc-editable" data-pk="ws_rights_reserved" data-type="text">All rights reserved.</span> 
                <a href="terms.html"><span class="wc-editable" data-pk="ws_menu_terms" data-type="action">Terms</span></a>          </span>
        </p><!-- /.copyright -->

        <p class="credits"><a href="" target="_blank">Smart Parking</a> by <a href="project.html" target="_blank">Smart Parking</a></p> </div>
</footer>   </div>
    <noscript id="deferred-styles">
        <link rel="stylesheet" type="text/css" href="http://vevs.website/web-demo/car-parking-website/index.php?controller=pjFront&action=pjActionLoadCss&a=pjActionIndex&widget=on&script_id=8&demo=3&template=template_3&theme=theme1" id="deferred-sheet" />
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
    })(document);   </script>
    </body>
</html>