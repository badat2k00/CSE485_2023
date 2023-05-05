<form action="index.php" method="post">

<label for="name">Tên</label>
<input type="text" name="name" placeholder="Tên">
<label for="date"></label>
<input type="date" name="date" placeholder="Ngày sinh">
<label for="class">Lớp</label>
<input type="text" name="class" placeholder="Lớp">
<label for="id">Mã sinh viên</label>
<input type="text" name="id" placeholder="Mã sinh viên">
<input type="submit" name="submit" value="Ok">
</form>
<?php
// Get the form data
$name = $_POST["name"];
$date = $_POST["date"];
$class = $_POST["class"];
$id = $_POST["id"];

// Open the CSV file
$file = fopen('danhsachsinhvien.csv', 'a');

// Write the form data to the CSV file
fputcsv($file, array($name, $date, $class,$id));

// Close the CSV file
fclose($file);
?>
