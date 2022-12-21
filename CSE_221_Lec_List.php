<html>
<head>
    <style>
        h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #E10078, #5DC0CD);
  background: linear-gradient(to right, #E10078, #5DC0CD);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}

.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
    </style>
</head>
<body>
<section>
  <h1>CSE 221 Lecture</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0">
      <thead>
        <tr>
          
          <th>CSE 221 Lecture Number</th>
          <th>Link</th>
         
       
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0">
      <tbody>
      <?php
        $con=mysqli_connect("localhost","root","","login_sample_db");
        if($con->connect_error){
            die("Failed".$con->connect_error);
        }
        $sql="select id,username from REG_LEC_221";

       $result = $con->query($sql);
       if($result-> num_rows>0){
           while($row = $result-> fetch_assoc()){
               echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><tr>";
           }
           echo "</table>";
       }
       else {
           echo "0";
       }
       $con-> close();

        ?>
        
      </tbody>
    </table>
  </div>
</section>
<h3><a href="about.php">Student</a></h3>
<h3><a href="about_t.php">
  Professor</h3>
<h3><a href="about_C.php">
  Controller</h3>
</body>
</html>