
<?php
include "conn.php";
?>
<div class="p-7 m-7 rounded-lg bg-white">
  <div class="mb-5"><p class="text-lg font-medium text-xs leading-tight uppercase mb-7">ILP KUALA LANGAT PELAJAR</p></div>
    <a class="p-3 font-medium text-xs leading-tight uppercase bg-blue-500 text-white rounded-lg" href="tambahpelajar.php">TAMBAH</a>
    <link rel="stylesheet" href="style.css>
</div>
<center><p class="text-white">TPP PELAJAR LIST</p></center>
<div class="px-8 pb-6 mt-4 flex flex-col ">
  <div class=" sm:-mx-6 lg:-mx-8">
    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden rounded-lg">
        <table border="1" class="min-w-full text-center">
          <thead class="border-b bg-gray-500">
            <tr>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                ID
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
              NAMA PELAJAR
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                NO KP
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                NO HP
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                JANTINA
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                ACTION
              </th>
            </tr>
          </thead class="border-b">
          <tbody>
            <?php
            $data = mysqli_query($con, "SELECT * FROM info_pelajar");
            while ($info = mysqli_fetch_array($data)) { ?>
                  <tr class="bg-gray-400 border-b">
              <td class="text-base text-white font-medium px-6 py-4 whitespace-nowrap">
                <?php echo $info["id"]; ?>
              </td>
              <td class="text-base text-white font-medium px-6 py-4 whitespace-nowrap">
                <?php echo $info["nama_pelajar"]; ?>
              </td>
              <td class="text-base text-white font-medium px-6 py-4 whitespace-nowrap">
              <?php echo $info["no_kp"]; ?>
              </td>
              <td class="text-base text-white font-medium px-6 py-4 whitespace-nowrap">
              <?php echo $info["no_hp"]; ?>
              </td>
              <td class="text-base text-white font-medium px-6 py-4 whitespace-nowrap">
                <?php echo $info["jantina"]; ?>
              </td>
              <td class="text-base text-white font-medium px-6 py-4 whitespace-nowrap">
              <div class="flex space-x-2 justify-center">
                <button type="button" class="inline-block px-6 py-2.5 bg-blue-800 text-white font-medium text-xs leading-tight uppercase rounded shadow-lg hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"><a href="kemaskinipelajar.php?update_id=<?php echo $info["id"]; ?>"></a></button>
                
                <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-modal md:h-full">
    <div class="relative w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
           
            
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"><a href="padampelajar.php?delete_id=<?php echo $info["id"]; ?>"> DELETE</a></button>
                
            </div>
        </div>
    </div>
</div>
              </div>
            </td>
              </tr>
<?php } ?>
<!-- Main modal -->

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
