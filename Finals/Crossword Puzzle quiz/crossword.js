var across1 = 'javaservlet';
var across3 = 'destroy';
var across5 = 'httpresponse';
var across7 = 'init';
var across9 = 'httprequest';
var down2 = 'instantiation';
var down4 = 'lifecycle';
var down6 = 'httpservlet';
var down8 = 'service';

function done() {
	var across1UserAsnswer = '';
	var across3UserAsnswer = '';
	var across5UserAsnswer = '';
	var across7UserAsnswer = '';
	var across9UserAsnswer = '';
	var down2UserAsnswer = '';
	var down4UserAsnswer = '';
	var down6UserAsnswer = '';
	var down8UserAsnswer = '';
	var correctAnswer = 0;
	var correct = '';
	var wrong = '';
	
	//across1
	across1UserAsnswer = across1UserAsnswer.concat(document.getElementById("one1").value);
	across1UserAsnswer = across1UserAsnswer.concat(document.getElementById("one2").value);
	across1UserAsnswer = across1UserAsnswer.concat(document.getElementById("one3").value);
	across1UserAsnswer = across1UserAsnswer.concat(document.getElementById("one4").value);
	across1UserAsnswer = across1UserAsnswer.concat(document.getElementById("one5").value);
	across1UserAsnswer = across1UserAsnswer.concat(document.getElementById("one6").value);
	across1UserAsnswer = across1UserAsnswer.concat(document.getElementById("one7").value);
	across1UserAsnswer = across1UserAsnswer.concat(document.getElementById("one8").value);
	across1UserAsnswer = across1UserAsnswer.concat(document.getElementById("one9four1").value);
	across1UserAsnswer = across1UserAsnswer.concat(document.getElementById("one10").value);
	across1UserAsnswer = across1UserAsnswer.concat(document.getElementById("one11").value);
	
	//across3
	across3UserAsnswer = across3UserAsnswer.concat(document.getElementById("three1").value);
	across3UserAsnswer = across3UserAsnswer.concat(document.getElementById("three2").value);
	across3UserAsnswer = across3UserAsnswer.concat(document.getElementById("three3").value);
	across3UserAsnswer = across3UserAsnswer.concat(document.getElementById("three4two4").value);
	across3UserAsnswer = across3UserAsnswer.concat(document.getElementById("three5").value);
	across3UserAsnswer = across3UserAsnswer.concat(document.getElementById("three6").value);
	across3UserAsnswer = across3UserAsnswer.concat(document.getElementById("three7four6").value);
	
	//across5
	across5UserAsnswer = across5UserAsnswer.concat(document.getElementById("five1").value);
	across5UserAsnswer = across5UserAsnswer.concat(document.getElementById("five2").value);
	across5UserAsnswer = across5UserAsnswer.concat(document.getElementById("five3two7").value);
	across5UserAsnswer = across5UserAsnswer.concat(document.getElementById("five4").value);
	across5UserAsnswer = across5UserAsnswer.concat(document.getElementById("five5").value);
	across5UserAsnswer = across5UserAsnswer.concat(document.getElementById("five6four9").value);
	across5UserAsnswer = across5UserAsnswer.concat(document.getElementById("five7").value);
	across5UserAsnswer = across5UserAsnswer.concat(document.getElementById("five8six4").value);
	across5UserAsnswer = across5UserAsnswer.concat(document.getElementById("five9").value);
	across5UserAsnswer = across5UserAsnswer.concat(document.getElementById("five10").value);
	across5UserAsnswer = across5UserAsnswer.concat(document.getElementById("five11").value);
	across5UserAsnswer = across5UserAsnswer.concat(document.getElementById("five12eight7").value);
	
	//across7
	across7UserAsnswer = across7UserAsnswer.concat(document.getElementById("seven1").value);
	across7UserAsnswer = across7UserAsnswer.concat(document.getElementById("seven2").value);
	across7UserAsnswer = across7UserAsnswer.concat(document.getElementById("seven3").value);
	across7UserAsnswer = across7UserAsnswer.concat(document.getElementById("seven4two10").value);
	
	//across9
	across9UserAsnswer = across9UserAsnswer.concat(document.getElementById("nine1").value);
	across9UserAsnswer = across9UserAsnswer.concat(document.getElementById("nine2").value);
	across9UserAsnswer = across9UserAsnswer.concat(document.getElementById("nine3six11").value);
	across9UserAsnswer = across9UserAsnswer.concat(document.getElementById("nine4").value);
	across9UserAsnswer = across9UserAsnswer.concat(document.getElementById("nine5").value);
	across9UserAsnswer = across9UserAsnswer.concat(document.getElementById("nine6").value);
	across9UserAsnswer = across9UserAsnswer.concat(document.getElementById("nine7").value);
	across9UserAsnswer = across9UserAsnswer.concat(document.getElementById("nine8").value);
	across9UserAsnswer = across9UserAsnswer.concat(document.getElementById("nine9").value);
	across9UserAsnswer = across9UserAsnswer.concat(document.getElementById("nine10").value);
	across9UserAsnswer = across9UserAsnswer.concat(document.getElementById("nine11").value);
	
	//down2
	down2UserAsnswer = down2UserAsnswer.concat(document.getElementById("two1").value);
	down2UserAsnswer = down2UserAsnswer.concat(document.getElementById("two2").value);
	down2UserAsnswer = down2UserAsnswer.concat(document.getElementById("two3").value);
	down2UserAsnswer = down2UserAsnswer.concat(document.getElementById("three4two4").value);
	down2UserAsnswer = down2UserAsnswer.concat(document.getElementById("two5").value);
	down2UserAsnswer = down2UserAsnswer.concat(document.getElementById("two6").value);
	down2UserAsnswer = down2UserAsnswer.concat(document.getElementById("five3two7").value);
	down2UserAsnswer = down2UserAsnswer.concat(document.getElementById("two8").value);
	down2UserAsnswer = down2UserAsnswer.concat(document.getElementById("two9").value);
	down2UserAsnswer = down2UserAsnswer.concat(document.getElementById("seven4two10").value);
	down2UserAsnswer = down2UserAsnswer.concat(document.getElementById("two11").value);
	down2UserAsnswer = down2UserAsnswer.concat(document.getElementById("two12").value);
	down2UserAsnswer = down2UserAsnswer.concat(document.getElementById("two13").value);
	
	//down4
	down4UserAsnswer = down4UserAsnswer.concat(document.getElementById("one9four1").value);
	down4UserAsnswer = down4UserAsnswer.concat(document.getElementById("four2").value);
	down4UserAsnswer = down4UserAsnswer.concat(document.getElementById("four3").value);
	down4UserAsnswer = down4UserAsnswer.concat(document.getElementById("four4").value);
	down4UserAsnswer = down4UserAsnswer.concat(document.getElementById("four5").value);
	down4UserAsnswer = down4UserAsnswer.concat(document.getElementById("three7four6").value);
	down4UserAsnswer = down4UserAsnswer.concat(document.getElementById("four7").value);
	down4UserAsnswer = down4UserAsnswer.concat(document.getElementById("four8").value);
	down4UserAsnswer = down4UserAsnswer.concat(document.getElementById("five6four9").value);
	
	//down6
	down6UserAsnswer = down6UserAsnswer.concat(document.getElementById("six1").value);
	down6UserAsnswer = down6UserAsnswer.concat(document.getElementById("six2").value);
	down6UserAsnswer = down6UserAsnswer.concat(document.getElementById("six3").value);
	down6UserAsnswer = down6UserAsnswer.concat(document.getElementById("five8six4").value);
	down6UserAsnswer = down6UserAsnswer.concat(document.getElementById("six5").value);
	down6UserAsnswer = down6UserAsnswer.concat(document.getElementById("six6").value);
	down6UserAsnswer = down6UserAsnswer.concat(document.getElementById("six7").value);
	down6UserAsnswer = down6UserAsnswer.concat(document.getElementById("six8").value);
	down6UserAsnswer = down6UserAsnswer.concat(document.getElementById("six9").value);
	down6UserAsnswer = down6UserAsnswer.concat(document.getElementById("six10").value);
	down6UserAsnswer = down6UserAsnswer.concat(document.getElementById("nine3six11").value);
	
	//down8
	down8UserAsnswer = down8UserAsnswer.concat(document.getElementById("eight1").value);
	down8UserAsnswer = down8UserAsnswer.concat(document.getElementById("eight2").value);
	down8UserAsnswer = down8UserAsnswer.concat(document.getElementById("eight3").value);
	down8UserAsnswer = down8UserAsnswer.concat(document.getElementById("eight4").value);
	down8UserAsnswer = down8UserAsnswer.concat(document.getElementById("eight5").value);
	down8UserAsnswer = down8UserAsnswer.concat(document.getElementById("eight6").value);
	down8UserAsnswer = down8UserAsnswer.concat(document.getElementById("five12eight7").value);
	
	if(across1 == across1UserAsnswer.toLowerCase()) {
		correctAnswer++;
		correct = correct.concat("1. ");
	} else {
		wrong = wrong.concat("1. ");
	}
	if(across3 == across3UserAsnswer.toLowerCase()) {
		correctAnswer++;
		correct = correct.concat("3. ");
	} else {
		wrong = wrong.concat("3. ");
	}
	if(across5 == across5UserAsnswer.toLowerCase()) {
		correctAnswer++;
		correct = correct.concat("5. ");
	} else {
		wrong = wrong.concat("5. ");
	}
	if(across7 == across7UserAsnswer.toLowerCase()) {
		correctAnswer++;
		correct = correct.concat("7. ");
	} else {
		wrong = wrong.concat("7. ");
	}
	if(across9 == across9UserAsnswer.toLowerCase()) {
		correctAnswer++;
		correct = correct.concat("9. ");
	} else {
		wrong = wrong.concat("9. ");
	}
	if(down2 == down2UserAsnswer.toLowerCase()) {
		correctAnswer++;
		correct = correct.concat("2. ");
	} else {
		wrong = wrong.concat("2. ");
	}
	if(down4 == down4UserAsnswer.toLowerCase()) {
		correctAnswer++;
		correct = correct.concat("4. ");
	} else {
		wrong = wrong.concat("4. ");
	}
	if(down6 == down6UserAsnswer.toLowerCase()) {
		correctAnswer++;
		correct = correct.concat("6. ");
	} else {
		wrong = wrong.concat("6. ");
	}
	if(down8 == down8UserAsnswer.toLowerCase()) {
		correctAnswer++;
		correct = correct.concat("8. ");
	} else {
		wrong = wrong.concat("8. ");
	}
	document.getElementById("score").innerHTML = correctAnswer + '/9';
	document.getElementById("correct").innerHTML = 'Correct: ' + correct;
	document.getElementById("wrong").innerHTML = 'Wrong: ' + wrong;
}

function reset() {
    var elements = document.getElementsByClassName("white");
    for(var i = 0, length = elements.length; i < length; i++) {
          elements[i].value = '';
    }
	document.getElementById("score").innerHTML = '0/9';
	document.getElementById("correct").innerHTML = 'Correct: ';
	document.getElementById("wrong").innerHTML = 'Wrong: ';
}