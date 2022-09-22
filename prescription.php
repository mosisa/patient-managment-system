<?php include 'header.php' ?>
<h1 class="mt-5">DOCTOR | PRESCRIPTION</h1>
<div class="scrollingTable">
    <table id="Table" class="table table-striped border mt-3 bg-white">
        <thead>
            <tr>
                <th scope="col">Patient Id</th>
                <th scope="col">Patient name</th>
                <th scope="col">Test Type</th>
                <th scope="col">Test Result</th>     
            </tr>
        </thead>
        <tbody>
        <?php 
            $query1 = "SELECT labresults.test,labresults.labresult, labresults.pid,user.name   
            FROM user  
            INNER JOIN labresults  
            ON labresults.pid = user.id";
            $result = mysqli_query($con,$query1);    
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    echo "<tr><th scope='row'>".$row['pid']."</th>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['test']."</td>";
                    echo "<td>".$row['labresult']."</td></tr>";
                }
            }
        ?>
        </tbody>
    </table>    
</div>

<h4 class="mt-5">WRITE PRESCRIPTION</h4>
<div id="MyAppointmentForm" class="shadow bg-white p-3 mb-5 rounded ">
    <?php if(isset($_GET['success'])){?>
    <div class="alert alert-success" role="alert">
        <?php echo $_GET['success']; ?>
    </div>
    <?php } ?>
    <form action="backends/prescription.php" method="POST"> 
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Patient Id</label>
            <input type="text" name="id"  class="form-control" required>
        </div>     
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Medical Condition</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="medical"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Prescription</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="prescription"></textarea>
        </div>
        <div class="modal-footer">
            <button type="reset" class="btn btn-secondary">clear</button>
            <button type="submit" name="writePre" class="btn btn-dark">Send</button>
        </div>   
    </form>
</div>      

<?php include 'footer.php'?>