<?php 

$conn = mysqli_connect('localhost','root','root','test');
$char_set = mysqli_set_charset($conn, "utf8");

if(isset($_POST['page_no']))
{
    $request_per_page = $_POST['request_per_page'];
    $total_page = $_POST['total_page'];
    $page_no = $_POST['page_no'];
    
    if($page_no<1)
    { $page_no =1; }
    else if ( $page_no>$total_page) 
    { $page_no = $total_page; }
    
    $limit = "LIMIT ".($page_no-1)*$request_per_page .", ".$request_per_page;

    $query = "SELECT id,name,province,telephone,post_code,salary FROM users WHERE deleted_at is null ".$limit;
    $records = mysqli_query($conn,$query);
    $dataString = "";
    while ($row=mysqli_fetch_assoc($records))
       {
        $id = $row['id'];
        $name = $row['name'];
        $province = $row['province'];
        $telephone = $row['telephone'];
        $post_code = $row['post_code'];
        $salary = $row['salary'];
           
        $dataString .= $id .'|'. $name .'|'. $province .'|'. $telephone .'|'. $post_code .'|'. $salary .';;';
       }
    mysqli_close($conn);
    
    echo $dataString; 
    
} // end if(isset($_POST['page_no']))
       
?>