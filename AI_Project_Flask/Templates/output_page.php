<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/style_output.css">
    <title>Document</title>
</head>
<body>
<div class="box_section">
    <div class="box1">
            <div class="box_title">Predicted Wind Speed</div>
            <div class="speed">
            <div class="speed_number">{{res1}}</div>
            <div class="speed_unit">km/h</div>
            </div>
            <div class="box_footer">Using GRU Model</div>
    </div>
    <div class="box2">
            <div class="box_title">Predicted Wind Speed</div>
            <div class="speed">
            <div class="speed_number">{{res2}}</div>
            <div class="speed_unit">km/h</div>
            </div>
            <div class="box_footer">Using LSTM Model</div>
    </div>
    </div>
</body>
</html>