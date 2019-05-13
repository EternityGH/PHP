<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<?php
    print_r($_GET);
?>
<body>
    <form metohd="GET">
        <div>
            Name: <input type="text" placeholder="Enter your name" name="txtName">
        </div>
        <div>
            Password: <input type="password" placeholder="Enter your password">
        </div>
        <div>
            Select:
            <select name="subject">
                <option value="html">HTML</option>
                <option value="css">CSS</option>
                <option value="php">PHP</option>
                <option value="laravel">Laravel</option>
            </select>
        </div>
        <div>
                <input type="radio" name="gender" id="Male">
                    <label for="Male">Male</label><br>
                <input type="radio" name="gender" id="Female">
                    <label for="Female">Female</label><br>
                <input type="radio" name="gender" id="Other">
                    <label for="Other">Other</label>
        </div>
        <div>
            <textarea col="30" rows="5"></textarea>
        </div>
        <div>
            Choose file: <input type="file">
        </div>
        <button type="submit">Send</button>
    </form>
</body>
</html>
Bài tập: input 1 số a, input 1 số b, dùng select phép tính, hiển thị ra input KQ