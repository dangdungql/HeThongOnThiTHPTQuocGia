<!DOCTYPE html>
<html>
<head>
	<script src="tinymce_text/tinymce/tinymce.min.js"></script>
	<script>
	tinymce.init({
	    selector: 'textarea',
	    language: 'vi_VN',
	    plugins: 'image code',
	    entity_encoding : "raw",
	    //toolbar: 'undo redo | image code',
	    toolbar: "insertfile undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
	    // without images_upload_url set, Upload tab won't show up
	    images_upload_url: 'upload.php',
	    
	    // override default upload handler to simulate successful upload
	    images_upload_handler: function (blobInfo, success, failure) {
	        var xhr, formData;
	      
	        xhr = new XMLHttpRequest();
	        xhr.withCredentials = false;
	        xhr.open('POST', 'upload.php');
	      
	        xhr.onload = function() {
	            var json;
	        
	            if (xhr.status != 200) {
	                failure('HTTP Error: ' + xhr.status);
	                return;
	            }
	        
	            json = JSON.parse(xhr.responseText);
	        
	            if (!json || typeof json.location != 'string') {
	                failure('Invalid JSON: ' + xhr.responseText);
	                return;
	            }
	        
	            success(json.location);
	        };
	      
	        formData = new FormData();
	        formData.append('file', blobInfo.blob(), blobInfo.filename());
	      
	        xhr.send(formData);
	    },
	});
	</script>

</head>
<body>
<!--   <textarea id="myTextarea"></textarea>
 --></body>
</html>
