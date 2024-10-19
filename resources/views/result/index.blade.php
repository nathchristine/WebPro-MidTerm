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
    <h1>Result</h1> <br>
    <a href="/IUPResultList/Add" class="btn btn-primary">Add Result</a>
    <div class= "container">
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Participant Name</th>
                <th>Competition Name</th>
                <th>Score</th>
                <th>Action</th>


            </tr>
            @foreach($result as $r)
            <tr>
                <td>{{$r->id}}</td>
                <td>{{$participant->find($r->participants_id)->name ?? 'Unknown'}}</td>
                <td>{{$competition->find($r->competition_id)->name ?? 'Unknown'}}</td>
                <td>{{$r->score}}</td>
                <td>
                    <form action="/IUPResultList/{{$r->id}}" method= "POST">
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
