<?php

class Page extends Eloquent {

	protected $table = 'pages';
	protected $fillable = array('title', 'slug', 'content', 'seo_keywords', 'seo_description');
	protected $guarded = array('id');

}

?>