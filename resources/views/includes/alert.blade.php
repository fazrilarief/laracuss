<div id="alert" class="alert alert-success mb-0 rounded-0 d-none"
    @if (Session::has('notif_success')) style="display: block !important" @endif>
    <div class="container">
        @if (Session::has('notif_success'))
            {{ Session::get('notif_success') }}
        @endif
    </div>
</div>
