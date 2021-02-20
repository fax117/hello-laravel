<h1>Coins Creation here</h1>

<form action="{{ route('coins.store') }}" method="POST">
    @csrf
    <input type='text' name="name" placeholder="Name">
    <input type='text' name="short_name" placeholder="Short Name">
    <input type="submit">
</form>
