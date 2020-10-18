<html>
<body>
<h2>Beitrag erstellen</h2>
<form method="post" action="{{ route('beitraege.store') }}">
    @csrf
    <p>
        <strong>Creator:</strong>
        <input type="text" name="creator">
    </p>
    <p>
        <strong>Inhalt:</strong>
        <textarea id="inhalt" name="inhalt"></textarea>
    </p>
    <p>
        <strong>Title:</strong>
        <input type="text" name="title">
    </p>
    <p>
        <button type="submit">Create</button>
    </p>
</form>
</body>
</html>