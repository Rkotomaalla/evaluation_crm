{{--Ajout de l importation ===================================================================== --}}
<div class="col-sm-12">
    <hr>
</div>

<div class="col-sm-3">
    <label for="name" class="base-input-label">@lang('File Import')</label>
</div>
<div class="col-sm-9">
    <div class="form-group col-sm-8">
        <input type="file" name="file" class="form-control" value="">
    </div>
</div>

<div class="col-sm-12">
    <hr>
</div>
<div class="col-lg-12">
    <input type="submit" value="{{$submitButtonText}}" class="btn btn-md btn-brand">
</div>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {!! session('error') !!} {{-- Permet d'afficher les erreurs avec les retours à la ligne --}}
    </div>
@endif

{{-- Fin Ajout de L importation============================================================================ --}}