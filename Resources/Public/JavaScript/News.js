$('.lightboxAdd').each(function () {
	$(this).find('a').attr('uk-lightbox', "group:'news-group'");
});

$('form#ShareForm').submit(function(){
	var link = $(this).find('a.ShareLink').attr('href');
	$.post("/typo3conf/ext/dnexpotechnik/Resources/Public/news/Share.php",
		{
			link: link,
			value: $(this).serializeArray()
		}, function(data){
			$("div#ShareMessage").html(data);
			if( $('.uk-alert-success').length ){
				setTimeout( function(){
					$("div#ShareMessage").html('');
				}, 2500 );
			}
		}
	);
	return false;
});