<!-- Modal -->
<div class="modal fade" id="ticket_model" tabindex="-1" role="dialog" aria-labelledby="createTicket"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Ticket</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('saveTicket') }}" method="POST" id="save-ticket">
                @csrf
                <div class="modal-body">
                    <div class="card-block">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Subject</label>
                            <div class="col-sm-10">
                                <input type="text" name="subject" class="form-control" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Department</label>
                            <div class="col-sm-10">
                                <select name="help_department_id" class="form-control" required>
                                    @foreach($departments as $department)
                                        <option value="{{$department->id}}">{{$department->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Message</label>
                            <div class="col-sm-10">
                                <textarea rows="5" name="message" cols="5" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10 mt-2">
                                <input class="ml-2" type="radio" id="ticket_status_open" name="status"
                                       value="1" checked> Open
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-radius-10" data-dismiss="modal">Close</button>
                {!! Form::submit('Create Ticket', ['class' => 'btn btn-primary ml-2']) !!}
            </form>
        </div>
    </div>
</div>
</div>
@push('javascripts')
    <script type="text/javascript">
        $(document).ready(function () {
            // Event listener for form submit
            $(document).on('submit', '#save-ticket', function (event) {
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

                        // Hide the modal after successful ticket creation
                        $('#ticket_model').modal('hide');

                        // Reload the DataTable
                        var table = $('#ticket-table').DataTable();
                        table.ajax.reload(null, false);
                        toastr.success('Ticket Created');
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    },
                    error: function (xhr, status, error) {
                        // Handle the error if necessary
                        console.log(xhr.responseText);

                        // Show an error message (you can use toastr or any other method)
                        alert('Ticket creation failed');
                    }
                });
            });
        });

    </script>
@endpush
