function number1() {
    "use strict";
    var first = document.getElementById("question1").innerHTML, one;
    one =first.replace("DJENOS", "EDSJON");
    document.getElementById("question1").innerHTML = one;
    
}

function number2() {
    var second = document.getElementById("question2").innerHTML, two;
    two = second.replace("FAST VERY", "FATS VERY");
    document.getElementById("question2").innerHTML = two;
}

function number3() {
    var third = document.getElementById("question3").innerHTML, three;
    three = third.replace("ON BRNIEGUFF", "NO BEGINRUFF");
    document.getElementById("question3").innerHTML = three;
}

function number4() {
    var fourth = document.getElementById("question4").innerHTML, four;
    four = fourth.replace("ECARTE SEVERR", "CARTER REEVES");
    document.getElementById("question4").innerHTML = four;
}s

function number5() {
    var fifth = document.getElementById("question5").innerHTML, five;
    five = fifth.replace("TACH", "AHCT");
    document.getElementById("question5").innerHTML = five;
}

function myFunction() {
    var answer1, result1, answer2, result2;;

    answer1 = document.getElementById("one").value;

    if (answer1 == "Node js") {
        result1 = "Your answer is Correct!";
    } else {
        result1 = "Your answer is Wrong";
    }
    document.getElementById("message1").innerHTML = result1;

    answer2 = document.getElementById("two").value;

    if (answer2 == "Very fast") {
        result2 = "Your answer is Correct!";
    } else {
        result2 = "Your answer is Wrong";
    }
    document.getElementById("message2").innerHTML = result2;
    
    
    answer3 = document.getElementById("three").value;

    if (answer3 == "No buffering") {
        result3 = "Your answer is Correct!";
    } else {
        result3 = "Your answer is Wrong";
    }
    document.getElementById("message3").innerHTML = result3;
    
    answer4 = document.getElementById("four").value;

    if (answer4 == "Create server") {
        result4 = "Your answer is Correct!";
    } else {
        result4 = "Your answer is Wrong";
    }
    document.getElementById("message4").innerHTML = result4;
    
    
    answer5 = document.getElementById("five").value;

    if (answer5 == "Chat") {
        result5 = "Your answer is Correct!";
    } else {
        result5 = "Your answer is Wrong";
    }
    document.getElementById("message5").innerHTML = result5;
    
    

}