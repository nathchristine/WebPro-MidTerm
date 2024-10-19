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
    <h1>Participant</h1> <br>
    <a href="/IUPParticipantList/Add" class="btn btn-primary">Add Participant</a>
    <div class= "container">
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Competition</th>
                <th>Action</th>

            </tr>
            @foreach($participant as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->name}}</td>
                <td>{{$p->email}}</td>
                <td>{{$p->phone}}</td>
                <td>{{$competition->find($p->competition_id)->name ?? 'Unknown'}}</td>
                <td>
                    <a href="/IUPParticipantList/Update/{{$p->id}}" class="btn btn-warning">Update</a>
                    <form action="/IUPParticipantList/{{$p->id}}" method= "POST">
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

