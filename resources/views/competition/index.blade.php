<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Competition</h1> <br>
    <a href="/IUPCompeList/Add" class="btn btn-primary">Add Competition</a>
    <div class= "container">
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Competition Name</th>
                <th>Desc</th>
                <th>Date</th>
                <th>Action</th>

            </tr>
            @foreach($competition as $c)
            <tr>
                <td>{{$c->id}}</td>
                <td>{{$c->name}}</td>
                <td>{{$c->description}}</td>
                <td>{{$c->date}}</td>
                <td>
                    <a href="/IUPCompeList/Update/{{$c->id}}" class="btn btn-warning">Update</a>
                    <form action="/IUPCompeList/{{$c->id}}" method= "POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
            </tr>
            @endforeach
        </table>
    </div>
    
</body>
</html>

