<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Manager</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="bg-gray-500 flex flex-col">
        <form action="{{ route('addClient') }}" method="POST">
            @csrf
            <input type="text" name="name-client" id="name-client">
            <input type="number" name="number-client" id="number-client">
            <button type="submit" id="add-bt"
                        class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 focus:outline-none focus:bg-green-600">Criar Cliente</button>
        </form>
    </div>
</body>

</html>