<?php 

if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);

    echo $name;
    echo $age;

}

?>




<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
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