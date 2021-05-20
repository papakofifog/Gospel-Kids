/* validates for m input using regex (Javascript regular expresiions) */

function validateForm(){
	const Form = document.forms['shiping-company'];
	const compname = Form['compname']['value'];
	const logisticname= Form['namelogistic']['value'];
	const weight = Form['weight']['value'];
	const location= Form['locationproduct']['value'];
	//const freigcomp= Form ['freightcomp']['value'];


	const fver =  /^[-\sa-zA-Z]+$/;
	if(!fver.test(compname)){
		alert('Invalid companyName! Only letters and hyphens allowed here!');
		document.Form.compname.focus();
		return false;
	}

	

	const lver = /^[-\sa-zA-Z]+$/;
	if(!lver.test(logisticname)){
		alert('Invalid logistic name! Only letters and hyphens allowed here!');
		document.Form.logisticname.focus() ;
		return false;
	}

	const pver =/|[1-9]\d/;
	if(!pver.test(weight)){
		alert('Invalid weight measurement');
		document.Form.weight.focus() ;
		return false;
	}


	const loc = /^\s*\S+(?:\s+\S+){2}/;
	if(!loc.test(location)){
		alert('Invalid address!');
		document.Form.location.focus() ;
		return false;
	}
	else{
		return true;
	}
}





