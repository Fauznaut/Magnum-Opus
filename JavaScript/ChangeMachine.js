// Gives best change for dollar and cents amount NOW IN VISUAL FORM
function ChangeMachine() {
	ClearChange();
	var moneyAmount = ($('#changeMachineAmount').val() * 100);
	var hundreds = 0, fifties = 0, twenties = 0, tens = 0, fives = 0, ones = 0, quarters = 0, dimes = 0, nickels = 0, pennies = 0;
	var showTime = 500;
	while (moneyAmount > 0) {
		if (moneyAmount >= 10000 && moneyAmount <= 100000) {
			moneyAmount -= 10000;
			hundreds++;
			$("#hundreds").append("<div class='hiddenElement bill'><span>$100</span></div>");
		} else if (moneyAmount >= 5000) {
			moneyAmount -= 5000;
			fifties++;
			$("#fifties").append("<div class='hiddenElement bill'><span>$50</span></div>");
		} else if (moneyAmount >= 2000) {
			moneyAmount -= 2000;
			twenties++;
			$("#twenties").append("<div class='hiddenElement bill'><span>$20</span></div>");
		} else if (moneyAmount >= 1000) {
			moneyAmount -= 1000;
			tens++;
			$("#tens").append("<div class='hiddenElement bill'><span>$10</span></div>");
		} else if (moneyAmount >= 500) {
			moneyAmount -= 500;
			fives++;
			$("#fives").append("<div class='hiddenElement bill'><span>$5</span></div>");
		} else if (moneyAmount >= 100) {
			moneyAmount -= 100;
			ones++;
			$("#ones").append("<div class='hiddenElement bill'><span>$1</span></div>");
		} else if (moneyAmount >= 25) {
			moneyAmount -= 25;
			quarters++;
			$("#quarters").append("<div class='hiddenElement quarter'><span>25¢</span></div>");
		} else if (moneyAmount >= 10) {
			moneyAmount -= 10;
			dimes++;
			$("#dimes").append("<div class='hiddenElement dime'><span>10¢</span></div>");
		} else if (moneyAmount >= 5) {
			moneyAmount -= 5;
			nickels++;
			$("#nickels").append("<div class='hiddenElement nickel'><span>5¢</span></div>");
		} else if (moneyAmount >= 1) {
			moneyAmount -= 1;
			pennies++;
			$("#pennies").append("<div class='hiddenElement penny'><span>1¢</span></div>");
		}
	}
	$(".bill, .quarter, .dime, .nickel, .penny").slideDown(showTime);
}

function ClearChange() {
	$(".bill, .quarter, .dime, .nickel, .penny").remove();
}
