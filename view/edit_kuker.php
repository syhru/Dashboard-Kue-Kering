<html>

<head>
    <title>MVC OOP PHP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    
    <header class="flex items-center bg-gray-900 py-7">
        <div class="ml-5">
            <h2 class="text-4xl font-bold text-white">KUE KERING</h2>
            <h3 class="text-2xl text-gray-300">Toko Menjual Berbagai Aneka Kue Kering</h3>
        </div>
    </header>

        <form action="" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-lg">

        <h3 class="text-2xl font-bold mb-4">Edit Data</h3>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="nama">Nama Kue</label>
                <input type="text" name="nm_kue" id="nama" class="w-full border border-gray-400 p-2 w-64 rounded-lg">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="ukuran">Ukuran</label>
                  <div class="flex">
                    <input type="radio" name="uk_kue" value="1000r" class="mr-2">
                    <label for="ukuran">1000r</label>
                    <input type="radio" name="uk_kue" value="5000r" class="ml-8 mr-2">
                    <label for="ukuran">5000r</label>
                    <input type="radio" name="uk_kue" value="3000r" class="ml-8 mr-2">
                <label for="ukuran">3000r</label>
             </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="harga">Harga</label>
                <input type="text" name="hrg_kue" id="harga" class="w-full border border-gray-400 p-2 w-64 rounded-lg">
             </div>
            
             <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="gambar">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="w-full border border-gray-400 p-2 w-64 rounded-lg">
            </div>
            

            <div class="flex">
            <input type="hidden" name="kdb" value="<?= $row[0] ?>">
                <button type="submit" name="submit" class="bg-indigo-500 text-white py-2 px-4 rounded-lg hover:bg-indigo-600">Simpan</button>
                <a href="index.php?id=index_kue" class="bg-indigo-500 text-white ml-5 py-2 px-7 rounded-lg hover:bg-indigo-600">Batal</a>
            </div>

        </form>
       
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $main = new controller();
   
    $main->update_kuker();
}
?>