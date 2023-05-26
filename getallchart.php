<?php
 // Query untuk mendapatkan data dari tabel covid_data
 $query = "SELECT * FROM covid_data";
 $result = mysqli_query($conn, $query);

 // Menyimpan data dari database ke dalam array
 $countries = array();
 $totalCases = array();
 $totalDeaths = array();
 $totalRecovered = array();
 $activeCases = array();
 $totalTests = array();

 while ($row = mysqli_fetch_assoc($result)) {
     $countries[] = $row['country'];
     $totalCases[] = $row['total_cases'];
     $totalDeaths[] = $row['total_deaths'];
     $totalRecovered[] = $row['total_recovered'];
     $activeCases[] = $row['active_cases'];
     $totalTests[] = $row['total_tests'];
 }

 // Tutup koneksi database
 mysqli_close($conn);
 ?>