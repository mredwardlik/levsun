<?php
require_once ROOT . '/lib/rb.php';



R::setup("mysql:host=192.168.0.103;dbname=users","root",""); 

if (!R::testConnection()) 
{
	exit ('[Problems with DB Connection]');
}


/*

	'host'     => '192.168.0.103',
	'name'     => 'users',         //utf8_general_ci
	'login'    => 'root',
	'password' => ''


	'for__PDFkey' => 'ticketkeys',
	'for__userinfo' => 'userinfo'

*/








/*
${$TABLE_NAME['TABLE_FOR_CODE']} = R::dispense($TABLE_NAME['TABLE_FOR_CODE']);	
${$TABLE_NAME['TABLE_FOR_CODE']}->iden = '4306195404';
${$TABLE_NAME['TABLE_FOR_CODE']}->login = 'Alex54';
${$TABLE_NAME['TABLE_FOR_CODE']}->code = 'sdsdgs';
R::store(${$TABLE_NAME['TABLE_FOR_CODE']});
//R::wipe($TABLE_NAME['TABLE_FOR_CODE']);
R::close();
*/


