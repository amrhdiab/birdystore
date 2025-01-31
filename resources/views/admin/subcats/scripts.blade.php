@section('vendors')
    <!-- Datatables -->
    <script src="{{asset('vendors/datatables/DataTables-1.10.18/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendors/datatables/DataTables-1.10.18/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('vendors/datatables/Responsive-2.2.2/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('vendors/datatables/Responsive-2.2.2/js/responsive.bootstrap.min.js')}}"></script>
    <script src="{{asset('vendors/toastr/toastr.min.js')}}"></script>
@endsection

@section('scripts')
    {{--Setup ajax--}}
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#subcategories_table').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": true,
                responsive: true,
                "ajax": "{{route('subcategories.fetch')}}",
                "columns": [
                    {"data": "checkboxes", orderable: false, searchable: false},
                    {"data": "featured_image", orderable: false, searchable: false},
                    {"data": "name"},
                    {"data": "parent_category"},
                    {"data": "created_at",searchable: false},
                    {"data": "actions", orderable: false, searchable: false}
                ],
                order: [[4, 'desc']]
            });

            $('#add_data').on('click', function () {
                $.ajax({
                    url: '{{route('getAllCategories')}}',
                    type: 'GET',
                    success:function (data) {
                        $('#subcat_modal').modal('show');
                        $('#subcat_form')[0].reset();
                        $('#form_output').html('');
                        $('.modal-title').text('Add New Sub Category');
                        $('#main_category').html(data);
                        $('#form_action').val('insert');
                        $('#submit').val('Submit');
                    }
                });

            });

            $('#subcat_form').on('submit', function (event) {
                event.preventDefault();
                var action = $('#form_action').val();
                var form_data = new FormData($('#subcat_form')[0]);
                $.ajax({
                    url: '{{route('sub_categories.store')}}',
                    type: 'POST',
                    data: form_data,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function (data) {
                        if (data.error.length > 0) {
                            var error_html = '';
                            data.error.forEach(function (error) {
                                error_html += "<div class='alert alert-danger'>" + error + "</div>";
                            });
                            $('#form_output').html(error_html);
                            toastr.error('Validation error', 'Error!', {timeOut: 1500});
                        } else {
                            $('#form_output').html('');
                            $('#subcat_form')[0].reset();
                            $('.modal-title').text('Add New Sub Category');
                            $('#form_action').val('insert');
                            $('#submit').val('Submit');
                            $('#subcat_modal').modal('hide');
                            $('#subcategories_table').DataTable().ajax.reload();
                            if (action == 'insert') {
                                toastr.success('Created Subcategory successfully.', 'Success!', {timeOut: 1500});
                            }
                            if (action == 'update') {
                                toastr.success('Updated Subcategory successfully.', 'Success!', {timeOut: 1500});
                            }
                        }
                    }
                });
            });

            $(document).on('click', '.edit', function () {
                var id = $(this).attr('id');
                $('#form_output').html('');
                $.ajax({
                    url: '{{route('subcategories.fetch.single')}}',
                    type: 'GET',
                    data: {id: id},
                    dataType: 'json',
                    success: function (data) {
                        $('#name').val(data.info.name);
                        $('#main_category').html(data.main_category);
                        $('#subcat_id').val(id);
                        $('#form_action').val('update');
                        $('.modal-title').text('Edit Sub Category');
                        $('#submit').val('Update');
                        $('#subcat_modal').modal('show');
                    }
                });
            })

            $(document).on('click', '.delete', function () {
                var id = $(this).attr('id');
                if (confirm('Are you sure you want to delete the Subcategory?')) {
                    $.ajax({
                        url: '{{route('subcategories.remove')}}',
                        type: 'DELETE',
                        data: {id: id},
                        success: function (data) {
                            toastr.success('Deleted Subcategory successfully.', 'Success!', {timeOut: 1500})
                            $('#subcategories_table').DataTable().ajax.reload();
                        }
                    });
                } else {
                    return false;
                }
            });

            $(document).on('click', '#bulk_delete', function () {
                var id = [];
                $('.subcategory_checkbox:checked').each(function () {
                    id.push($(this).val());
                });
                if (id.length > 0) {
                    if (confirm('Are you sure you want to delete selected data?')) {

                        $.ajax({
                            url: '{{route('subcategories.remove.bulk')}}',
                            type: 'DELETE',
                            data: {id: id},
                            success: function (data) {
                                console.log(data);
                                toastr.success('Deleted data successfully.', 'Success!', {timeOut: 1500})
                                $('#subcategories_table').DataTable().ajax.reload();
                            }
                        });
                    } else {
                        return false;
                    }
                } else {
                    alert('Please select data to delete.');
                }
            });

            $(document).on('click', '.view', function () {
                var id = $(this).attr('id');
                $.ajax({
                    url: '{{route('subcategories.view')}}',
                    data: {id: id},
                    type: 'GET',
                    success: function (data) {
                        console.log(data);
                        $('#subcat_view_modal').modal('show');
                        $('.modal-title').text('View Sub Category');
                        $('#featured_image_container').html('<img src="{{asset('/storage/subcategories')}}/' + data.featured_image + '" style="width: 400px; height: 264px; display:block; margin:auto">');
                        $('#info').html(data.info);
                    }
                });
            });

        });
    </script>
@endsection