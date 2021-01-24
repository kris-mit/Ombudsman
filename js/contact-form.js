// CONTACT FORM WITH LOCALE STORAGE

var input_name = document.getElementById('name');
var input_surname = document.getElementById('surname');
var input_address = document.getElementById('email');
var input_contact = document.getElementById('contact');
var input_choose = document.getElementById('choose');
var input_message = document.getElementsByClassName('message-box')[0];
var input_button = document.getElementsByClassName('button')[0];
var form = document.forms[0];
var alert_message = document.getElementById('alert-message');
alert_message.innerText = '';
alert_message_content = 'Једно или више поља садржи грешку. Молимо вас проверите и покушајте поновo.';

form.addEventListener('submit', function(e) {
    e.preventDefault();
    var reg_exp_name = /^[a-zA-Z\s]{3,}$/g;
    if(reg_exp_name.test(input_name.value)) {
        var name_val = input_name.value;
    } else {
        alert_message.innerText = alert_message_content;
    }
    var reg_exp_surname = /^[a-zA-Z'\.\-\s]{3,}$/g;
    if(reg_exp_surname.test(input_surname.value)) {
        var surname_val = input_surname.value;
    } else {
        alert_message.innerText = alert_message_content;
    }
    var reg_exp_address = /^([a-zA-Z0-9_\-\. ]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
    if(reg_exp_address.test(input_address.value)){
        var email_val = input_address.value;
    } else {
        alert_message.innerText = alert_message_content;
    }
    var reg_exp_contact = /^([+]?([\d]{2})?[\d]{3})?([\/\.\- ]{1})?([\d]{3})([\/\.\- ]{1})?([\d]{3})([\/\.\- ]{1})?([\d]{1})?$/g;
    if(reg_exp_contact.test(input_contact.value)) {
       var contact_val = input_contact.value;
    } else {
        alert_message.innerText = alert_message_content;
    }
    var reg_exp_message = /^[a-zA-Z0-9 ]{10,}$/g;
    if(reg_exp_message.test(input_message.value)) {
        var message_val = input_message.value;
    } else {
        alert_message.innerText = alert_message_content;
    }
    let data = {
        name_el: name_val,
        surname: surname_val,
        email: email_val,
        contact: contact_val,
        message: message_val
    }
    let json_data = JSON.stringify(data)
    localStorage.setItem(data.email, json_data)

    document.getElementById('name').value='';
    document.getElementById('surname').value='';
    document.getElementById('email').value = '';
    document.getElementById('contact').value = '';
    document.getElementsByClassName('message-box')[0].value = '';
    if(name_val && surname_val && contact_val && message_val) {
        alert_message.innerText = 'Порука је успешно послата. Хвала на интересовању.';
        alert_message.style.borderColor = 'blue';
    } 
    alert_message.style.display = 'block';
}) 
 