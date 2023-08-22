<!-- Modal -->
<div class="modal fade" id="edit_duplicate_model" tabindex="-1" role="dialog" aria-labelledby="createTicket"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Member Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('editMember') }}" method="POST" id="edit-member">
                @csrf
                <div class="modal-body">
                    <div class="card-block">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Member ID</label>
                            <div class="col-sm-9">
                                <input type="text" name="member_id" id="member_id" class="form-control" value=""
                                       readonly>
                                <span class="text-danger"
                                      id="member_id-error"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="member_name" id="member_name" class="form-control" value=""
                                       required>
                                <span class="text-danger"
                                      id="member_name-error"></span>
                            </div>
                        </div>
                        <div class="overlay" id="overlay">
                            <div class="spinner"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Home</label>
                            <div class="col-sm-9">
                                <input type="text" name="home" id="home" class="form-control" value="" required>
                                <span class="text-danger"
                                      id="home-error"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Office</label>
                            <div class="col-sm-9">
                                <input type="text" name="office" id="office" class="form-control" value="" required>
                                <span class="text-danger"
                                      id="office-error"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Whatsapp</label>
                            <div class="col-sm-9">
                                <input type="text" name="whatsapp" id="whatsapp" class="form-control" value="" required>
                                <span class="text-danger"
                                      id="whatsapp-error"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-radius-10" data-dismiss="modal"
                            id="close-button">Close
                    </button>
                    {!! Form::submit('Update', ['class' => 'btn btn-primary ml-2' ,'id' => 'update-button']) !!}
                </div>
            </form>
        </div>
    </div>
</div>
@push('javascripts')
    <script type="text/javascript">
        $(document).ready(function () {
            // Event listener for form submit
            $(document).on('submit', '#edit-member', function (event) {
                event.preventDefault(); // Prevent default form submission

                var form = $(this);
                var formData = form.serialize();
                var url = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: url,
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        $('#overlay').show();
                        $('.spinner').show();
                        $('#update-button').prop('disabled', true);
                        $('#close-button').prop('disabled', true);
                        $('#edit-member').modal('hide');
                        toastr.success('Successfully Updated');
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    },
                    error: function (xhr, status, error) {
                        if (xhr.status === 422) {
                            var response = JSON.parse(xhr.responseText);
                            var errors = response.errors;
                            $.each(errors, function (field, errorMessages) {
                                var inputField = $('[name="' + field + '"]');
                                console.log(inputField);
                                $.each(errorMessages, function (index, errorMessage) {
                                    $('#' + field + '-error').text(errorMessage).focus();
                                });
                            });
                        } else {
                            console.log('AJAX request error:', error);
                        }
                        // Handle the error if necessary
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>
@endpush
