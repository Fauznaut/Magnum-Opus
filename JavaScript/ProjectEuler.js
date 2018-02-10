function LargestProductInASeries(){
    var series = $('#LPSSeries').val();
    var numberOfFactors = $('#LPSFactor').val();
    var currentProduct = 1;
    var largestProduct = 0;

    for (var currentPosition = 0; currentPosition <= series.length - numberOfFactors; currentPosition++) {
        for (var currentFactor = 0; currentFactor < numberOfFactors; currentFactor++)
            currentProduct *= parseInt(series.charAt(currentPosition + currentFactor));
        if (currentProduct > largestProduct)
            largestProduct = currentProduct;
        currentProduct = 1;
    }
    $('#LPSOutput').text(largestProduct);
}

function SummationOfPrimes(){
    var maxPrime = $('#SOPMax').val();
    var sum = 0;
    var currentPrime = 1;

    for (var currentNumber = 1; currentNumber < maxPrime; currentNumber += 2) {
        console.log("Current Number: " + currentNumber);
        for (var currentFactor = 3; currentNumber % currentFactor != 0 || currentNumber <= currentFactor; currentFactor += 2) {
            console.log("Current Factor: " + currentFactor);
            if (currentFactor >= currentNumber) {
                sum += currentNumber;
                console.log(sum);
                break;
            }
        }
    }
    $('#SOPOutput').text(sum);
}
