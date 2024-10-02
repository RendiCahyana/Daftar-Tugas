<div class="row">
    <div class="pull-left">
        <h4>Daftar Tugas</h4>
    </div>
    <div class="pull-right">
        <a href="index.php?mod=tugas&page=add">
            <button class="btn btn-primary">Add</button>
        </a>
    </div>
</div>
<div class="row">
    <table class="table">
        <thead>
            <tr>
                <td>
                    ID
                </td>
                <td>Matkul</td>
                <td>Tenggat</td>
                <td>Status</td>
            </tr>
        </thead>
        <tbody>
            <?php
                if ($tugas != null) {
                    $no=1;
                    foreach ($tugas as $row) { ?>
                        <tr>
                            <td><?=$row['id_tugas']?></td>
                            <td><?=$row['matkul']?></td>
                            <td><?=$row['tenggat']?></td>
                            <td><?=$row['status']?></td>
                            <td>
                                <a href="index.php?mod=tugas&page=edit&id=<?=md5($row['id_tugas'])?>"><i class="fa fa-pencil"></i></a>
                                <a href="index.php?mod=tugas&page=delete&id=<?=md5($row['id_tugas'])?>"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
            <?php   $no++;}
                }
            ?>
        </tbody>
    </table>
</div>