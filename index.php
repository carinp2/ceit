<?php
/**
 * @author Carin Pretorius - CEIT Development
 * Created on 2017-08-28
 */
session_cache_limiter('private, must-revalidate');
session_cache_expire(60);
session_start();

require_once ("application/classes/Parts.class.php");
$vParts = new Parts();
require_once ("application/classes/Modals.class.php");
$vModals = new Modals();

include "application/config/session_config.php";

$vHtmlBegin = $vParts->getHtmlBegin();
echo $vHtmlBegin;

$vMenu = $vParts->getMenu();
echo $vMenu;

$vHome = $vParts->getHome();
echo $vHome;

$vAbout = $vParts->getAbout();
echo $vAbout;

$vSkills = $vParts->getSkills();
echo $vSkills;

$vProjects = $vParts->getProjects();
echo $vProjects;

$vPartners = $vParts->getPartners();
echo $vPartners;

$vContact = $vParts->getContact();
echo $vContact;

$vEnd = $vParts->getEndHtml();
echo $vEnd;
?>