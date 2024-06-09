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
            <input type="text" name="name-client" id="name-client"><input type="text" name="number-client" id="number-client" placeholder="(XX) XXXX-XXXX">
            
            <script>
                document.getElementById('number-client').addEventListener('input', function (e) {
                var inputValue = e.target.value.replace(/\D/g, ''); // Remove todos os caracteres que não são dígitos
                var formattedValue = formatPhoneNumber(inputValue);
                updatePlaceholder(formattedValue);
            });
            
            function formatPhoneNumber(phoneNumber) {
                var formattedNumber = phoneNumber;
                if (phoneNumber.length >= 2 && phoneNumber.length <= 3) {
                    formattedNumber = '(' + phoneNumber + ')';
                } else if (phoneNumber.length >= 4 && phoneNumber.length <= 7) {
                    formattedNumber = '(' + phoneNumber.slice(0, 2) + ') ' + phoneNumber.slice(2);
                } else if (phoneNumber.length >= 8) {
                    formattedNumber = '(' + phoneNumber.slice(0, 2) + ') ' + phoneNumber.slice(2, 6) + '-' + phoneNumber.slice(6);
                }
                return formattedNumber;
            }
            
            function updatePlaceholder(formattedNumber) {
                document.getElementById('number-client').placeholder = formattedNumber;
            }
            </script>
            <button type="submit" id="add-bt"
                        class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 focus:outline-none focus:bg-green-600">Criar Cliente</button>
        </form>
    </div>
</body>

</html>