<div class="modal-dialog modal-lg modal-right">
<link href="{{ asset('assets/css/vendor/simplemde.min.css') }}" rel="stylesheet" type="text/css" />

    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myLargeModalLabel">{{ $modal_title }}</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex justify-content-center align-items-center h-100 p-3">
            <div class="w-100">
                <div class="row">
                    <div class="col-12" id="error">
                    </div>
                </div>
                <form class="form-horizontal modal-body" id="tasks-form" method="POST" action="{{ route('tasks.save') }}" autocomplete="off">
                    @csrf
                    <input type="hidden" name="id" value="{{ $id ?? '' }}">
                    <div class="row mb-3">
                        <label for="task_name" class="col-4 col-form-label">Task Name <span class="text-danger">*</span></label>
                        <div class="col-8">
                            <input type="text" name="task_name" id="task_name" class="form-control" value="{{ $info->task_name ?? '' }}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="assigned_to" class="col-4 col-form-label">Assigned To<span class="text-danger">*</span></label>
                        <div class="col-8">
                            <select name="assigned_to" id="assigned_to" class="form-control" required>
                                <option value="">--select</option>
                                @if(isset($users) && !empty($users))
                                    @foreach ($users as $item)
                                        <option value="{{ $item->id }}" @if(isset($info->assigned_to) && $info->assigned_to == $item->id ) selected @endif>{{$item->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="description" class="col-4 col-form-label"> Description </label>
                        <div class="col-8">
                            <textarea name="description" class="form-control" id="description" cols="30" rows="3">{{ $info->description ?? '' }}</textarea>
                        </div>
                    </div>
                    {{-- <div class="row mb-3">
                        <label for="description" class="col-4 col-form-label"> Task Time </label>
                        <div class="mb-3 col-8">
                            <input type="text" name="task_time" class="form-control date" id="datetimepicker1" >
                            <input type="text" id="datepicker">
                        </div>
                    </div> --}}

                    <div class="row mb-3">
                        <label for="description" class="col-4 col-form-label">Status</label>
                        <!-- Success Switch-->
                        <div class="col-8">
                            <input type="checkbox" name="status" id="switch3" {{ (isset($info->status) && $info->status == '1' )  ? 'checked' : '' }} data-switch="success"/>
                            <label for="switch3" data-on-label="" data-off-label=""></label>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col-12 text-end">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal" aria-label="Close"> Cancel</button>
                            <button type="submit" class="btn btn-info" id="save">Save</button>
                        </div>
                    </div>
                </form> 
            </div>
            
        </div>
    </div><!-- /.modal-content -->
</div>
<script src="{{ asset('assets/js/vendor/simplemde.min.js') }}"></script>
    <!-- SimpleMDE demo -->
    <script src="{{ asset('assets/js/pages/demo.simplemde.js') }}"></script>
<script>
    
    $('textarea').each(function() {
        var simplemde = new SimpleMDE({
            element: this,
        });
    });
   
        $("#tasks-form").validate({
            submitHandler:function(form) {
                $.ajax({
                    url: form.action,
                    type: form.method,
                    data: $(form).serialize(),
                    beforeSend: function() {
                        $('#error').removeClass('alert alert-danger');
                        $('#error').html('');
                        $('#error').removeClass('alert alert-success');
                        $('#save').html('Loading...');
                    },
                    success: function(response) {
                        $('#save').html('Save');
                        if(response.error.length > 0 && response.status == "1" ) {
                            $('#error').addClass('alert alert-danger');
                            response.error.forEach(display_errors);
                        } else {
                            $('#error').addClass('alert alert-success');
                            response.error.forEach(display_errors);
                            setTimeout(function(){
                                $('#Mymodal').modal('hide');
                            },100);
                            ReloadDataTableModal('tasks-datatable');
                        }
                    }            
                });
            }
        });

        
</script>

@section('add_on_script')
    <script>
        $(function () {
            $('#datetimepicker1').datetimepicker();
        });
    </script>
@endsection