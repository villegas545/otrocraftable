<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Nombre'), 'has-success': fields.Nombre && fields.Nombre.valid }">
    <label for="Nombre" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.antuna.columns.Nombre') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Nombre" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Nombre'), 'form-control-success': fields.Nombre && fields.Nombre.valid}" id="Nombre" name="Nombre" placeholder="{{ trans('admin.antuna.columns.Nombre') }}">
        <div v-if="errors.has('Nombre')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Nombre') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Apellido'), 'has-success': fields.Apellido && fields.Apellido.valid }">
    <label for="Apellido" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.antuna.columns.Apellido') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Apellido" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Apellido'), 'form-control-success': fields.Apellido && fields.Apellido.valid}" id="Apellido" name="Apellido" placeholder="{{ trans('admin.antuna.columns.Apellido') }}">
        <div v-if="errors.has('Apellido')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Apellido') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Nacimiento'), 'has-success': fields.Nacimiento && fields.Nacimiento.valid }">
    <label for="Nacimiento" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.antuna.columns.Nacimiento') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.Nacimiento" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('Nacimiento'), 'form-control-success': fields.Nacimiento && fields.Nacimiento.valid}" id="Nacimiento" name="Nacimiento" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('Nacimiento')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Nacimiento') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Edad'), 'has-success': fields.Edad && fields.Edad.valid }">
    <label for="Edad" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.antuna.columns.Edad') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Edad" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Edad'), 'form-control-success': fields.Edad && fields.Edad.valid}" id="Edad" name="Edad" placeholder="{{ trans('admin.antuna.columns.Edad') }}">
        <div v-if="errors.has('Edad')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Edad') }}</div>
    </div>
</div>


