<?php
 include_once 'dbcon.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Report</title>
  <link rel="stylesheet" type="text/css" href="projstyle.css">  
</head>
<body>

  <div class="header">
    <div class="sidemenu">
      <h2>Menu</h2>
    <ul>
      <li><a href="project.html">Home</a></li>
      <li><a href="details.html">Registration</a></li>
        <li><a href="modify.html">Modify</a></li>
        <li><a href="delete.php">Delete</a></li>
        <strong><li>Extension Activities Report</li></strong>
        <li><a href="report.php">Overall Report</a></li>
        <li><a href="departmentreport.php">Department-wise Report</a></li>
        <ul>
          <li><a href="Nss.php">NSS</a></li>
                <li><a href="Ncc.php">NCC</a></li>
                <li><a href="Rotaract.php">ROTARACT</a></li>
                <li><a href="Yrc.php">YRC</a></li>
                <li><a href="FineArts.php">Fine Arts</a></li>
                <strong><li>NME Report</li></strong>
              <li><a href="AF.php">B.Com.(A&F)</a></li>
              <li><a href="CS.php">B.Com.(CS)</a></li>
              <li><a href="BM.php">B.Com.(BM)</a></li>
              <li><a href="General.php">B.Com.(General)</a></li>
              <li><a href="CA.php">B.Com.(CA)</a></li>
              <li><a href="ISM.php">B.Com.(ISM)</a></li>
              <li><a href="Business.php">Business Administration</a></li>
              <li><a href="Computer.php">Computer Science</a></li>
              <li><a href="Tamil.php">BasicTamil</a></li>
              <li><a href="Advancedtamil.php">AdvancedTamil</a></li>
        </ul>
        </li>
      </ul>
      </div>
    <div class="maintable">
      <table class="content-table">
        <!-- <div class=" table-wrapper-scroll-y My-custom-scrollbar"> -->
        <thead>
        <tr>
          <th>Department</th>
          <th>Department No</th>
          <th>Student Name</th>
          <th>Language</th>
          <th>  Nme </th>
          <th>Activity</th>
        </tr>
      </thead>
      <tbody>
<!------------------------------------------------------report table-------------------------------------------->
        <?php
        $report="select * from studentdetails ORDER BY department ASC,Activity ASC,deptno ASC";
        $result=mysqli_query($conn,$report);
        $rows=mysqli_num_rows($result);
        if($rows>0)
        {
        while($res=mysqli_fetch_assoc($result))
         {
          echo "<tr><td>".$res['department']."</td>";
          echo "<td>".$res['deptno']."</td>";
          echo "<td>" .$res['studentname']."</td>";
          echo "<td>".$res['language']."</td>";
          echo "<td>".$res['Nme']."</td>";
          echo "<td>".$res['Activity']."</td></tr>";
         }
        }
        else
        {
          echo "no such data";
        }
        echo "<center><h1>Report</h1></center>";
        ?>
      </tbody>
  </table>
<!-- </div> -->
  </div>
</div>
</body>
</html>

