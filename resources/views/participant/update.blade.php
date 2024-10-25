<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b09fd6009e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.browser.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Fredoka One', sans-serif;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        .form-container {
            max-width: 600px;
            margin: auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            font-family: 'Poppins', sans-serif;
        }

        .form-label {
            font-weight: bold;
            color: #343a40;
        }

        .form-control, .form-select {
            font-size: 1.1rem;
            border-radius: 8px;
            border: 1px solid #ced4da;
        }

        .btn-submit {
            width: 100%;
            background-color: #90BE6D;
            border-color: #90BE6D;
            color: #fff;
            padding: 10px;
            font-size: 1.2rem;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #4cae4c;
        }

        .btn-back {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            background-color: #A8DADC;
            border-color: #A8DADC;
            color: #fff;
            font-weight: bold;
            border-radius: 10px;
            padding: 10px 20px;
            text-decoration: none;
            margin-bottom: 20px;
        }

        .btn-back i {
            margin-right: 10px;
        }

        .back-result-container {
            display: flex;
            justify-content: flex-start;
            max-width: 600px;
            margin: 20px auto 0 auto;
        }
    </style>

    <title>Update New Participant</title>
</head>
<body>

    <h1>UPDATE NEW PARTICIPANT</h1>

    <div class="back-result-container">
        <a href="/IUPResultList/" class="btn btn-back">
            <i class="fa-solid fa-arrow-left fa-fade"></i> Back 
        </a>
    </div>

    <div class="container form-container">
        <form action="/IUPParticipantList/{{$participant->id}}" method="POST">
            @method('PUT')
            @csrf

            <div class="mb-3">
                <label for="id" class="form-label">Participant NRP</label>
                <input type="text" class="form-control" id="id" name="id" value ="{{$participant->id}}" required>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Participant Name</label>
                <input type="text" class="form-control" id="name" name="name" value ="{{$participant->name}}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Participant Email</label>
                <input type="email" class="form-control" id="email" name="email" value ="{{$participant->email}}" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Participant Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value ="{{$participant->phone}}" required>
            </div>

            <div class="mb-3">
                <label for="competition_id" class="form-label">Select Competition</label>
                <select class="form-select" id="competition_id" name="competition_id" required>
                    @foreach($competition as $c)
                    <option value="{{$c->id}}" {{ $participant->competition_id == $c->id ? 'selected' : '' }}>
                        {{$c->name}}
                    </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-submit">Update Participant</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
