<!-- Modal -->
<div class="modal fade" id="view_ticket_model" tabindex="-1" role="dialog" aria-labelledby="createTicket"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Ticket</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('editTicket') }}" method="POST" id="edit-ticket"
                  onsubmit="submitFormAndCloseModal()">
                @csrf
                <input type="hidden" name="ticketId" id="ticketId" value="">
                <div class="modal-body">
                    <div class="card-block">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Subject</label>
                            <div class="col-sm-10">
                                <input type="text" id="ticketSub" class="form-control" value="" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Department</label>
                            <div class="col-sm-10">
                                <input type="text" id="ticketDep" class="form-control" value="" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Message</label>
                            <div class="col-sm-10">
                                <textarea rows="5" id="ticketMsg" cols="5" class="form-control" readonly></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Reply</label>
                            <div class="col-sm-10">
                                <textarea rows="5" name="reply" id="ticketReply" cols="5" class="form-control"
                                          required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10 mt-2">
                                <input class="ml-2" type="radio" id="ticket_status" name="status"
                                       value="1"> Open
                                <input class="ml-2" type="radio" id="ticket_status" name="status"
                                       value="0"> Close
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-radius-10" data-dismiss="modal">Close</button>
                    {!! Form::submit('Update', ['class' => 'btn btn-primary ml-2']) !!}
                </div>
            </form>
        </div>
    </div>
</div>
@push('javascripts')
    <script type="text/javascript">
        $(document).ready(function () {
            // Event listener for form submit
            $(document).on('submit', '#edit-ticket', function (event) {
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

                        // Hide the modal after successful update
                        $('#view_ticket_model').modal('hide');

                        // Reload the DataTable
                        var table = $('#ticket-table').DataTable();
                        table.ajax.reload(null, false);
                        toastr.success('Successfully Updated');
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    },
                    error: function (xhr, status, error) {
                        // Handle the error if necessary
                        console.log(xhr.responseText);
                    }
                });
            });
        });

    </script>
@endpush
