import AppForm from '../app-components/Form/AppForm';

Vue.component('umam-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                nim:  '' ,
                nama:  '' ,
                umur:  '' ,
                alamat:  '' ,
                kota:  '' ,
                kelas:  '' ,
                jurusan:  '' ,
                
            }
        }
    }

});