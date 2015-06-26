<?php
  var_dump($_GET);
  var_dump($_POST);
?>


<html>

<head>
    <title>First Form</title>
</head>


<body>

<form method="POST" action="/my-first-form.php">

<p>What operating systems have you used?</p>
<label><input type="checkbox" id="os1" name="os[]" value="linux"> Linux</label>
<label><input type="checkbox" id="os2" name="os[]" value="osx"> OS X</label>
<label><input type="checkbox" id="os3" name="os[]" value="windows"> Windows</label>


<p>What is the capital of Texas?</p>
<label>
    <input type="radio" id="q1a" name="q1" value="houston">
    Houston
</label>

<label>
    <input type="radio" id="q1b" name="q1" value="dallas">
    Dallas
</label>

<label>
    <input type="radio" id="q1c" name="q1" value="austin">
    Austin
</label>

<label>
    <input type="radio" id="q1d" name="q1" value="san antonio">
    San Antonio
</label>


<p>Want to save a copy to the Sent Folder</p>
<label><input type="checkbox" id="yes" name="copy[]" value="Yes" checked> Yes</label>
<label><input type="checkbox" id="no"  name="copy[]" value="no" >No</label>


<p>Multiple Choice Test - Which city is better?</p>
<label>
    <input type="radio" id="a1" name="a1" value="austin">
    Austin
</label>

<label>
    <input type="radio" id="a2" name="a1" value="san antonio">
    San Antonio
</label>


<p>Multiple Choice Test - Which city is larger?</p>
<label>
    <input type="radio" id="a1" name="a2" value="austin">
    Austin
</label>

<label>
    <input type="radio" id="a2" name="a2" value="san antonio">
    San Antonio
</label>

<label for="More Choices">
    <input type="checkbox" id="more choices" name="more choices" value="yes">
    <label for="more choices">Sign me up for the mailing list!</label>
</label>

<label for="More Choices">
    <input type="checkbox" id="more choices" name="more choices" value="yes">
    <label for="more choices">Sign me up for the mailing list!</label>
</label>

<label for="More Choices">
    <input type="checkbox" id="more choices" name="more choices" value="yes">
    <label for="more choices">Sign me up for the mailing list!</label>
</label>

    <p>
        <label for="To">To</label>
        <input id="To" name="To" valuetype="text">
    </p>
    <p>
        <label for="From">From</label>
        <input id="From" name="From" type="text">
    </p>
    <p>
        <label for="Subject">Subject</label>
        <input id="Subject" name="Subject" type="text">
    </p>
    
        
    <textarea id="email_body" name="email_body" rows="15" cols="140" placeholder="Content Here"></textarea>
    <p>
    <input type="submit">
    </p>




</body>
</html>