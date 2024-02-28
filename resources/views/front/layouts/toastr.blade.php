<script>

    // success message popup notification
    @php
        $success = Session::get('success');
    @endphp
    @if($success)
        toastr.success("{{ $success }}");
    @endif

    // info message popup notification
    @php
        $info = Session::get('info');
    @endphp
    @if($info)
        toastr.info("{{ $info }}");
    @endif

    // warning message popup notification
    @php
        $warning = Session::get('warning');
    @endphp
    @if($warning)
        toastr.warning("{{ $warning }}");
    @endif

    // error message popup notification
    @php
        $error = Session::get('error');
    @endphp
    @if($error)
        toastr.error("{{ $error }}");
    @endif

</script>