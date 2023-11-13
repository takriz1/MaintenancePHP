<!DOCTYPE html>

<html lang="en">



<head>
    <meta charset="UTF-8">
    <title>Custom Website</title>
    <link rel="stylesheet" type="text/css" >
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>


<body>
    <div class="wrapper">
        <nav class="navbar">
            <img class="logo" src="leoni.png">
            <ul>
                <li><a class="active" href="index.php">Accueil</a></li>
                
                <li><a href="logdemandeur.php">Espace Demandeur</a></li>
                <li><a href="logtechnicien.php" target=_blank>Espace Technicien</a></li>
                <!--li><a href="logout.php">logout</a></li-->

            </ul>
        </nav>
        <div class="center">
            <h1>Votre demande a été envoyée</h1>
            <h2>Merci de patienter</h2>
            <h2 id="timer">00:00:00</h2>
            <div class="buttons">

                <button onclick="stopTimer()">Arreter</button>
            </div>


        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    var startTime;
    var timerInterval;

    // Start the timer
    function startTimer() {
      var muni=false;
      startTime = new Date().getTime(); // Get the start time

      timerInterval = setInterval(updateTimer, 1000); // Update the timer every second

     
    }

    // Stop the timer
    function stopTimer() {
      clearInterval(timerInterval); // Clear the timer interval
    }

    // Function to update the timer
    function updateTimer() {
      var currentTime = new Date().getTime(); // Get the current time
      var elapsedTime = currentTime - startTime; // Calculate the elapsed time in milliseconds

      // Convert the elapsed time to minutes and seconds
      var minutes = Math.floor(elapsedTime / 60000);
      var seconds = Math.floor((elapsedTime % 60000) / 1000);

      // Display the timer
      document.getElementById('timer').textContent = minutes + 'm ' + seconds + 's';
      
      var ideTitle = document.getElementById("timer");
      console.log(ideTitle.innerHTML);
      if(ideTitle.innerHTML=="15m 0s")
      { 
        console.log('okk');
        $.ajax({
                  url: 'send_notification.php',
                  method: 'POST',
                  success: function(response) {
                    console.log('Notification email sent to admin');
                  },
                  error: function(xhr, status, error) {
                    console.error('Failed to send notification email: ' + error);
                  }
                });


      }
      // Check if the timer has reached 2 minutes (120 seconds)
     
    }
    
    // Start the timer
    startTimer();

    
  
  </script>

</body>
<style>
* {
        padding: 0;
        margin: 0;
    }
    body {
        
        height: 100vh;
        font-family: 'Roboto', sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .wrapper {
        background: linear-gradient(45deg, #c08a95, rgb(57, 78, 185));
        ;
        background-size: cover;
        height: 100vh;
    }

.wrapper {
    background: url(bg1.jpg) no-repeat;
    background-size: cover;
    height: 100vh;
}
.navbar {
    position: fixed;
    height: 70px;
    width: 100%;
    top: 0;
    left: 0;
    background: rgba(70, 69, 69, 0.4);
}
.navbar .logo {
    width: 140px;
    height: auto;
    padding: 20px 100px;
}
.navbar ul {
    float: right;
    margin-right: 20px;
}
.navbar ul li {
    list-style: none;
    margin: 0 8px;
    display: inline-block;
    line-height: 80px;
}
.navbar ul li a {
    font-size: 10x;
    font-family: 'Roboto', sans-serif;
    color: white;
    padding: 6px 13px;
    text-decoration: none;
    transition: .4s;
    font-weight: bold;
}
.navbar ul li a:hover {
    background: rgb(103, 105, 218);
    border-radius: 2px;
}
.wrapper .center {
    position: absolute;
    left: 50%;
    top: 55%;
    transform: translate(-50%, -50%);
    font-family: sans-serif;
    user-select: none;
}
.center h1 {
    color: black;
    font-size: 20px;
    width: 900px;
    font-weight: bold;
    text-align: center;
}
.center h2 {
    color: black;
    font-size: 15px;
    font-weight: bold;
    margin-top: 10px;
    width: 885px;
    text-align: center;
}
.center .buttons {
    margin: 39px 367px;
}
.buttons button {
    height: 50px;
    width: 140px;
    font-size: 14px;
    font-weight: 500;
    color: #ffff;
    background: rgb(103, 105, 218);
    outline: none;
    cursor: pointer;
    border: 1px solid rgb(103, 105, 218);
    border-radius: 25px;
    transition: .4s;
}
.buttons .btn2 {
    margin-left: 25px;
}
.buttons button:hover {
    background: rgb(82, 65, 161);
}
</style>
</html>