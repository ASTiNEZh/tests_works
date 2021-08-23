
new Vue({
	el: '#form',
	data: {
		name: "",
		phone: "",
		dom: '' //доменн почт. ящика
	},
	methods:{

		read_name (text) { //считывание инпута ФИО
			this.name = text
		},
		read_phone (numbers) { //считывание инпута телефона
			this.phone = numbers
		},
		read_dom (adres) { //считывание домена мыла
			this.dom = adres
		},
		chek () { //клиентская проверка необходимых полей (не пустые ФИО и телефон; мыло не гугловое)
			if (this.name == '' || this.phone == '') {
				alert ('ФИО и телефон обязательны к заполнению')
			}
			if (this.dom == '@gmail.com')
				alert ('Не возможно зарегестрировать почту с доменом @gmail.com')
		}
	},
});

