<table style="width: 100%;">
	<tr>
		<td style="width: 20%;">Is Potential Buyer:<span style="opacity: 0" id="potentialspan">*</span></td>
		<td style="width: 30%;">
			<select id="potential" name="potential">
			<option label="" value=""></option>
			<option label="Yes" value="Yes">Yes</option>
			<option label="No" value="No">No</option>
		</select></td> 
		<td  class='npotential-'></td><td class='npotential-'></td>
		<td style="width: 15%;display: none;" class="npotential">Reasons Not Potential:<span style="opacity: 0" id="npotentialspan">*</span></td>
		<td  class="npotential" style="display: none;"><select id="npotential" name="npotential">
			<option label="" value=""></option>
			<option label="Bought Car From Other Sources" value="Bought Car From Other Sources">Bought Car From Other Sources</option>
			<option label="Need Luxury Cars" value="Need Luxury Cars">Need Luxury Cars</option>
			<option label="Not Interested In Buying Any Car" value="Not Interested In Buying Any Car">Not Interested In Buying Any Car</option>
			<option label="New Car Buyer" value="New Car Buyer">New Car Buyer</option>
			<option label="Wrong Number" value="Wrong Number">Wrong Number</option>
			<option label="Budget Is low" value="Budget Is low">Budget Is low</option>
			<option label="Seller/Dealer" value="Seller/Dealer">Seller/Dealer</option>
			<option label="Non Operational Area" value="Non Operational Area">Non Operational Area</option>
			<option label="Not eligible for Loan" value="Not eligible for Loan">Not eligible for Loan</option> 
		</select></td>  
	</tr> 
	<tr> 
		<td  >Is Car Shortlisted in Inventory:<span style="opacity: 0" id="ininvspan">*</span></td>
		<td  ><select name="ininv" id="ininv">
			<option label="" value=""></option>
			<option label="Yes" value="Yes">Yes</option>
			<option label="No" value="No">No</option>
		</select></td>  
		<td >Subscribed:<span style="opacity: 0" id="issubspan">*</span></td>
		<td >
			<select name="issub" id="issub">
			<option label="" value=""></option>
			<option label="Needs time" value="Needs time">Needs time</option>
			<option label="Not interested" value="Not interested">Not interested</option>
			<option label="Will pay (499)" value="Will pay (499)">Will pay (499)</option>
		</select></td>
	</tr>


	<tr>
		<td class="ninv-"></td> <td class="ninv-"></td>
		<td class="ninv" style="display: none;">Reason not in Inventory:<span style="opacity: 0" id="ninvspan">*</span></td>
		<td class="ninv" style="display: none;">
			<select name="ninv" id="ninv">
			<option label="" value=""></option>
			<option label="Needs time" value="Needs time">Needs time</option>
			<option label="Req. Not Available" value="Req. Not Available">Req. Not Available</option>
			<option label="Bought Car from another sources" value="Bought Car from another sources">Bought Car from another sources</option>
			<option label="Not interested in buying any car" value="Not interested in buying any car">Not interested in buying any car</option>
			<option label="Not eligible for loan " value="Not eligible for loan ">Not eligible for loan </option>
			<option label="Budget is low " value="Budget is low ">Budget is low </option> 
		</select></td> 
		<td class="nsub-" style=""></td> <td class="nsub-" style=""></td>
		<td class="nsub" style="display: none;" >Reason Not Subscribed:<span style="opacity: 0" id="nsubspan">*</span></td>
		<td class="nsub" style="display: none;"><select name="nsub" id="nsub">
			<option label="" value=""></option>
			<option label="Too high Subscription Cost" value="Too high Subscription Cost">Too high Subscription Cost</option>
			<option label="Requirement not available" value="Requirement not available">Requirement not available</option>
			<option label="No Confirmation About payment" value="No Confirmation About payment">No Confirmation About payment</option> 
			<option label="Postponed Car Buying" value="Postponed Car Buying">Postponed Car Buying</option>
		</select></td>
	</tr>
	<tr>
		<td>Alt Address City:<span style="opacity: 0" id="altcityspan">*</span></td>
		<td><input type="text" name="altcity" id="altcity"></td>  
	</tr>
	<tr>
		<td>Description:</td>
		<td><input type="text" name="desc" id="desc"></td> 
		<td>History:</td>
		<td><input type="text" name="hist" id="hist"></td>  
	</tr> 
</table>


<script type="text/javascript">
	$('#potential').change(function(){
	var statusvar = $('#status').val(); 
	if($('#potential').val() == "Yes"){
		$('#status').val("In-Process"); 
		req['pcode']=1; req['location']=1;req['recom1']=1;
		req['ininv']=1;
		reqc['fuel']=1;req['budget']=1;req['yom']=1;req['manf']=1;req['mod']=1;
		req['npotential']=0;
		$('.npotential').css('display','none');
		$('.npotential-').css('display',''); 
	}else if($('#potential').val() == "No"){
		$('#status').val("Dead");
		req['pcode']=0; req['location']=0; req['recom1']=0;
		req['ininv']=0;
		reqc['fuel']=0;req['budget']=0;req['yom']=0;req['manf']=0;req['mod']=0;
		req['npotential']=1;
		$('.npotential').css('display','');
		$('.npotential-').css('display','none');
	}else{
		$('#status').val(statusvar);
		req['pcode']=0; req['location']=0; req['recom1']=0;
		req['ininv']=0;
		reqc['fuel']=0;req['budget']=0;req['yom']=0;req['manf']=0;req['mod']=0;
		req['npotential']=0;
		$('.npotential').css('display','none');
		$('.npotential-').css('display',''); 
	}
	spans();
	}); 
	$('#issub').change(function(){ 
		if($('#issub').val()=='Needs time' || $('#issub').val()=='Not interested'){  
			$('.nsub').css('display','');
			$('.nsub-').css('display','none');
		}else {
			$('.nsub').css('display','none');
			$('.nsub-').css('display',''); 
		}
	});
	$('#ininv').change(function(){ 
		if($('#ininv').val()=='No'){  
			$('.ninv').css('display','');
			$('.ninv-').css('display','none');
			req['ninv']=1;
		}else {
			$('.ninv').css('display','none');
			$('.ninv-').css('display',''); 
			req['ninv']=0;
		}
	});
	$('#ninv').change(function(){ 
		if($('#ninv').val()=='Needs time'){   
			req['issub']=1;
			req["loan"]=0;req['paper']=0;req["insur"]=0;req["swarn"]=0;req["cprice"]=0;req["cmodel"]=0;
			$('#T4').removeClass('dangertab');
		}else if ($('#ninv').val()=='Bought Car from another sources'){
			alert('Please Fill Post Sales Details');
			req["loan"]=1;req['paper']=1;req["insur"]=1;req["swarn"]=1;req["cprice"]=1;req["cmodel"]=1;
			req['issub']=0; 
			$('#T4').addClass('dangertab'); 
		}else {
			req['issub']=0;
			req["loan"]=0;req['paper']=0;req["insur"]=0;req["swarn"]=0;req["cprice"]=0;req["cmodel"]=0;
			$('#T4').removeClass('dangertab');
		}
		spans();
	});  
</script>