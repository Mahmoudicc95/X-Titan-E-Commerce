<!DOCTYPE html>
<html lang="en"> 
  <title>X-Titan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet"  href="admin.css">
   <!--fevicon -->
   <link rel="icon" href="img/cropped.png" type="image/gif" />
   <!-- font awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
  <h1>Admin Dashboard for X-Titan E-Commerce</h1>
                <!--  -->
   <div class="column">
   <form action="Add.php" id="promotion-form" method="POST">
     <h3>promotion</h3>
     <label for="">Promotion Name</label>
     <input type="text" name="name" placeholder="Promotion Name">
     <label for="">Promotion Offer: </label>
     <select name="offer">
       <option value="10%">10%</option>
       <option value="20%">20%</option>
       <option value="30%">30%</option>
       <option value="40%">40%</option>
       <option value="50%">50%</option>
       <option value="60%">60%</option>
       <option value="90%">90%</option>
       <option value="70%">70%</option>
       <option value="80%">80%</option>
      </select><br>
     <label for="">Promotion Expired Date: </label>
     <input type="date" name="date"><br>
     <button name="submit-promotion">Submit</button>
    </form> 
   </div>
   <div class="column">
   <form action="Add.php" id="promotion-form" method="POST">
     <h3>Discount</h3>
     <label for="">Discount Name</label>
     <input type="text" name="name" placeholder="Discount Name"><br>
     <label for="">Discount Offer: </label>
     <select name="offer">
       <option value="10%">10%</option>
       <option value="20%">20%</option>
       <option value="30%">30%</option>
       <option value="40%">40%</option>
       <option value="50%">50%</option>
       <option value="60%">60%</option>
       <option value="90%">90%</option>
       <option value="70%">70%</option>
       <option value="80%">80%</option>
      </select><br>
      <label for="">Discount Start Time: </label>
        <input type="time" name="time-start"><br>
        <label for="">Discount Expired Time: </label>
        <input type="time" name="time-expired"><br>
        <button name="submit-discount" id="submit_discount">Submit</button>
    </form> 
   </div>
   <div class="column">
   <form action="Add.php" id="event-form" method="post">
   <h3>Event</h3>
   <label for="">Event Name: </label>
     <input type="text" name="name" placeholder="Event Title"><br>
     <label for="">Event Offer: </label>
     <input type="text" name="represent" placeholder="Event represent"><br>
     <label for="">Event Expired Date: </label>
     <input type="date" name="date"><br>
     <button name="submit-event">Submit</button>
    </form> 
   </div>
   <div class="record">
       <h2>promotion record</h2>
       <table>
           <thead>
               <tr>
                   <th>ID</th>
                   <th>Product Name</th>
                   <th>Product Offer</th>
                   <th>Product Expired Date</th>
                   <th>Edit</th>
                   <th>Delete</th>                   
               </tr>
           </thead>
           <tbody>
             <?php 
                include('connect.php');
                $query = "select * from promotion";
                $result = mysqli_query($conn, $query);
                 while($rows = mysqli_fetch_assoc($result)){
                    echo "<tr>
                    <td>$rows[id]</td>
                    <td>$rows[name]</td>
                    <td>$rows[offer]</td>
                    <td>$rows[date]</td>
                    <td><a href='edit.php?id=$rows[id]&role=promotion'><i class='fas fa-edit'></i></a></td>
                    <td><a href='delete.php?id=$rows[id]&role=promotion'><i class='fas fa-trash-alt'></i></a></td>
                    </tr>";
                }                              
             ?>
           </tbody>         
        </table>

        <h2>Discount Record</h2>
        <table>
            <thead>
              <tr>
               <th>ID</th>
               <th>Discount Name</th>
               <th>Discount Offer</th>
               <th>Discount Starting Time</th>
               <th>Discount Expired Time</th>
               <th>Edit</th>
               <th>Delete</th>
            </tr>
         </thead>        
         <tbody>
          <?php
          include('connect.php');
          $query = "select * from discount";
          $result = mysqli_query($conn, $query);
                 while($rows = mysqli_fetch_assoc($result)){
                    echo "<tr>
                    <td>$rows[id]</td>
                    <td>$rows[name]</td>
                    <td>$rows[offer]</td>
                    <td>$rows[start_time]</td>
                    <td>$rows[end_time]</td>
                    <td><a href='edit.php?id=$rows[id]&role=discount'><i class='fas fa-edit'></i></a></td>
                    <td><a href='delete.php?id=$rows[id]&role=discount'><i class='fas fa-trash-alt'></i></a></td>
                    </tr>";
                }
                ?>
          </tbody>
        </table>
        
        <h2>Event Record</h2>
        <table>
            <thead>
                <tr>
                <th>ID</th>
                <th>Event Name</th>
                <th>Event represent</th>
                <th>Event Expired Date</th>
                <th>Edit</th>
                <th>Delete</th>
                </tr>
            </thead>
            <tbody id="event">
                <?php
                include('connect.php');
                $query = "select * from event";
                $result = mysqli_query($conn, $query);
                while($rows = mysqli_fetch_assoc($result)){
                    echo "<tr>
                    <td>$rows[id]</td>
                    <td>$rows[name]</td>
                    <td>$rows[represent]</td>
                    <td>$rows[date]</td>
                    <td><a href='edit.php?id=$rows[id]&role=event'><i class='fas fa-edit'></i></a></td>
                    <td><a href='delete.php?id=$rows[id]&role=event'><i class='fas fa-trash-alt'></i></a></td>
                    </tr>";
                }                
                ?>
            </tbody>
        </table>         
    </div>  
     <!--js files   -->
  </body>
  </html>
