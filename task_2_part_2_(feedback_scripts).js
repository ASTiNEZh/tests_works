
new Vue({
	el: '#read',
	data: {
		name: "",
		phone: "",
		dom: ''
	},
	methods:{

		read_name (text) {
			this.name = text
		},
		read_phone (numbers) {
			this.phone = numbers
		},
		read_dom (adres) {
			this.dom = adres
		},
		chek () {
			if (this.name == '' || this.phone == '') {
				alert ('ФИО и телефон обязательны к заполнению')
			}
			if (this.dom == '@gmail.com')
				alert ('Не возможно зарегестрировать почту с доменом @gmail.com')
		}
	},
});

