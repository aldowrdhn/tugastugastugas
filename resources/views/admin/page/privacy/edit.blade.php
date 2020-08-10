@extends('layouts.back.master')
@section('title','admin')
@section('footer','active')
@section('content')

{{-- @foreach ($terms as $item) --}}
<form action="{{route('privacy.update', $privacies->id)}}" method="POST">
    @method('PATCH')
    @csrf
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Privacy Policy</h4>
                        <textarea name="desc_priv" id="desc_priv" >
                            {{old('desc_priv') ?? $privacies->desc_priv}}</textarea>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </div>
</form>

{{-- <form action="{{route('terms.update', $terms->id)}}" method="POST">
    @method('PATCH')
    @csrf
<textarea name="desc_terms" id="desc_terms" cols="30" rows="10">
    {{old('desc_terms') ?? $terms->desc_terms}}</textarea>
<button type="submit">save</button></form> --}}
{{-- @endforeach --}}

<script src="../../assets/libs/ckeditor/ckeditor.js"></script>
<script src=" ../../assets/libs/ckeditor/samples/js/sample.js"></script>
<script data-sample="1">
CKEDITOR.replace('desc_priv', {
    height: 300
});
</script>
@endsection
