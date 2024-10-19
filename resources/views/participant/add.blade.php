<h1>Add New Participant</h1>

<form action="/IUPParticipantList/AddComplete" method="POST">
    @csrf
    <input type="text" name="id" placeholder="Participant NRP"> <br>
    <input type="text" name="name" placeholder="Participant Name"> <br>
    <input type="text" name="email" placeholder="Participant Email"> <br>
    <input type="text" name="phone" placeholder="Participant Phone"> <br>
    {{-- <p>Competition ID <br>
        1. Hackathon Challenge <br>
        2. Coding Marathon <br>
        3. AI Innovation Contest    <br>
        4. Web Development Showdown <br>
        5. Game Development Tournament <br>
        6. Cybersecurity Capture the Flag <br>
    </p> <br> --}}
    <!-- Correct the name and placeholder -->
    <select name="competition_id" placeholder="Select Competition">
        <option value="" disabled selected>Select Competition</option>
        @foreach($competition as $c)
        <option value="{{$c->id}}">{{$c->id}}. {{$c->name}}</option>
        @endforeach
    </select>
    
    <input type="submit" name="submit" value="Add">
</form>
