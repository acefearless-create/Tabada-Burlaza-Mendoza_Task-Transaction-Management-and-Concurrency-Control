<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Submission</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            text-align: center;
            max-width: 700px;
            width: 90%;
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
        }

        video {
            width: 100%;
            border-radius: 10px;
            outline: none;
        }

        .footer {
            margin-top: 15px;
            font-size: 14px;
            color: #777;
        }

        .controls {
            margin-top: 15px;
        }

        .btn {
            margin: 5px;
            padding: 10px 20px;
            background: #4facfe;
            color: white;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background: #0077ff;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>🎥 My Video Submission</h1>

    <video id="myVideo" controls>
        <source src="TMCC.mov" type="video/mp4">
    </video>

    <div class="controls">
        <button class="btn" onclick="rewind()">⏪ Rewind 10s</button>
        <button class="btn" onclick="togglePlay()">⏯ Play / Pause</button>
        <button class="btn" onclick="forward()">⏩ Forward 10s</button>
    </div>

    <div class="footer">
        Submitted via GitHub
    </div>
</div>

<script>
    const video = document.getElementById("myVideo");

    function rewind() {
        video.currentTime -= 10;
    }

    function forward() {
        video.currentTime += 10;
    }

    function togglePlay() {
        if (video.paused) {
            video.play();
        } else {
            video.pause();
        }
    }
</script>

</body>
</html>