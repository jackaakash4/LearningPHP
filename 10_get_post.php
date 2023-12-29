<?php 

if(isset($_POST['submit'])){
    echo $_POST['name'];
    echo $_POST['age'];    
}

?>



<a href="<?php echo $_SERVER['PHP_SELF'];?>?name=Jack&age=30">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>"
    method="POST"
>
    <div class="div">
        <label for="name">Name </label>
        <input type="text" name="name" id="name" >
    </div>
    <div class="div">
        <label for="age">Age </label>
        <input type="text" name="age" id="age" >
    </div>
   <input type="submit" name="submit" value="Submit" />
</form>