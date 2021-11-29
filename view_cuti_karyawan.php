<?php
include ("koneksi.php");
$query_view = mysqli_query($koneksi,"select * from input_cuti_karyawan");
?>
    </br>
    <a href="input_cuti_karyawan.php" class="btn btn-danger">Tambah Anggota</a>
    <table class="table table-bordered" border="1">
        <td>no</td>
        <td>nik</td>
        <td>nama</td>
        <td>jabatan</td>
        <td>bagian</td>
        <td>keterangan cuti</td>
        <td>pengajuan cuti</td>
        <td>sisa cuti</td>
    </tr>
    <?php
$no=1;
while ($tampil = mysqli_fetch_array($query_view)){ ?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $tampil['nik'];?></td>
        <td><?php echo $tampil['nama'];?></td>
        <td><?php echo $tampil['jabatan'];?></td>
        <td><?php echo $tampil['bagian'];?></td>
        <td><?php echo $tampil['keterangan_cuti'];?></td>
        <td><?php echo $tampil['pengajuan_cuti'];?></td>
        <td><?php echo $tampil['sisa_cuti'];?></td>
    </tr>
    <?php }?>
</table>