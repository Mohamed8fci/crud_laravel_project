<h1>create posts</h1>

<form action="{{route('post.insert')}}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Enter title"><br><br>
    <input type="text" name="body" placeholder="enter body"><br><br>
    <button type="submit">submit</button>
</form>
