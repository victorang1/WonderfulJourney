@if (session('success'))
    <div class="row fixed-bottom justify-content-end mr-3 mb-3">
        <div class="col-2 alert alert-success">
            {{ session('success') }}
        </div>
    </div>
@endif