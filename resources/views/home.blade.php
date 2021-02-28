
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
@include('layouts.app')

<div class="container">
    <div class="row">
        <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor"></textarea>
    </div>
</div>

<script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>
</body>
</html>
