<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="././assets/css/tong.css">
</head>
<body>
    <form>
        <div class="form-group">
            <label>Enter So A</label>
            <input type="number" class="input" placeholder="soA" name="soA">
        </div>
        <div class="form-group">
            <label>Enter So B</label>
            <input type="number" class="input" placeholder="soB" name="soB">
        </div>
        <button type="submit" class="btn">Submit</button>
        <button type="submit" class="btn">Add</button>
        <div class="form-group">
        <input type="number" class="input" placeholder="sum" disabled="" value="<?php if(isset($tinhtong)) echo $tinhtong; ?>)">
        </div>
    </form>        
</body>
</html>