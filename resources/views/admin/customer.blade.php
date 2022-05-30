@extends('layouts.dashboard')
@section('content')
    <h2>Customer</h2>
    <br>
    <button class="btn btn-sm btn-primary" onclick="create()">Customer +</button>
    <br>
    <hr>
    <div class="content-table" id="table-content" class="mt-3">
    </div>

    <ul id="pagination" class="pagination-sm"></ul>
    <ul id="pagination" class="pagination-sm"></ul>
    </div>
@endsection
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="content" class="p-2 ">

                </div>
            </div>
        </div>
    </div>
</div>
<meta name="csrf-token" content="{{ csrf_token() }}" />
@push('scripts')
    <script>
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $(document).ready(function() {
            fetchData()
        });

        function fetchData() {
            $.get("{{ route('customer.fetch') }}", function(data, status) {
                
                $('#table-content').html(data);
            });
        }

        function create() {
            $.get("{{ route('customer.create') }}", function(data, status) {
                $('#content').html(data);
                $('#exampleModal').modal('show');
            });
        }

        function store() {
            var firstname = $('#first_name').val();
            var lastname = $('#last_name').val();
            var address = $('#address').val();
            var phone = $('#phone').val();

            $.ajax({
                type: "post",
                url: "{{ route('customer.store') }}",
                data: {
                    _token: CSRF_TOKEN,
                    first_name: firstname,
                    last_name: lastname,
                    address: address,
                    phone: phone
                },
                success: function(response) {
                    $('#exampleModal').modal('hide');
                    fetchData();
                    console.log(response);
                }
            });
        }

        //detail
        function show(id) {
            
            $.get("{{ url('customer')}}/"+id, function(data, status) {
                $('#content').html(data);
                $('#exampleModal').modal('show');
            });
        }

        //edit
        function edit(id) {
            
            $.get("{{ url('customer')}}/"+id+"/edit", function(data, status) {
                $('#content').html(data);
                $('#exampleModal').modal('show');
            });
        }

        //update
        function update(id) {
            var firstname = $('#first_name').val();
            var lastname = $('#last_name').val();
            var address = $('#address').val();
            var phone = $('#phone').val();

            $.ajax({
                type: "post",
                url: "{{ url('customer') }}"+'/'+id,
                data: {
                    _token: CSRF_TOKEN,
                    _method: 'PUT',
                    first_name: firstname,
                    last_name: lastname,
                    address: address,
                    phone: phone
                },
                success: function(response) {
                    $('#exampleModal').modal('hide');
                    fetchData();
                    console.log(response);
                }
            });
        }
    </script>
@endpush
