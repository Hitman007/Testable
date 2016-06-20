<?php

namespace SC5050;


class CustomCPTsMetaBoxesHTML{

	public function __construct() {	}
	
	public function getAddNewPTRNFormHTML(){
		
		//lnI8 strings:
		$addTicketsRange = __('Add Tickets Range:');
		$min = __('min');
		$max = __('max');
		$addOneTicket = __('Add one ticket:');
		$addTickets = __('Add Tickets');
		
		$output = <<<formOutputHTML
<style>
	#crg-add-raffle-form-div{border-style: solid; max-width: 35%; padding: 5px;}
	.crg-add-raffle-form-inputs{float:right;}
	.crg-add-raffle-form-labels{float:left;}
	.crg-clear-fix{clear:both;width:100%;min-width:100%;}
</style>
<div id = "add-tickets-to-raffle-form-div">
   <form name = 'add-tickets-to-raffle-form' id = 'cadd-tickets-to-raffle-form' method = 'post' />
      <div = id = "">
         
         <div class = 'crg-add-raffle-form-labels'>
            $addTicketsRange
         </div>
         <div class = 'crg-add-raffle-form-inputs'>			
            <label for = 'ticket-range-min'>$min</label>
            <input type = 'text' name = 'ticket-range-min' id = 'ticket-range-min' size = '5' />
            <label for = 'ticket-range-max'>$max</label>
            <input type = 'text' name = 'ticket-range-max' id = 'ticket-range-min' size = '5' />
         </div>
         <div class = 'crg-clear-fix'>&nbsp;</div>
         
         <div class = 'crg-add-raffle-form-labels'>
            $addOneTicket
         </div>
         <div class = 'crg-add-raffle-form-inputs'>			
            <label for = 'ticket-one'>#</label>
            <input type = 'text' name = 'ticket-one' id = 'ticket-one' size = '5' />
         </div>
		 <div class = 'crg-clear-fix'>&nbsp;</div>
		<div class = 'crg-clear-fix'>&nbsp;</div>
         <input type = 'submit' value = '$addTickets' name = 'crg-raffle-crud-form-submit-button' />
      </div><!-- END:#crg-add-raffle-form-revealed-area -->
   </form>
</div><!-- #crg-add-raffle-form-div -->
formOutputHTML;

		return $output;
	}
}
