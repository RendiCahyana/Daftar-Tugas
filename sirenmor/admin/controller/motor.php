<?php
include_once '../config/Config.php';
$con = new Config();

$con->auth();
$conn=$con->koneksi();
switch (@$_GET ['page']) {
    case 'add':
        $content="views/motor/tambah.php";
        include_once 'views/template.php';
        break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $id_tugas=$_SESSION['login']['id'];
            if(!empty($_POST['id_tugas'])){
                $sql = "UPDATE tugas SET matkul = '$_POST[matkul]', tenggat ='$_POST[tenggat]',status = '$_POST[status]' WHERE md5(id_tugas)='$_POST[id_tugas]'";
            } else {
                $sql="INSERT INTO tugas (matkul, tenggat,status)
                VALUES ('$_POST[matkul]','$_POST[tenggat]','$_POST[status]')";
            }
            if($conn->query($sql)==TRUE) {
                header('Location: '.$con->site_url().'/admin/index.php?mod=tugas');
            } else {
                $err['msg']="Error: ". $sql . "<br>" . $conn->error;
            }
        } else {
            $err['msg']="Tidak diijinkan";
        }
        if (isset($err)){
            $content="views/motor/tambah.php";
            include_once 'views/template.php';
        break;
        }
        break;
    case 'edit':
        $tugas="SELECT* FROM tugas WHERE md5(id_tugas)='$_GET[id]'";
        $tugas=$conn->query($tugas);
        $_POST=$tugas->fetch_assoc();
        $_POST['id_tugas']=md5($_POST['id_tugas']);
        $content="views/motor/tambah.php";
        include_once 'views/template.php';
        break;
    case 'delete':
        $tugas ="DELETE FROM tugas WHERE md5(id_tugas)='$_GET[id]'";
        $tugas=$conn->query($tugas);
        header('Location: '.$con->site_url().'/admin/index.php?mod=tugas');
        break;
    default:
        $sql="SELECT* FROM tugas";
        $tugas=$conn->query($sql);
        $conn->close();
        $content="views/motor/tampil.php";
        include_once 'views/template.php';
}
?>