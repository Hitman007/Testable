<?php
/*
Feature: Admins can create, edit, and delete raffles
    In order have raffle tickets to sell
    As as admin
    I want to do CRUD activities in the dashbaord
*/

$I = /*am a */ new SC5050\SC5050Tester($scenario);
$I->wantTo("Confirm Feature: Admins can create, edit, and delete raffles");

/*
Scenario:
	When an admin visits the dashboard
	Then he should see a custom item called "Raffles"
*/

//$I->loginWordpressAs('admin');

//Compile the dashboard's URL. Set in _bootstrap.php:
	global $CRG_homePageURL; $dashBoardURL = $CRG_homePageURL . "/wp-admin/index.php";
	$I->amOnUrl($dashBoardURL);
//$I->see('Raffles');

$x = new Step\Acceptance\CRG_WP_LoginController($scenario);
$x->loginAsAdmin();
/*
 Sceanrio:
    When an admin clicks the menu item
    Then he sees the admin page
    
Scenario: The admin creates a new raffle

Scenario: The admin edits an existing raffle

Scenario: The admin deletes a raffle

Scenario: The admin sees a detailed list of available raffles
*/
//$I->click(".toplevel_page_raffle_page");


//$I->see('Create New Charitable Raffle');
