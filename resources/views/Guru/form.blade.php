

<div class="form-group col-6">
    <label>Nama Guru</label>
    <input type="text" name="nama" class="form-control input-flat" placeholder="" value="" />
    <span class="text-danger">{{ $errors->first('nama')}}</span>
</div>

<div class="form-group col-6">
    <label>Sekolah</label>
    <select type="text" name="id_sekolah" class="form-control input-flat" placeholder="">
        <option value="">Pilih Sekolah</option>
    
    </select>
    <span class="text-danger">{{ $errors->first('tingkat')}}</span>
</div>

<div class="form-group col-6">
    <label>Alamat</label>
    <!-- <input type="text" name="alamat" class="form-control input-flat" placeholder="" value=""> -->
    <textarea name="alamat"  class="form-control input-flat" id="" rows="5"></textarea>
    <span class="text-danger">{{$errors->first('alamat')}}</span>
</div>
<div class="form-group col-6">
    <label>No Telp</label>
    <input type="text" name="notelp" class="form-control input-flat" placeholder="" value="">
    <span class="text-danger">{{$errors->first('notelp')}}</span>
</div>