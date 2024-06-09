<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Manager</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="w-full max-w-xs">
        <form action="{{ route('seu_route_aqui') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
    
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="telefone">
                    Telefone
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="telefone" name="telefone" type="text" placeholder="Digite seu telefone">
            </div>
    
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Enviar
                </button>
            </div>
        </form>
    </div>
    <div class="bg-gray-500 flex flex-col">
        <form action="{{ route('addClient') }}" method="POST">
            @csrf
            <input type="text" name="name-client" id="name-client">
<div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="number-client">
                Telefone
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="number-client" name="number-client" type="text" placeholder="Digite o telefone sem simbolos ou espaços">
        </div>
            <button type="submit" id="add-bt"
                        class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 focus:outline-none focus:bg-green-600">Criar Cliente</button>
        </form>
    </div>
</body>

</html>