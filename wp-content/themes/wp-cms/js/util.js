/*
Author: mg12
*/
(function() {

function $(id) {
	return document.getElementById(id);
}

function setStyleDisplay(id, status) {
	$(id).style.display = status;
}

function goTop(acceleration, time) {

	acceleration = acceleration || 0.1;
	time = time || 16;

	var dx = 0;
	var dy = 0;
	var bx = 0;
	var by = 0;
	var wx = 0;
	var wy = 0;

	if (document.documentElement) {
		dx = document.documentElement.scrollLeft || 0;
		dy = document.documentElement.scrollTop || 0;
	}
	if (document.body) {
		bx = document.body.scrollLeft || 0;
		by = document.body.scrollTop || 0;
	}
	var wx = window.scrollX || 0;
	var wy = window.scrollY || 0;

	var x = Math.max(wx, Math.max(bx, dx));
	var y = Math.max(wy, Math.max(by, dy));

	var speed = 1 + acceleration;
	window.scrollTo(Math.floor(x / speed), Math.floor(y / speed));
	if(x > 0 || y > 0) {
		var invokeFunction = "YOFOX.goTop(" + acceleration + ", " + time + ")"
		window.setTimeout(invokeFunction, time);
	}
}

function switchTab(showPanel, hidePanel) {
	setStyleDisplay(showPanel, 'block');
	setStyleDisplay(hidePanel, 'none');
}

window['YOFOX'] = {};
window['YOFOX']['$'] = $;
window['YOFOX']['setStyleDisplay'] = setStyleDisplay;
window['YOFOX']['goTop'] = goTop;


})();

function switchImage(imageId, imageUrl, linkId, linkUrl, preview, title, alt) {
	if(imageId && imageUrl) {
		var image = $(imageId);
		image.src = imageUrl;

		if(title) {
			image.title = title;
		}
		if(alt) {
			image.alt = alt;
		}
	}

	if(linkId && linkUrl) {
		var link = $(linkId);
		link.href = linkUrl;
	}
}

function comment_image() {
var URL = prompt('請輸入圖片的 URL 位址:');
if (URL) {
document.getElementById('comment').value = document.getElementById('comment').value + '[img]' + URL + '[/img]';
}} 