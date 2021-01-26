// CONTACT FORM WITH LOCALE STORAGE
    var input_name = document.getElementById('name');
    var input_surname = document.getElementById('surname');
    var input_address = document.getElementById('email');
    var input_contact = document.getElementById('contact');
    var input_choose = document.getElementById('choose');
    var input_message = document.getElementsByClassName('message-box')[0];
    var form_contact = document.getElementById('form_contact');
    var alert_message = document.getElementById('alert-message');
    var element_array = [];



    function checkContactFields(pattern, element) {
        if(pattern.test(element.value)) {
            var element_value_field = element.value;
            element_array.push(element_value_field);
            element.value = '';
        } else {
            element.value = '';
        }
    }


    form_contact.addEventListener('submit', function(e) {
        e.preventDefault();

        var reg_exp_name = /^[a-zA-Z\s]{3,}$/g;
        checkContactFields(reg_exp_name, input_name)

        var reg_exp_surname = /^[a-zA-Z'\.\-\s]{3,}$/g;
        checkContactFields(reg_exp_surname, input_surname)

        var reg_exp_address = /^([a-zA-Z0-9_\-\. ]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
        checkContactFields(reg_exp_address, input_address)

        var reg_exp_contact = /^([+]?([\d]{2})?[\d]{3})?([\/\.\- ]{1})?([\d]{3})([\/\.\- ]{1})?([\d]{3})([\/\.\- ]{1})?([\d]{1})?$/g;
        checkContactFields(reg_exp_contact, input_contact)


        var reg_exp_message = /^[a-zA-Z0-9 ]{10,}$/g;
        checkContactFields(reg_exp_message, input_message)

        if(element_array.length >= 5) {
            var data = {
                name: element_array[0],
                surname: element_array[1],
                address: element_array[2],
                contact: element_array[3],
                message: element_array[4],
                reason_call: input_choose.value
            }
            var json = JSON.stringify(data);
            window.localStorage.setItem(data.address, json);
            alert_message.innerText = 'Порука је успешно послата. Хвала на интересовању.';
            alert_message.style.borderColor = 'blue';
            alert_message.style.display = 'block';
        } else {
            alert_message.innerText = 'Једно или више поља садржи грешку. Молимо вас проверите и покушајте поновo.';
            alert_message.style.borderColor = 'red';
            alert_message.style.display = 'block';
        }
        element_array = [];
        setTimeout(function() {
            alert_message.innerText = '';
            alert_message.style.display = 'none';
        }, 5000)
    })