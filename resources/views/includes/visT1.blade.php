  
<script type="text/javascript"> 
    $('#btnv').click(function(event){  

      //validation
    var data = {  
    '_token': $('input[name=_token]').val(),
 	'enq_id':'{{$x['id']}}',
	} 
	 $.each ($(':input'),function(){
	 	var xx = $(this).attr('id');
	 	// console.log(xx);
	 	data[xx]= $(this).val();
	 });

	if (vishow()){	   
	$.ajax({
      type: 'POST',
      url: "{{url('vis/create')}}", 
      data:data,
      success: function(data){
	        if (data.errors){
	        	console.log(data.errors[0]);
	        }
	        else {  

    	    }
    		}

      }) ;
  	}else {
  		console.log('fill all');
  	} 
});
 
</script>


<table style="width: 100%;">
<tr>
	<td style="width: 15%;">Enquiry Name:<span style="opacity: 0" id="venqnamespan">*</span></td>
	<td style="width: 35%;">
		<input type="text" name="venqname" id="venqname" disabled="true" value="{{$x['name']}}"> 
		<span id="venqnamevmsg" class="vmsg"></td>  
	<td  > </td>
	<td>  </td> 
</tr>
<tr> 
	<td >City ID:<span style="opacity: 0" id="vcityspan">*</span></td>
	<td ><input type="text" name="vcity" id="vcity">   
    <span>+</span><span>-</span></td>
	<td>Inventory Location:<span style="opacity: 0" id="invlocspan">*</span></td>
	<td><input type="txt" name="invloc" id="invloc">
    <span>+</span><span>-</span></td>
</tr>
<tr>
	<td>Visit Status:<span style="opacity: 0" id="vstatusspan">*</span></td>
	<td>
		<select name="vstatus" id="vstatus" >
			<option value="" label=""></option>
			<option value="Visit Booked" label="Visit Booked" >Visit Booked</option>
			<option value="Visit Confirmed" label="Visit Confirmed" hidden="true">Visit Confirmed</option>
			<option value="Visit Rebooked" label="Visit Rebooked">Visit Rebooked</option>
			<option value="Visit Postponed" label="Visit Postponed">Visit Postponed</option>
			<option value="Visit Cancelled" label="Visit Cancelled">Visit Cancelled</option>
		</select>
	</td>  
	<td ></td><td >  </td>   
</tr>
<tr>    
 <td class="no vreason1">Visit Reason:<span style="opacity: 0" id="vreason1span">*</span></td>
	<td class="no vreason1">
		<select name="vreason1" id="vreason1" >
			<option value="" label=""></option>
			<option value="Unavailable on Visit Date" label="Unavailable on Visit Date"  >Unavailable on Visit Date</option>
			<option value="Rebooked from Website" label="Rebooked from Website" >Rebooked from Website</option>
			<option value="Required Car Unavailable" label="Required Car Unavailable">Required Car Unavailable</option> 
		</select>
	</td>
	<td class="no vreason2">Visit Reason:<span style="opacity: 0" id="vreason2span">*</span></td>
	<td class="no vreason2">
		<select name="vreason2" id="vreason2" >
			<option value="" label=""></option> 
			<option value="Customer Unreachable" label="Customer Unreachable">Customer Unreachable</option> 
			<option value="Required Car Unavailable" label="Required Car Unavailable">Required Car Unavailable</option> 
			<option value="Customer Busy" label="Customer Busy">Customer Busy</option> 
			<option value="Out of Town" label="Out of Town">Out of Town</option> 
			<option value="Needs time to decide" label="Needs time to decide">Needs time to decide</option> 
			<option value="Customer didnot turn up" label="Customer didnot turn up">Customer didnot turn up</option> 
			<option value="Showroom is too far" label="Showroom is too far">Showroom is too far</option>  
		</select>
	</td>
	<td class="no vreason3">Visit Reason:<span style="opacity: 0" id="vreason3span">*</span></td>
	<td class="no vreason3">
		<select name="vreason3" id="vreason3" > 
			<option value="" label=""></option>
			<option value="Bought car from other sources" label="Bought car from other sources">Bought car from other sources</option>
			<option value="Not Interested in Buying any car" label="Not Interested in Buying any car">Not Interested in Buying any car</option>
			<option value="Never answers call" label="Never answers call">Never answers call</option>
			<option value="Requirement not available" label="Requirement not available">Requirement not available</option>
			<option value="Cancelled from website " label="Cancelled from website ">Cancelled from website </option>
			<option value="Showroom is too far" label="Showroom is too far">Showroom is too far</option>
			<option value="New Car Buyer" label="New Car Buyer">New Car Buyer</option>
			<option value="T Permit Request" label="T Permit Request">T Permit Request</option>
			<option value="Not Eligible for Loan" label="Not Eligible for Loan">Not Eligible for Loan</option>
			<option value="Alternate Number" label="Alternate Number">Alternate Number</option> 
			<option value="Does not want to buy Requirement Mismatch" label="Does not want to buy Requirement Mismatch">Does not want to buy Requirement Mismatch</option>
		</select>
	</td> 
   
<td></td><td></td>
</tr>



<tr> 
	<td >Visit Date:<span style="opacity: 0" id="vdatespan">*</span></td>
	<td ><input type="datetime" name="vdate" id="vdate"></td>  
	<td>Visit TimeSlot: <span style="opacity: 0" id="vTSspan">*</span></td>
	<td><select name="vTS" id="vTS" >
			<option value="" label=""></option>
			<option value="10am-12pm" label="10am-12pm">10am-12pm</option>
			<option value="12pm-2pm" label="12pm-2pm">12pm-2pm</option>
			<option value="2pm-4pm" label="2pm-4pm">2pm-4pm</option>
			<option value="4pm-6pm" label="4pm-6pm">4pm-6pm</option> 
		</select>
	</td>
</tr> 
<tr>  
	<td>Description:</td>
	<td><input type="text" name="vdesc" id="vdesc"> </td>
	<td></td><td></td>
</tr>

<tr> 
	<td >Visit Booking Date: </td>
	<td><input type="text" name="vbdate" id="vbdate"></td> 
	<td >Visit Booking agent: </td>
	<td><input type="text" name="vbAg" id="vbAg"></td> 
</tr>
<tr> 
	<td >Visit Done Date: </td>
	<td><input type="text" name="vdDate" id="vdDate"></td> 
	<td >Visit ID: </td>
	<td><input type="text" name="vID" id="vID"></td> 
</tr> 
 
<tr> 
	<td >Teams: </td>
	<td><input type="text" name="vteams" id="vteams"></td> 
	<td >Assigned to: </td>
	<td><input type="text" name="vass" id="vass"></td> 
</tr>
 
</table>
 
 <script type="text/javascript">
 	$('#vstatus').change(function(){
 		switch ($(this).val()){
 			case "Visit Rebooked": 
 				$('.vreason1').removeClass('no');  
 				$('.vreason2').addClass('no');  
 				$('.vreason3').addClass('no');  
 				req['vreason1']=1;req['vreason2']=0;req['vreason3']=0;
 			break;
 			case "Visit Postponed":
 				$('.vreason2').removeClass('no');  
 				$('.vreason1').addClass('no');  
 				$('.vreason3').addClass('no');  
 				req['vreason2']=1;req['vreason1']=0;req['vreason3']=0;
 			break;
 			case "Visit Cancelled":
 				$('.vreason3').removeClass('no');  
 				$('.vreason2').addClass('no');  
 				$('.vreason1').addClass('no');  
 				req['vreason3']=1;req['vreason1']=0;req['vreason2']=0;
 			break; 
 			default:
 				$('.vreason1').addClass('no');  
 				$('.vreason2').addClass('no');  
 				$('.vreason3').addClass('no'); 
 				req['vreason1']=0;req['vreason2']=0;req['vreason3']=0;
 		}
 		spans();
 	});
 </script>