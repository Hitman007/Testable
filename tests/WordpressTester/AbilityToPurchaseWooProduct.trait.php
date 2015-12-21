<?php

namespace CustomRayGuns;

trait AbilitToPurchaseWooProduct{

	//This method purchases a Woo commerce product:
	public function purchaseWooProduct($productURL){
		$I=$this;
		$I->wantTo("Confirm that Woo product can be purchased.");
		$I->amOnUrl($productURL);
		$I->see('ADD TO CART');
		
		//This class was identified by viewing the Add Cart button with Firefox:
		$I->click("//button[@class='single_add_to_cart_button button alt']");
		$I->see('View Cart');
		$I->click('View Cart');
		$I->see('Proceed To Checkout');
		
		//This class was identified by viewing with Firefox:
		$I->click("//a[@class='checkout-button button alt wc-forward']");
		$I->see('Billing Details');

		$I->fillField('billing_last_name', 'DeleteLastName');
		$I->fillField('billing_phone', '(555)555-1212');
		$I->fillField('billing_email', 'delete@delme.com');
		$I->fillField('billing_address_1', '123 Mulberry Lane');
		$I->fillField('billing_address_2', 'Apt 2-b');

		$I->fillField('billing_postcode', '12345');

		//$I->pressKey('.page', '13');
		//$I->click('#select2-results-2');
		//$I->click('.entry-title');
		$I->click('#s2id_billing_country');
		//$I->wait('5');
		$I->pressKey('.page','U');
		$I->pressKey('.page','n');
		$I->pressKey('.page','i');
		$I->pressKey('.page','t');
		$I->pressKey('.page','e');
		$I->pressKey('.page','d');
		$I->pressKey('.page',' ');
		$I->pressKey('.page','S');
		$I->pressKey('.page','t');
		$I->pressKey('.page','a');
		$I->pressKey('.page','t');
		$I->pressKey('.page','e');
		$I->pressKey('.page','s');
		//$I->pressKey('.page', '13');
		$I->pressKey('.page', \WebDriverKeys::ENTER);
		
		
		$I->fillField('billing_first_name','DeleteFirstName');		
	
		$I->click('#s2id_billing_state');
		$I->click('#s2id_billing_state');
		//$I->wait('5');
		$I->pressKey('#s2id_autogen2_search', 'N');
		$I->pressKey('#s2id_autogen2_search','e');
		$I->pressKey('#s2id_autogen2_search','v');
		$I->pressKey('#s2id_autogen2_search','a');
		$I->pressKey('#s2id_autogen2_search','d');
		$I->pressKey('#s2id_autogen2_search','a');
		$I->pressKey('#s2id_autogen2_search', \WebDriverKeys::ENTER);
		//$I->wait('5');
		
		$I->fillField('billing_city', 'Anytown');
		
		$I->click('#place_order');
		//$I->wait('25');
		$I->see('Thank you.');
		//$I->wait('25');
	}
}
