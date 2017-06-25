<?php
/**
 * Created by PhpStorm.
 * User: iain
 * Date: 6/4/17
 * Time: 3:16 PM
 */
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="semantic/dist/semantic.min.js"></script>
</head>
<body>
<form class="ui form">
    <div class="field">
        <label>First Name</label>
        <input type="text" name="first-name" placeholder="First Name">
    </div>
    <div class="field">
        <label>Last Name</label>
        <input type="text" name="last-name" placeholder="Last Name">
    </div>
    <div class="field">
        <div class="ui checkbox">
            <input type="checkbox" tabindex="0" class="hidden">
            <label>I agree to the Terms and Conditions</label>
        </div>
    </div>
    <button class="ui button" type="submit">Submit</button>
</form>
</body>
</html>

