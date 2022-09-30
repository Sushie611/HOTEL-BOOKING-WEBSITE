if($con->query($sql)==true){
    echo "<h1>successfully inserted</h1>";

    }
    else{
    echo "ERROR:$sql<br>$con->error";
    }
    else{
   // $name=$_POST["name"];
   // $phone=$_POST["phone"];
   // $email=$_POST["email"];
    //$password=$_POST["password"];
    //$confirmpassword=$_POST["confirm-password"];
//$sql="INSERT INTO `book`. `book` (`slno`, `name`, `phone`, `email`, `password`, `date`)  VALUES ( '$name', '$phone', '$email', '$password' ,current_timestamp())";
/if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);
if($con==false){


    die("connection to this database failed due to".mysqli_connect_error());
}

