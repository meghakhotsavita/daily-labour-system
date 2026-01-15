<?php include 'db.php'; ?>
<!DOCTYPE html>
<html><head><title>Dashboard</title></head>
<body>
<h2>Admin Dashboard</h2>
<form method="post">
Date: <input type="date" name="d">
In: <input type="time" name="in">
Out: <input type="time" name="out">
<button name="add">Add</button>
</form>
<table border="1">
<tr><th>S.No</th><th>Date</th><th>In</th><th>Out</th><th>Total</th></tr>
</table>
</body></html>
