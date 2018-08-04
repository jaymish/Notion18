
function phvalidate()
{
	
    var pat=/^\d{10}$/;
    var phvalue=document.getElementById("phone").value;
    var ph_div=document.getElementById("error_msg");
    if(!pat.test(phvalue))
    {
       ph_div.style.display="";
    }
    else
    {
        ph_div.style.display="none";
    }
}
function terms(){
    var rule=document.getElementById('rule');
	var workshop=document.getElementById('solidworks')
    var subbtn=document.getElementById('subbtn');

	// 
	

    if(rule.checked && workshop.checked)
    {
		t="0";
        subbtn.style.display="";
    }
    else
    {
        subbtn.style.display="none";
    }
}