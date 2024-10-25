<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b09fd6009e.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.browser.js"></script>
    
    <style>
        body {
            font-family: 'Fredoka One', sans-serif;
        }

        .navbar-nav .nav-link {
            font-family: 'Fredoka One', sans-serif;
            text-transform: uppercase;
        }
        .navbar-brand {
            text-transform: uppercase;
            font-size: 1.5rem;
        }
        .login-btn {
            background-color: #A8DADC;
            border-color: #A8DADC;
            text-transform: uppercase;
            padding: 10px 20px;
            color: #000;
            border-radius: 10px;
            font-size: 1.1rem;
        }
        .register-btn {
            background-color: #F4A3A8;
            border-color: #F4A3A8;
            text-transform: uppercase;
            padding: 10px 20px;
            color: #000;
            border-radius: 10px;
            font-size: 1.1rem;
        }
        .navbar {
            background-color: #FAEDCB; /* Light yellow background */
            padding: 20px;
            /* Removed border */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Add shadow */
            border-radius: 25px; /* Rounded corners for navbar */
            font-size: 1.2rem;
            margin-left: 30px;  /* Add left margin */
            margin-right: 30px; /* Add right margin */
            margin-top: 20px;  /* Add top margin */
        }
        .navbar-nav {
            align-items: center;
        }
        .nav-item-gap {
            margin-right: 20px; /* Add a gap between Result and Login */
        }

        .participant-list {
            margin: 20px 30px;
        }

        .participant-card {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 10px 30px;
            margin-bottom: 15px;
        }

        .participant-details {
            display: flex;
            align-items: center;
            width: 30%;
        }

        .participant-details i {
            font-size: 60px;
            color: #333;
            margin-right: 20px;
            flex-shrink: 0;
        }

        .profile-text h5 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }

        .profile-text p {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            margin: 0;
        }

        .competition-action-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 50%;
        }

        .competition-text {
            font-weight: bold;
            font-size: 1.2rem;
            text-align: center;
            flex-grow: 1;
            font-family: 'Poppins', sans-serif;
        }

        .participant-actions {
            display: flex;
            gap: 10px;
            justify-content: flex-end;
        }

        .btn-add {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            background-color: #A8DADC;
            border-color: #A8DADC;
            color: #fff;
            font-weight: bold;
            border-radius: 10px;
            padding: 10px 20px;
        }

        .btn-add i {
            margin-left: 10px;
        }

        .btn-update, .btn-delete {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 48px;
            height: 48px;
            background-color: #F4A3A8;
            border-color: #F4A3A8;
            color: #fff;
            font-weight: bold;
            border-radius: 10px;
            padding: 10px;
        }

        .btn-delete {
            background-color: #FF6F6F;
            border-color: #FF6F6F;
        }

        /* Fade-out transition */
        .fade-out {
            opacity: 0;
            transition: opacity 1s ease-out;
        }

        /* Right alignment for the Add button */
        .add-participant-container {
            display: flex;
            justify-content: flex-end; /* Keep the button aligned to the right */
            margin-right: 30px;
        }

        h1 {
            text-align: center;
            margin-top: 40px; /* Increase space between navbar and h1 */
        }
    </style>
    <title>Participant List</title>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">IUP Competition</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse align-right" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/IUPParticipantList">Participant</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/IUPCompeList">Competition</a>
                    </li>
                    <li class="nav-item nav-item-gap">
                        <a class="nav-link" href="/IUPResultList">Result</a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn register-btn" role="button" data-bs-toggle="button">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container text-center">
        <h1>PARTICIPANT LIST</h1>
    </div>

    <!-- Success Message -->
    <div class="container">
        @if(session('success'))
        <div id="success-message" class="alert alert-success text-center" role="alert">
            {{ session('success') }}
        </div>
        @endif
    </div>

    <!-- Add button aligned to the right -->
    <div class="add-participant-container">
        <a href="/IUPParticipantList/Add" class="btn btn-add">
            Add Participant <i class="fa-solid fa-user-plus fa-beat"></i>
        </a>
    </div>

    <!-- Participant List Section -->
    <div class="participant-list">
        @foreach($participant as $p)
        <div class="participant-card">
            <div class="participant-details">
                <i class="fa-solid fa-user fa-2xl"></i>
                <div class="profile-text">
                    <h5>{{$p->name}}</h5>
                    <p>{{$p->id}}<br>{{$p->email}}<br>{{$p->phone}}</p>
                </div>
            </div>
            <div class="competition-action-container">
                <div class="competition-text">
                    {{$competition->find($p->competition_id)->name ?? 'Unknown'}}
                </div>
            </div>
            <div class="participant-actions">
                <a href="/IUPParticipantList/Update/{{$p->id}}" class="btn btn-update">
                    <i class="fa-solid fa-pencil fa-beat"></i>
                </a>
                <form action="/IUPParticipantList/{{$p->id}}" method="POST" class="btn-delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-delete">
                        <i class="fa-solid fa-trash fa-bounce"></i>
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

    <script>
        const jsConfetti = new JSConfetti();

        window.onload = function() {
            const successMessage = document.getElementById('success-message');
            if (successMessage) {
                // Show confetti
                jsConfetti.addConfetti({
                    confettiRadius: 6,
                    confettiNumber: 500,
                });

                // Automatically hide the message after 3 seconds
                setTimeout(() => {
                    successMessage.classList.add('fade-out');
                }, 3000);  // 3-second delay before hiding the message

                // Remove the element from the DOM after the fade-out transition (after 4 seconds)
                setTimeout(() => {
                    successMessage.remove();
                }, 4000);
            }
        };
    </script>
</body>
</html>
