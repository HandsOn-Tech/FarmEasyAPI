<?php 
    require("dbconn.php");
    $userid = $_GET['userId']; 
    $message = "";
    if(isset($_GET['userId'])){
      $query =  "Select * from profiles where id=$userid;";
      $result = mysqli_query($link, $query);
      if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $delete_query =  "delete from profiles where id=$userid";
        mysqli_query($link, $delete_query);
        $message = "User deleted Successfully!";
      }else{
        $message = "User is not a valid User.";
      }
    }else{
      $message = "No user id specified";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>FarmEasy - Delete User</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php require("sidebar.php"); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php require("topbar.php");?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Delete user</h1>

          <p><?=$message?></p>




      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>


call C:\OracleATS\openScript\runScript_FConsole.bat 
    Y:/FAAT_11.13.20.01.0_GENERIC.rdd/LATEST/faat/fusionapps/hcm/oats/src/assets/genericdriverscript/genericdriverscript.jwg 
    -env_file "/Personal/JavaDemo/JavaNetbeansTool" 
    -script_data "/Personal/JavaDemo/JavaNetbeansToolCAP_MB_TAXCARD_FN_003500_Validate the ability to add  a new province card1581021026447.csv" 
    -resultReportFolder "/Personal/JavaDemo/JavaNetbeansTool/resultReportLocation/1581021026450" 
    -consoleFile "" 
    -repository "FusionOATS=Y:/FAAT_11.13.20.01.0_GENERIC.rdd/LATEST/faat/fusionapps"



call C:\OracleATS\openScript\runScript_FConsole.bat / Y:\FAAT_PT.V2MIBHCMSILVER_GENERIC.rdd\LATEST\faat\fusionapps\hcm\oats\src\assets\genericdriverscript\genericdriverscript.jwg  -env_file "F:\HCM\amd_training_New\paripate\OATS\SilverMobileFirst_451.xml" -script_data "F:\HCM\amd_training_New\paripate\OATS\sample folder structure\faat\fusionapps\hcm\oats\src\data\HRX_RUI_KW_BAT_000500_Hire Employee into a payroll.csv" -resultReportFolder "F:\HCM\amd_training_New\paripate\OATS\Result\\HRX_RUI_KW_BAT_000500_Hire Employee into a payroll\2020-02-06_13-03-55-460" -consoleFile "F:\HCM\amd_training_New\paripate\OATS\Result\\HRX_RUI_KW_BAT_000500_Hire Employee into a payroll\2020-02-06_13-03-55-460\atslog.txt" -repository "FusionOATS=Y:\FAAT_PT.V2MIBHCMSILVER_GENERIC.rdd\LATEST\faat\fusionapps"



call C:\OracleATS\openScript\runScript_FConsole.bat 
  Y:\FAAT_PT.V2MIBHCMSILVER_GENERIC.rdd\LATEST\faat\fusionapps\hcm\oats\src\assets\genericdriverscript\genericdriverscript.jwg 
  -env_file "F:\HCM\amd_training_New\paripate\OATS\SilverMobileFirst_451.xml"
      -script_data "F:\HCM\amd_training_New\paripate\OATS\sample folder structure\faat\fusionapps\hcm\oats\src\data\HRX_RUI_KW_BAT_000500_Hire Employee into a payroll.csv"
      -resultReportFolder "F:\HCM\amd_training_New\paripate\OATS\Result\\HRX_RUI_KW_BAT_000500_Hire Employee into a payroll\2020-02-06_13-03-55-460"
                    " -consoleFile \""+atsLogs+"\"" +
                    " -repository \"FusionOATS=Y:"+File.separator+label+File.separator+"LATEST"+File.separator+"faat"+File.separator+"fusionapps\"\n";


