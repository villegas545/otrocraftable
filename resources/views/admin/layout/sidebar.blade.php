<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/tablas') }}"><i class="nav-icon icon-energy"></i> {{ trans('admin.tabla.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/productos') }}"><i class="nav-icon icon-diamond"></i> {{ trans('admin.producto.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/alumnos') }}"><i class="nav-icon icon-flag"></i> {{ trans('admin.alumno.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/antunas') }}"><i class="nav-icon icon-diamond"></i> {{ trans('admin.antuna.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
