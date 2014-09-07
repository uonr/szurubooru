var App = App || {};
App.Presenters = App.Presenters || {};

App.Presenters.CommentListPresenter = function(
	jQuery,
	topNavigationPresenter) {

	var $el = jQuery('#content');

	function init(args) {
		topNavigationPresenter.select('comments');
		render();
	}

	function render() {
		$el.html('Comment list placeholder');
	};

	return {
		init: init,
		render: render,
	};

};

App.DI.register('commentListPresenter', App.Presenters.CommentListPresenter);
