import AppForm from '../app-components/Form/AppForm';

Vue.component('antuna-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                Nombre:  '' ,
                Apellido:  '' ,
                Nacimiento:  '' ,
                Edad:  '' ,
                
            }
        }
    }

});