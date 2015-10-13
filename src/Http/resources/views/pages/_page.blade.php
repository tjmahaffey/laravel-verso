		<fieldset>			
			
			<p>
				{{ Form::label('title', 'Title:') }}
				{{ Form::text('title') }}
			</p>
			<p>
				{{ Form::label('slug', 'URL:') }}
				{{ Form::text('slug') }}
			</p>
			<p>
				{{ Form::label('content', 'Content:') }}
				{{ Form::textarea('content') }}
			</p>
			<script>
				var csrf = '{{csrf_token()}}' ;
				 CKEDITOR.replace( 'content' , {
				        filebrowserUploadUrl: '{{ URL::route("upload.uploadToArt") }}?type=pages&csrf_token='+csrf
				} );
			</script>
			<p>
				{{ Form::label('seo_keywords', 'SEO Keywords:') }}
				{{ Form::textarea('seo_keywords') }}
			</p>
			<p>
				{{ Form::label('seo_description', 'SEO Description:') }}
				{{ Form::textarea('seo_description') }}
			</p>

		</fieldset>