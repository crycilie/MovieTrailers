<div class="form-group {{ $errors->has('foto') ? 'has-error' : ''}}">
    <label for="foto" class="control-label">{{ 'Foto' }}</label>
    <input class="form-control" name="foto" type="file" id="foto" value="{{ isset($trailer->foto) ? $trailer->foto : ''}}" >
    {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($trailer->nombre) ? $trailer->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('linktTrailer') ? 'has-error' : ''}}">
    <label for="linktTrailer" class="control-label">{{ 'Linkttrailer' }}</label>
    <input class="form-control" name="linktTrailer" type="text" id="linktTrailer" value="{{ isset($trailer->linktTrailer) ? $trailer->linktTrailer : ''}}" >
    {!! $errors->first('linktTrailer', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sintesis') ? 'has-error' : ''}}">
    <label for="sintesis" class="control-label">{{ 'Sintesis' }}</label>
    <input class="form-control" name="sintesis" type="text" id="sintesis" value="{{ isset($trailer->sintesis) ? $trailer->sintesis : ''}}" >
    {!! $errors->first('sintesis', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="control-label">{{ 'Descripcion' }}</label>
    <input class="form-control" name="descripcion" type="text" id="descripcion" value="{{ isset($trailer->descripcion) ? $trailer->descripcion : ''}}" >
    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('year') ? 'has-error' : ''}}">
    <label for="year" class="control-label">{{ 'Year' }}</label>
    <input class="form-control" name="year" type="text" id="year" value="{{ isset($trailer->year) ? $trailer->year : ''}}" >
    {!! $errors->first('year', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
