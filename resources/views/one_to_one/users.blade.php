<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Relasi One to One - Laravel Eloquent</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-4xl bg-white shadow-xl rounded-xl overflow-hidden">
        <div class="p-6">
            <h5 class="text-center text-gray-700 text-lg mt-2 mb-6">
                Laravel Eloquent Relationship: One To One
            </h5>

            @if ($users->isEmpty())
                <div class="text-center py-10 text-gray-500">
                    Tidak ada data user yang tersedia.
                </div>
            @else
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm text-left border border-gray-300">
                        <thead class="bg-blue-50 text-gray-600 uppercase text-xs font-semibold">
                            <tr>
                                <th class="px-6 py-3 border border-gray-300">Nama User</th>
                                <th class="px-6 py-3 border border-gray-300">Nomor Telepon</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($users as $user)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 border border-gray-200">{{ $user->name }}</td>
                                    <td class="px-6 py-4 border border-gray-200">
                                        {{ $user->phone->phone ?? 'Tidak ada nomor' }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</body>

</html>
