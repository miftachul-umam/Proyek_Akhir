import AppForm from '../app-components/Form/AppForm';

Vue.component('dosen-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                
            }
        }
    }

});