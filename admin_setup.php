<?php include 'db.php'; ?>
<!DOCTYPE html>
<html><head><title>Admin Setup</title></head>
<body>
<h2>Admin Setup - Teams & Rates</h2>
<form method="post">
Team Name: <input name="team" required>
Skilled Workers: <input name="skilled" type="number">
Unskilled Workers: <input name="unskilled" type="number"><br><br>
Mason Rate: <input name="mason" value="45">
Welder Rate: <input name="welder" value="65">
Helper Rate: <input name="helper" value="87">
Fitter Rate: <input name="fitter" value="98">
Supervisor Rate: <input name="supervisor" value="90">
<button name="save">Save</button>
</form>
<?php
if(isset($_POST['save'])){
mysqli_query($conn,"INSERT INTO teams(team,skilled,unskilled,mason,welder,helper,fitter,supervisor) VALUES
('{$_POST['team']}',{$_POST['skilled']},{$_POST['unskilled']},{$_POST['mason']},{$_POST['welder']},{$_POST['helper']},{$_POST['fitter']},{$_POST['supervisor']})");
echo "Saved";
}
?>
</body></html>
