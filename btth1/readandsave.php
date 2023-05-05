<?php
// Open the CSV file
$file = fopen('danhsachsinhvien.csv', 'r');

// Read the CSV file line by line
while (($data = fgetcsv($file)) !== false) {
    // Display the data on the web page
    echo '<p>' . implode(',', $data) . '</p>';
}

// Close the CSV file
fclose($file);
?>

<button>
 <a href="addandsave.php">Add</a> 
</button>

