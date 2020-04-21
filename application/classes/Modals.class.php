<?php
/**
 * @author Carin Pretorius - CEIT Development
 * Created on 2017-08-28
 */

class Modals {

	public static function loadModals(){
		$vString = Modals::getBushmonModal();
		$vString .= Modals::getNmtModal();
		$vString .= Modals::getSmcModal();
		$vString .= Modals::getPupkewitzModal();
		$vString .= Modals::getOgModal();
		$vString .= Modals::getDawnModal();
		$vString .= Modals::getNamibianModal();
		$vString .= Modals::getCarboModal();
		$vString .= Modals::getEstormModal();
		$vString .= Modals::getSyssModal();
		$vString .= Modals::getWocatModal();
		$vString .= Modals::getGraffitiModal();
		$vString .= Modals::getLeafloveModal();
		$vString .= Modals::getMtbNamModal();
		$vString .= Modals::getNitModal();
		$vString .= Modals::getBvbModal();
		$vString .= Modals::getNamibiaReisenModal();
		return $vString;
	}

	public static function getBushmonModal(){
	    $vString = "<div id=\"bushModal\" class=\"popup-modal\">";
	        $vString .= "<div id=\"btn-close-modal\" class=\"close-bushModal close-popup-modal\"> <i class=\"ion-close-round\"></i> </div>";
	        $vString .= "<div class=\"clearfix\"></div>";
	        $vString .= "<div class=\"modal-content\">";
	            $vString .= "<div class=\"container\">";
	                $vString .= "<div class=\"portfolio-padding\">";
	                    $vString .= "<div class=\"col-md-8 col-md-offset-2\">";
	                        $vString .= "<h2>Bushmon</h2>";
	                        $vString .= "<div class=\"h-30\"></div>";
	                        $vString .= "<h4>Online Bush Expert Monitoring System for North-West University</h4>";
	                        $vString .= "<ul>";
								$vString .= "<li>Domain registration and web hosting setup (2017)</li>";
								$vString .= "<li>Design and development of custom monitoring system</li>";
								$vString .= "<li>Development of Google Map API V3 interface for capturing and viewing of spatial data</li>";
								$vString .= "<li>Assist with spatial data integration - Global Mapper V18 </li>";
								$vString .= "<li><a href='http://www.bushmon.co.za' target='_blank'>www.bushmon.co.za</a></li>";
							$vString .= "</ul>";
	                        $vString .= "<br />";
	                        $vString .= "<br /> <img src=\"images/clients/bush.png\" alt=\"Bushmon\" class=\"img-responsive\" />";
	                        $vString .= "<br />";
	                        $vString .= "<input type=\"button\" value=\"Close\"  class=\"close-bushModal\" id=\"button\">";
	                        $vString .= "<br />";
	                	$vString .= "</div>";
	                $vString .= "</div>";
	            $vString .= "</div>";
	        $vString .= "</div>";
	    $vString .= "</div>";
	    return $vString;
	}

	public static function getNmtModal(){
	    $vString = "<div id=\"nmtModal\" class=\"popup-modal\">";
	        $vString .= "<div id=\"btn-close-modal\" class=\"close-nmtModal close-popup-modal\"> <i class=\"ion-close-round\"></i> </div>";
	        $vString .= "<div class=\"clearfix\"></div>";
	        $vString .= "<div class=\"modal-content\">";
	            $vString .= "<div class=\"container\">";
	                $vString .= "<div class=\"portfolio-padding\">";
	                    $vString .= "<div class=\"col-md-8 col-md-offset-2\">";
	                        $vString .= "<h2>Namibian Media Trust - Namibia</h2>";
	                        $vString .= "<div class=\"h-30\"></div>";
	                        $vString .= "<h4>Dynamic Website and Customized Content Management System</h4>";
							$vString .= "<ul>";
								$vString .= "<li>Domain registration</li>";
								$vString .= "<li>Website and database development (2016 - in development)</li>";
								$vString .= "<li>Development of a web based password protected CMS (2016 - 2017)</li>";
								$vString .= "<li>Maintenance of website and CMS (currently)</li>";
								$vString .= "<li><a href='https://www.nmt.africa' target='_blank'>www.nmt.africa</a></li>";
							$vString .= "</ul>";
	                        $vString .= "<br />";
	                        $vString .= "<br /><img src=\"images/clients/nmt.png\" alt=\"Namibian Media Trust\" class=\"img-responsive\" />";
	                        $vString .= "<br />";
	                        $vString .= "<input type=\"button\" value=\"Close\"  class=\"close-nmtModal\" id=\"button\">";
	                        $vString .= "<br />";
	                	$vString .= "</div>";
	                $vString .= "</div>";
	            $vString .= "</div>";
	        $vString .= "</div>";
		$vString .= "</div>";
		return $vString;
	}

	public static function getSmcModal(){
	    $vString = "<div id=\"smcModal\" class=\"popup-modal\">";
	        $vString .= "<div id=\"btn-close-modal\" class=\"close-smcModal close-popup-modal\"> <i class=\"ion-close-round\"></i> </div>";
	        $vString .= "<div class=\"clearfix\"></div>";
	        $vString .= "<div class=\"modal-content\">";
	            $vString .= "<div class=\"container\">";
	                $vString .= "<div class=\"portfolio-padding\">";
	                    $vString .= "<div class=\"col-md-8 col-md-offset-2\">";
	                        $vString .= "<h2>SMC-Synergy</h2>";
	                        $vString .= "<div class=\"h-30\"></div>";
	                        $vString .= "<h4>Dynamic Website and Customized Content Management System</h4>";
							$vString .= "<ul>";
								$vString .= "<li>Domain registration and web hosting setup (2013)</li>";
								$vString .= "<li>Design and development of website (2013)</li>";
								$vString .= "<li>Redesign &amp; development of website (2017)</li>";
								$vString .= "<li>Development of online management system for full control of website content, text, images &amp; training schedule (2017)</li>";
								$vString .= "<li>Online training registration</li>";
								$vString .= "<li>Online software ordering</li>";
								$vString .= "<li>Training registration management</li>";
								$vString .= "<li>Software order management system</li>";
								$vString .= "<li><a href='https://www.smc-synergy.co.za' target='_blank'>www.smc-synergy.co.za</a></li>";
							$vString .= "</ul>";
	                        //$vString .= "<br />";
	                        $vString .= "<br /><img src=\"images/clients/smc.png\" alt=\"SMC-Synergy\" class=\"img-responsive\" />";
	                        $vString .= "<br />";
	                        $vString .= "<input type=\"button\" value=\"Close\"  class=\"close-smcModal\" id=\"button\">";
	                        $vString .= "<br /><br />";
	                	$vString .= "</div>";
	                $vString .= "</div>";
	            $vString .= "</div>";
	        $vString .= "</div>";
		$vString .= "</div>";
		return $vString;
	}

	public static function getPupkewitzModal(){
	    $vString = "<div id=\"pupkewitzModal\" class=\"popup-modal\">";
	        $vString .= "<div id=\"btn-close-modal\" class=\"close-pupkewitzModal close-popup-modal\"> <i class=\"ion-close-round\"></i> </div>";
	        $vString .= "<div class=\"clearfix\"></div>";
	        $vString .= "<div class=\"modal-content\">";
	            $vString .= "<div class=\"container\">";
	                $vString .= "<div class=\"portfolio-padding\">";
	                    $vString .= "<div class=\"col-md-8 col-md-offset-2\">";
	                        $vString .= "<h2>Pupkewitz Group - Namibia</h2>";
	                        $vString .= "<div class=\"h-30\"></div>";
	                        $vString .= "<h4>Restricted access database integration &amp; customization</h4>";
							$vString .= "<ul>";
								$vString .= "<li>Database development</li>";
								$vString .= "<li>Data manipulation and processing</li>";
								$vString .= "<li>Integration with existing sales, customer, stock, etc. systems and reports (2015 - currently)</li>";
							$vString .= "</ul>";
	                        $vString .= "<br />";
	                        $vString .= "<br /><img src=\"images/clients/pupkewitz.png\" alt=\"Pupkewitz Group\" class=\"img-responsive\" />";
	                        $vString .= "<br />";
	                        $vString .= "<input type=\"button\" value=\"Close\"  class=\"close-pupkewitzModal\" id=\"button\">";
	                        $vString .= "<br />";
	                	$vString .= "</div>";
	                $vString .= "</div>";
	            $vString .= "</div>";
	        $vString .= "</div>";
		$vString .= "</div>";
		return $vString;
	}

	public static function getOgModal(){
	    $vString = "<div id=\"ogModal\" class=\"popup-modal\">";
	        $vString .= "<div id=\"btn-close-modal\" class=\"close-ogModal close-popup-modal\"> <i class=\"ion-close-round\"></i> </div>";
	        $vString .= "<div class=\"clearfix\"></div>";
	        $vString .= "<div class=\"modal-content\">";
	            $vString .= "<div class=\"container\">";
	                $vString .= "<div class=\"portfolio-padding\">";
	                    $vString .= "<div class=\"col-md-8 col-md-offset-2\">";
	                        $vString .= "<h2>Otto G&uuml;nther - Namibia</h2>";
	                        $vString .= "<div class=\"h-30\"></div>";
	                        $vString .= "<h4>Online shopping system</h4>";
							$vString .= "<ul>";
								$vString .= "<li>Domain registration</li>";
								$vString .= "<li>Online shopping system development</li>";
								$vString .= "<li>Website & database development (2016)</li>";
								$vString .= "<li>Development of a web based password protected Content Management System (CMS) (2016 - 2017)</li>";
								$vString .= "<li>Maintenance and improvement of website and CMS (currently)</li>";
								$vString .= "<li><a href='https://www.ottogunther.com' target='_blank'>www.ottogunther.com</a></li>";
							$vString .= "</ul>";
	                        $vString .= "<br />";
	                        $vString .= "<br /><img src=\"images/clients/og.png\" alt=\"Otto G&uuml;nther\" class=\"img-responsive\" />";
	                        $vString .= "<br />";
	                        $vString .= "<input type=\"button\" value=\"Close\"  class=\"close-ogModal\" id=\"button\">";
	                        $vString .= "<br />";
	                	$vString .= "</div>";
	                $vString .= "</div>";
	            $vString .= "</div>";
	        $vString .= "</div>";
		$vString .= "</div>";
		return $vString;
	}

	public static function getLeafloveModal(){
	    $vString = "<div id=\"leafloveModal\" class=\"popup-modal\">";
	        $vString .= "<div id=\"btn-close-modal\" class=\"close-leafloveModal close-popup-modal\"> <i class=\"ion-close-round\"></i> </div>";
	        $vString .= "<div class=\"clearfix\"></div>";
	        $vString .= "<div class=\"modal-content\">";
	            $vString .= "<div class=\"container\">";
	                $vString .= "<div class=\"portfolio-padding\">";
	                    $vString .= "<div class=\"col-md-8 col-md-offset-2\">";
	                        $vString .= "<h2>Leaflove Safaris - Namibia</h2>";
	                        $vString .= "<div class=\"h-30\"></div>";
	                        $vString .= "<h4>German &amp; English website</h4>";
							$vString .= "<ul>";
								$vString .= "<li>Re-develop existing website (2018)</li>";
								$vString .= "<li>Search Engine optimization</li>";
								$vString .= "<li>Maintenance and improvement of website (currently)</li>";
								$vString .= "<li><a href='https://www.leaflovesafari.de/' target='_blank'>www.leaflovesafari.de</a> (German)</li>";
								$vString .= "<li><a href='https://www.leaflovesafari.com/' target='_blank'>www.leaflovesafari.com</a> (English)</li>";
							$vString .= "</ul>";
	                        $vString .= "<br />";
	                        $vString .= "<br /><img src=\"images/clients/leaflove.png\" alt=\"Leaflove Safaris\" class=\"img-responsive\" />";
	                        $vString .= "<br />";
	                        $vString .= "<input type=\"button\" value=\"Close\"  class=\"close-leafloveModal\" id=\"button\">";
	                        $vString .= "<br />";
	                	$vString .= "</div>";
	                $vString .= "</div>";
	            $vString .= "</div>";
	        $vString .= "</div>";
		$vString .= "</div>";
		return $vString;
	}

	public static function getDawnModal(){
	    $vString = "<div id=\"dawnModal\" class=\"popup-modal\">";
	        $vString .= "<div id=\"btn-close-modal\" class=\"close-dawnModal close-popup-modal\"> <i class=\"ion-close-round\"></i> </div>";
	        $vString .= "<div class=\"clearfix\"></div>";
	        $vString .= "<div class=\"modal-content\">";
	            $vString .= "<div class=\"container\">";
	                $vString .= "<div class=\"portfolio-padding\">";
	                    $vString .= "<div class=\"col-md-8 col-md-offset-2\">";
	                        $vString .= "<h2>Dawn Adams - Namibia</h2>";
	                        $vString .= "<div class=\"h-30\"></div>";
	                        $vString .= "<h4>Quantity Surveyors</h4>";
							$vString .= "<ul>";
								$vString .= "<li>System development (2015)</li>";
								$vString .= "<li><a href='http://www.dawnadamsqs.com/' target='_blank'>www.dawnadamsqs.com</a></li>";
							$vString .= "</ul>";
	                        $vString .= "<br />";
	                        $vString .= "<br /><img src=\"images/clients/dawn.png\" alt=\"Dawn Adams\" class=\"img-responsive\" />";
	                        $vString .= "<br />";
	                        $vString .= "<input type=\"button\" value=\"Close\"  class=\"close-dawnModal\" id=\"button\">";
	                        $vString .= "<br />";
	                	$vString .= "</div>";
	                $vString .= "</div>";
	            $vString .= "</div>";
	        $vString .= "</div>";
		$vString .= "</div>";
		return $vString;
	}

	public static function getNamibianModal(){
	    $vString = "<div id=\"namibianModal\" class=\"popup-modal\">";
	        $vString .= "<div id=\"btn-close-modal\" class=\"close-namibianModal close-popup-modal\"> <i class=\"ion-close-round\"></i> </div>";
	        $vString .= "<div class=\"clearfix\"></div>";
	        $vString .= "<div class=\"modal-content\">";
	            $vString .= "<div class=\"container\">";
	                $vString .= "<div class=\"portfolio-padding\">";
	                    $vString .= "<div class=\"col-md-8 col-md-offset-2\">";
	                        $vString .= "<h2>The Namibian - Namibia</h2>";
	                        $vString .= "<div class=\"h-30\"></div>";
	                        $vString .= "<h4>Newspaper</h4>";
							$vString .= "<ul>";
								$vString .= "<li>Development of a web based password protected Content Management System (CMS) for The Namibian (2011 - 2013)</li>";
								$vString .= "<li>Development of the new Namibian website (2013 - 2014)</li>";
								$vString .= "<li>Google AdSense integration</li>";
								$vString .= "<li>Webmaster, maintenance and improvement of The Namibian website and CMS (2011 - September 2017)</li>";
								$vString .= "<li><a href='https://www.namibian.com.na' target='_blank'>www.namibian.com.na</a></li>";
							$vString .= "</ul>";
	                        $vString .= "<br />";
	                        $vString .= "<br /><img src=\"images/clients/namibian.png\" alt=\"The Namibian\" class=\"img-responsive\" />";
	                        $vString .= "<br />";
	                        $vString .= "<input type=\"button\" value=\"Close\"  class=\"close-namibianModal\" id=\"button\">";
	                        $vString .= "<br />";
	                	$vString .= "</div>";
	                $vString .= "</div>";
	            $vString .= "</div>";
	        $vString .= "</div>";
		$vString .= "</div>";
		return $vString;
	}

	public static function getCarboModal(){
	    $vString = "<div id=\"carboModal\" class=\"popup-modal\">";
	        $vString .= "<div id=\"btn-close-modal\" class=\"close-carboModal close-popup-modal\"> <i class=\"ion-close-round\"></i> </div>";
	        $vString .= "<div class=\"clearfix\"></div>";
	        $vString .= "<div class=\"modal-content\">";
	            $vString .= "<div class=\"container\">";
	                $vString .= "<div class=\"portfolio-padding\">";
	                    $vString .= "<div class=\"col-md-8 col-md-offset-2\">";
	                        $vString .= "<h2>Carbo  - Namibia</h2>";
	                        $vString .= "<div class=\"h-30\"></div>";
	                        $vString .= "<h4>Charcoal Namibia</h4>";
							$vString .= "<ul>";
								$vString .= "<li>Website development (2015)</li>";
								$vString .= "<li><a href='http://www.carbonamibia.com.na/' target='_blank'>www.carbonamibia.com.na</a></li>";
							$vString .= "</ul>";
	                        $vString .= "<br />";
	                        $vString .= "<br /><img src=\"images/clients/carbo.png\" alt=\"Carbo Charcoal Namibia\" class=\"img-responsive\" />";
	                        $vString .= "<br />";
	                        $vString .= "<input type=\"button\" value=\"Close\"  class=\"close-carboModal\" id=\"button\">";
	                        $vString .= "<br />";
	                	$vString .= "</div>";
	                $vString .= "</div>";
	            $vString .= "</div>";
	        $vString .= "</div>";
		$vString .= "</div>";
		return $vString;
	}

	public static function getEstormModal(){
	    $vString = "<div id=\"estormModal\" class=\"popup-modal\">";
	        $vString .= "<div id=\"btn-close-modal\" class=\"close-estormModal close-popup-modal\"> <i class=\"ion-close-round\"></i> </div>";
	        $vString .= "<div class=\"clearfix\"></div>";
	        $vString .= "<div class=\"modal-content\">";
	            $vString .= "<div class=\"container\">";
	                $vString .= "<div class=\"portfolio-padding\">";
	                    $vString .= "<div class=\"col-md-8 col-md-offset-2\">";
	                        $vString .= "<h2>eStorm</h2>";
	                        $vString .= "<div class=\"h-30\"></div>";
	                        $vString .= "<h4>Online shopping</h4>";
							$vString .= "<ul>";
								$vString .= "<li>Design and development website and eCommerce system (2012 - 2014)</li>";
								$vString .= "<li>Development of a web based password protected Content Management System (CMS) (2012 - 2014)</li>";
								$vString .= "<li>Pricecheck &amp; Shopmania API integration</li>";
								$vString .= "<li>Various supplier API integration</li>";
								$vString .= "<li>Maintenance and improvement of website and CMS  (currently)</li>";
								$vString .= "<li><a href='https://www.estorm.co.za' target='_blank'>www.estorm.co.za</a></li>";
							$vString .= "</ul>";
	                        $vString .= "<br />";
	                        $vString .= "<br /><img src=\"images/clients/estorm.png\" alt=\"eStorm\" class=\"img-responsive\" />";
	                        $vString .= "<br />";
	                        $vString .= "<input type=\"button\" value=\"Close\"  class=\"close-estormModal\" id=\"button\">";
	                        $vString .= "<br />";
	                	$vString .= "</div>";
	                $vString .= "</div>";
	            $vString .= "</div>";
	        $vString .= "</div>";
		$vString .= "</div>";
		return $vString;
	}

	public static function getSyssModal(){
	    $vString = "<div id=\"syssModal\" class=\"popup-modal\">";
	        $vString .= "<div id=\"btn-close-modal\" class=\"close-syssModal close-popup-modal\"> <i class=\"ion-close-round\"></i> </div>";
	        $vString .= "<div class=\"clearfix\"></div>";
	        $vString .= "<div class=\"modal-content\">";
	            $vString .= "<div class=\"container\">";
	                $vString .= "<div class=\"portfolio-padding\">";
	                    $vString .= "<div class=\"col-md-8 col-md-offset-2\">";
	                        $vString .= "<h2>SYSS</h2>";
	                        $vString .= "<div class=\"h-30\"></div>";
	                        $vString .= "<h4>Specialised Integration Systems &amp; Services</h4>";
							$vString .= "<ul>";
								$vString .= "<li>Modify Secure Building Access database (2014)</li>";
								$vString .= "<li>Develop restricted access online Secure Access System (2014)</li>";
							$vString .= "</ul>";
	                        $vString .= "<br />";
	                        $vString .= "<br /><img src=\"images/clients/syss.png\" alt=\"SYSS\" class=\"img-responsive\" />";
	                        $vString .= "<br />";
	                        $vString .= "<input type=\"button\" value=\"Close\"  class=\"close-syssModal\" id=\"button\">";
	                        $vString .= "<br />";
	                	$vString .= "</div>";
	                $vString .= "</div>";
	            $vString .= "</div>";
	        $vString .= "</div>";
		$vString .= "</div>";
		return $vString;
	}

	public static function getWocatModal(){
	    $vString = "<div id=\"wocatModal\" class=\"popup-modal\">";
	        $vString .= "<div id=\"btn-close-modal\" class=\"close-wocatModal close-popup-modal\"> <i class=\"ion-close-round\"></i> </div>";
	        $vString .= "<div class=\"clearfix\"></div>";
	        $vString .= "<div class=\"modal-content\">";
	            $vString .= "<div class=\"container\">";
	                $vString .= "<div class=\"portfolio-padding\">";
	                    $vString .= "<div class=\"col-md-8 col-md-offset-2\">";
	                        $vString .= "<h2>WOCAT</h2>";
	                        $vString .= "<div class=\"h-30\"></div>";
	                        $vString .= "<h4>Developed for The Centre For Development and Environment (CDE),University of Bern, Switzerland</h4>";
							$vString .= "<ul>";
								$vString .= "<li>Development of a multilingual web based data management system for the World Overview of Conservation Approaches (WOCAT QA) (2008)</li>";
								$vString .= "<li><a href='http://qa.wocat.net/' target='_blank'>http://qa.wocat.net/</a></li>";
								$vString .= "<li>Development of a multilingual web based data management system for the World Overview of Conservation Mapping (WOCAT QM) (2008)</li>";
								$vString .= "<li><a href='http://qm.wocat.net/' target='_blank'>http://qm.wocat.net/</a></li>";
								$vString .= "<li>Development of a multilingual web based data management system for the World Overview of Conservation Technologies (WOCAT QT) (2009)</li>";
								$vString .= "<li><a href='http://qt.wocat.net/' target='_blank'>http://qt.wocat.net/</a></li>";
								$vString .= "<li>Maintenance and improvement of WOCAT QM, QA and QT systems (2008 - 2016)</li>";
								$vString .= "<li>Member of the WOCAT Mapping Taskforce focusing on the development of a WOCAT Mapping methodology</li>";
								$vString .= "<li>Member of the WOCAT Digital Products Taskforce focusing on the development WOCAT of the online products</li>";
								$vString .= "<li>Represent South Africa at various WOCAT Workshops and Steering Meeting (China, Serbia Montenegro, Philippines, Morocco, Switzerland, South Africa)</li>";
								$vString .= "<li>Deliver keynote presentations about Online development, Digital products and Mobile development at WOCAT Workshops and Steering Meetings in China, Switzerland and South Africa</li>";
							$vString .= "</ul>";
	                        //$vString .= "<br />";
	                        $vString .= "<br /><img src=\"images/clients/wocat.png\" alt=\"WOCAT\" class=\"img-responsive\" />";
	                        $vString .= "<br />";
	                        $vString .= "<input type=\"button\" value=\"Close\"  class=\"close-wocatModal\" id=\"button\">";
	                        $vString .= "<br /><br />";
	                	$vString .= "</div>";
	                $vString .= "</div>";
	            $vString .= "</div>";
	        $vString .= "</div>";
		$vString .= "</div>";
		return $vString;
	}

	public static function getGraffitiModal(){
	    $vString = "<div id=\"graffitiModal\" class=\"popup-modal\">";
	        $vString .= "<div id=\"btn-close-modal\" class=\"close-graffitiModal close-popup-modal\"> <i class=\"ion-close-round\"></i> </div>";
	        $vString .= "<div class=\"clearfix\"></div>";
	        $vString .= "<div class=\"modal-content\">";
	            $vString .= "<div class=\"container\">";
	                $vString .= "<div class=\"portfolio-padding\">";
	                    $vString .= "<div class=\"col-md-8 col-md-offset-2\">";
	                        $vString .= "<h2>Graffiti Books</h2>";
	                        $vString .= "<div class=\"h-30\"></div>";
	                        $vString .= "<h4>Online bookshop</h4>";
							$vString .= "<ul>";
								$vString .= "<li>Design and development bilingual website and ecommerce system (2008 - 2014)</li>";
								$vString .= "<li>Development of a web based password protected Content Management System (CMS) (2008 - 2014)</li>";
								$vString .= "<li>Re-design &amp; develop website &amp; CMS (2016 - currently)</li>";
								$vString .= "<li>Maintenance and improvement of website and CMS  (2008 - currently)</li>";
								$vString .= "<li>Integration of courier service API's</li>";
								$vString .= "<li><a href='https://www.graffitibooks.co.za' target='_blank'>www.graffitibooks.co.za</a></li>";
							$vString .= "</ul>";
	                        $vString .= "<br />";
	                        $vString .= "<br /><img src=\"images/clients/graffiti.png\" alt=\"Graffiti Books\" class=\"img-responsive\" />";
	                        $vString .= "<br />";
	                        $vString .= "<input type=\"button\" value=\"Close\"  class=\"close-graffitiModal\" id=\"button\">";
	                        $vString .= "<br />";
	                	$vString .= "</div>";
	                $vString .= "</div>";
	            $vString .= "</div>";
	        $vString .= "</div>";
		$vString .= "</div>";
		return $vString;
	}

	public static function getMtbNamModal(){
	    $vString = "<div id=\"mtbnamModal\" class=\"popup-modal\">";
	        $vString .= "<div id=\"btn-close-modal\" class=\"close-mtbnamModal close-popup-modal\"> <i class=\"ion-close-round\"></i> </div>";
	        $vString .= "<div class=\"clearfix\"></div>";
	        $vString .= "<div class=\"modal-content\">";
	            $vString .= "<div class=\"container\">";
	                $vString .= "<div class=\"portfolio-padding\">";
	                    $vString .= "<div class=\"col-md-8 col-md-offset-2\">";
	                        $vString .= "<h2>Mountain Bike - Namibia</h2>";
	                        $vString .= "<div class=\"h-30\"></div>";
	                        $vString .= "<h4>Mountain Bike Safaris in Namibia</h4>";
							$vString .= "<ul>";
								$vString .= "<li>Redevelop responsive website (2018)</li>";
								$vString .= "<li>Search Engine optimization</li>";
								$vString .= "<li>Fix existing coding errors</li>";
								$vString .= "<li><a href='https://www.mountainbikenamibia.com' target='_blank'>www.mountainbikenamibia.com</a></li>";
							$vString .= "</ul>";
	                        $vString .= "<br />";
	                        $vString .= "<br /><img src=\"images/clients/mtbnam.png\" alt=\"Mountain Bike Namibia\" class=\"img-responsive\" />";
	                        $vString .= "<br />";
	                        $vString .= "<input type=\"button\" value=\"Close\"  class=\"close-mtbnamModal\" id=\"button\">";
	                        $vString .= "<br />";
	                	$vString .= "</div>";
	                $vString .= "</div>";
	            $vString .= "</div>";
	        $vString .= "</div>";
		$vString .= "</div>";
		return $vString;
	}

	public static function getNitModal(){
	    $vString = "<div id=\"nitModal\" class=\"popup-modal\">";
	        $vString .= "<div id=\"btn-close-modal\" class=\"close-nitModal close-popup-modal\"> <i class=\"ion-close-round\"></i> </div>";
	        $vString .= "<div class=\"clearfix\"></div>";
	        $vString .= "<div class=\"modal-content\">";
	            $vString .= "<div class=\"container\">";
	                $vString .= "<div class=\"portfolio-padding\">";
	                    $vString .= "<div class=\"col-md-8 col-md-offset-2\">";
	                        $vString .= "<h2> Namibia Individual Travel - Namibia</h2>";
	                        $vString .= "<div class=\"h-30\"></div>";
	                        $vString .= "<h4>Explore the wonders of Namibia</h4>";
							$vString .= "<ul>";
								$vString .= "<li>Redevelop responsive website (2018)</li>";
								$vString .= "<li>Search Engine optimization</li>";
								$vString .= "<li>Fix existing coding errors</li>";
								$vString .= "<li><a href='https://nit.com.na' target='_blank'>nit.com.na</a></li>";
							$vString .= "</ul>";
	                        $vString .= "<br />";
	                        $vString .= "<br /><img src=\"images/clients/nit.png\" alt=\"Namibia Individual Travel\" class=\"img-responsive\" />";
	                        $vString .= "<br />";
	                        $vString .= "<input type=\"button\" value=\"Close\"  class=\"close-nitModal\" id=\"button\">";
	                        $vString .= "<br />";
	                	$vString .= "</div>";
	                $vString .= "</div>";
	            $vString .= "</div>";
	        $vString .= "</div>";
		$vString .= "</div>";
		return $vString;
	}

	public static function getBvbModal(){
	    $vString = "<div id=\"bvbInvestModal\" class=\"popup-modal\">";
	        $vString .= "<div id=\"btn-close-modal\" class=\"close-bvbInvestModal close-popup-modal\"> <i class=\"ion-close-round\"></i> </div>";
	        $vString .= "<div class=\"clearfix\"></div>";
	        $vString .= "<div class=\"modal-content\">";
	            $vString .= "<div class=\"container\">";
	                $vString .= "<div class=\"portfolio-padding\">";
	                    $vString .= "<div class=\"col-md-8 col-md-offset-2\">";
	                        $vString .= "<h2>BVB Invest - Namibia</h2>";
	                        $vString .= "<div class=\"h-30\"></div>";
	                        $vString .= "<h4>Property Developers</h4>";
							$vString .= "<ul>";
								$vString .= "<li>System development (2018)</li>";
								$vString .= "<li>Responsive design</li>";
								$vString .= "<li><a href='https://www.bvbinvest.com/' target='_blank'>www.bvbinvest.com</a></li>";
							$vString .= "</ul>";
	                        $vString .= "<br />";
	                        $vString .= "<br /><img src=\"images/clients/bvb.png\" alt=\"BVB Invest\" class=\"img-responsive\" />";
	                        $vString .= "<br />";
	                        $vString .= "<input type=\"button\" value=\"Close\"  class=\"close-bvbInvestModal\" id=\"button\">";
	                        $vString .= "<br />";
	                	$vString .= "</div>";
	                $vString .= "</div>";
	            $vString .= "</div>";
	        $vString .= "</div>";
		$vString .= "</div>";
		return $vString;
	}

	public static function getNamibiaReisenModal(){
	    $vString = "<div id=\"namibiaReisenModal\" class=\"popup-modal\">";
	        $vString .= "<div id=\"btn-close-modal\" class=\"close-namibiaReisenModal close-popup-modal\"> <i class=\"ion-close-round\"></i> </div>";
	        $vString .= "<div class=\"clearfix\"></div>";
	        $vString .= "<div class=\"modal-content\">";
	            $vString .= "<div class=\"container\">";
	                $vString .= "<div class=\"portfolio-padding\">";
	                    $vString .= "<div class=\"col-md-8 col-md-offset-2\">";
	                        $vString .= "<h2>Namibia Reisen - Namibia / Switzerland</h2>";
	                        $vString .= "<div class=\"h-30\"></div>";
	                        $vString .= "<h4>Tour operator for custom Namibian safaris - offices in Switzerland and Namibia</h4>";
							$vString .= "<ul>";
								$vString .= "<li>Website & database development (2019)</li>";
								$vString .= "<li>Development of a web based password protected Content Management System (CMS) (2019)</li>";
								$vString .= "<li>SEO and Google analytics</li>";
								$vString .= "<li><a href='https://www.namibia-reisen.ch' target='_blank'>www.namibia-reisen.ch</a></li>";
	                        $vString .= "<br />";
	                        $vString .= "<br /><img src=\"images/clients/nr.png\" alt=\"Namibia Reisen\" class=\"img-responsive\" />";
	                        $vString .= "<br />";
	                        $vString .= "<input type=\"button\" value=\"Close\"  class=\"close-namibiaReisenModal\" id=\"button\">";
	                        $vString .= "<br />";
	                	$vString .= "</div>";
	                $vString .= "</div>";
	            $vString .= "</div>";
	        $vString .= "</div>";
		$vString .= "</div>";
		return $vString;
	}

}

?>