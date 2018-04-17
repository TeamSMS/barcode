<?php 
include_once 'header.php';
include_once 'class.php';
if (!$loggedIn) {
  header('Location:sign.php');
}
$pid = 1;// $_GET['pid'];
$p = new Patient($pid);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome Patient Database</title>
    <link rel="stylesheet" type="text/css" href="animate.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="timeline.css">
</head>
<body>    
      <div class="profile animated bounceInUp">
        <img src="<?php echo $p->photo; ?>" class="rounded-circle mx-auto d-block" alt="user-dp" width="120px" height="120px"><!--add img src-->
        <h2><?php echo $p->fname." ".$p->mname." ".$p->lname; ?></h1><!--userName goesh here-->
      </div>

<!-- ******************  Modal *************-->
<!--______________________________________________
   |                                              |
   |            Modal is not working              |
   |______________________________________________|-->
    <div class="modal" id="born">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title">BORN(2000)</h2>
            </div><!--END of .modal-header-->
            <div class="modal-body">
              <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td colspan="2"></td>
      <td></td>
    </tr>
  </tbody>
</table>
            </div><!--END of .modal-body-->
          </div><!--END of .modal-content-->
        </div><!--END of .modal-dialog-->
      </div><!--END of .modal-->

    <!--  <ul class="progressbar animated rubberBand">
          <li><a href="#" data-toggle="modal" data-target="#born">born</a></li>
          <li class="active">Major accident</li>
          <li></li>
          <li></li>
          <li></li>
      </ul>
    -->
    <?php
      $years = $p->array_date;
      $yearsArray = explode(",", $years);
      $newYearsArray = [];
      foreach ($yearsArray as $year) {
       array_push($newYearsArray, date("Y",$year));
      }
      $uniqueNewYearsArray = array_unique($newYearsArray);

      echo ' <ul class="progressbar animated rubberBand" id="timeline">';
      foreach ($uniqueNewYearsArray as $uniqueYear) {
        echo '<li data-toggle="collapse" data-target="collapse'.$uniqueYear.'">'."$uniqueYear".'</li>';
        echo '<div class="collapse" id="collapse'.$uniqueYear.'">Hello world</div>';
      }
      echo '</ul>';
    ?>

      


  <div class="container main-table animated bounceInDown">
    <table class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          <tr>
              <th scope="col">#</th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
              <th scope="row"></th>
              <td></td>
              <td></td>
              <td></td>
          </tr>
          <tr>
              <th scope="row"></th>
              <td></td>
              <td></td>
              <td></td>
          </tr>
          <tr>
              <th scope="row"></th>
              <td colspan="2"></td>
              <td></td>
              <td></td>
          </tr>
          <tr>
              <th scope="row"></th>
              <td colspan="2"></td>
              <td></td>
          </tr>
          <tr>
              <th scope="row"></th>
              <td colspan="2"></td>
              <td></td>
          </tr>
          <tr>
              <th scope="row"></th>
              <td colspan="2"></td>
              <td></td>
          </tr>
          <tr>
              <th scope="row"></th>
              <td colspan="2"></td>
              <td></td>
          </tr>
          <tr>
              <th scope="row"></th>
              <td colspan="2"></td>
              <td></td>
          </tr>
        </tbody>
    </table>
  </div>
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="JsBarcode.all.min.js"></script>
    <script src="main.js"></script>
</body>
</html>