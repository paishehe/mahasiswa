<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, #1a103d, #4b0082);
            min-height: 100vh;
        }
        .form-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 1rem;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.3);
        }
        .input-field {
            transition: all 0.3s ease;
        }
        .input-field:focus {
            border-color: #a855f7;
            box-shadow: 0 0 0 3px rgba(168, 85, 247, 0.2);
        }
        .submit-btn:hover {
            background: linear-gradient(to right, #7c3aed, #5b21b6);
        }
    </style>
</head>
<body class="flex items-center justify-center p-6">
    <div class="w-full max-w-md form-container p-8">
        <h2 class="text-3xl font-bold text-white mb-6 text-center">Edit Mahasiswa</h2>
        <form method="post" action="/mahasiswa/update/<?= $mahasiswa['id'] ?>" class="space-y-4">
            <div>
                <label for="nama" class="block text-white text-sm font-medium mb-1">Nama</label>
                <input type="text" name="nama" id="nama" value="<?= $mahasiswa['nama'] ?>" class="w-full p-2 rounded-lg bg-white bg-opacity-20 text-white border border-gray-300 input-field" required>
            </div>
            <div>
                <label for="nim" class="block text-white text-sm font-medium mb-1">NIM</label>
                <input type="text" name="nim" id="nim" value="<?= $mahasiswa['nim'] ?>" class="w-full p-2 rounded-lg bg-white bg-opacity-20 text-white border border-gray-300 input-field" required>
            </div>
            <div>
                <label for="jurusan" class="block text-white text-sm font-medium mb-1">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mahasiswa['jurusan'] ?>" class="w-full p-2 rounded-lg bg-white bg-opacity-20 text-white border border-gray-300 input-field" required>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-6 py-2 rounded-lg submit-btn transition duration-300">Update</button>
            </div>
        </form>
    </div>
</body>
</html>
