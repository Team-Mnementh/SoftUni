function findMostFreqNum(input) {
    input = input.map(Number);
    input = input.sort(function(a, b) {
        return a - b;
    });
    console.log(input);
    var counter = 0;
        var bigCounter = 0;
        var whatNum = 0;
        for (var i = 0; i < input.length - 1; i++)
        {
            if (input[i] == input[i + 1])
            {
                counter++;
                if (bigCounter <= counter)
                {
                    bigCounter = counter;
                    whatNum = input[i];
                }
            }
            else
            {
                counter = 0;
            }
        }

        console.log(whatNum + ' (' + (bigCounter + 1 + ' times') + ')');

}

findMostFreqNum([4, 1, 1, 4, 2, 3, 4, 4, 1, 2, 4, 9, 3]);
findMostFreqNum([2, 1, 1, 5, 7, 1, 2, 5, 7, 3, 87, 2, 12, 634, 123, 51, 1]);