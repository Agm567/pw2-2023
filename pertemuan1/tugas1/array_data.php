<?php
    echo '<br><br>';
    $m_fruits = [
        ["id" => "1", "name" => "Apel", "color" => "Merah", "stock" => 50, "price" => 5000, "description" => "Buah yang kaya akan serat dan vitamin C."],
        ["id" => "2", "name" => "Jeruk", "color" => "Oranye", "stock" => 30, "price" => 6000, "description" => "Buah yang kaya akan vitamin C dan antioksidan."],
        ["id" => "3", "name" => "Mangga", "color" => "Kuning", "stock" => 20, "price" => 8000, "description" => "Buah yang kaya akan serat, vitamin C, dan A."],
        ["id" => "4", "name" => "Pisang", "color" => "Kuning", "stock" => 100, "price" => 2000, "description" => "Buah yang kaya akan kalium dan vitamin C."],
        ["id" => "5", "name" => "Semangka", "color" => "Merah", "stock" => 10, "price" => 8000, "description" => "Buah yang kaya akan kalium."]
      ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
               foreach ($m_fruits as $fruit) {
                  echo "<tr>";
                  echo "<td>" . $fruit["id"] ."</td>";
                  echo "<td>" . $fruit["name"] . "</td>";         
                  echo "<td>" . $fruit["color"] . "</td>";        
                  echo "<td>" . $fruit["stock"] . "</td>";        
                  echo "<td>" . $fruit[ "price"] . "</td>"; 
                  echo "<td>" . $fruit["description"] . "</td>";
                  echo "</tr>";
                 }  
         ?>
      </tbody>
    </table>
  </div>
</body>
</html>