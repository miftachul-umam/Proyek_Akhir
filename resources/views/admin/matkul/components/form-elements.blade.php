<div class="form-group row align-items-center" :class="{'has-danger': errors.has('kode_matkul'), 'has-success': fields.kode_matkul && fields.kode_matkul.valid }">
    <label for="kode_matkul" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.matkul.columns.kode_matkul') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.kode_matkul" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('kode_matkul'), 'form-control-success': fields.kode_matkul && fields.kode_matkul.valid}" id="kode_matkul" name="kode_matkul" placeholder="{{ trans('admin.matkul.columns.kode_matkul') }}">
        <div v-if="errors.has('kode_matkul')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('kode_matkul') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('matkul'), 'has-success': fields.matkul && fields.matkul.valid }">
    <label for="matkul" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.matkul.columns.matkul') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.matkul" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('matkul'), 'form-control-success': fields.matkul && fields.matkul.valid}" id="matkul" name="matkul" placeholder="{{ trans('admin.matkul.columns.matkul') }}">
        <div v-if="errors.has('matkul')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('matkul') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('sks'), 'has-success': fields.sks && fields.sks.valid }">
    <label for="sks" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.matkul.columns.sks') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.sks" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('sks'), 'form-control-success': fields.sks && fields.sks.valid}" id="sks" name="sks" placeholder="{{ trans('admin.matkul.columns.sks') }}">
        <div v-if="errors.has('sks')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('sks') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('dosen_pengampu'), 'has-success': fields.dosen_pengampu && fields.dosen_pengampu.valid }">
    <label for="dosen_pengampu" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.matkul.columns.dosen_pengampu') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.dosen_pengampu" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('dosen_pengampu'), 'form-control-success': fields.dosen_pengampu && fields.dosen_pengampu.valid}" id="dosen_pengampu" name="matkul" placeholder="{{ trans('admin.matkul.columns.dosen_pengampu') }}">
        <div v-if="errors.has('dosen_pengampu')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('dosen_pengampu') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('kelas'), 'has-success': fields.kelas && fields.kelas.valid }">
    <label for="kelas" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.matkul.columns.kelas') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.kelas" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('kelas'), 'form-control-success': fields.kelas && fields.kelas.valid}" id="kelas" name="matkul" placeholder="{{ trans('admin.matkul.columns.kelas') }}">
        <div v-if="errors.has('kelas')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('kelas') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('hari'), 'has-success': fields.hari && fields.hari.valid }">
    <label for="hari" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.matkul.columns.hari') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.hari" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('hari'), 'form-control-success': fields.hari && fields.hari.valid}" id="hari" name="hari" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('hari')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('hari') }}</div>
    </div>
</div>


