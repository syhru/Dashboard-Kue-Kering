<html>

<head>
    <title>MVC OOP PHP</title>
   <!-- Css Tailwind -->
   <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

<header class="flex items-center bg-gray-900 py-7">
  <div class="ml-5">
    <h2 class="text-4xl font-bold text-white">KUE KERING</h2>
    <h3 class="text-2xl text-gray-300">Toko Menjual Berbagai Aneka Kue Kering</h3>
  </div>
</header>

<table class="table-auto w-full text-center mx-auto">
  <thead class="bg-slate-800 text-slate-300	text-base font-serif">
    <tr>
      <th class="px-4 py-3">Kode kue</th>
      <th class="px-4 py-3">Nama kue</th>
      <th class="px-4 py-3">Ukuran</th>
      <th class="px-4 py-3">Harga</th>
      <th class="px-4 py-3">Gambar</th>
      <th colspan="2" class="px-4 py-3">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = $this->model->fetch($data)) { ?>
      <tr class="bg-gray-100">
        <td class="border px-4 py-2"><?php echo $row['id_kue'] ?></td>
        <td class="border px-4 py-2"><?php echo $row['nama_kue'] ?></td>
        <td class="border px-4 py-2"><?php echo $row['ukuran'] ?></td>
        <td class="border px-4 py-2"><?php echo $row['harga'] ?></td>
        <td class="border px-4 py-2">
          <img src="<?php echo $row['gambar']; ?>" width="70" height="70" class="mx-auto">
        </td>
        <td colspan="2" class="border px-1 py-2">
          <a href='index.php?eb=<?php echo $row['id_kue'] ?>' class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-6 rounded-md inline-block">Edit</a>
          <a href='index.php?db=<?php echo $row['id_kue'] ?>' class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded-md inline-block" onClick="return confirm ('Hapus Data?')">Delete</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>

  


<div class="flex justify-center mt-10 mb-20">
  <a href="index.php?ib=tambah_kue" class="px-4 py-2 rounded-lg bg-gray-900 text-white mr-4 hover:bg-gray-800">Tambah Data</a>
  <a href="index.php?home" class="px-4 py-2 rounded-lg bg-gray-300 text-gray-800 hover:bg-gray-400">Homepage</a>
</div>

</body>

</html>