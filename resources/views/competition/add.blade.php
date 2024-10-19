<h1>Add New Competition</h1>

<form action="/IUPCompeList/AddComplete" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Competition Name"> <br>
    <input type="text" name="description" placeholder="Description"> <br>
    <input type="date" name="date"> <br>
    <input type="submit" name ="submit" value="Add">
</form>