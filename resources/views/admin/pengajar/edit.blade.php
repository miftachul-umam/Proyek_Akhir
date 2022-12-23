@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.pengajar.actions.edit', ['name' => $pengajar->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <pengajar-form
                :action="'{{ $pengajar->resource_url }}'"
                :data="{{ $pengajar->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.pengajar.actions.edit', ['name' => $pengajar->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.pengajar.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </pengajar-form>

        </div>
    
</div>

@endsection