<?php
    // get the data from the form
    $first_name = filter_input(INPUT_GET, 'first_name', FILTER_SANITIZE_STRING);
    $last_name = filter_input(INPUT_GET, 'last_name', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_GET, 'age',
        FILTER_SANITIZE_NUMBER_INT);

    // validate first name
    if ($first_name === '' ) {
        $error_message = 'First name cannot be blank.';
    } elseif (ctype_alpha($first_name) === FALSE) {
        $error_message = 'First name can only contain letters.';
    // validae last name
    } elseif ( $last_name === '' )  {
        $error_message = 'A last name must be entered.';
    } elseif (ctype_alpha($last_name) === FALSE) {
        $error_message = 'Last name can only contain letters.'; 
    // validate age
    } elseif ( $age === '' ) {
        $error_message = 'Age must be a valid number.';
    } elseif ( $age <= 0 ) {
        $error_message = 'Age must be greater than zero.';
    } elseif ( $age > 110 ) {
        $error_message = 'Age must be less than 110.';
    // set error message to empty string if no invalid entries
    } else {
        $error_message = ''; }

    // if an error message exists, go to the index page
    if ($error_message != '') {
        include('index.php');
        exit();
    }

    if ($age >= 18) {
        $message = 'and I am old enough to vote in the United States.';
    } else {
        $message = 'and I am not old enough to vote in the United States.';
    }

    $days_old = $age * 365;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Get Parameter Assignment</title>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
</head>
<body>
    <header>
        <p>Today's date is <?php echo date('m/d/Y'); ?></p>
    </header>
    <main>
        <h2>Hello, my name is <?php echo htmlspecialchars($first_name. ' '. $last_name)?>.</h2><br>
        <p>I am <?php echo htmlspecialchars($age)?> years old, <?php echo htmlspecialchars($message) ?></p><br>
        <p>That means I am at least <?php echo htmlspecialchars($days_old) ?> days old.</p>
    </main>
</body>
</html>