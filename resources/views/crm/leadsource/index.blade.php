<div class="card">
    <div class="card-body">
        {{-- <h4 class="header-title">Personal Preference</h4> --}}
        @include('crm.common.common_add_btn')

        <div class="table-responsive">
            <table class="table table-centered w-100 dt-responsive nowrap" id="company-subscriptions-datatable">
                <thead class="table-light">
                    <tr>
                        <th class="all" style="width: 20px;">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                            </div>
                        </th>
                        <th class="all">Subscription</th>
                        <th>Company</th>
                        <th>StartAt</th>
                        <th>EndAt</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th data-orderable="false" style="width: 80px;">Action</th>
                    </tr>
                </thead>
                
            </table>
        </div>
   
    </div>  <!-- end card-body -->
</div>  <!-- end card -->

<!-- third party js -->
    <script src="{{ asset('assets/js/vendor/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/dataTables.checkboxes.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/pages/demo.products.js') }}"></script> --}}
    <script>
        $(document).ready(function(){
            "use strict";
        
        const roletable = $('#leadsource-datatable').DataTable( {
            
            "processing"    : true,
            "serverSide"    : true,
            "ajax"          : {
                "url"       : "<?= route( 'leadsource.list' ); ?>",
                "dataType"  : "json",
                "type"      : "POST",
                "data"      : { "_token" : "<?=csrf_token();?>" }
            },
            "columns"       : [
                {"data" : "id"},
                {"data" : "source"},
                {"data" : "status" },
                {"data" : "action" },
            ],
            "pageLength":25,
            
            
        } );
    });

    function ReloadDataTableModal(id) {
        var roletable = $('#'+id).DataTable();
        roletable.ajax.reload();
    }

    </script>