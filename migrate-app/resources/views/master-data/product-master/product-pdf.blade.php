<!DOCTYPE html>
<html>

<head>
    <title>DATA PRODUCT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        table {
            border-left: 0.01em solid #ccc;
            border-right: 0;
            border-top: 0.01em solid #ccc;
            border-bottom: 0;
            border-collapse: collapse;
        }

        table td,
        table th {
            border-left: 0;
            border-right: 0.01em solid #ccc;
            border-top: 0;
            border-bottom: 0.01em solid #ccc;
        }
    </style>
</head>

<body>


    <table class="min-w-full border border-collapse border-gray-200">
        <thead>
            <tr class="bg-gray-100">
                <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">NO</th>
                <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">Product Name</th>
                <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">Unit</th>
                <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">Type</th>
                <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">Information</th>
                <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">Qty</th>
                <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">Producer</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($product as $item)
                <tr class="bg-white">
                    <td class="px-4 py-2 border border-gray-200">{{ $i++ }}</td>
                    <td class="px-4 py-2 border border-gray-200 hover:text-blue-500 hover:underline">
                        {{ $item->product_name }}</td>
                    <td class="px-4 py-2 border border-gray-200">{{ $item->unit }}</td>
                    <td class="px-4 py-2 border border-gray-200">{{ $item->type }}</td>
                    <td class="px-4 py-2 border border-gray-200">{{ $item->information }}</td>
                    <td class="px-4 py-2 border border-gray-200">{{ $item->qty }}</td>
                    <td class="px-4 py-2 border border-gray-200">{{ $item->producer }}</td>
                </tr>
            @endforeach


            <!-- Tambahkan baris lainnya sesuai kebutuhan -->
        </tbody>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
