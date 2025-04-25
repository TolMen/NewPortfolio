<?php

if (empty($_SERVER['QUERY_STRING'])) {
    header("Location: portfolio.php");
    throw new Exception("Redirect to the portfolio.");
}
