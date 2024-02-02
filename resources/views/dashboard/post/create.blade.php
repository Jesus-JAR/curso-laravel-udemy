<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Crear Post</h1>
    {{-- Errores --}}
    @if ($errors->any)
        @foreach ($errors->all() as $e)
            <div class="errors">
                {{ $e }}
            </div>
        @endforeach

    @endif
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title">

        <label for="slug">Slug:</label>
        <input type="text" name="slug" id="slug">

        <label for="category_id">category:</label>
        <select name="category_id" id="category_id">
            <option value="-">categorias...</option>
            @forelse ($categories as $title => $id)
                <option value="{{ $id }}">{{ $title }}</option>
            @empty
                <h3>La lista esta vacia debe agregar categorias</h3>
            @endforelse
        </select>

        <label for="posted">Posted:</label>
        <select name="posted" id="posted">
            <option value="yes">Yes</option>
            <option value="not">Not</option>

        </select>

        <label for="content">Content:</label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>

        <label for="description">Description:</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>

        <button type="submit">Send</button>
    </form>

</body>

</html>
