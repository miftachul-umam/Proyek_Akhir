<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nim'), 'has-success': fields.nim && fields.nim.valid }">
    <label for="nim" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.emboh.columns.nim') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nim" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nim'), 'form-control-success': fields.nim && fields.nim.valid}" id="nim" name="nim" placeholder="{{ trans('admin.emboh.columns.nim') }}">
        <div v-if="errors.has('nim')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nim') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nama'), 'has-success': fields.nama && fields.nama.valid }">
    <label for="nama" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.emboh.columns.nama') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nama" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nama'), 'form-control-success': fields.nama && fields.nama.valid}" id="nama" name="nama" placeholder="{{ trans('admin.emboh.columns.nama') }}">
        <div v-if="errors.has('nama')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nama') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('umur'), 'has-success': fields.umur && fields.umur.valid }">
    <label for="umur" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.emboh.columns.umur') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.umur" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('umur'), 'form-control-success': fields.umur && fields.umur.valid}" id="umur" name="umur" placeholder="{{ trans('admin.emboh.columns.umur') }}">
        <div v-if="errors.has('umur')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('umur') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('alamat'), 'has-success': fields.alamat && fields.alamat.valid }">
    <label for="alamat" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.emboh.columns.alamat') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.alamat" v-validate="'required'" id="alamat" name="alamat"></textarea>
        </div>
        <div v-if="errors.has('alamat')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('alamat') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('kota'), 'has-success': fields.kota && fields.kota.valid }">
    <label for="kota" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.emboh.columns.kota') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.kota" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('kota'), 'form-control-success': fields.kota && fields.kota.valid}" id="kota" name="kota" placeholder="{{ trans('admin.emboh.columns.kota') }}">
        <div v-if="errors.has('kota')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('kota') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('kelas'), 'has-success': fields.kelas && fields.kelas.valid }">
    <label for="kelas" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.emboh.columns.kelas') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.kelas" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('kelas'), 'form-control-success': fields.kelas && fields.kelas.valid}" id="kelas" name="kelas" placeholder="{{ trans('admin.emboh.columns.kelas') }}">
        <div v-if="errors.has('kelas')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('kelas') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('jurusan'), 'has-success': fields.jurusan && fields.jurusan.valid }">
    <label for="jurusan" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.emboh.columns.jurusan') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.jurusan" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('jurusan'), 'form-control-success': fields.jurusan && fields.jurusan.valid}" id="jurusan" name="jurusan" placeholder="{{ trans('admin.emboh.columns.jurusan') }}">
        <div v-if="errors.has('jurusan')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('jurusan') }}</div>
    </div>
</div>

