<table style="width: 100%;">
	<tr>
		<td style="width: 15%;">Paper Transfer:<span style="opacity: 0" id="paperspan">*</span></td>
		<td style="width: 35%;">
			<select id="paper" name="paper">
				<option value="" label=""></option>
				<option value="Yes" label="Yes">Yes</option>
				<option value="No" label="No">No</option>
			</select>
		 </td>
		<td style="width: 15%;">Loan:<span style="opacity: 0" id="loanspan">*</span></td>
		<td style="width: 35%;">
			<select id="loan" name="loan">
				<option value="" label=""></option>
				<option value="Yes" label="Yes">Yes</option>
				<option value="No" label="No">No</option>
			</select>
		 </td> 
	</tr> 
	<tr>
		<td  class='nopaper-'></td><td class='nopaper-'></td>
		<td  class="nopaper" style="display: none;">No Paper Transfer:<span style="opacity: 0" id="nopaperspan">*</span></td>
		<td  class="nopaper" style="display: none;">
			<select id="nopaper" name="nopaper">
				<option value="" label=""></option> 
				<option value="Service from Dealer" label="Service from Dealer">Service from Dealer</option> 
				<option value="Not Eligible" label="Not Eligible">Not Eligible</option> 
				<option value="Seller is getting done" label="Seller is getting done">Seller is getting done</option> 
				<option value="High Price" label="High Price">High Price</option> 
			</select>
		 </td>  
		<td  class='noloan-'></td><td class='noloan-'></td>
		<td  class="noloan" style="display: none;">No Loan:<span style="opacity: 0" id="noloanspan">*</span></td>
		<td  class="noloan" style="display: none;">
			<select id="noloan" name="noloan">
				<option value="" label=""></option> 
				<option value="High ROI" label="High ROI">High ROI</option> 
				<option value="Service from Dealer" label="Service from Dealer">Service from Dealer</option> 
				<option value="Not Eligible" label="Not Eligible">Not Eligible</option> 
				<option value="Paying Cash" label="Paying Cash">Paying Cash</option> 
				<option value="Loan from outside" label="Loan from outside">Loan from outside</option> 
			</select>
		 </td> 
	</tr>
	<tr>
		<td style="width: 15%;">Insurance:<span style="opacity: 0" id="insurspan">*</span></td>
		<td style="width: 35%;">
			<select id="insur" name="insur">
				<option value="" label=""></option>
				<option value="Yes" label="Yes">Yes</option>
				<option value="No" label="No">No</option>
			</select>
		 </td>
		<td style="width: 15%;">Service Warranty:<span style="opacity: 0" id="swarnspan">*</span></td>
		<td style="width: 35%;">
			<select id="swarn" name="swarn">
				<option value="" label=""></option>
				<option value="Yes" label="Yes">Yes</option>
				<option value="No" label="No">No</option>
			</select>
		 </td> 
	</tr>  
	<tr>
		<td  class='noinsur-'></td><td class='noinsur-'></td>
		<td  class="noinsur" style="display: none">No Insurance:<span style="opacity: 0" id="noinsurspan">*</span></td>
		<td  class="noinsur" style="display: none">
			<select id="noinsur" name="noinsur">
				<option value="" label=""></option>  
				<option value="High Premium" label="High Premium">High Premium</option>  
				<option value="Service from Dealer" label="Service from Dealer">Service from Dealer</option>  
				<option value="Expired - Transfer Not Required" label="Expired - Transfer Not Required">Expired - Transfer Not Required</option>  
				<option value="Interested - New Insurance" label="Interested - New Insurance">Interested - New Insurance</option>  
				<option value="Seller is getting done" label="Seller is getting done">Seller is getting done</option>  
			</select>
		 </td>  
		<td  class='noswarn-'></td><td class='noswarn-'></td>
		<td  class="noswarn" style="display: none;">No Service Warranty:<span style="opacity: 0" id="noswarnspan">*</span></td>
		<td  class="noswarn" style="display: none;">
			<select id="noswarn" name="noswarn">
				<option value="" label=""></option> 
				<option value="High Price" label="High Price">High Price</option>  
				<option value="Service from Dealer" label="Service from Dealer">Service from Dealer</option>  
				<option value="Already in Warranty" label="Already in Warranty">Already in Warranty</option>  
				<option value="Not Eligible" label="Not Eligible">Not Eligible</option>  
				<option value="Service not Required" label="Service not Required">Service not Required</option>
				<option value="Non-operational Area" label="Non-operational Area">Non-operational Area</option>
				<option value="Only RSA Needed" label="Only RSA Needed">Only RSA Needed</option>  
			</select>
		 </td> 
	</tr>
	<tr>
		<td >Car Model:<span style="opacity: 0" id="cmodelspan">*</span></td>
		<td  >
			<input type="text" name=" cmodel" id="cmodel">
		 </td>   
		<td  >Car Price:<span style="opacity: 0" id="cpricespan">*</span></td>
		<td >
			<input type="text" name=" cprice" id="cprice">
		 </td>   
	</tr>

</table>

<script type="text/javascript">
	$('#paper').change(function(){ 
		if($('#paper').val()=='No'){  
			$('.nopaper').css('display','');
			$('.nopaper-').css('display','none');
			req['nopaper']=1;
		}else {
			$('.nopaper').css('display','none');
			$('.nopaper-').css('display',''); 
			req['nopaper']=0;
		}
		spans();
	});	
	$('#loan').change(function(){ 
		if($('#loan').val()=='No'){  
			$('.noloan').css('display','');
			$('.noloan-').css('display','none');
			req['noloan']=1;
		}else {
			$('.noloan').css('display','none');
			$('.noloan-').css('display',''); 
			req['noloan']=0;
		}
		spans();
	});	
	$('#insur').change(function(){ 
		if($('#insur').val()=='No'){  
			$('.noinsur').css('display','');
			$('.noinsur-').css('display','none');
			req['noinsur']=1;
		}else {
			$('.nopaper').css('display','none');
			$('.nopaper-').css('display',''); 
			req['nopaper']=0;
		}
		spans();
	});	
	$('#swarn').change(function(){ 
		if($('#swarn').val()=='No'){  
			$('.noswarn').css('display','');
			$('.noswarn-').css('display','none');
			req['noswarn']=1;
		}else {
			$('.noswarn').css('display','none');
			$('.noswarn-').css('display',''); 
			req['noswarn']=0;
		}
		spans();

	});	




</script>