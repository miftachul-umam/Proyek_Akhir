@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.matkul.actions.edit', ['name' => $matkul->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <matkul-form
                :action="'{{ $matkul->resource_url }}'"
                :data="{{ $matkul->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.matkul.actions.edit', ['name' => $matkul->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.matkul.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </matkul-form>

        </div>
    
</div>

@endsection