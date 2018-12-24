(function($) {
	var frm_sel = "#frm_submit";
	var submit_sel = '#btnSubmit';
	var initFormValid = function() {
		$(frm_sel).validate({
			rules: {
				name: {
					required: true,
					maxlength: 100
				},
				url: {
					required: true,
					url: true,
					maxlength: 100
				},
				email: {
					required: true,
					email: true,
					maxlength: 50
				}
			},
			messages: {
				name: {
					required: "请填写网站名称，长度在1-100位字符之间",
					maxlength: "网站名称长度只能在1-100位字符之间"
				},
				url: {
					required: "请填写网址，长度在1-100位字符之间",
					url: "网址格式不正确",
					maxlength: "网址长度只能在1-100位字符之间"
				},
				email: {
					required: "请填写电子邮箱，长度在1-50位字符之间",
					email: "电子邮箱格式不正确",
					maxlength: "电子邮箱长度只能在1-50位字符之间"
				}
			}
		});
	};
	
	var submitSuccess = function(){
		alert('申请已提交，请等待管理员审核！');
		$(submit_sel).val('提交申请');
		$('#name,#email,#intro').val('');
		$('#url').val('http://');
	}
	
	var submitError = function(){
		alert('提交失败，请稍后重试');
		$(submit_sel).val('提交申请');
	};
	
	var submit = function() {
		if (!$(frm_sel).valid()) {
			return;
		}
		$(submit_sel).unbind('click').attr('value', '正在保存');
		$.ajax({
			type: "POST",
			contentType: "application/x-www-form-urlencoded; charset=UTF-8",
			//url: "//club.jd.com/links/submit.action",
			url: "./index.php?c=link&a=doadd",
			data: {
				name: encodeURIComponent($('#name').val()),
				url: encodeURIComponent($('#url').val()),
				email: encodeURIComponent($('#email').val()),
				intro: encodeURIComponent($('#intro').val())
			},
			dataType: "json",
			complete: function(jqXHR, textStatus){
				$(submit_sel).click(submit);
			},
			success: function(data) {
				if(data.success){
					submitSuccess();
				}else{
					submitError();
				}
			},
			error: function(xhr) {
				submitError();
			}
		});
	};
	var initSubmit = function() {
		$(submit_sel).click(submit);
	};

	$(function() {
		initFormValid();
		initSubmit();
	});
})(jQuery);
