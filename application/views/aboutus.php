<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
        }

        p {
            color: #666;
            line-height: 1.6;
        }

        .team-member {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .team-member img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .team-member .info {
            flex-grow: 1;
        }

        .team-member h3 {
            margin: 0;
            color: #333;
        }

        .team-member p {
            margin: 0;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tentang Kami</h1>

        <div class="team-member">
            <img src=<?php echo base_url("assets/image/ayu.jpeg")?>>
            <div class="info">
                <h3>Ayu Nur Oktaviani</h3>
                <p>3411201047</p>
            </div>
        </div>

        <div class="team-member">
            <img src=<?php echo base_url("assets/image/diky.jpeg")?>>
            <div class="info">
                <h3>Muhammad Diky Fadhilahsyah Ramadhan</h3>
                <p>3411201056</p>
            </div>
        </div>

        <div class="team-member">
            <img src=<?php echo base_url("assets/image/riza.jpeg")?>>
            <div class="info">
                <h3>M Riza Alfarrel</h3>
                <p>3411201035</p>
            </div>
        </div>

        <div class="team-member">
            <img src=<?php echo base_url("assets/image/akbar.jpeg")?>>
            <div class="info">
                <h3>Akbar mulya hadi</h3>
                <p>3411201017</p>
            </div>
        </div>
    </div>
</body>
</html>
