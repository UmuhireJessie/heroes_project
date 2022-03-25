<?php
 
include('../../config/db_connect.php');


    
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>All heroes</title>
</head>
<body>
 
<button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="button">
      Add hero
    </button>
<?php
    $sql = "SELECT * FROM heroes";
    $result = mysqli_query($conn, $sql);
   ?> 
 
    <table class="table-auto">
  <thead>
    <tr>
        <th class="w-1/4 px-4 py-2">Id</th>
        <th class="w-1/2 px-4 py-2">Image</th>
        <th class="w-1/4 px-4 py-2">Details</th>
    </tr>
  </thead>

 
  <?php



                if ($result) {
                    foreach ($result as $row) {
                ?>
                        <tbody>
                            <tr>
                                <td class="id">
                                   <p class="idhero"><?php echo $row['heroId'] ?></p>
                                    <?php echo $row['hero_name'] ?>
                               
                                    <img src="<?php echo "images/".$row['hero_image'] ?>" alt="">
                                   
                                </td>
 
                                <td class="allHero">
                                     <p class="det">real name is <span class="realname"> <?php echo $row['real_name'] ?> </span>, </p>
                               <p class="shortbio"> <?php echo $row['short_bio'] ?></p>
                                <button class="morebtn"><a href="../hero-detail.php?id=<?php echo $row['heroId']?>">View More</a> </button>
                                <button class="morebtn"><a href="delete.php?id=<?php echo $row['heroId']?>">Delete</a> </button>
                                <button class="morebtn"><a href="more.php?id=<?php echo $row['heroId']?>">Update</a> </button>
                            </td>
                               
                                <!-- <td><?php echo $row['long_bio'] ?></td> -->
                               
                               
                            </tr>
                            <?php
                    }
                } else {
                    echo "no record found";
                }
                ?>
 
                        </tbody>

</table>
 
   
</body>
