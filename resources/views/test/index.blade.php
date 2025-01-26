<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Gallery of Suphanut</h1>
    <table>
        <tr>
            <td class="image-container">
                <a href="/gallery/ant">
                    <img src="{{ $ant }}" alt="Ant Man" width="300">
                    <p>Ant</p>
                </a>
            </td>
            <td class="image-container">
                <a href="/gallery/bird">
                    <img src="{{ $bird }}" alt="Bird" width="300">
                    <p>Bird</p>
                </a>
            </td>
            <td class="image-container">
                <a href="/gallery/cat">
                    <img src="{{ $cat }}" alt="Cat" width="300">
                    <p>Cat</p>
                </a>
            </td>
            <td class="image-container">
                <img src="{{ $god }}" alt="God" width="300">
                <p>God</p>
            </td>
            <td class="image-container">
                <img src="{{ $spider }}" alt="Spider" width="-00">
                <p>Spider</p>
            </td>
        </tr>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>