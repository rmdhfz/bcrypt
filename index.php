<form action="index.php" method="post">
	<input type="text" name="pw">
	<button type="submit" value="1" name="submit">submit</button>
</form>

<?php
if(isset($_POST['submit'])){
        $password = password_hash($_POST['pw'], PASSWORD_DEFAULT);
        echo 'before: '.$_POST['pw'].'<br>';
        echo 'after: '.$password;
}
?>
