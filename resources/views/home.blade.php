<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>queryCRUD</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css')}}">
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: white;
            /* background-color: black; */
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
    <br>
    <center>
        <h2 class="header">PHP CRUD Application</h2>
    </center><br>
    <a class="header2">Add New Record</a>
    <center>
        <br>
        <form action="" method="post">

            @csrf

            <label for="name">name</label>
            <input type="text" id="name" name="name">
            <label for="city">city</label>
            <input type="text" id="city" name="city">
            <label for="marks">marks</label>
            <input type="number" id="marks" name="marks">

            <button type="submit" class="insertbtn">Insert</button>
        </form>
    </center>
    <br><br>
    <center>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Marks</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student as $stu)
                <tr>
                    <td>{{$stu->id}}</td>
                    <td>{{$stu->name}}</td>
                    <td>{{$stu->city}}</td>
                    <td>{{$stu->marks}}</td>
                    <td>
                        <a href="{{ url('/edit', $stu->id) }}">edit</a>
                        <a href="{{ url('/delete', $stu->id) }}">delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </center>
</body>
</html>
