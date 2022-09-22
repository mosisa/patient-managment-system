<?php
session_start();
include 'header.php';
?>
<h1 class="mt-5">LABORATORY | TESTS</h1>
<div class="mt-5">
        <button class="btn btn-dark mt-3" type="button" onclick="showAppointementForm()">Send Result</button>
</div>
<?php if(isset($_GET['success'])){?>
    <div class="alert alert-success mt-2" role="alert">
        <?php echo $_GET['success']; ?>
    </div>
    <?php } ?>
<div id="MyAppointmentForm" class="hidden shadow bg-white p-3 mb-5 rounded ">
    <form action="backends/labReSult.php" method="POST">
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Patient Id</label>
            <input type="text" name="id"  class="form-control" required>
        </div>    
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Test Result</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="testResult" required></textarea>
        </div>
        <div class="modal-footer">
            <button type="reset" class="btn btn-secondary">clear</button>
            <button type="submit" name="labresult" class="btn btn-dark">Send</button>
        </div>   
    </form>
</div> 
<div class="scrollingTable">
    <table id="Table" class="table table-striped border mt-3 bg-white">
        <thead>
            <tr>
                <th scope="col">Patient Id</th>
                <th scope="col">Patient name</th>
                <th scope="col">Test Type</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $query1 = "SELECT labresults.test, labresults.pid,user.name   
            FROM user  
            INNER JOIN labresults  
            ON labresults.pid = user.id";
            $result = mysqli_query($con,$query1);    
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    echo "<tr><th scope='row'>".$row['pid']."</th>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['test']."</td></tr>";
                }
            }
        ?>
        </tbody>
    </table>    
</div>
    <script type="text/javascript">
            function showAppointementForm() {
                document.getElementById("MyAppointmentForm").classList.remove('hidden');
                document.getElementById("AppointementRemoveBtn").classList.remove('d-none');
            }
            function hideAppointementForm(){
                document.getElementById("MyAppointementForm").classList.add('hidden');
                document.getElementById("AppointementRemoveBtn").classList.add('d-none');
            }

    </script> 


<?php include 'footer.php' ?>