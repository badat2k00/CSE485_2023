<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Lớp</th>
        <th>Mã sinh viên </th>
        </thead>

        <tbody>
            <td><?php echo $_POST["name"] ?></td>
            <td><?php echo $_POST["date"] ?></td>
            <td><?php echo $_POST["class"] ?></td>
            <td><?php echo $_POST["id"] ?></td>

        </tbody>
    </table>
</body>
</html>