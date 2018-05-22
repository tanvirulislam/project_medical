<!doctype html>
<html lang="en"> 

<head>
    <?php include ( 'php/header.php'); ?>
    <title>Smart E-Health System</title>
    <link rel="icon" type="image/jpg" href="image/khab.png">
</head>

<body style="padding-left:0px;padding-right:0px;" class="container-fluid">
<!--     Modal start -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Registration Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="name" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="pwd" placeholder="password">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember">Remember me</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->
   
    <div class="container-fluid" style="background-color: cadetblue;">
            <div class="row ">
                <div class="col-lg-3 col-md-2 col-sm-12 text-center">
                    <img style="cursor:pointer;" src="image/khab.png" class="img-fluid logo" alt="logo">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 text-center">
                    <h1 class="wow slideInRight title">An Smart <b>E-Health</b> System</h1>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-12 ">
                    <button type="button" class="btn btn-primary py-1 btn_margin float-right" data-toggle="modal" data-target="#exampleModal">Registration Form</button>
                </div>
            </div>
        </div>
   
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-2 col-sm-12 text-center">
                <h1 class="bounce wow bounce title2"> Select Your Symptoms </h1>
            </div>
        </div>
    </div>
    
    <div class="container-fluid" id="symtom_body">
            <form action="" method="post" id="symptom_form">
            <div class="row">
                <!-- left side colom -->
                <div class="col-md-2 col-sm-12 left_content">
                    <ul class="nav flex-column">
                        <li class="nav-item"> <a class="nav-link active" href="#">All problem</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#">Brain</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#">Body</a>
                        </li>
                    </ul>
                </div>
                
                <!-- ==start first clm== -->
                 <div class="col-md-10 col-sm-12">
                    <table class="table table-hover">
                       
                        <!--display symptom name from database-->
                <?php 
                 $i=1;
                 include('config/connection.php');
                 $select_symptom="select * from symptom order by symptom_name";
                 $result=mysqli_query($con,$select_symptom);
                 while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                    if($i==1 || $i % 2 !=0){
                    echo "<tr>"; 
                    }
                    echo "<td>"; 
                    echo ' <div class="form-check">'; 
                    echo '<label class="form-check-label">'; 
                    echo '<input type="checkbox" class="form-check-input" name="symptom[]" value="'.$row['symptom_name'].'"><h5>'.$row['symptom_name'].'</h5></label>'; 
                    echo "</div>"; 
                    echo "</td>"; 
                  if($i % 2 ==0){
                    echo "</tr>"; 
                    }
                    $i++;
                 }
                ?>
                       
                    </table>
                  </div>
              </div>
              
              </form>
            <div class="row">
                  <div class="col-md-11 offset-md-1 text-center">
                      <button onclick="symptom_submitt()" class="btn btn-lg btn-primary" name="symptom_submit" id="symptom_submit">Submit</button>
                  </div>
              </div>
    </div>
    
    <div id="display_doctor_list"></div>
    <?php //include ('php/display_doctor_list.php'); ?> 
    <?php include ( 'php/footer.php'); ?>
    <!-- Optional JavaScript -->
</body>

</html>
<script>
    $("document").ready(function() {
                    $("#submit").click(function() {
                        $("#picture").slideToggle("slow");
    
                    });
                });
</script>


