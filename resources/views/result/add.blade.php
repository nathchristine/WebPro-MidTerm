<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b09fd6009e.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.browser.js"></script>

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
            margin:  auto;
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
        .alert {
            display: none;
            color: red;
            font-weight: bold;
            margin-top: 5px;
            padding: 0;
        }
        .btn-submit:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }
    </style>
    <title>Add New Result</title>
</head>
<body>

    <h1>ADD NEW RESULT</h1>

    <div class="back-result-container">
        <a href="/IUPResultList/" class="btn btn-back">
            <i class="fa-solid fa-arrow-left fa-fade"></i> Back 
        </a>
    </div>

    <div class="container form-container">
        <form action="/IUPResultList/AddComplete" method="POST">
            @csrf
            <div class="mb-3">
                <label for="participants_id" class="form-label">Select Participant</label>
                <select class="form-select" name="participants_id" id="participants_id" required onchange="updateCompetition()">
                    <option value="" disabled selected>Select Participant</option>
                    @foreach($participant as $p)
                    <option value="{{$p->id}}" data-competition="{{$competition->find($p->competition_id)->name}}" data-competition-id="{{$p->competition_id}}" data-has-score="{{ $result->where('participants_id', $p->id)->isNotEmpty() ? 'true' : 'false' }}">{{$p->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="competition_id" class="form-label">Competition</label>
                <input type="text" class="form-control" id="competition_display" disabled>
                <input type="hidden" name="competition_id" id="competition_id" required>
            </div>

            <div class="mb-3">
                <label for="score" class="form-label">Participant Score</label>
                <input type="text" class="form-control" name="score" id="score" placeholder="Enter Participant's Score" required>
                <div class="alert" id="alert-message">
                    This participant already has a score.
                </div>
            </div>

            <div class="alert" id="alert-message">
                This participant already has a score.
            </div>

            <button type="submit" class="btn btn-submit">Add Result</button>
        </form>
    </div>

    <script>
        function updateCompetition() {
            const participantSelect = document.getElementById('participants_id');
            const selectedOption = participantSelect.options[participantSelect.selectedIndex];
            const competitionName = selectedOption.getAttribute('data-competition');
            const competitionId = selectedOption.getAttribute('data-competition-id');
            const hasScore = selectedOption.getAttribute('data-has-score') === 'true';

            document.getElementById('competition_display').value = competitionName;
            document.getElementById('competition_id').value = competitionId;

            const submitButton = document.querySelector('.btn-submit');
            const alertMessage = document.getElementById('alert-message');

            if (hasScore) {
                submitButton.disabled = true;
                alertMessage.style.display = 'block';
            } else {
                submitButton.disabled = false;
                alertMessage.style.display = 'none';
            }
            jsConfetti.addConfetti({
                confettiRadius: 6,
                confettiNumber: 500,
            });
        }
    </script>

</body>
</html>
