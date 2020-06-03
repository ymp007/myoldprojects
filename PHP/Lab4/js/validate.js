function validateform () {
		name=document.concernform.name.value;
		email=document.concernform.email.value;
		document.getElementById('errorn').innerHTML="";
		document.getElementById('errore').innerHTML="";
		document.getElementById('errorq').innerHTML="";
		namer= new RegExp(/^[A-Za-z]+$/);
		emailr = new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);

		if(name===""||name===null){
			
			document.getElementById('errorn').innerHTML="Please Enter Name";
			return false;
		
		}else if(!namer.test(name)){
			document.getElementById('errorn').innerHTML="Please Enter Valid Name";
			return false;
		}else if (email===""||email===null) {
			document.getElementById('errore').innerHTML="Please Enter Email";
			return false;
		}else if (!emailr.test(email)) {
			document.getElementById('errore').innerHTML="Please Enter Valid Email";
			return false;
		}else if (document.concernform.question.value==="") {
			document.getElementById('errorq').innerHTML="Please Ask Proper Question";
			return false;
		}

	}