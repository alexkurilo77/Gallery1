<?php 
$db=array(
	'host' => 'localhost',
	'name' => 'root',
	'pass' => '',
	'db_name' => 'slabel_gallery'
	);
$conn = mysqli_connect($db['host'], $db['name'], $db['pass']);
// echo '<pre>';
// var_dump($conn);
initialize_db($conn,$db);
initialize_tables($conn);

function initialize_db($conn,$db){
    mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS {$db['db_name']}");
    mysqli_select_db($conn,$db['db_name']);
}

function initialize_tables($conn){
    mysqli_query($conn,
        "CREATE TABLE IF NOT EXISTS images(
            id INT AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(50),
            path VARCHAR(200),
            description TEXT,
            category_id INT
        )");
    mysqli_query($conn,
        "CREATE TABLE IF NOT EXISTS categories(
            id INT AUTO_INCREMENT PRIMARY KEY,
            category VARCHAR(50)
        )");
    mysqli_query($conn,
        "CREATE TABLE IF NOT EXISTS hashtags(
            id INT AUTO_INCREMENT PRIMARY KEY,
            tag VARCHAR(50)
        )");
    mysqli_query($conn,
        "CREATE TABLE IF NOT EXISTS i_d(
            image_id INT,
            tag_id INT
        )");
}

// $image= $_FILES['image'];
// echo $image['tmp_name'];
// echo '<br>';

function save_image($image){
    $tmp_name=tempnam('public','img');
    copy($image['tmp_name'],$tmp_name);
    // echo $tmp_name;
    // echo '<br>';
    return $tmp_name;
}
if (isset($_FILES['image'])&&$_FILES['image']['error']=='') 
    save_image($_FILES['image']);

// save_image($image);
function insert_path_image($tmp_name){
    $new_tmp = str_replace ('\\', '/', str_replace(getcwd(), '', $tmp_name));
    return $new_tmp;
}
echo insert_path_image($tmp_name);
// echo '<br>';

 function insert_image($conn){
    mysqli_query($conn,
        "INSERT INTO images ( titlle, path, description, category_id)
         VALUES ( TRUE, TRUE, TRUE, TRUE)            
        ");
}
// echo insert_image($conn);
// echo '<br>';


 ?>