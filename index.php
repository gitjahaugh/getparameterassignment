<?php 
    //set default value of variables for initial page load
    if (!isset($first_name)) { $first_name = ''; } 
    if (!isset($last_name)) { $last_name = ''; } 
    if (!isset($age)) { $age = ''; } 
?> 
<!DOCTYPE html>
<html>
<head>
    <title>Get Parameter Assignment</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
    <main>
    <h1>Enter your information</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
    <?php } ?>
    <form action="display_results.php" method="GET">

        <div id="data">
            <label>First Name:</label>
            <input type="text" name="first_name"
                   value="<?php echo htmlspecialchars($first_name); ?>">
            <br>

            <label>Last Name:</label>
            <input type="text" name= "last_name"
                   value="<?php echo htmlspecialchars($last_name); ?>">
            <br>

            <label>Age:</label>
            <input type="text" name="age"
                   value="<?php echo htmlspecialchars($age); ?>">
            <br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Display Information"><br>
        </div>

    </form>
    </main>
</body>
</html>