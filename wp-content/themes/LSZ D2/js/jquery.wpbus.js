$(document).ready(function(){$(".switch").click(function(){if($('.user-form').css("display")=="none")$('.user-form').fadeIn('fast');else $('.user-form').fadeOut('slow')})});$(function(){$("#s").attr({value:"请输入搜索关键词"}).blur(function(){$(this).val($(this).val())}).focus(function(){$(this).val("")})});$(function(){$(".post-txt img").css({height:""}).removeAttr("width").removeAttr("height").each(function(){var $this=$(this).width();var maXimg=650;if($this>maXimg){$this=maXimg};$(this).width($this)})});