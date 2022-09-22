<?php include 'header.php' ?>
<h1 class="mt-5">PATIENT | PRESCRIPTION</h1>
<div class="scrollingTable">
    <table id="Table" class="table table-striped border mt-3 bg-white">
            <thead>
                <tr>
                    <th scope="col">Patient Id</th>
                    <th scope="col">Medical Condition</th>
                    <th scope="col">Prescription Writen Date</th>
                    <th scope="col">Prescription</th>
                    <th scope="col">Doctor</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $username = $_SESSION['username'];
                $query1 = "SELECT * from records where pid = (select id from user where username='$username')";
                $result = mysqli_query($con,$query1);
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        echo "<tr><th scope='row'>".$row['pid']."</th>";
                        echo "<td>".$row['medicalCondition']."</td>";
                        echo "<td>".$row['appointementDate']."</td>";
                        echo "<td>".$row['drugs']."</td>";               
                        echo "<td>".$row['doctor']."</td></tr>";
                    }
                }
            ?>
            </tbody>
        </table>    
    </div>    

<?php include 'footer.php'?>