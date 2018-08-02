
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
    var subbtn=document.getElementById('subbtn');

	// 
	

    if(rule.checked)
    {
		t="0";
        subbtn.style.display="";
    }
    else
    {
        subbtn.style.display="none";
    }
}

/*Chem-o-Magic*/
function cmagic(x) {
    var div=document.getElementById("chem1");
    var sel=document.getElementById("chmagic_drop");
    if(x.checked)
    {
        div.style.display="";
        sel.style.display="";
    }
    else
    {
        div.style.display="none";
        sel.style.display="none";   
    }
}
function cmagic1(x) {
	
	var i=0;
    i=parseInt(x.value);
    for(var k=1;k<=i;k++)
    {
        var t=document.getElementById('magic'+k);
        t.style.display="";
    }
	 while(k<=4)
	 {
		 var t=document.getElementById('magic'+k);
         t.style.display="none";
		 k++;
	 }
}

/*Chem-o-Car*/
function ccar(x){
    var div=document.getElementById("chem2");
    var sel=document.getElementById("ccar_drop");
    if(x.checked)
    {
        div.style.display="";
        sel.style.display="";
    }
    else
    {
        div.style.display="none";
        sel.style.display="none";   
    }
}
function ccar1(x) {
	var i=0;
    i=parseInt(x.value);
    for(var k=1;k<=i;k++)
    {
        var t=document.getElementById('car'+k);
        t.style.display="";
    }
		 while(k<=4)
	 {
		 var t=document.getElementById('car'+k);
         t.style.display="none";
		 k++;
	 }
}

/*LJK: My Dream Campus*/
function ljk(x) {
    var ljkn1=document.getElementById("ljkn1");
    var ljkn2=document.getElementById("ljkn2");
    var ljkn3=document.getElementById("ljkn3");
    var ljkp1=document.getElementById("ljkp1");
    var ljkp2=document.getElementById("ljkp2");
    var ljkp3=document.getElementById("ljkp3");
    if(x.checked)
    {
        ljkn1.style.display="";
        ljkn2.style.display="";
        ljkn3.style.display="";
        ljkp1.style.display="";
        ljkp2.style.display="";
        ljkp3.style.display="";
    }
    else
    {
        ljkn1.style.display="none";
        ljkn2.style.display="none";
        ljkn3.style.display="none";
        ljkp1.style.display="none";
        ljkp2.style.display="none";
        ljkp3.style.display="none";   
    }
}

/*Popsicle Stick Bridge*/
function psb(x) {
    var div=document.getElementById("civil1");
    var sel=document.getElementById("psb_drop");
    if(x.checked)
    {
        div.style.display="";
        sel.style.display="";
    }
    else
    {
        div.style.display="none";
        sel.style.display="none";   
    }
}
function psb1(x) {
	var i=0;
    i=parseInt(x.value);
    for(var k=1;k<=i;k++)
    {
        var t=document.getElementById('bridge'+k);
        t.style.display="";
    
	}
		 while(k<=4)
	 {
		 var t=document.getElementById('bridge'+k);
         t.style.display="none";
		 k++;
	 }
}

/*Beg Borrow Steal*/
function beg(x) {
    var div=document.getElementById("civil2");
    var sel=document.getElementById("beg_drop");
    if(x.checked)
    {
        div.style.display="";
        sel.style.display="";
    }
    else
    {
        div.style.display="none";
        sel.style.display="none";   
    }       
}
function beg1(x) {
	var i=0;
    i=parseInt(x.value);
    for(var k=1;k<=i;k++)
    {
        var t=document.getElementById('bbs'+k);
        t.style.display="";
    }
		 while(k<=4)
	 {
		 var t=document.getElementById('bbs'+k);
         t.style.display="none";
		 k++;
	 }
}

/*Pair Programming*/
function pair(x) {
    var pairn1=document.getElementById("pairn1");
    var pairp1=document.getElementById("pairp1");
    if(x.checked)
    {
        pairn1.style.display="";
        pairp1.style.display="";
    }
    else
    {
        pairn1.style.display="none";
        pairp1.style.display="none";
    }
}

/*Code Curry*/
function cc(x) {
    var ccn1=document.getElementById("ccn1");
    var ccn2=document.getElementById("ccn2");
    var ccp1=document.getElementById("ccp1");
    var ccp2=document.getElementById("ccp2");
    if(x.checked)
    {
        ccn1.style.display="";
        ccn2.style.display="";
        ccn3.style.display="";
        ccp1.style.display="";
        ccp2.style.display="";
        ccp3.style.display="";
    }
    else
    {
        ccn1.style.display="none";
        ccn2.style.display="none";
        ccn3.style.display="none";
        ccp1.style.display="none";
        ccp2.style.display="none";
        ccp3.style.display="none";
    }   
}

/*Race with the Bits*/
function race(x){
    var div=document.getElementById("ce1");
    var sel=document.getElementById("race_drop");
    if(x.checked)
    {
        div.style.display="";
        sel.style.display="";
    }
    else
    {
        div.style.display="none";
        sel.style.display="none";   
    }
}
function race1(x) {
    var i=0;
	i=parseInt(x.value);
    for(var k=1;k<=i;k++)
    {
        var t=document.getElementById('rwb'+k);
        t.style.display="";
    }
		 while(k<=4)
	 {
		 var t=document.getElementById('rwb'+k);
         t.style.display="none";
		 k++;
	 }
}

/*Technosense*/
function techno(x) {
    var div=document.getElementById("ec1");
    var sel=document.getElementById("techno_drop");
    if(x.checked)
    {
        div.style.display="";
        sel.style.display="";
    }
    else
    {
        div.style.display="none";
        sel.style.display="none";   
    }
}
function techno1(x) {
    var i=0;
	i=parseInt(x.value);
    for(var k=1;k<=i;k++)
    {
        var t=document.getElementById('ts'+k);
        t.style.display="";
    }
		 while(k<=4)
	 {
		 var t=document.getElementById('ts'+k);
         t.style.display="none";
		 k++;
	 }
}

/*Circuit Mania*/
function circuit(x) {
    var div=document.getElementById("ec2");
    var sel=document.getElementById("circuit_drop");
    if(x.checked)
    {
        div.style.display="";
        sel.style.display="";
    }
    else
    {
        div.style.display="none";
        sel.style.display="none";   
    }
}
function circuit1(x) {
	var i=0;
	i=parseInt(x.value);
    for(var k=1;k<=i;k++)
    {
        var t=document.getElementById('cm'+k);
        t.style.display="";
    }
		 while(k<=4)
	 {
		 var t=document.getElementById('cm'+k);
         t.style.display="none";
		 k++;
	 }
}

/*Mind Grinders*/
function mg(x) {
    var mgn1=document.getElementById("mgn1");
    var mgn2=document.getElementById("mgn2");
    var mgp1=document.getElementById("mgp1");
    var mgp2=document.getElementById("mgp2");
    if(x.checked)
    {
        mgn1.style.display="";
        mgn2.style.display="";
        mgp1.style.display="";
        mgp2.style.display="";
    }
    else
    {
        mgn1.style.display="none";
        mgn2.style.display="none";
        mgp1.style.display="none";
        mgp2.style.display="none";
    }
}

/*Counter Strike*/
function cstrike(x)
{
    var cstriken1=document.getElementById("cstriken1");
    var cstriken2=document.getElementById("cstriken2");
    var cstriken3=document.getElementById("cstriken3");
    var cstriken4=document.getElementById("cstriken4");
    var cstrikep1=document.getElementById("cstrikep1");
    var cstrikep2=document.getElementById("cstrikep2");
    var cstrikep3=document.getElementById("cstrikep3");
    var cstrikep4=document.getElementById("cstrikep4");
    if(x.checked)
    {
        cstriken1.style.display="";
        cstriken2.style.display="";
        cstriken3.style.display="";
        cstriken4.style.display="";
        cstrikep1.style.display="";
        cstrikep2.style.display="";
        cstrikep3.style.display="";
        cstrikep4.style.display="";
    }
    else
    {
        cstriken1.style.display="none";
        cstriken2.style.display="none";
        cstriken3.style.display="none";
        cstriken4.style.display="none";
        cstrikep1.style.display="none";
        cstrikep2.style.display="none";
        cstrikep3.style.display="none";
        cstrikep4.style.display="none";   
    }
}

/*Clash 2v2*/
function c2(x) {
    var c2n1=document.getElementById("c2n1");
    var c2p1=document.getElementById("c2p1");
    if(x.checked)
    {
        c2n1.style.display="";
        c2p1.style.display="";
    }
    else
    {
        c2n1.style.display="none";
        c2p1.style.display="none";
    }
}

/*Treasure Hunt*/
function thunt(x) {
    var div=document.getElementById("nt1");
    var sel=document.getElementById("thunt_drop");
    if(x.checked)
    {
        div.style.display="";
        sel.style.display="";
    }
    else
    {
        div.style.display="none";
        sel.style.display="none";   
    }
}
function thunt1(x) {
    var i=0;
	i=parseInt(x.value);
    for(var k=1;k<=i;k++)
    {
        var t=document.getElementById('treasure'+k);
        t.style.display="";
    }
		 while(k<=5)
	 {
		 var t=document.getElementById('treasure'+k);
         t.style.display="none";
		 k++;
	 }
}

/*M-ethhics*/
function meth(x) {
    var methn1=document.getElementById("methn1");
    var methn2=document.getElementById("methn2");
    var methp1=document.getElementById("methp1");
    var methp2=document.getElementById("methp2");
    if(x.checked)
    {
        methn1.style.display="";
        methn2.style.display="";
        methp1.style.display="";
        methp2.style.display="";
    }
    else
    {
        methn1.style.display="none";
        methn2.style.display="none";
        methp1.style.display="none";
        methp2.style.display="none";   
    }
}
