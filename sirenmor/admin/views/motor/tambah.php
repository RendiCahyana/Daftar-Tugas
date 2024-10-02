<h4>Tambah Data</h4>
<hr>
<form action="index.php?mod=tugas&page=save" method="POST">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">ID Tugas</label>
            <input type="text" name="id_tugas" class="form-control" value="<?=(isset($_POST['id_tugas']))?$_POST['id_tugas']:'';?>">
        </div>
        <div class="form-group">
            <label for="">Matakuliah</label>
            <input type="text" name="matkul" class="form-control" value="<?=(isset($_POST['matkul']))?$_POST['matkul']:'';?>">
        </div>
        <div class="form-group">
            <label for="">Tenggat</label>
            <input type="date" name="tenggat" class="form-control" value="<?=(isset($_POST['tenggat']))?$_POST['tenggat']:'';?>">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Status</label>
            <input type="text" name="status" class="form-control" value="<?=(isset($_POST['status']))?$_POST['status']:'';?>">
        </div>
        <button type="submit" class="btn btn-default btn-primary">Save</button>
    </div>
</form>