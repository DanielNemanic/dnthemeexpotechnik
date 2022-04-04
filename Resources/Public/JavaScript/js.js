/**
 * Created by dnemanic 2021.
 */
$.fn.Loading = function () {
	UIkit.notification.closeAll();
	UIkit.notification(
		'<div class="uk-text-center"><div uk-spinner></div> Loading</div>', {timeout: 0}
	);
};

UIkit.util.on('.DeleteButton', 'click', function (e) {
	e.preventDefault();
	e.target.blur();
	var title = $(this).attr('title');
	var url = $(this).attr('href');
	UIkit.modal.confirm(title).then(function () {
		$(this).Loading();
		window.location.href = url;
	}, function () {
		return false;
	});
});

$(document).on('keyup', ".SearchTable", function (e) {
	var target = $(this).attr('target');
	var term = $(this).val().toLowerCase();
	if (term != "") {
		// Show only matching TR, hide rest of them
		$(target + " tbody>tr").hide();
		$(target + " td").filter(function () {
			return $(this).text().toLowerCase().indexOf(term) > -1
		}).parent("tr").show();
	} else {
		// When there is no input or clean again, show everything back
		$(target + " tbody>tr").show();
	}
});