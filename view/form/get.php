<?php

$formIsSubmitted = $_GET["doit"] ?? null;

$message = $_GET["message"] ?? null;
$message = htmlentities($message);


?><h1>Try a form with GET</h1>

<form>
    <fieldset>
        <legend>Submit your message</legend>
        <p>
            <label>Enter Name</label>
            <input type="text" name="">
        </p>
        <p>
            <label>Enter Password</label>
            <input type="password" name="">
        </p>
        
        <label>Checkbox 1</label><input type="checkbox" name="checkbox1" >  <br>
        <label>Checkbox 2</label><input type="checkbox" name="checkbox2" >
        <br>
        <select id ="select" name="colors">
                <option value="Red">RED</option>
                <option value="black">BLACK</option>
                <option value="white">WHITE</option>
        </select>

        <p>
            <input type="text" name="message" placeholder="Write some message">
        </p>

        <p>
            <input type="reset" value="Reset form input">
            <input type="submit" name="doit" value="Press to submit form">
        </p>
    </fieldset>
</form>

<?php if ($formIsSubmitted) : ?>
    <output>
        <p>The form was submitted.</p>
        <p>The message is: "<?= $message ?>"</p>
    </output>
<?php else : ?>
    <p>Enter a message above and press a button to submit the message to the server and see it here.</p>
<?php endif; ?>


<p>You can <a href="<?= basename($_SERVER["SCRIPT_FILENAME"]) ?>">click here to get a fresh pageload</a>.</p>

<hr>

<h2>DEBUG IT</h2>
<p>The array $_GET contains the following.</p>

<pre>
<?= print_r($_GET, true) ?>
</pre>
<?php
function(){
    if($name == ""){
        echo "<span class=error>Field must not be empty!</span>";
        exit();
      }
      if($email == ""){
        echo "<span class=error>Field must not be empty!</span>";
        exit();
      }
      if($username == ""){
        echo "<span class=error>Field must not be empty!</span>";
       exit();
      } 

      if($password == ""){
        echo "<span class=error>Field must not be empty!</span>";
        exit();
      }
}
?>