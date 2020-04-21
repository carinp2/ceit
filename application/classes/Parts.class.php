<?php
/**
 * @author Carin Pretorius - CEIT Development
 * Created on 2017-08-28
 */

class Parts {

		/**
	 * Return page URL with http://
	 *
	 * @return string
	 */
	public static function curPageURL() {
		$pageURL = 'http';
		if($_SERVER["HTTPS"] == "on") {
			$pageURL .= "s";
		}
		if($_SERVER["SERVER_NAME"] == '127.0.0.1') {
			$pageURL .= "://";
		}
		else {
			$pageURL .= "://www.";
		}
		if($_SERVER["SERVER_PORT"] != "80") {
			$pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
		}
		else {
			$pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
		}

		return $pageURL;
	}

	public function getHtmlBegin(){
		$vString = "<!DOCTYPE html>";
		$vString .= "<html lang=\"en\">";
			$vString .= "<head>";

				$vString .= "<!-- Global site tag (gtag.js) - Google Analytics -->";
				$vString .= "<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-136333204-1\"></script>";
				$vString .= "<script>";
				$vString .= "  window.dataLayer = window.dataLayer || [];";
				$vString .= "  function gtag(){dataLayer.push(arguments);}";
				$vString .= "  gtag('js', new Date());";
				$vString .= "  gtag('config', 'UA-136333204-1');";
				$vString .= "</script>";

				$vString .= "<meta charset=\"utf-8\">";
				$vString .= "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">";
				$vString .= "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
				$vString .= "<meta content=\"CEIT Development provides clients with cost-effective solutions to their IT and GIS related requirements\" name=\"description\">";
				$vString .= "<meta content=\"website development, website, custom, cms, ecommerce, e-commerce, responsive, design, pretoria, MS Access, MS SQL Server, Informix, Informix Spatial Blade, MySQL, PostgreSQL, Apache, Tomcat, JavaServer Faces, PHP, ASP, Informix WebDataBlade, XML, HTML, CSS, JavaScript, VBScript, Net Beans, Eclipse, Linux, Windows, Online price comparison integration, Pricecheck, Shopmania, MyGate payment gateway, Google AdSense integration, Google Analytics setup, Search Engine Optimization, Social Media integration\" name=\"keywords\">";
				$vString .= "<meta content=\"CEIT Development\" name=\"author\">";
				$vString .= "<meta name=\"google-site-verification\" content=\"_JnNKJTxEOWAa0CO-l-Cg4EnEFXnvJq6LNcRsFowtHM\" />";
				$vString .= "<title>CEIT Development CC</title>";
				$vString .= "<link rel=\"icon\" href=\"images/icon_f.ico\" type=\"image/x-icon\">";
				$vString .= "<link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">";
				$vString .= "<link href=\"ionicons/css/ionicons.min.css\" rel=\"stylesheet\">";
				$vString .= "<link href=\"css/animate.min.css\" rel=\"stylesheet\">";
				$vString .= "<link href=\"".$_SESSION['SessionCeitStyle']."\" rel=\"stylesheet\">";
				$vString .= "<link href=\"css/menu.css\" rel=\"stylesheet\">";
				$vString .= "<link href=\"css/aos.css\" rel=\"stylesheet\">";
				$vString .= "<!--[if lt IE 9]>";
					$vString .= "<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>";
					$vString .= "<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>";
				$vString .= "<![endif]-->";
				$vString .= "<script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>";
			$vString .= "</head>";
			$vString .= "<body>";
				$vString .= "<div id=\"preloader\">";
				$vString .= "<div id=\"status\">";
					$vString .= "<div class=\"preloader\" aria-busy=\"true\" aria-label=\"Loading, please wait.\" role=\"progressbar\"></div>";
				$vString .= "</div>";
			$vString .= "</div>";
		return $vString;
	}

	public static function getEndHtml(){
				$vString = Modals::loadModals();
			    $vString .= "<script src=\"js/jquery.js\"></script>";
			    $vString .= "<script src=\"js/bootstrap.min.js\"></script>";
			    $vString .= "<script src=\"js/plugins.js\"></script>";
			    $vString .= "<script src=\"js/aos.js\"></script>";
			    $vString .= "<script src=\"js/jquery.form.js\"></script>";
			    $vString .= "<script src=\"js/jquery.validate.min.js\"></script>";
			    $vString .= "<script src=\"js/menu.js\"></script>";
			    $vString .= "<script src=\"".$_SESSION['SessionCeitScript']."\"></script>";
			$vString .= "</body>";
		$vString .= "</html>";
		return $vString;
	}

	public static function getMenu(){
	    $vString = "<header class=\"navbar-fixed-top\">";
	        $vString .= "<div id=\"cssmenu\">";
	            $vString .= "<ul id=\"menu-ul\">";
	            	$vString .= " <li><a href=\"#home\" id=\"menu-li1\">Home</a></li>";
	            	$vString .= " <li><a href=\"#about\" id=\"menu-li2\">About CEIT</a></li>";
	                $vString .= "<li><a href=\"#experience\" id=\"menu-li3\">My skills</a></li>";
	                $vString .= "<li><a href=\"#projects\" id=\"menu-li4\">My projects</a></li>";
	                $vString .= "<li><a href=\"#partners\" id=\"menu-li5\">My partners</a></li>";
	                $vString .= "<li><a href=\"#contact\" id=\"menu-li6\">Contact me</a></li>";
	            $vString .= "</ul>";
	        $vString .= "</div>";
	    $vString .= "</header>";
		return $vString;
	}

	public static function getHome(){
	    $vString = "<div class=\"section\" id=\"home\" data-stellar-background-ratio=\"0.5\">";
	    	$vString .= "<div class=\"container\">";
	    		$vString .= "<div class=\"disply-table\">";
	    			$vString .= "<div class=\"table-cell\" data-aos=\fade-up\" data-aos-delay=\"0\">";
	    				$vString .= "<h4>Carin Pretorius</h4>";
	    				$vString .= "<h1>CEIT Development</h1>";
	    			$vString .= "</div>";
    			$vString .= "</div>";
    		$vString .= "</div>";
    	$vString .= "</div>";
		return $vString;
	}

	public static function getAbout(){
	    $vString = "<div class=\"section\" id=\"about\">";
	    	$vString .= "<div class=\"container\">";
	    		$vString .= "<div class=\"col-md-6\" data-aos=\"fade-up\">";
	    			$vString .= "<h4>01</h4>";
	    			$vString .= "<h1 class=\"size-50\">About<br>CEIT</h1>";
	    			$vString .= "<div class=\"h-50\"></div>";
	    			$vString .= "<p>CEIT Development was founded in April 2000 and has since established itself as a successful SMME and important role player in the Information Technology (IT) and Geographical Information System (GIS) environment.</p>";
	                $vString .= "<p>I specialize in the development of online systems including custom management systems, database design and -development, geographic information systems (GIS) and the integration of eCommerce solutions.</p>";
					$vString .= "<p>In the last 18 years, I have built up an extensive and loyal client base. See more about my clients and projects <a href=\"#projects\" id=\"color\">here</a>.</p><br>";
					 $vString .= "<img src=\"images/ceit_2010.jpg\" class=\"img-responsive\" alt=\"CEIT Development\"/>";
	                $vString .= "<div class=\"h-50\"></div>";
	            $vString .= "</div>";
	            $vString .= "<div class=\"col-md-6 about-img-div\">";
	                $vString .= "<div class=\"about-border\" data-aos=\"fade-up\" data-aos-delay=\".5\"></div>";
	                $vString .= "<img src=\"images/about2.png\" width=\"400\" class=\"img-responsive\" alt=\"About\" data-aos=\"fade-right\" data-aos-delay=\"0\" id=\"img-border\"/>";
	                $vString .= "<div id=\"about-img-byline\"><a href=\"http://www.freepik.com\" target=\"_blank\" id=\"gray\">Image designed by Creativeart / Freepik</a></div>";
	            $vString .= "</div>";
	        $vString .= "</div>";
	    $vString .= "</div>";
		return $vString;
	}

	public static function getSkills(){
		$vString = "<div class=\"section\" id=\"experience\">";
	        $vString .= "<div class=\"container\">";
	            $vString .= "<div class=\"col-md-12\">";
	                $vString .= "<h4>02</h4>";
	                $vString .= "<h1 class=\"size-50\">My <br>Skills</h1>";
	                $vString .= "<h3>I have extensive experience in the following fields:</h3>";
	                $vString .= "<div class=\"h-50\"></div>";
	            $vString .= "</div>";
	            $vString .= "<div class=\"col-md-12\">";
	                $vString .= "<ul class=\"timeline\">";
	                    $vString .= "<li class=\"timeline-event\" data-aos=\"fade-up\">";
	                        $vString .= "<label class=\"timeline-event-icon\"></label>";
	                        $vString .= "<div class=\"timeline-event-copy\">";
	                            $vString .= "<p class=\"timeline-event-thumbnail\">Databases</p>";
	                            $vString .= "<ul>";
		                            $vString .= "<li>MS Access</li>";
		                            $vString .= "<li>Informix, Informix Spatial Blade</li>";
		                            $vString .= "<li>MySQL</li>";
		                            $vString .= "<li>PostgreSQL</li>";
		                            $vString .= "<li>Oracle</li>";
	                            $vString .= "</ul>";
	                        $vString .= "</div>";
	                    $vString .= "</li>";
	                    $vString .= "<li class=\"timeline-event\" data-aos=\"fade-up\">";
	                        $vString .= "<label class=\"timeline-event-icon\"></label>";
	                        $vString .= "<div class=\"timeline-event-copy\">";
	                            $vString .= "<p class=\"timeline-event-thumbnail\">Web servers</p>";
	                            $vString .= "<ul>";
									$vString .= "<li>Apache</li>";
									$vString .= "<li>Tomcat</li>";
	                            $vString .= "</ul>";
	                        $vString .= "</div>";
	                    $vString .= "</li>";
	                    $vString .= "<li class=\"timeline-event\" data-aos=\"fade-up\">";
	                        $vString .= "<label class=\"timeline-event-icon\"></label>";
	                        $vString .= "<div class=\"timeline-event-copy\">";
	                            $vString .= "<p class=\"timeline-event-thumbnail\">Programming languages</p>";
	                            $vString .= "<ul>";
									$vString .= "<li>PHP</li>";
									$vString .= "<li>Informix WebDataBlade</li>";
									$vString .= "<li>XML</li>";
									$vString .= "<li>HTML5</li>";
									$vString .= "<li>CSS</li>";
									$vString .= "<li>JavaScript</li>";
									$vString .= "<li>jQuery</li>";
									$vString .= "<li>Ajax</li>";
									$vString .= "<li>Bootstrap</li>";
	                            $vString .= "</ul>";
	                        $vString .= "</div>";
	                    $vString .= "</li>";
	                    $vString .= "<li class=\"timeline-event\" data-aos=\"fade-up\">";
	                        $vString .= "<label class=\"timeline-event-icon\"></label>";
	                        $vString .= "<div class=\"timeline-event-copy\">";
	                            $vString .= "<p class=\"timeline-event-thumbnail\">IDE's</p>";
	                            $vString .= "<ul>";
									$vString .= "<li>Net Beans</li>";
									$vString .= "<li>Eclipse</li>";
	                            $vString .= "</ul>";
	                        $vString .= "</div>";
	                   $vString .= "</li>";
	                   $vString .= "<li class=\"timeline-event\" data-aos=\"fade-up\">";
	                        $vString .= "<label class=\"timeline-event-icon\"></label>";
	                        $vString .= "<div class=\"timeline-event-copy\">";
	                            $vString .= "<p class=\"timeline-event-thumbnail\">Online price comparison integration</p>";
	                            $vString .= "<ul>";
									$vString .= "<li>Pricecheck</li>";
									$vString .= "<li>Shopmania</li>";
	                            $vString .= "</ul>";
	                        $vString .= "</div>";
	                   $vString .= "</li>";
	                   $vString .= "<li class=\"timeline-event\" data-aos=\"fade-up\">";
	                        $vString .= "<label class=\"timeline-event-icon\"></label>";
	                        $vString .= "<div class=\"timeline-event-copy\">";
	                            $vString .= "<p class=\"timeline-event-thumbnail\">eCommerce integration</p>";
	                            $vString .= "<ul>";
									$vString .= "<li>MyGate payment gateway</li>";
	                            $vString .= "</ul>";
	                        $vString .= "</div>";
	                    $vString .= "</li>";
	                    $vString .= "<li class=\"timeline-event\" data-aos=\"fade-up\">";
	                        $vString .= "<label class=\"timeline-event-icon\"></label>";
	                        $vString .= "<div class=\"timeline-event-copy\">";
	                            $vString .= "<p class=\"timeline-event-thumbnail\">Spatial integration / GIS</p>";
	                            $vString .= "<ul>";
									$vString .= "<li>Leaflet V1.3.1 interactive maps</li>";
									$vString .= "<li>Google Map API V3</li>";
									$vString .= "<li>Global Mapper V19.1</li>";
									$vString .= "<li>MySQL Spatial database</li>";
	                            $vString .= "</ul>";
	                        $vString .= "</div>";
	                    $vString .= "</li>";
	                    $vString .= "<li class=\"timeline-event\" data-aos=\"fade-up\">";
	                       	$vString .= "<label class=\"timeline-event-icon\"></label>";
	                        $vString .= "<div class=\"timeline-event-copy\">";
	                            $vString .= "<p class=\"timeline-event-thumbnail\">Other skills</p>";
	                            $vString .= "<ul>";
	                            	$vString .= "<li>Certified: <a href=\"images/DigitalMarketingCertificate.pdf\" target=\"_blank\">Google Digital Skills for Africa - Fundamentals of Digital Marketing</a></li>";
	                            	$vString .= "<li>BIRT - Business Intelligence and Reporting Tools</li>";
									$vString .= "<li>Responsive design &amp; development</li>";
									$vString .= "<li>Google AdSense integration</li>";
									$vString .= "<li>Google Analytics setup</li>";
									$vString .= "<li>Search engine optimization</li>";
									$vString .= "<li>Social media integration</li>";
									$vString .= "<li>Third party web service / API integration</li>";
									$vString .= "<li>Domain registrations &amp; domain transfers</li>";
									$vString .= "<li>Domain, email &amp; hosting setup</li>";
	                            $vString .= "</ul>";
	                        $vString .= "</div>";
	                    $vString .= "</li>";
	                $vString .= "</ul>";
	            $vString .= "</div>";
	        $vString .= "</div>";
	    $vString .= "</div>";
	    return $vString;

	}

	public static function getProjects(){
	    $vString = "<div class=\"section\" id=\"projects\">";
	        $vString .= "<div class=\"container\">";
	            $vString .= "<div class=\"col-md-12\">";
	                $vString .= "<h4>03</h4>";
	                $vString .= "<h1 class=\"size-50\">My <br /> Projects</h1>";
	            $vString .= "</div>";

	            $vString .= "<div class=\"main-container portfolio-inner clearfix\">";
	                $vString .= "<div class=\"portfolio-div\">";
	                    $vString .= "<div class=\"portfolio\">";
	                        $vString .= "<div class=\"categories-grid wow fadeInLeft\">";
	                            $vString .= "<nav class=\"categories\">";
	                                $vString .= "<ul class=\"portfolio_filter\">";
	                                    $vString .= "<li><a href=\"\" class=\"active\" data-filter=\"*\">&nbsp;&nbsp;All Projects&nbsp;&nbsp;</a></li>";
	                                    $vString .= "<li><a href=\"\" data-filter=\".dd\">System Design &amp; Development</a></li>";
	                                   $vString .= "<li><a href=\"\" data-filter=\".develop\">System Development</a></li>";
	                                    $vString .= "<li><a href=\"\" data-filter=\".cms\">Database  Management Systems</a></li>";
	                                    $vString .= "<li><a href=\"\" data-filter=\".standalone\">Stand-alone Systems</a></li>";
	                                $vString .= "</ul>";
	                            $vString .= "</nav>";
	                        $vString .= "</div>";
	                        $vString .= "<div class=\"no-padding portfolio_container clearfix\" data-aos=\"fade-up\">";

	                        	//<!-- Namibia-reisen -->
	                            $vString .= "<div class=\"col-md-4 col-sm-6 cms develop dd\">";
	                                $vString .= "<a id=\"namibiareisen\" href=\"#namibiaReisenModal\" class=\"portfolio_item\"> <img src=\"images/clients/nr.png\" alt=\"Namibia Reisen\" class=\"img-responsive\" />";
	                                    $vString .= "<div class=\"portfolio_item_hover\">";
	                                        $vString .= "<div class=\"portfolio-border clearfix\">";
	                                            $vString .= "<div class=\"item_info\"> <span>Namibia Reisen</span><em>Namibia / Switzerland</em></div>";
	                                        $vString .= "</div>";
	                                    $vString .= "</div>";
	                                $vString .= "</a>";
	                            $vString .= "</div>";

	                        	//<!-- BVB Invest -->
	                            $vString .= "<div class=\"col-md-4 col-sm-6 develop dd\">";
	                                $vString .= "<a id=\"bvbinvest\" href=\"#bvbInvestModal\" class=\"portfolio_item\"> <img src=\"images/clients/bvb.png\" alt=\"BVB Invest\" class=\"img-responsive\" />";
	                                    $vString .= "<div class=\"portfolio_item_hover\">";
	                                        $vString .= "<div class=\"portfolio-border clearfix\">";
	                                            $vString .= "<div class=\"item_info\"> <span>BVB Invest</span><em>Namibia</em></div>";
	                                        $vString .= "</div>";
	                                    $vString .= "</div>";
	                                $vString .= "</a>";
	                            $vString .= "</div>";

	                            //<!-- MTB NAMIBIAN -->
	                            $vString .= "<div class=\"col-md-4 col-sm-6 develop\">";
	                                $vString .= "<a id=\"mtbnam\" href=\"#mtbnamModal\" class=\"portfolio_item\"> <img src=\"images/clients/mtbnam.png\" alt=\"Mountain Bike Namibia\" class=\"img-responsive\" />";
	                                    $vString .= "<div class=\"portfolio_item_hover\">";
	                                        $vString .= "<div class=\"portfolio-border clearfix\">";
	                                            $vString .= "<div class=\"item_info\"> <span>Mountain Bike Namibia</span><em>Namibia</em></div>";
	                                        $vString .= "</div>";
	                                    $vString .= "</div>";
	                                $vString .= "</a>";
	                            $vString .= "</div>";

	                            //<!-- NIT -->
	                            $vString .= "<div class=\"col-md-4 col-sm-6 develop\">";
	                                $vString .= "<a id=\"nit\" href=\"#nitModal\" class=\"portfolio_item\"> <img src=\"images/clients/nit.png\" alt=\"Namibia Individual Travel\" class=\"img-responsive\" />";
	                                    $vString .= "<div class=\"portfolio_item_hover\">";
	                                        $vString .= "<div class=\"portfolio-border clearfix\">";
	                                            $vString .= "<div class=\"item_info\"> <span>Namibia Individual Travel</span><em>Namibia</em></div>";
	                                        $vString .= "</div>";
	                                    $vString .= "</div>";
	                                $vString .= "</a>";
	                            $vString .= "</div>";

	                        	//<!-- Leaflove -->
	                            $vString .= "<div class=\"col-md-4 col-sm-6 cms develop dd\">";
	                                $vString .= "<a id=\"leaflove\" href=\"#leafloveModal\" class=\"portfolio_item\"> <img src=\"images/clients/leaflove.png\" alt=\"Leaflove Safaris\" class=\"img-responsive\" />";
	                                    $vString .= "<div class=\"portfolio_item_hover\">";
	                                        $vString .= "<div class=\"portfolio-border clearfix\">";
	                                            $vString .= "<div class=\"item_info\"> <span>Leaflove Safaris - Namibia</span><em>Namibian Safaris</em></div>";
	                                        $vString .= "</div>";
	                                    $vString .= "</div>";
	                                $vString .= "</a>";
	                            $vString .= "</div>";

	                        	//<!-- Graffiti -->
	                            $vString .= "<div class=\"col-md-4 col-sm-6 cms dd develop\">";
	                                $vString .= "<a id=\"graffiti\" href=\"#graffitiModal\" class=\"portfolio_item\"> <img src=\"images/clients/graffiti.png\" alt=\"Graffiti Books\" class=\"img-responsive\" />";
	                                    $vString .= "<div class=\"portfolio_item_hover\">";
	                                        $vString .= "<div class=\"portfolio-border clearfix\">";
	                                            $vString .= "<div class=\"item_info\"> <span>Graffiti Books</span><em>Online bookshop</em></div>";
	                                        $vString .= "</div>";
	                                    $vString .= "</div>";
	                                $vString .= "</a>";
	                            $vString .= "</div>";

	                            //<!-- NMT -->
	                            $vString .= "<div class=\"col-md-4 col-sm-6 cms dd develop\">";
	                                $vString .= "<a id=\"nmt\" href=\"#nmtModal\" class=\"portfolio_item\"> <img src=\"images/clients/nmt.png\" alt=\"Namibian Media Trust\" class=\"img-responsive\" />";
	                                    $vString .= "<div class=\"portfolio_item_hover\">";
	                                        $vString .= "<div class=\"portfolio-border clearfix\">";
	                                            $vString .= "<div class=\"item_info\"> <span>NMT</span><em>Namibian Media Trust</em></div>";
	                                        $vString .= "</div>";
	                                    $vString .= "</div>";
	                                $vString .= "</a>";
	                            $vString .= "</div>";

	                            //<!-- SMC -->
	                            $vString .= "<div class=\"col-md-4 col-sm-6 develop cms dd\">";
	                                $vString .= "<a id=\"smc\" href=\"#smcModal\" class=\"portfolio_item\"> <img src=\"images/clients/smc.png\" alt=\"SMC-Synergy\" class=\"img-responsive\" />";
	                                    $vString .= "<div class=\"portfolio_item_hover\">";
	                                        $vString .= "<div class=\"portfolio-border clearfix\">";
	                                            $vString .= "<div class=\"item_info\"> <span>SMC-Synergy</span><em>Professional GIS Services</em></div>";
	                                        $vString .= "</div>";
	                                    $vString .= "</div>";
	                                $vString .= "</a>";
	                            $vString .= "</div>";

	                            //<!-- OG -->
	                            $vString .= "<div class=\"col-md-4 col-sm-6 cms develop dd\">";
	                                $vString .= "<a id=\"og\" href=\"#ogModal\" class=\"portfolio_item\"> <img src=\"images/clients/og.png\" alt=\"Otto G&uuml;nther\" class=\"img-responsive\" />";
	                                    $vString .= "<div class=\"portfolio_item_hover\">";
	                                        $vString .= "<div class=\"portfolio-border clearfix\">";
	                                            $vString .= "<div class=\"item_info\"> <span>Otto G&uuml;nther</span><em>Online shopping</em></div>";
	                                        $vString .= "</div>";
	                                    $vString .= "</div>";
	                                $vString .= "</a>";
	                            $vString .= "</div>";

	                            //<!-- Pupkewitz -->
	                            $vString .= "<div class=\"col-md-4 col-sm-6 standalone\">";
	                                $vString .= "<a id=\"pupkewitz\" href=\"#pupkewitzModal\" class=\"portfolio_item\"> <img src=\"images/clients/pupkewitz.png\" alt=\"Pupkewitz\" class=\"img-responsive\" />";
	                                    $vString .= "<div class=\"portfolio_item_hover\">";
	                                        $vString .= "<div class=\"portfolio-border clearfix\">";
	                                            $vString .= "<div class=\"item_info\"> <span>Pupkewitz Group</span><em>Stand-alone data manipulation system</em></div>";
	                                        $vString .= "</div>";
	                                    $vString .= "</div>";
	                                $vString .= "</a>";
	                            $vString .= "</div>";

	                            //<!-- Bushmon -->
	                            $vString .= "<div class=\"col-md-4 col-sm-6 develop cms dd\">";
	                                $vString .= "<a id=\"bush\" href=\"#bushModal\" class=\"portfolio_item\"> <img src=\"images/clients/bush.png\" alt=\"image\" class=\"img-responsive\" />";
	                                    $vString .= "<div class=\"portfolio_item_hover\">";
	                                        $vString .= "<div class=\"portfolio-border clearfix\">";
	                                            $vString .= "<div class=\"item_info\"> <span>Bushmon</span><em>Bush Expert Project Management System</em></div>";
	                                        $vString .= "</div>";
	                                    $vString .= "</div>";
	                                $vString .= "</a>";
	                            $vString .= "</div>";

	                            //<!-- Dawn -->
	                            $vString .= "<div class=\"col-md-4 col-sm-6 develop\">";
	                                $vString .= "<a id=\"dawn\" href=\"#dawnModal\" class=\"portfolio_item\"> <img src=\"images/clients/dawn.png\" alt=\"Dawn Adams Quantity Surveyors\" class=\"img-responsive\" />";
	                                    $vString .= "<div class=\"portfolio_item_hover\">";
	                                        $vString .= "<div class=\"portfolio-border clearfix\">";
	                                            $vString .= "<div class=\"item_info\"> <span>Dawn Adams</span><em>Quantity Surveyors</em></div>";
	                                        $vString .= "</div>";
	                                    $vString .= "</div>";
	                                $vString .= "</a>";
	                            $vString .= "</div>";

	                            //<!-- Namibian -->
	                            $vString .= "<div class=\"col-md-4 col-sm-6 cms develop dd\">";
	                                $vString .= "<a id=\"namibian\" href=\"#namibianModal\" class=\"portfolio_item\"> <img src=\"images/clients/namibian.png\" alt=\"The Namibian\" class=\"img-responsive\" />";
	                                    $vString .= "<div class=\"portfolio_item_hover\">";
	                                        $vString .= "<div class=\"portfolio-border clearfix\">";
	                                            $vString .= "<div class=\"item_info\"> <span>The Namibian</span><em>Newspaper</em></div>";
	                                        $vString .= "</div>";
	                                    $vString .= "</div>";
	                                $vString .= "</a>";
	                            $vString .= "</div>";

	                            //<!-- Carbo -->
	                            $vString .= "<div class=\"col-md-4 col-sm-6 develop\">";
	                                $vString .= "<a id=\"carbo\" href=\"#carboModal\" class=\"portfolio_item\"> <img src=\"images/clients/carbo.png\" alt=\"Carbo Charcoal Namibia\" class=\"img-responsive\" />";
	                                    $vString .= "<div class=\"portfolio_item_hover\">";
	                                        $vString .= "<div class=\"portfolio-border clearfix\">";
	                                            $vString .= "<div class=\"item_info\"> <span>Carbo</span><em>Charcoal Namibia</em></div>";
	                                        $vString .= "</div>";
	                                    $vString .= "</div>";
	                                $vString .= "</a>";
	                            $vString .= "</div>";

	                            //<!-- eStorm -->
	                            $vString .= "<div class=\"col-md-4 col-sm-6 dd cms develop\">";
	                                $vString .= "<a id=\"estorm\" href=\"#estormModal\" class=\"portfolio_item\"> <img src=\"images/clients/estorm.png\" alt=\"eStorm\" class=\"img-responsive\" />";
	                                    $vString .= "<div class=\"portfolio_item_hover\">";
	                                        $vString .= "<div class=\"portfolio-border clearfix\">";
	                                            $vString .= "<div class=\"item_info\"> <span>eStorm</span><em>Online shopping</em></div>";
	                                        $vString .= "</div>";
	                                    $vString .= "</div>";
	                                $vString .= "</a>";
	                            $vString .= "</div>";

	                            //<!-- Syss -->
	                            $vString .= "<div class=\"col-md-4 col-sm-6 standalone\">";
	                                $vString .= "<a id=\"syss\" href=\"#syssModal\" class=\"portfolio_item\"> <img src=\"images/clients/syss.png\" alt=\"SYSS\" class=\"img-responsive\" />";
	                                    $vString .= "<div class=\"portfolio_item_hover\">";
	                                        $vString .= "<div class=\"portfolio-border clearfix\">";
	                                            $vString .= "<div class=\"item_info\"> <span>SYSS</span><em>Specialised Integration Systems &amp; Services</em></div>";
	                                        $vString .= "</div>";
	                                    $vString .= "</div>";
	                               $vString .= " </a>";
	                            $vString .= "</div>";

	                            //<!-- WOCAT -->
	                            $vString .= "<div class=\"col-md-4 col-sm-6 cms develop\">";
	                                $vString .= "<a id=\"wocat\" href=\"#wocatModal\" class=\"portfolio_item\"> <img src=\"images/clients/wocat.png\" alt=\"WOCAT\" class=\"img-responsive\" />";
	                                    $vString .= "<div class=\"portfolio_item_hover\">";
	                                        $vString .= "<div class=\"portfolio-border clearfix\">";
	                                            $vString .= "<div class=\"item_info\"> <span>WOCAT</span><em>World Overview of Conservation Approaches &amp; Technologies</em></div>";
	                                        $vString .= "</div>";
	                                    $vString .= "</div>";
	                                $vString .= "</a>";
	                            $vString .= "</div>";

	                        $vString .= "</div>";
	                    $vString .= "</div>";
	                $vString .= "</div>";
	            $vString .= "</div>";
	        $vString .= "</div>";
	    $vString .= "</div>";
	    return $vString;
	}

	public static function getPartners(){
	    $vString = "<div class=\"section\" id=\"partners\">";
	       	$vString .= "<div class=\"container\">";
	            $vString .= "<div class=\"col-md-12\">";
	                $vString .= "<h4>04</h4>";
	                $vString .= "<h1 class=\"size-50\">My <br>Business Partners</h1>";
	                $vString .= "<div class=\"h-50\"></div>";
	            $vString .= "</div>";
	            $vString .= "<div class=\"col-md-12\">";
	                $vString .= "<ul class=\"timeline\">";
	                    $vString .= "<li class=\"timeline-event\" data-aos=\"fade-up\">";
	                        $vString .= "<label class=\"timeline-event-icon\"></label>";
	                        $vString .= "<div class=\"timeline-event-copy\">";
	                            $vString .= "<p class=\"timeline-event-thumbnail\">SMC-Synergy</p>";
	                            $vString .= "<p>";
	                            	$vString .= "<span id='color'>CEIT Development</span> is currently experiencing an ever increasing demand for GIS products and services. With the emergence of new spatial databases,
									web and mobile wireless technology, GIS is merging with IT, and is being called on to provide \"whole product\" solutions to a very critical and
									diverse client base. The need for a GIS partner with extensive knowledge in the agricultural, environmental and mining sectors opened an
									opportunity to form a partnership with SMC Synergy.";
								$vString .= "</p>";
								$vString .= "<p>";
									$vString .= "<a href='https://www.smc-synergy.co.za' target='_blank' id='color'>SMC Synergy</a> has vast experience of GIS applications in land use planning, sustainable land management practices, land degradation assessment
									and natural resource monitoring.  With extensive involvement in High Technology Industries in South Africa (Space, Nuclear, and Telecommunication)
									the new liaison will ensure exposure of CEIT to a range of new opportunities. SMC Synergy also ensures a high standard in GIS products and
									services through PLATO registration (Professional GISc Practitioner) of personnel on their management team.";
									$vString .= "</p>";
	                        $vString .= "</div>";
	                    $vString .= "</li>";

	                    $vString .= "<li class=\"timeline-event\" data-aos=\"fade-up\">";
	                        $vString .= "<label class=\"timeline-event-icon\"></label>";
	                        $vString .= "<div class=\"timeline-event-copy\">";
	                            $vString .= "<p class=\"timeline-event-thumbnail\">Graphic Arts - Lisa Voigts</p>";
	                            $vString .= "<p>";
	                            	$vString .= "Graphic Design is quite an understatement for what goes on in Lisa Voigts of <a href=\"http://www.ga-studio.de/\"  target='_blank' id='color'>Graphic Arts</a>, head. Art is what she loves and for sure, she is not afraid of expressing herself.
	                            	Many think this might be the key to her success as artist, designer and illustrator. At the Lake of Konstanz, a well-known college in Germany, gave Lisa all the tools she needed to turn her
	                            	talent into something real and professional. She finished her three years studies with straight A's and was honored as the best student of the college ever.</p>";
	                            	$vString .= "<p>She is not afraid to use her talent, to create and to stay focused on what her clients need. <span id='color'>CEIT Development</span> has used Lisa to find the sought after \"unique, catchy, to the point\" yet
	                            	professional and creative different look. It's all about finding ideas, using ideas and being able to put these ideas onto paper, into words and onto a screen.
	                            	To be creative and to be creative under pressure is extremely challenging to turn the imagination into something concrete and real.
	                            	Lisa knows how to sway a brush and she rocks her graphic design software programs.";
									$vString .= "</p>";
	                        $vString .= "</div>";
	                    $vString .= "</li>";
	                $vString .= "</ul>";
	            $vString .= "</div>";
	        $vString .= "</div>";
	    $vString .= "</div>";
	    return $vString;
	}

	public static function getContact(){
	    $vString = "<div class=\"section\" id=\"contact\">";
	        $vString .= "<div class=\"container\">";
	            $vString .= "<div class=\"col-md-12\">";
	                $vString .= "<h4>05</h4>";
	                $vString .= "<h1 class=\"size-50\">Contact  Me</h1>";
	                $vString .= "<h4>Carin Pretorius</h4>";
	                $vString .= "<div class=\"h-50\"></div>";
	            $vString .= "</div>";
	            $vString .= "<div class=\"col-md-4\" data-aos=\"fade-up\">";
					$vString .= "<h3>Cell Number</h3>";
	                $vString .= "<p>+27 82 925 6634</p>";
	                $vString .= "<h3>Email</h3>";
	                $vString .= "<p><a href=\"\" class=\"email\">carin at ceit.cc</a></p>";
	            $vString .= "</div>";
	            $vString .= "<div class=\"col-md-8\" data-aos=\"fade-up\">";
	                $vString .= "<form class=\"contact-bg\" id=\"contact-form\" name=\"contact\" method=\"post\" novalidate>";
	                    $vString .= "<input type=\text\" name=\"name\" class=\"form-control\" placeholder=\"Your Name\" />";
	                    $vString .= "<input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Your E-mail\" />";
	                    $vString .= "<input type=\"text\" name=\"phone\" class=\"form-control\" placeholder=\"Phone Number\" />";
	                    $vString .= "<textarea name=\"message\" class=\"form-control\" placeholder=\"Your Message\" style=\"height:120px\"></textarea>";
		                $vString .= "<div class=\"g-recaptcha\" data-theme=\"light\" name=\"recaptcha\"  data-sitekey=\"6LcrlBgTAAAAALMZHHmZyXv050qWrPMn0OCXqnmA\"></div><br>";
		                $vString .= "<div id=\"captcha_message\" class=\"error\"></div>";
	                    $vString .= "<button id=\"submit\" type=\"submit\" name=\"submit\" class=\btn btn-glance\">Send</button>";
	                    $vString .= "<div id=\"success\">";
	                        $vString .= "<p class=\"green textcenter\"> Your message was sent successfully! I will be in touch as soon as possible. </p>";
	                    $vString .= "</div>";
	                    $vString .= "<div id=\"error\">";
	                        $vString .= "<p>Oops, something went wrong, try refreshing and submitting the form again. </p>";
	                    $vString .= "</div>";
	                $vString .= "</form>";
	            $vString .= "</div>";
	        $vString .= "</div>";
	    $vString .= "</div>";
	    return $vString;
	}

}

?>