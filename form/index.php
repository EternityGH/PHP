<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <form id="form-contact" action="">
        <div>
            Name: <input type="text" placeholder="Enter your name">
        </div>
        <div>
            Password: <input type="password" placeholder="Enter your password">
        </div>
        <div>
            Select:
            <select>
               
                <option>HTML</option>
                <option>CSS</option>
                <option>PHP</option>
                <option>Laravel</option>
            </select>
        </div>
        <div>
                <input type="radio" name="gender" id="Male"> Male<br>
                    <label for="female">Male</label>
                <input type="radio" name="gender" id="Femail"> Female<br>
                    <label for="female">Female</label>
                <input type="radio" name="gender" id="Other"> Other
                    <label for="female">Other</label>
        </div>
        <div>
            <textarea col="30" rows="5"></textarea>
        </div>
    </form>
</body>
</html>