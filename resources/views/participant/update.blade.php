<h1>Update Participant</h1>

<form action="/IUPParticipantList/{{$participant->id}}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="id" placeholder="Participant NRP"value ="{{$participant->id}}"> <br>
    <input type="text" name="name" placeholder="Participant Name" value ="{{$participant->name}}"> <br>
    <input type="text" name="email" placeholder="Email" value ="{{$participant->email}}"> <br>
    <input type="text" name="phone" placeholder="Phone" value ="{{$participant->phone}}"> <br>
    <select name="competition_id" placeholer="Select Competition">
        @foreach($competition as $c)
        <option value="{{$c->id}}" {{ $participant->competition_id == $c->id ? 'selected' : '' }}>
            {{$c->name}}
        </option>
        @endforeach
    </select>
    
    <input type="submit" name ="submit" value="Save">
</form>