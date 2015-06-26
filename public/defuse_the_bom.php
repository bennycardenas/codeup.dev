
<!DOCTYPE html>
<html>
<head>
    <title>Defuse the BOM</title>
</head>
<body>
    <h2 id="message">This BOM will self destruct in <span id="timer">5</span> seconds...</h2>

    <button id="defuser">Defuse the BOM</button>

    <script>
        var detonationTimer = 5;
        // setTimeout(function(){
        //     console.log('5 seconds have passed');
        // }, 5000);

        // TODO: This function needs to be called once every second
        
        var goingToExplode = setInterval(updateTimer, 1000)
        
        function updateTimer()
        {
            if (detonationTimer == 0) {
                alert('EXTERMINATE!');
                document.body.innerHTML = '';
            } else if (detonationTimer > 0) {
                document.getElementById('timer').innerHTML = detonationTimer;
            }

            detonationTimer--;
        }

        // TODO: When this function runs, it needs to
        // cancel the interval/timeout for updateTimer()
        function defuseTheBOM()
        {
                clearInterval(goingToExplode);
                alert('You are my hero!');
        }

        // Don't modify anything below this line!
        //
        // This causes the defuseTheBOM() function to be called
        // when the "defuser" button is clicked.
        // We will learn about events in the DOM lessons
        var defuser = document.getElementById('defuser');
        defuser.addEventListener('click', defuseTheBOM, false);

// DIFFERENT EXERCISE

// count = 0;
// max = 10;
// delay = 2000;


// var intervalId = setInterval(function() {
//  if (count>=max){
//     clearInterval(intervalId);
//     console.log("All done");
// } else {
//   count++;
//   console.log('Repeating this line for the ' + count + ' time');
//   delay = delay - 100;
//   console.log('Delay is now ')
//   }
// }

// var intervalId = setInterval(intervalFunction, 1000);

// OR - at the end

// , 1000);



    </script>
</body>
</html>
