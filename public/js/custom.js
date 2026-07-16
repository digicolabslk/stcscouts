// Switch "a"/"an" to match the word currently shown by the word rotator.
// "u" is excluded from the vowel test because of words pronounced "yoo" (a Useful).
(function () {
	var rotator = document.querySelector('.word-rotator');
	if (!rotator) return;

	var article = rotator.querySelector('.word-rotator-article');
	var words = rotator.querySelector('.word-rotator-words');
	if (!article || !words) return;

	var update = function () {
		var visible = words.querySelector('b.is-visible');
		if (!visible) return;
		article.textContent = /^[aeio]/i.test(visible.textContent.trim()) ? 'an' : 'a';
	};

	new MutationObserver(update).observe(words, {
		attributes: true,
		subtree: true,
		attributeFilter: ['class']
	});
	update();
})();
