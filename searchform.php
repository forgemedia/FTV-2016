<form role="search" method="get" id="searchform" class="searchform" action="<?php echo $pages->get('/search/')->url; ?>">
	<div>
    <style type="text/css">
      @media only speech {
        .screen-reader-text {display: block;}
      }
      .screen-reader-text {display: none;}
    </style>
		<label class="screen-reader-text" for="s">Search for: </label>
		<input class="formSearchBoxJS" type="text" value="<?php echo $sanitizer->entities($input->get('s')); ?>" name="s" id="s" />
		// <input type="submit" class="search-submit"
		 value="<?php echo $sanitizer->text('Search'); ?>"/>
	</div>
</form>
