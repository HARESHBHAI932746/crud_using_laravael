<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>queryCRUD</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: white;
            background-color: black;
        }

        .insertbtn{
            margin-left: 4px;
            padding: 5px;
            font-size: 18px;
            border: 1px solid white;
            background-color: #00176ca3;
            border-radius:10px;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <br><br>
    <center>
        <form action="" method="post">

            @csrf

            @method('PUT')
            
            <label for="name">name</label>
            <input type="text" id="name" name="name" value="{{$student->name}}">
            <label for="city">city</label>
            <input type="text" id="city" name="city" value="{{$student->city}}">
            <label for="marks">marks</label>
            <input type="number" id="marks" name="marks" value="{{$student->marks}}">

            <button type="submit" class="insertbtn">Update</button>
        </form>
    </center>

    </center>
</body>
</html>