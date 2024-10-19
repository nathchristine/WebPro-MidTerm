<h1>Add New Result</h1>

<form action="/IUPResultList/AddComplete" method="POST">
    @csrf
    <select name="participants_id" placeholder="Select Participant">
        <option value="" disabled selected>Select Participant</option>
        @foreach($participant as $p)
        <option value="{{$p->id}}">{{$p->name}}</option>
        @endforeach
    </select> <br>
   <select name="competition_id" placeholder="Select Competition">
        <option value="" disabled selected>Select Competition</option>
        @foreach($competition as $c)
        <option value="{{$c->id}}">{{$c->name}}</option>
        @endforeach
    </select> <br>
    <input type="text" name="score" placeholder="Participant Score"> <br>
    <input type="submit" name="submit" value="Add">
</form>