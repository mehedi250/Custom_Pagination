@if(Session::has('success'))
<div class="alert alert-success text-center">
    <!-- <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> -->
    {{ Session::get('success') }}
</div>
@endif

@if(Session::has('update'))
<div class="alert alert-success text-center">
    <!-- <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> -->
    {{ Session::get('update') }}
</div>
@endif

@if(Session::has('successMsg'))
<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ Session::get('successMsg') }}
</div>
@endif

@if (Session::has('warning'))
<div class="alert alert-warning">
    {{-- <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> --}}
    {{Session::get('warning')}}
</div>
@endif

@if (Session::has('danger'))
<div class="alert alert-danger text-center">
    <!-- <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> -->
    {{Session::get('danger')}}
</div>
@endif

@if (Session::has('primary'))
<div class="alert alert-primary">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{Session::get('primary')}}
</div>
@endif

@if (Session::has('secondary'))
<div class="alert alert-secondary">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{Session::get('secondary')}}
</div>
@endif

@if (Session::has('message'))
<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{Session::get('message')}}
</div>
@endif

@if (Session::has('error'))
<div class="alert alert-warning">
    {{-- <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> --}}
    {{Session::get('error')}}
</div>
@endif
<script>
    $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
        $("#success-alert").slideUp(500);
    });

    $(".alert-warning").fadeTo(2000, 500).slideUp(500, function(){
        $("#success-alert").slideUp(500);
    });

    $(".alert-secondary").fadeTo(2000, 500).slideUp(500, function(){
        $("#success-alert").slideUp(500);
    });

    $(".alert-primary").fadeTo(2000, 500).slideUp(500, function(){
        $("#success-alert").slideUp(500);
    });

    $(".alert-danger").fadeTo(2000, 500).slideUp(500, function(){
        $("#success-alert").slideUp(500);
    });
</script>