<?php
    $yourName = "Hunter Lovan";
    $assignmentName = "3-1 PHP Functions";

    // accept a Unix Timestamp as a parameter and format it into mm/dd/yyyy format
    function formatDateUS($timestamp) {
        return date("m/d/Y", $timestamp);
    }

    // accept a Unix Timestamp as a parameter and format it into dd/mm/yyyy format to use when working with international dates.
    function formatDateInternational($timestamp) {
        return date("d/m/Y", $timestamp);
    }

    // accept a string parameter.  It will do the following things to the string:
    // Display the number of characters in the string
    // Trim any leading or trailing whitespace
    // Display the string as all lowercase characters
    // Will display whether or not the string contains "DMACC" either upper or lowercase
    function processString($str) {
        $trimmed = trim($str);
        $lower = strtolower($trimmed);
        $length = strlen($trimmed);
        $containsDMACC = stripos($trimmed, "dmacc") !== false ? "Yes" : "No";

        echo "<p>Original String: '$str'</p>";
        echo "<p>Trimmed String: '$trimmed'</p>";
        echo "<p>Number of Characters: $length</p>";
        echo "<p>Lowercase: '$lower'</p>";
        echo "<p>Contains 'DMACC': $containsDMACC</p>";
    }

    //  accept a number parameter and display it as a formatted phone number.   
    //  Use 1234567890 for your testing.
    function formatPhoneNumber($number) {
        $number = preg_replace('/\D/', '', $number);
        if(strlen($number) == 10) {
            return "(".substr($number,0,3).") ".substr($number,3,3)."-".substr($number,6);
        } else {
            return "Invalid phone number";
        }
    }

    // accept a number parameter and display it as US currency with a dollar sign.  
    // Use 123456 for your testing.
    function formatCurrency($amount) {
        return "$" . number_format($amount, 2);
    }

    // Test data
    $testTimestamp = time();
    $testString = "   Welcome to  DMACC PHP Class!   ";
    $testPhone = 1234567890;
    $testAmount = 123456;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $assignmentName; ?></title>
</head>
<body>
    <ul>
      <li><a href="https://github.com/huntlovan/wdv341-" target="_blank">Visit WDV341 Git Repository</a></li>
      <li><a href="http://kickshunter.com/WDV341/wdv341.php">WDV341 - PHP PROJECTS</a></li>   
    </ul>
    <h1><?php echo $assignmentName; ?></h1>
    <h2><?php echo $yourName; ?></h2>

    <h3>Unix Timestamp Formatting</h3>
    <p>Current Timestamp: <?php echo $testTimestamp; ?></p>
    <p>US Format (mm/dd/yyyy): <?php echo formatDateUS($testTimestamp); ?></p>
    <p>International Format (dd/mm/yyyy): <?php echo formatDateInternational($testTimestamp); ?></p>

    <h3>String Processing</h3>
    <?php processString($testString); ?>

    <h3>Phone Number Formatting</h3>
    <p>Original: <?php echo $testPhone; ?></p>
    <p>Formatted: <?php echo formatPhoneNumber($testPhone); ?></p>

    <h3>Currency Formatting</h3>
    <p>Original: <?php echo $testAmount; ?></p>
    <p>Formatted: <?php echo formatCurrency($testAmount); ?></p>
</body>
</html>