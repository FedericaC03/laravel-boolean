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
        <?php foreach($projects as $user) { ?>
        <tr>
        <th> <?php echo $user->name ?> </th>
        <th> <?php echo $user->surname ?> </th>
        <th> <?php echo $user->birth_date ?> </th>
        
        <?php } ?>
        
        </tr>
        
        
        </table>
</body>
</html>