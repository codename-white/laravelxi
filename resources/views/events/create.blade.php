<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Event</title>
</head>
<body>
    <h1>Create Event</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Event Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required><br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required>{{ old('description') }}</textarea><br><br>

        <label for="event_date">Event Date:</label>
        <input type="date" id="event_date" name="event_date" value="{{ old('event_date') }}" required><br><br>

        <label for="banner">Banner (optional):</label>
        <input type="file" id="banner" name="banner" accept="image/*"><br><br>

        <button type="submit">Create Event</button>
    </form>
</body>
</html>
