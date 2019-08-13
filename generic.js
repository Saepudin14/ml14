function _displayMsg(id, action) {
	$('#'+id).toggle(action);
}

function _alterClassElementCSS(id, prop, value) {
	$('.'+id).css(prop,value);
}

function _alterIdElementCSS(id, prop, value) {
	$('#'+id).css(prop,value);
}

function _alterIdElementAttr(id, prop, value) {
	$('#'+id).attr(prop,value);
}

function _redirect(url) {
	jQuery('body').load(url);
}

function _getValue(id) {
	return $('#'+id).val();
}

function _emptyTextBoxId(id) {
	$('#'+id).val('');
}