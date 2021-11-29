<?php
include ("koneksi.php");

if(isset($_POST['save'])) {
$query_input=mysqli_query($koneksi,"insert into input_cuti_karyawan(nik,nama,jabatan,bagian,keterangan_cuti,pengajuan_cuti,sisa_cuti)
values (
'".$_POST['nik']."',
'".$_POST['nama']."',
'".$_POST['jabatan']."',
'".$_POST['bagian']."',
'".$_POST['keterangan_cuti']."',
'".$_POST['pengajuan_cuti']."',
'".$_POST['sisa_cuti']."')");

if($query_input){
header('location:view_cuti_karyawan.php');
}else{
    echo mysqli_error();
}
}
?>
<form method="POST">
<table class="table table-bordered" border="1">
    <tr>
        <td>nik</td>
        <td><input type="text" name="nik" class="form-control"></td>
    </tr>
    <tr>
        <td>nama</td>
        <td><input type="text" name="nama" class="form-control"></td>
    </tr>
    <tr>
        <td>jabatan</td>
        <td><input type="text" name="jabatan" class="form-control"></td>
    </tr>
    <tr>
        <td>bagian</td>
        <td><input type="text" name="bagian" class="form-control"></td>
    </tr>
    <tr>
        <td>keterangan_cuti</td>
        <td><input type="text" name="keterangan_cuti" class="form-control"></td>
    </tr>
    <tr>
        <td>pengajuan_cuti</td>
        <td><input type="text" name="pengajuan_cuti" class="form-control"></td>
    </tr>
    <tr>
        <td>sisa_cuti</td>
        <td><input type="text" name="sisa_cuti" class="form-control"></td>
    </tr>
    <tr>
        <td><input type="submit" name="save" class="btn btn-danger"></td>
    </tr>
    </tr>
        <button><a href="view_cuti_karyawan.php">TAMPILKAN DATA</a></button>
    </tr>
</table>
</form>