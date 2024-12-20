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
            background-color: #FAEDCB;
            padding: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 25px;
            font-size: 1.2rem;
            margin-left: 30px;
            margin-right: 30px;
            margin-top: 20px;
        }
        .navbar-nav {
            align-items: center;
        }
        .nav-item-gap {
            margin-right: 20px;
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
            margin-right: 45px;
        }

        .btn-add i {
            margin-left: 10px;
        }

        .participant-list .card {
            margin-top: 20px;
            margin-bottom: 20px;
            font-family: 'Poppins', sans-serif;
        }

        h1 {
            text-align: center;
            margin-top: 40px;
        }

        .add-competition-container {
            display: flex;
            justify-content: flex-end;
            margin-right: 30px;
            margin-top: 10px;
        }
    </style>
    <title>Competition List</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">IUP Competition</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse align-right" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link"  href="/dashboard">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/IUPParticipantList">Participant</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/IUPCompeList">Competition</a>
              </li>
              <li class="nav-item nav-item-gap">
                <a class="nav-link" href="/IUPResultList">Result</a>
              </li>
              <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn register-btn" role="button">Logout</button>
                </form>
            </li>
            </ul>
          </div>
        </div>
      </nav>
    
    <div class="container text-center">
        <h1>COMPETITION LIST</h1>
    </div>

     <div class="container">
            @if(session('success'))
            <div id="success-message" class="alert alert-success text-center" role="alert">
                {{ session('success') }}
            </div>
            @endif
        </div>

    <div class="add-competition-container">
        <a href="/IUPCompeList/Add" class="btn btn-add">
            Add Competition <i class="fa-solid fa-user-plus fa-beat"></i>
        </a>
    </div>

    <div class="container participant-list">
        <div class="row">
            @foreach($competition as $c)
            <div class="col-md-4">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">{{$c->name}}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{$c->date}}</h6>
                        <p class="card-text">{{$c->description}}</p>
                        <div class="d-flex justify-content-end">
                            <a href="/IUPCompeList/Update/{{$c->id}}" class="btn btn-update me-2">
                                <i class="fa-solid fa-pencil fa-beat"></i>
                            </a>
                            <form action="/IUPCompeList/{{$c->id}}" method="POST" class="btn-delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete">
                                    <i class="fa-solid fa-trash fa-bounce"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      const jsConfetti = new JSConfetti();

      window.onload = function() {
          const successMessage = document.getElementById('success-message');
          if (successMessage) {
              jsConfetti.addConfetti({
                  confettiRadius: 6,
                  confettiNumber: 500,
              });

              setTimeout(() => {
                    successMessage.classList.add('fade-out');
                }, 3000);

                setTimeout(() => {
                    successMessage.remove();
                }, 4000);
            }
          };
    
    </script>

</body>
</html>
