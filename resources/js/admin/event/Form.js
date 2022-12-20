import AppForm from '../app-components/Form/AppForm';

Vue.component('event-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  '' ,
                start:  '' ,
                end:  '' ,
                
            }
        }
    }

});