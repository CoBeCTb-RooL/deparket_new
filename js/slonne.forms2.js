var SlonneForm = function(form, settings){
	// 	конструктор
	settings = settings || {}
	settings = {
		$loading: settings.$loading || form.find('.loading'),
		$info: settings.$info || form.find('.info'),
		$formFields: settings.$formFields || form.find('input[type=text], input[type=number], input[type=email], input[type=password], input[type=radio], textarea, select'),
	}

	// 	приводим инпуты к $
	var tmp = []
	$.each(settings.$formFields, function(i, v){
		tmp.push($(v))
	})
	settings.$formFields = tmp


	// 	добавляем метку ОБЯЗАТЕЛЬНОЕ ПОЛЕ
	$.each(settings.$formFields, function(i, v){
		v.parent().append('<div class="slonne-required-label">Поле обязательное!</div>')
	})

	var obj = {
		formWrapper: form,

		validate: function($field){
			var $fieldsToValidate = $field!==undefined ? [$field] : settings.$formFields
			var errors = []

			for(var a in $fieldsToValidate){
				var field = $fieldsToValidate[a]
				if(this.isRequired(field))
					if(field.val()==''){
						this.highlightError(field)
						// field.parent().addClass('slonne-hasError')
						errors.push({code: field.attr('name'), msg: 'Это поле обязательное!'})
					}
			}

			var ret = {
				errors: errors
			}
			return ret;
		},

		highlightError: function($input){
			$input.parent().addClass('slonne-hasError')
		},

		isRequired: function($a){
			if($a.attr('slonne-required')!==undefined && $a.attr('slonne-required')!='false')
				return true
			return false
		},

		clear: function($field){
			var $fieldsToValidate = $field!==undefined ? [$field] : settings.$formFields
			$.each($fieldsToValidate, function(i, v){
				v.parent().removeClass('slonne-hasError')
			})
		},

		submit: function(){
			if(this.validate().errors.length==0){
				this.submitStart()
				return true
			}
			return false
		},

		submitStart: function(){
			this.showInfo('')
			this.loading()
		},
		submitComplete: function(data){
			this.loading(false)
			if(data.errors.length > 0){
				this.highlightError(form.find('*[name='+data.errors[0].field+']'))
				this.showError(data.errors[0].error)
			}
			else{
				this.showInfo('Отправлено!');
				this.fireSuccess()
			}
		},

		loading: function(isShow){
			isShow = isShow !==undefined ?  isShow : true

			if(isShow)
				// settings.$loading.slideDown('fast')
				settings.$loading.show()
			else
				settings.$loading.slideUp('fast')
			// alert('loading: '+isShow)
		},

		showError: function(str){
			this.showInfo('<span class="slonne-info-error">'+str+'</span>')
		},
		showInfo: function(str){
			settings.$info.hide().html(str)
			if(str!='')
				settings.$info.slideDown('fast')
		},

		fireSuccess: function(){
			form.slideUp()
			form.next('.slonne-form-success').slideDown()
		}

	}


	// 	ставим события
	$.each(settings.$formFields, function(i, v){
		v.on('blur', function(){
			obj.validate(v)
		})
		v.on('keypress', function(){
			obj.clear(v)
		})
	})




	return obj
}




