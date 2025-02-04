<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        h1 {
            color: skyblue;
        }
        p {
            font-size: 18px;
            margin: 10px 0;
        }
        .timer {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login Diperlukan</h1>
        <p>Anda belum melakukan login, harap login terlebih dahulu.</p>
        <p>Anda akan dialihkan dalam <span class="timer">10</span> detik...</p>
    </div>

    <script>
        let countdown = 10;
        const timerElement = document.querySelector(".timer");

        const interval = setInterval(() => {
            countdown--;
            timerElement.textContent = countdown;
            if (countdown === 0) {
                clearInterval(interval);
                window.location.href = "login/login.php"; 
            }
        }, 1000);
    </script>
</body>
</html>
