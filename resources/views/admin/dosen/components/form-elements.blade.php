<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nidn'), 'has-success': fields.nidn && fields.nidn.valid }">
    <label for="nidn" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('nidn') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nidn" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nidn'), 'form-control-success': fields.nidn && fields.nidn.valid}" id="nidn" name="nidn" placeholder="{{ trans('nidn') }}">
        <div v-if="errors.has('nidn')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nidn') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nama_dosen'), 'has-success': fields.nama_dosen && fields.nama_dosen.valid }">
    <label for="nama_dosen" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('nama_dosen') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nama_dosen" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nama_dosen'), 'form-control-success': fields.nama_dosen && fields.nama_dosen.valid}" id="nama_dosen" name="nama_dosen" placeholder="{{ trans('nama_dosen') }}">
        <div v-if="errors.has('nama_dosen')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nama_dosen') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('alamat'), 'has-success': fields.alamat && fields.alamat.valid }">
    <label for="alamat" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('alamat') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.alamat" v-validate="'required'" id="alamat" name="alamat"></textarea>
        </div>
        <div v-if="errors.has('alamat')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('alamat') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('kota'), 'has-success': fields.kota && fields.kota.valid }">
    <label for="kota" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('kota') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.kota" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('kota'), 'form-control-success': fields.kota && fields.kota.valid}" id="kota" name="kota" placeholder="{{ trans('kota') }}">
        <div v-if="errors.has('kota')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('kota') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('matkul_yang_diampu'), 'has-success': fields.matkul_yang_diampu && fields.matkul_yang_diampu.valid }">
    <label for="matkul_yang_diampu" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('matkul_yang_diampu') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.matkul_yang_diampu" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('matkul_yang_diampu'), 'form-control-success': fields.matkul_yang_diampu && fields.matkul_yang_diampu.valid}" id="matkul_yang_diampu" name="matkul_yang_diampu" placeholder="{{ trans('matkul_yang_diampu') }}">
        <div v-if="errors.has('matkul_yang_diampu')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('matkul_yang_diampu') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('jurusan'), 'has-success': fields.jurusan && fields.jurusan.valid }">
    <label for="jurusan" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('jurusan') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.jurusan" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('jurusan'), 'form-control-success': fields.jurusan && fields.jurusan.valid}" id="jurusan" name="jurusan" placeholder="{{ trans('jurusan') }}">
        <div v-if="errors.has('jurusan')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('jurusan') }}</div>
    </div>
</div>

