
<html>
<head>
     <style type="text/css">
     
     .CSSTableGenerator {
     margin:0px;padding:0px;
     width:100%;
     box-shadow: 10px 10px 5px #888888;
     border:1px solid #3f7f00;
     
     -moz-border-radius-bottomleft:12px;
     -webkit-border-bottom-left-radius:12px;
     border-bottom-left-radius:12px;
     
     -moz-border-radius-bottomright:12px;
     -webkit-border-bottom-right-radius:12px;
     border-bottom-right-radius:12px;
     
     -moz-border-radius-topright:12px;
     -webkit-border-top-right-radius:12px;
     border-top-right-radius:12px;
     
     -moz-border-radius-topleft:12px;
     -webkit-border-top-left-radius:12px;
     border-top-left-radius:12px;
}.CSSTableGenerator table{
    border-collapse: collapse;
        border-spacing: 0;
     width:100%;
     height:100%;
     margin:0px;padding:0px;
}.CSSTableGenerator tr:last-child td:last-child {
     -moz-border-radius-bottomright:12px;
     -webkit-border-bottom-right-radius:12px;
     border-bottom-right-radius:12px;
}
.CSSTableGenerator table tr:first-child td:first-child {
     -moz-border-radius-topleft:12px;
     -webkit-border-top-left-radius:12px;
     border-top-left-radius:12px;
}
.CSSTableGenerator table tr:first-child td:last-child {
     -moz-border-radius-topright:12px;
     -webkit-border-top-right-radius:12px;
     border-top-right-radius:12px;
}.CSSTableGenerator tr:last-child td:first-child{
     -moz-border-radius-bottomleft:12px;
     -webkit-border-bottom-left-radius:12px;
     border-bottom-left-radius:12px;
}.CSSTableGenerator tr:hover td{
     
}
.CSSTableGenerator tr:nth-child(odd){ background-color:#d4ffaa; }
.CSSTableGenerator tr:nth-child(even)    { background-color:#ffffff; }.CSSTableGenerator td{
     vertical-align:middle;
     
     
     border:1px solid #3f7f00;
     border-width:0px 1px 1px 0px;
     text-align:center;
     padding:7px;
     font-size:10px;
     font-family:Arial;
     font-weight:normal;
     color:#000000;
}.CSSTableGenerator tr:last-child td{
     border-width:0px 1px 0px 0px;
}.CSSTableGenerator tr td:last-child{
     border-width:0px 0px 1px 0px;
}.CSSTableGenerator tr:last-child td:last-child{
     border-width:0px 0px 0px 0px;
}
.CSSTableGenerator tr:first-child td{
          background:-o-linear-gradient(bottom, #5fbf00 5%, #5fbf00 100%); background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #5fbf00), color-stop(1, #5fbf00) );
     background:-moz-linear-gradient( center top, #5fbf00 5%, #5fbf00 100% );
     filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#5fbf00", endColorstr="#5fbf00");  background: -o-linear-gradient(top,#5fbf00,5fbf00);

     background-color:#5fbf00;
     border:0px solid #3f7f00;
     text-align:center;
     border-width:0px 0px 1px 1px;
     font-size:14px;
     font-family:Arial;
     font-weight:bold;
     color:#ffffff;
}
.CSSTableGenerator tr:first-child:hover td{
     background:-o-linear-gradient(bottom, #5fbf00 5%, #5fbf00 100%); background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #5fbf00), color-stop(1, #5fbf00) );
     background:-moz-linear-gradient( center top, #5fbf00 5%, #5fbf00 100% );
     filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#5fbf00", endColorstr="#5fbf00");  background: -o-linear-gradient(top,#5fbf00,5fbf00);

     background-color:#5fbf00;
}
.CSSTableGenerator tr:first-child td:first-child{
     border-width:0px 0px 1px 0px;
}
.CSSTableGenerator tr:first-child td:last-child{
     border-width:0px 0px 1px 1px;
}

     </style>
<title>Table</title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>

<?php

$servername = "localhost";
$username = "potcharajo";
$password = "qtwmv!4K_Z";
$dbname = "potcharajo_app";
// Create connection
mysqli_query("SET NAMES UTF8");
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM `table` where date_time like '%".$_POST["date"]."%' and date_time like '%".$_POST["time_s"]."%'
 and date_time like '%".$_POST["time_e"]."%' and bang_add like '%".$_POST["depart"]."%' ";
$result = mysqli_query($conn, $sql);
?>
<body>
     <div class="CSSTableGenerator">
 <table >
     <tr>  
          <td>รหัสวิชา</td>
          <td>ประเถท</td>
          <td> sec </td>
          <td> วัน-เวลา  </td>
          <td> ห้องเรียน  </td>
          <td> อาจารย์ </td>
          <td>  คณะที่ลงได้ </td>
     </tr>

 <?php
     while($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
               <td><?php echo $row["courses_id"] ; ?></td>
               <td><?php  echo $row["sourses_type"]; ?></td>
               <td><?php echo $row["sec"];  ?></td>
               <td><?php  echo $row["date_time"]; ?></td>
               <td><?php  echo $row["room"];?></td>
               <td><?php echo $row["teacher"];  ?></td>
               <td><?php  echo $row["bang_add"];  ?></td>
          </tr>
          <?php
     }?>
 </table>
 </div>
</body>

<?php
mysqli_close($conn);
?>
