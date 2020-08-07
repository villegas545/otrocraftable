@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.antuna.actions.edit', ['name' => $antuna->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <antuna-form
                :action="'{{ $antuna->resource_url }}'"
                :data="{{ $antuna->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.antuna.actions.edit', ['name' => $antuna->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.antuna.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </antuna-form>

        </div>
    
</div>

@endsection