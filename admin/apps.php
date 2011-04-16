<?php

/**
* ownCloud
*
* @author Frank Karlitschek
* @copyright 2010 Frank Karlitschek karlitschek@kde.org
*
* This library is free software; you can redistribute it and/or
* modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
* License as published by the Free Software Foundation; either
* version 3 of the License, or any later version.
*
* This library is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU AFFERO GENERAL PUBLIC LICENSE for more details.
*
* You should have received a copy of the GNU Affero General Public
* License along with this library.  If not, see <http://www.gnu.org/licenses/>.
*
*/

require_once('../lib/base.php');
require( 'template.php' );
if( !OC_USER::isLoggedIn() || !OC_GROUP::inGroup( $_SESSION['user_id'], 'admin' )){
	header( "Location: ".OC_HELPER::linkTo( "", "index.php" ));
	exit();
}


// Load the files we need
//OC_UTIL::addStyle( "", "files" );
//OC_UTIL::addScript( "", "files" );


$categories=OC_OCSCLIENT::getCategories();
//print_r($categories);
$apps=OC_OCSCLIENT::getApplications($categories);
//print_r($apps);


// return template
$tmpl = new OC_TEMPLATE( "admin", "apps", "admin" );

$tmpl->assign( "categories", $categories );
$tmpl->assign( "apps", $apps );
$tmpl->printPage();



?>

