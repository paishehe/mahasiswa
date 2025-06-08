<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, #1a103d, #4b0082);
            min-height: 100vh;
        }
        .table-row-hover:hover {
            transform: translateY(-2px);
            background: rgba(255, 255, 255, 0.25);
        }
    </style>
</head>
<body class="flex items-center justify-center p-6">
    <div class="w-full max-w-4xl bg-white bg-opacity-10 backdrop-blur-lg rounded-xl shadow-xl p-8">
        <h2 class="text-3xl font-bold text-white mb-6 text-center">Daftar Mahasiswa</h2>
        <div class="flex justify-end mb-4">
            <a href="/mahasiswa/create" class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-6 py-2 rounded-lg hover:from-purple-700 hover:to-indigo-700 transition duration-300">Tambah Mahasiswa</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-white">
                <thead>
                    <tr class="bg-white bg-opacity-20">
                        <th class="px-4 py-2 text-left font-semibold">Nama</th>
                        <th class="px-4 py-2 text-left font-semibold">NIM</th>
                        <th class="px-4 py-2 text-left font-semibold">Jurusan</th>
                        <th class="px-4 py-2 text-left font-semibold">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mahasiswa as $m): ?>
                        <tr class="border-b border-white border-opacity-10 table-row-hover transition duration-300">
                            <td class="px-4 py-2 font-semibold"><?= $m['nama'] ?></td>
                            <td class="px-4 py-2"><?= $m['nim'] ?></td>
                            <td class="px-4 py-2"><?= $m['jurusan'] ?></td>
                            <td class="px-4 py-2 flex space-x-2">
                                <a href="/mahasiswa/edit/<?= $m['id'] ?>" class="bg-blue-500 text-white px-4 py-1 rounded-lg hover:bg-blue-600 transition duration-300">Edit</a>
                                <a href="/mahasiswa/delete/<?= $m['id'] ?>" class="bg-red-500 text-white px-4 py-1 rounded-lg hover:bg-red-600 transition duration-300">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
