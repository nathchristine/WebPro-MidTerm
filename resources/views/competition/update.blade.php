<h1>Update Competition</h1>

<form action="/IUPCompeList/{{$competition->id}}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="name" placeholder="Competition Name" value="{{$competition->name}}"> <br>
    <input type="text" name="description" placeholder="Description" value="{{$competition->description}}"> <br>
    <input type="date" name="date" value="{{$competition->date}}"> <br>
    <input type="submit" name ="submit" value="Add">
</form>