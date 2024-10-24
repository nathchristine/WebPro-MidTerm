<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/b09fd6009e.js" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.browser.js"></script>

    
    <style>
        body {
            font-family: 'Fredoka One', sans-serif;
        }

        /* Navbar Styles */
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
            margin-right: 20px; /* Add a gap between Result and Login */
        }
        /* Score and Trash Icon Alignment */
        .list-group-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family: 'Poppins', sans-serif; /* Apply Poppins to the participant name */

        }

        .score-trash {
            display: flex;
            align-items: center;
            gap: 10px; /* Space between score and trash icon */
        }

        .score {
            font-size: 1.2rem;
            color: white;
            background-color: #7776BC;
            border-color: #7776BC;
            padding: 5px 10px;
            border-radius: 50px;
        }

        /* Delete Button */
        .btn-delete {
            background-color: #FF6F6F;
            border-color: #FF6F6F;
            color: #fff;
            font-weight: bold;
            border-radius: 10px;
            padding: 10px;
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
            padding: 10px 20px; /* Adjust padding for space between text and icon */
            margin-right: 45px;
        }

        .btn-add i {
            margin-left: 10px; /* Add space between text and icon */
        }

        /* Layout */
        .scrollspy-example {
            position: relative;
            overflow-y: auto;
            max-height: 600px;
        }

        .list-group-item-action {
            cursor: pointer;
        }

        /* Change the background color of the active item */
        .list-group-item.active {
            background-color: #FAEDCB !important;
            border-color: #FAEDCB !important;
            color: #000; /* Optional: change text color for better contrast */
        }

        h1 {
            text-align: center;
            margin-top: 40px; /* Increase space between navbar and h1 */
        }

        /* Right alignment for the Add button */
        .add-result-container {
            display: flex;
            justify-content: flex-end; /* Align to the right */
            margin-right: 30px;
            margin-top: 10px; /* Reduce space above the Add button */
        }

        /* Font for participant names */
        .participant-name {
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
        }

        /* Font for competition names */
        .competition-name {
            font-family: 'Poppins', sans-serif; /* Apply Poppins to competition names */
            font-weight: 600;
        }
    </style>
    <title>Result List</title>
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
                <a class="nav-link" href="/#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/IUPParticipantList">Participant</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="IUPCompeList">Competition</a>
              </li>
              <li class="nav-item nav-item-gap">
                <a class="nav-link active" aria-current="page" href="IUPResultList">Result</a>
              </li>
              <li class="nav-item">
                <a href="/login" class="btn login-btn me-2" role="button">Login</a>
              </li>
              <li class="nav-item">
                <a href="/register" class="btn register-btn" role="button">Register</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    
     


    <div class="container text-center">
        <h1>RESULT LIST</h1>
    </div>

 <!-- Add this block right after the opening <body> tag or in the appropriate place -->
      <div class="container">
        @if(session('success'))
        <div id="success-message" class="alert alert-success text-center" role="alert">
            {{ session('success') }}
        </div>
        @endif
      </div>

    <!-- Add button aligned to the right -->
    <div class="add-result-container">
        <a href="/IUPResultList/Add" class="btn btn-add">
            Add Result <i class="fa-solid fa-user-plus fa-beat"></i>
        </a>
    </div>
    <!-- Participant List and Results Section -->
    <div class="container">
        <div class="row">
            <!-- Competition List on the Left -->
            <div class="col-4">
              <div id="list-example" class="list-group">
                @foreach($competition as $c)
                <a class="list-group-item list-group-item-action" href="#list-item-{{$c->id}}">{{$c->name}}</a>
                @endforeach
              </div>
            </div>

            <!-- Scrollable Results on the Right -->
            <div class="col-8">
                <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                  @foreach($competition as $c)
                  <h4 id="list-item-{{$c->id}}" class="competition-name">{{$c->name}}</h4> <!-- Applied Poppins to competition names -->
                  <ul class="list-group mb-3">
                    @foreach($result->where('competition_id', $c->id) as $r)
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="participant-name">{{$participant->find($r->participants_id)->name ?? 'Unknown'}}</span>
                        <div class="score-trash">
                            <span class="score">{{$r->score}}</span>
                            <form action="/IUPResultList/{{$r->id}}" method="POST" class="btn-delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete">
                                    <i class="fa-solid fa-trash fa-bounce"></i>
                                </button>
                            </form>
                        </div>
                      </li>
                    @endforeach
                    @if($result->where('competition_id', $c->id)->isEmpty())
                      <li class="list-group-item text-muted">No participants found for this competition</li>
                    @endif
                  </ul>
                  @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
