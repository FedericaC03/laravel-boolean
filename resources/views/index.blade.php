<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        table{
            border: 1px solid black;

        }
      
        .table-head th{
            color:blue;
        }
    </style>
</head>
<body>
    <table>
        <tr class="table-head">
         <th>Name</th>
         <th>Surname</th>
         <th>Birth date</th>
        </tr>
        @foreach ($projects as $student)
        <tr>
          <td>{{$student->id}}</td>
          <td>{{$student->name}}</td>
          <td>{{$student->surname}}</td>
          <td>{{$student->birth_date}}</td>
        </tr>
      @endforeach
        </tr>
        
        
        </table>
</body>
</html>