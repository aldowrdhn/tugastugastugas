@extends('layouts.back.master')
@section('title','admin')
@section('footer','active')
@section('content')

<form action="{{ route('terms.store') }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Terms & Condition</h4>
                        <textarea name="desc_terms" id="desc_terms"
                            class="form-control @error('desc_terms') is-invalid @enderror">
                        </textarea>
                        @error('desc_terms')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </div>
</form>

<script src="../../assets/libs/ckeditor/ckeditor.js"></script>
<script src=" ../../assets/libs/ckeditor/samples/js/sample.js"></script>
<script data-sample="1">
CKEDITOR.replace('desc_terms', {
    height: 300
});
</script>
@endsection
