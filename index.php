<?php

// Check if the query string is empty
if (empty($_SERVER['QUERY_STRING'])) {
    // Redirect to the main portfolio page if no query parameters are found
    header("Location: portfolio.php");

    // Stop script execution and throw an exception (for debugging or logging purposes)
    throw new Exception("Redirect to the portfolio.");
}
