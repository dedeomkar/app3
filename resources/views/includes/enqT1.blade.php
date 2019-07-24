  
<script type="text/javascript">
    $(document).ready(function(){ 
      $('#btnx').click(function(event){  
      //validation	
	    var data = {};
		 $.each ($(':input'),function(){
		 	var xx = $(this).attr('id');
		 	// console.log(xx); 
		 	if(xx && xx!="btnx")
		 	{data[xx]= $(this).val();}
		 }); 
		data["manf"]=getmult($("#manf").val());
		data["mod"]=getmult($("#mod").val()); 
		data["plocation"]=getmult($("#plocation").val()); 
		data["body"]=getCheck('body');
		data["bcolor"]=getCheck('bcolor');
		data["fuel"]=getCheck('fuel');						
		data["maxown"]=getCheck('maxown');
		data["trans"]=getCheck('trans'); 
	 	data['_token']= $('input[name=_token]').val(); 
 
	if (show()){	  
	if (valid_('#mobno',['phone']) && valid_('#email',['phone']) && valid_('#pcode',['pincode']) 
		&& valid_('#altpho1',['phone']) && valid_('#altpho2',['phone'])){

      $.ajax({
      type: 'POST',
      url: '', 
      data:data,
      success: function(data){
	        if (data.errors){
	        	console.log(data.errors[0]);
	        }
	        else {    
	        	alert('Please Create Visit');  
	        	window.location = data['route'];
    	    }
    	}

      }) ;

  	}}else{console.log('awdwa');}
  });
});
 
</script>


<table style="width: 100%;">
<tr>
	<td style="width: 15%;">Enquiry Name:<span style="opacity: 0" id="enqnamespan">*</span></td>
	<td style="width: 35%;"><input type="text" name="enqname" id="enqname"> 
		<span id="enqnamevmsg" class="vmsg"></td>  
	<td style="width: 15%;">Call back date:<span style="opacity: 0" id="cbdatespan">*</span><span style="opacity: 0" id="span">*</span></td>
	<td><input type="date" name="cbdate" id="cbdate" > 
	</td> 
</tr>
<tr>
	<td >Mobile No:<span style="opacity: 0" id="mobnospan">*</span></td>
	<td >
		<input type="text" name="mobno" id="mobno">
		<span id="mobnovmsg" class="vmsg"></span>
	</td>  
	<td>Status:<span style="opacity: 0" id="statusspan">*</span></td>
	<td>
		<select name="status" id="status" >
			<option value="" label=""></option>
			<option value="New" label="New" selected="selected">New</option>
			<option value="In-Process" label="In-Process" hidden="true">In-Process</option>
			<option value="Dead" label="Dead">Dead</option>
		</select>
	</td>  
</tr>
<tr> 
	<td >Email:<span style="opacity: 0" id="emailspan">*</span></td>
	<td ><input type="text" name="email" id="email">   
    <span>+</span><span>-</span> <span id="emailvmsg" class="vmsg"></span></td>
	<td>Unsubscribed:<input type="checkbox" name="unsub" id="unsub"></td>
	<td>Invalid:<input type="checkbox" name="invalid" id="invalid"></td>
</tr>
<tr> 
	<td >City:<span style="opacity: 0" id="cityspan">*</span></td>
	<td ><input type="text" name="city" id="city">   
    <span>+</span><span>-</span></td>
	<td>First time car buyer:<span style="opacity: 0" id="firstbuyerspan">*</span></td>
	<td><select type="options" name="firstbuyer" id="firstbuyer">
		<option label value></option>
		<option label="Yes" value="Yes">Yes</option>
		<option label="No" value="No">No</option>
	</select></td>
</tr>
<tr> 
	<td >Pin code:<span style="opacity: 0" id="pcodespan">*</span></td>
	<td ><input type="text" name="pcode" id="pcode"><span id="pcodevmsg" class="vmsg"></span></td>  
	<td>Locality: <span style="opacity: 0" id="locationspan">*</span></td>
	<td><input type="text" name="location" id="location">
		<span>+</span><span>-</span>
	</td>
</tr>
<tr> 
	<td >Source:<span style="opacity: 0" id="sourcespan">*</span></td>
	<td><select type="options" name="source" id="source">
		<option label value></option>
		<option label="Inbound call" value="Inbound call">Inbound call</option>
		<option label="Adposting" value="Adposting">Adposting</option>
		<option label="Walk-in" value="Walk-in">Walk-in</option>
		<option label="Referral" value="Referral">Referral</option>
		<option label="Social Lead" value="Social Lead">Social Lead</option>
		<option label="Others" value="Others">Others</option>
		<option label="Internal" value="Internal">Internal</option>
		<option label="Adposting" value="Adposting">Adposting</option>
		<option label="Recycled" value="Recycled">Recycled</option>
	</select></td>
	<td>Gender:<span style="opacity: 0" id="genderspan">*</span></td>
	<td><select type="options" name="gender" id="gender">
		<option label value></option>
		<option label="Male" value="Male">Male</option>
		<option label="Female" value="Female">Female</option>
	</select></td>
</tr>
<tr> 
	<td >Sub Source:<span style="opacity: 0" id="ssourcespan">*</span></td>
	<td><select type="options" name="ssource" id="ssource">
		<option label value></option>
		<option label="Just Dial" value="Just Dial">Just Dial</option>
		<option label="Adv Club" value="Adv Club">Adv Club</option>
		<option label="Support" value="Support">Support</option>
		<option label="Truebil Direct" value="Truebil Direct">Truebil Direct</option>
		<option label="DID number" value="DID number">DID number</option>
		<option label="EVB" value="EVB">EVB</option>
		<option label="Demand marketing" value="Demand marketing">Demand marketing</option>
		<option label="Missed" value="Missed">Missed</option> 
	</select></td>
	<td>Income:<span style="opacity: 0" id="incomespan">*</span></td>
	<td><select type="options" name="income" id="income">
		<option label value></option>
		<option label="0-5" value="0-5">0-5</option>
		<option label="5-10" value="5-10">5-10</option>
		<option label="10-15" value="10-15">10-15</option>
		<option label="15+" value="15+">15+</option> 
	</select></td>
</tr>
<tr>  
	<td >Alternate Phone 1:<span style="opacity: 0" id="altpho1span">*</span></td>
	<td><input type="text" name="altpho1" id="altpho1"></td>
	<td>Profession:<span style="opacity: 0" id="professionspan">*</span></td>
	<td><select type="options" name="profession" id="profession">
		<option label value></option>
		<option label="Government-Salaried" value="Government-Salaried">Government-Salaried</option>
		<option label="IT-Salaried" value="IT-Salaried">IT-Salaried</option>
		<option label="Non-IT-Salaried(Any private job other than IT)" value="Non-IT-Salaried(Any private job other than IT)">Non-IT-Salaried(Any private job other than IT)</option>
		<option label="Doctor" value="Doctor">Doctor</option>
		<option label="CA" value="CA">CA</option>
		<option label="Businessman" value="Businessman">Businessman</option> 
		<option label="Others" value="Others">Others</option>
	</select></td>
</tr>
<tr> 
	<td >Alternate Phone 2:<span style="opacity: 0" id="altpho2span">*</span></td>
	<td><input type="text" name="altpho2" id="altpho2"></td>
	<td>Martial Status:<span style="opacity: 0" id="martialspan">*</span></td>
	<td><select type="options" name="martial" id="martial">
		<option label value></option> 
		<option label="Single" value="Single">Single</option>
		<option label="Married" value="Married">Married</option>
		<option label="Other" value="Other">Other</option>
	</select></td>
</tr>
<tr> 
	<td >Owner Agent:<span style="opacity: 0" id="ownerspan">*</span></td>
	<td><input type="text" name="owner" id="owner">
		<span>+</span><span>-</span>
	</td>
	<td>Age:<span style="opacity: 0" id="agespan">*</span></td>
	<td><select type="options" name="age" id="age">
		<option label value></option> 
		<option label="0-25" value="0-25">0-25</option>
		<option label="25-30" value="25-30">25-30</option>
		<option label="30-35" value="30-35">30-35</option>
		<option label="35-40" value="35-40">35-40</option>
		<option label="40-50" value="40-50">40-50</option>
		<option label="50+" value="50+">50+</option>
	</select></td>
</tr>
<tr> 
	<td>Exchange Offer:<span style="opacity: 0" id="exofferspan">*</span></td>
	<td><select type="options" name="exoffer" id="exoffer">
		<option label value></option> 
		<option label="Wants to sell" value="Wants to sell">Wants to sell</option>
		<option label="Out of criteria" value="Out of criteria">Out of criteria</option>
		<option label="Has Car-Not interested" value="Has Car-Not interested">Has Car-Not interested</option>
		<option label="Does not own a car" value="Does not own a car">Does not own a car</option> 
	</select></td>
	<td>Language:<span style="opacity: 0" id="langspan">*</span></td>
	<td><select type="options" name="lang" id="lang">
		<option label value></option> 
		<option label="English" value="English">English</option>
		<option label="Hindi" value="Hindi">Hindi</option>
		<option label="Kannada" value="Kannada">Kannada</option>
		<option label="Marathi" value="Marathi">Marathi</option>
		<option label="other" value="other">other</option> 
	</select></td>
</tr>
<tr> 
	<td >Recommended Car 1:<span style="opacity: 0" id="recom1span">*</span></td>
	<td><input type="text" name="recom1" id="recom1"></td>
	<td>Remarks:</td>
	<td><input type="text" name="remarks" id="remarks"> </td>
</tr>
<tr> 
	<td >Recommended Car 2:<span style="opacity: 0" id="recom2span">*</span></td>
	<td><input type="text" name="recom2" id="recom2"></td> 
</tr>
<tr> 
	<td >Recommended Car 3:<span style="opacity: 0" id="recom3span">*</span></td>
	<td><input type="text" name="recom3" id="recom3"></td>
	<td>DID number:</td>
	<td><input type="text" name="did" id="did"> </td>
</tr>
<tr> 
	<td >Last Call status:<span style="opacity: 0" id="lastcallspan">*</span></td>
	<td><input type="text" name="lastcall" id="lastcall"></td>
	<td>Visit ID:</td>
	<td><input type="text" name="vid" id="vid"> </td>
</tr>   
<tr> 
	<td >Lead Generation timestamp:<span style="opacity: 0" id="leadtpspan">*</span></td>
	<td><input type="text" name="leadtp" id="leadtp"></td>
	<td>Agent modified timestamp:<span style="opacity: 0" id="agentpspan">*</span></td>
	<td><input type="date" name="agentp" id="agentp">  
	</td>
</tr>
</table>
 
 <script type="text/javascript">
 	
 	valid("#email",["email"]);	
 	valid("#enqname",["req"]);	 
 	valid("#mobno",["req","phone"]);	
 	valid("#pcode",["pincode"]);	 

 </script>