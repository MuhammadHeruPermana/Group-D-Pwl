<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold my-8">Edit Mahasiswa</h1>
        <div>
            @if($errors->any())
            <ul class="bg-red-500 text-white px-4 py-2 rounded">
                @foreach ($errors->all() as $errors)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <form method="post" action="{{route('mahasiswa.update', ['mahasiswa' => $mahasiswa])}}" class="bg-white p-6 rounded-lg">
            @csrf
            @method('put')
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">NPM</label>
                <input type="number" name="npm" placeholder="npm" value="{{$mahasiswa->npm}}" class="w-full px-3 py-2 border rounded-lg focus:border-blue-500 focus:outline-none" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Nama</label>
                <input type="text" name="nama" placeholder="nama" value="{{$mahasiswa->nama}}"  class="w-full px-3 py-2 border rounded-lg focus:border-blue-500 focus:outline-none" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Kelas</label>
                <input type="text" name="kelas" placeholder="kelas" value="{{$mahasiswa->kelas}}" class="w-full px-3 py-2 border rounded-lg focus:border-blue-500 focus:outline-none" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Jurusan</label>
                <input type="text" name="jurusan" placeholder="jurusan" value="{{$mahasiswa->jurusan}}" class="w-full px-3 py-2 border rounded-lg focus:border-blue-500 focus:outline-none" />
            </div>
            <div class="flex space-x-4">
                <div class="">
                    <input type="submit" value="Update" class="bg-blue-500 text-white px-4 py-2 rounded cursor-pointer" />
                </div>
                <div class="mt-2">
                    <a href="{{route('mahasiswa.index')}}" class="bg-red-500 text-white px-4 py-2 rounded cursor-pointer">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
