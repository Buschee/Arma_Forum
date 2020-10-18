<html xmlns="http://www.w3.org/1999/html">
    <body>
        <h2>Beitrag verändern</h2>
        <form method="post" action="{{ route('beitraege.update', $beitraege) }}">
            @csrf
            @method('patch')
            <p>
                <strong>Creator:</strong>
                <input type="text" name="creator" value="{{ $beitraege->creator }}"/>
            </p>
            <p>
                <strong>Inhalt:</strong>
                <textarea name="inhalt" value="{{ $beitraege->inhalt }}"></textarea>
            </p>
            <p>
                <strong>Title:</strong>
                <input type="text" name="title" value="{{ $beitraege->title }}"/>
            </p>
            <p>
                <button type="submit">Update</button>
            </p>
        </form>
    </body>
</html>