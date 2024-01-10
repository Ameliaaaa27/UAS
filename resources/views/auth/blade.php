<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Title">
    <textarea name="content" placeholder="Content"></textarea>
    <button type="submit">Create Post</button>
</form>
