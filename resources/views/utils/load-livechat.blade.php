<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Load Livechat for {{$chName}} | Touru Works 2024 Dev.</title>
    <link rel="icon" href="{{asset('/src/svg/work_mouth_white.svg')}}" type="image/icon" >
    <style>
            body, html {
                height: 100%;
                margin: 0;
            }
            *{
                font-family: 'DM Sans', Courier, monospace
            }
            .container {
                display: flex;
                justify-content: center; 
                align-items: center; 
                height: 100vh; 
                background-color: transparent;
            }
            .content-failure {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                margin: 8px 38px;
            }
            h1{
                margin: 0px;
            }
    </style>
    <script>
        var $result = @json($result);  
         const contentFailure = document.getElementById('content-failure');
        if($result == "Not Found"){
            setTimeout(refreshPage, 10000);
        }else{
            window.location.href =  $result;
        }
        
        function refreshPage() {
            window.location.reload();
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="content-failure" id="content-failure">
            <h1>Stream not found!😴</h1>
            <p style="text-align: center">Please make sure channel <u><b>{{$chName}}</b></u> is correct name, already have waiting room or start streaming, <i style="font-weight: 200">please try it again</i></p>
            <p style="color:red" id="refresh-text">refresh in <span id="timer"> 10</span> seconds</p>
        </div>
    </div>

    <script>
            let timeRemaining = 10;
            const timerElement = document.getElementById('timer');
            function updateTimer() {
                timerElement.textContent = timeRemaining;
                timeRemaining--;
            }
            const timerInterval = setInterval(updateTimer, 1000);
    </script>
</body>
</html>
