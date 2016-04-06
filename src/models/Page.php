<?php 

namespace Tjmahaffey\Verso\Models;

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Page extends Eloquent {

	protected $table = 'pages';
	protected $fillable = array('title', 'slug', 'content', 'seo_keywords', 'seo_description');
	protected $guarded = array('id');

}

?>