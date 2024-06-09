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
            <input type="number" name="number-client" id="number-client" step="0"
            class="form-input px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
<div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="telefone">
                Telefone
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="telefone" name="telefone" type="text" placeholder="Digite seu telefone">
        </div>
            <button type="submit" id="add-bt"
                        class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 focus:outline-none focus:bg-green-600">Criar Cliente</button>
        </form>
    </div>
</body>

</html>