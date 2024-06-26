<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/style_main.css">
    <title>WindSpeed</title>
</head>
<body>
    <form name="sendata" action="." method="post">
    <div class="box">
        <p>Maximum Temperature</p>
        <input type="text" name="mx_temp" id="">
        <p>Minimum Temperature</p>
        <input type="text" name="mn_temp" id="">
        <p>Rainfall</p>
        <input type="text" name="rainfall" id="">
        <p>Relative Humidity</p>
        <input type="text" name="rltv_humid" id="">
        <p>Cloud Coverage</p>
        <input type="text" name="cld_cover" id="">
        <p>Bright Sunshine</p>
        <input type="text" name="bright_shine" id=""> 
        <button type="submit">Submit</button>
    </div>
    </form>
</body>
</html>