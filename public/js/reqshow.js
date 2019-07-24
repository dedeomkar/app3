var req = {
	enqname:1,
	cbdate:1,
	mobno:1,
	status:0,
	email:0,
	unsub:0,
	invalid:0, 
	city:1,
	firstbuyer:0,
	pcode:0,
	location:0,
	source:1,
	gender:0,
	ssource:0,
	income:0,
	altpho1:0,
	profession:0,
	altpho2:0,
	martial:0,
	owner:0,
	age:0,
	exoffer:0,
	lang:0,
	recom1:0,
	remarks:0,
	recom2:0,
	recom3:0,
	did:0, 
	vid:0,
	lastcall:0,
	leadtp:0,
	agentp:0,

	hist :0,
	desc :0,
	altcity :0,
	nsub :0,
	ninv :0,
	issub :0,
	ininv :0,
	subsck :0,
	invck :0,
	npotential :0,
	potential:0,

	yom:0,
	budget:0,
	manf:0,
	mod:0,
	plocation:0,

	paper:0,
	loan:0,
	nopaper:0,
	noloan:0,
	insur:0,
	swarn:0,
	noinsur:0,
	noswarn:0,
	cmodel:0,
	cprice:0,

	vcity:1,
	vstatus:1,
	vreason1:0,
	vreason2:0,
	vreason3:0,
	vdate:1,
	vTS:1,     
	invloc:1,

};

var reqc = {
	body:0,
	bcolor:0, 
	fuel:0,  
	maxown:0, 
	trans:0,
}

var ids = [
	"enqname",
	"cbdate",
	"mobno",
	"status",
	"email",
	"unsub",
	"invalid", 
	"city",
	"firstbuyer",
	"pcode",
	"location",
	"source",
	"gender",
	"ssource",
	"income",
	"altpho1",
	"profession",
	"altpho2",
	"martial",
	"owner",
	"age",
	"exoffer",
	"lang",
	"recom1",
	"remarks",
	"recom2",
	"recom3",
	"lastcall",
	"leadtp",
	"did",
	"vid",
	"agentp",	//basic 31

	"hist",
	"desc",
	"altcity",
	"nsub",
	"ninv",
	"issub",
	"ininv",
	"subsck",
	"invck",
	"npotential",
	"potential", 	//process 41

	"yom",
	"budget",
	"manf",
	"mod",
	"plocation",	//buyers pref 47

	"paper",
	"loan",
	"nopaper",
	"noloan",
	"insur",
	"swarn",
	"noinsur",
	"noswarn",
	"cmodel",
	"cprice",		//post serv  57

	"vcity",
	"vstatus",
	"vreason1",
	"vreason2",
	"vreason3",
	"vdate",
	"invloc",
	"vTS",     			//visit
];

var cids = [
	"body",
	"bcolor", 
	"fuel",  
	"maxown", 
	"trans",	//buyers pref
	]

function getCheck(n){
	var result ='';
	$.each($("input[name='"+n+"']:checked"),function(){
	result=result+' '+$(this).val();
	}); 
	return result;
}
function getmult(v){
	res="";
	v.forEach(function(vi){
		res=vi+";"+res; 
	});return res;
}

function isBlank(str) {
    return (!str || /^\s*$/.test(str));
}

function rem(){ 
	ids.forEach(function(id){
	var x="#"+id;  
	$(x).removeClass('danger');  
	});  
}

function show(){
	var basic=0, pros=0, buyer=0,post=0; 
	var f=0,i=0;
	ids.forEach(function(id){
	var x="#"+id; 
	if (req[id] && isBlank($(x).val())  ){
	if (i<=57){f=1;}
	if (i<=31){basic=1; }
	if (i>31 && i<=41){pros=1;}
	if (i>41 && i<=47){buyer=1;}
	if (i>47 && i<=57){post=1;} 
	$(x).addClass('danger'); 
	}
	i++;
	});  

	cids.forEach(function(id){
	var x="#"+id;  
	if (reqc[id] && !getCheck(id).length){
	f=1; 
	buyer=1;
	$(x).addClass('danger'); 
	} 
	});
	if (basic){$('#T1').addClass('dangertab');}else {$('#T1').removeClass('dangertab');}
	if (pros){$('#T2').addClass('dangertab');}else {$('#T2').removeClass('dangertab');}
	if (buyer){$('#T3').addClass('dangertab');}else {$('#T3').removeClass('dangertab');} 
	if (post){$('#T4').addClass('dangertab');}else {$('#T4').removeClass('dangertab');} 
if (f)return false;
return true;
}

function vishow(){
	var basic=0, post=0; 
	var f=0,i=48; 
	for (i;i<ids.length;i++){
	var x="#"+ids[i];  
	if (req[ids[i]] && isBlank($(x).val())  ){
	f=1;
	if (i>57){basic=1; } 
	if (i>47 && i<=57){post=1;}
	$(x).addClass('danger'); 
	}
	}
 
	if (basic){$('#T1').addClass('dangertab');}else {$('#T1').removeClass('dangertab');} 
	if (post){$('#T4').addClass('dangertab');}else {$('#T4').removeClass('dangertab');} 
if (f)return false;
return true;
}

function spans(){ 
	ids.forEach(function(id){
	var x="#"+id;
	var y = x+"span" ;
	if (req[id] ){ 
	$(y).css('color','red');
	$(y).css('opacity',1); 
	}else {  
	$(y).css('opacity',0); 
	}});
	cids.forEach(function(id){
	var x="#"+id;
	var y = x+"span" ;
	if (reqc[id] ){ 
	$(y).css('color','red');
	$(y).css('opacity',1); 
	}else {  
	$(y).css('opacity',0); 
	}});   
}

function allck(){
	$.each($(':input'),function(){
	$(this).change(function(){
	var id =  $(this).attr('id');
	if (!isBlank($(this).val()))	{ 
		$(this).removeClass('danger');
	}else {
		if (req[id])
		{$(this).addClass('danger');}
	}
	});
	});
}

function valid(id, type){
	$(id).change(function(){
	var i;
	for ( i=0;i<type.length;i++){
	t=type[i]; 
	var msg = "ok";
		switch (t){
			case 'email':
				msg=email_v(id);
				break;
			case 'phone':
				msg=phone_v(id);
				break;
			case 'req':
				msg=req_v(id);
				break;  
			case 'pincode':
				msg=pincode_v(id);
				break;
			} 
		if (msg=='ok'){
		$(id).removeClass('danger'); 
		$(id+'vmsg').text("");
		}else {   
		$(id).addClass('danger');
		$(id+'vmsg').text(msg);  
		return false;
		//adds text to id+vmsg span 
		}
	}
});return true;
}

function valid_(id, type){ 
	var i;
	for ( i=0;i<type.length;i++){
	t=type[i]; 
	var msg = "ok";
		switch (t){
			case 'email':
				msg=email_v(id);
				break;
			case 'phone':
				msg=phone_v(id);
				break;
			case 'req':
				msg=req_v(id);
				break;  
			case 'pincode':
				msg=pincode_v(id);
				break;
			} 
		if (msg=='ok'){
		$(id).removeClass('danger'); 
		$(id+'vmsg').text("");
		}else {   
		$(id).addClass('danger');
		$(id+'vmsg').text(msg);  
		return false;
		//adds text to id+vmsg span 
		}
	} return true;
}

function email_v(id){ 
	var v=$(id).val();
	v = v.trim(); 
	$(id).val(v);
	if (isBlank(v)){
		return "ok";
	}
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(v)){
		return "ok"; 
	}
	return "Invalid format";
}
function req_v(id){ 
	var v=$(id).val();
	v = v.trim(); 
	$(id).val(v);
	if (isBlank(v)){
		return "Field is required.";
	} 
	return "ok";
}
function phone_v(id){ 
	var v=$(id).val();
	v = v.trim(); 
	$(id).val(v);
	if (isBlank(v)){
		return "ok";
	}
	if (/^[0-9]{10}$/.test(v)){
		return "ok"; 
	}
	return "Invalid format";
}
function pincode_v(id){ 
	var v=$(id).val();
	v = v.trim(); 
	$(id).val(v);
	if (isBlank(v)){
		return "ok";
	}
	if (/^[0-9]{6}$/.test(v)){
		return "ok"; 
	}
	return "Invalid format";
}