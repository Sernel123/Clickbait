<?php 
   
    if(isset($_POST["fixSubmit"])) {
        /* Grab value from textarea is $_POST collection, make all letters lowercase using strtolower() function store in a variable*/
        $clickBait = strtolower($_POST["clickBaitHeadline"]);
        
        //store array of clickbait-sounding words or phrases
        $a = array("scientists", "doctors", "hate", "stupid", "weird", "simple", "trick", "shocked me", "you'll never believe",
         "hack", "epic", "unbelievable");
        
        /* Strore array of replacement words or phrases make sure each replacement is in the same order as the clickbait word you're trying to replace */
        $b = array("so-called scientists", "so-called doctors", "aren't threatened by", "average", "completeky normal", "ineffective", "method",
         "is no different than the others", "you won't really be surprised by", "slightly improve", "boring", "normal");
        
        /* Use the str_replace() function to replace the words uppercase the first letter in every word using ucwords() function store in a variable */
        $honestHeadline = str_replace($a, $b, $clickBait);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<style>
body{
    background: url("bg.jpeg");
    background-size: 100%;
    background-repeat: no-repeat;
    background-position: center;
}
.textarea{
    width:300px;
    height: 100px;
    background-color:yellow;
}
.submit{
    width: 60px;
    height: 40px;
    border-radius: 5px;
    background-color: skyblue;
}

</style>
<body>
<center><h1 style="color:white; font-size: 70px; margin-top:5%;">HONEST <span><u style="color:black;">CLICKBAIT</u></span> HEADLINES</h1>
<p style="font-size: 50px; color:white;">Want to try some fun stuff ? Try Clickbait!</p>
    <div class="container"> 
        <div class="row">
            <form class="col-sm-8 col-sm-offset-2" action="" method="post">
                <textarea placeholder="" class="textarea " name="clickBaitHeadline"></textarea>
                    <br>
                <button class="submit " name="fixSubmit">Make Honest!</button>    
            </form>
        </div>
       
      <br><br>

        <?php
            if(isset($_POST["fixSubmit"])) {
                    
                echo "<strong class='text-danger' 'color-white'>Original Headline</strong><h4>".ucwords($clickBait)."</h4><hr>";   
                       
                echo "<strong class='text-success'>Honest Headline</strong><h4>".ucwords($honestHeadline)."</h4>";   
            }
        ?>
    </div>
</center>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    
    
</body>
</html>