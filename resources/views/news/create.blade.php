<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://cdn.tiny.cloud/1/mypjlpl0ll198jkom1nivwr7g17mj8g5oefvob9eqey6bvy5/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    </head>
    <body>
		<div class="container">
			<form action={{route('snimi-vijest')}} method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label>News title</label>
					<input type="text" name="title" class="form-control">
				</div>
				<div class="form-group">
					<label>News content</label>
					<textarea  name="content" class="form-control"></textarea>
				</div>
				<div class="file-field">
					<div class="btn btn-primary btn-sm float-left">
						<span>Upload photo</span>
						<input type="file" name="image">
					</div>
				</div>
				<input type="submit" value="Snimi">

			</form>
		</div>
		<script>
			tinymce.init({
			  selector: 'textarea',
			  plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak tools',
			  toolbar_mode: 'floating',
			  //plugins: [ "advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste hr" ],
			//toolbar: "insertfile undo redo | formatselect | bold italic underline | alignleft aligncenter alignright alignjustify | blockquote hr | bullist numlist outdent indent | link image"
			});
		</script>

    </body>


</html>
