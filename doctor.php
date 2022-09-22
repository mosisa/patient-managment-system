<?php include 'header.php' ?>
<h1 class="mt-5">DOCTOR | APPOINTMENTS</h1>
<div class="scrollingTable">
    <table id="Table" class="table table-striped border mt-3 bg-white">
            <thead>
                <tr>
                    <th scope="col">Patient Id</th>
                    <th scope="col">Patient name</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Appointment time</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $Dname = $_SESSION["name"];   
                $query1 = "SELECT appointement.pid, appointement.Appday,appointement.Apptime,user.name   
                FROM appointement  
                INNER JOIN user  
                ON appointement.pid = user.id where appointement.doctor='$Dname' ";
                $result = mysqli_query($con,$query1);
                $n=1;
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        echo "<tr><th scope='row'>".$row['pid']."</th>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['Appday']."</td>";
                        echo "<td>".$row['Apptime']."</td></tr>";
                    }
                }
            ?>
            </tbody>
        </table>    
    </div>    

<?php include 'footer.php'?>