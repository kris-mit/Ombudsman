const form_complaint = document.getElementById('form_complaint')
const name_field = document.getElementById('name');
const surname = document.getElementById('surname');
const email = document.getElementById('email');
const contact = document.getElementById('contact');
const address = document.getElementById('address');
const alert_complaint = document.getElementsByClassName('alert');
const form_files = document.getElementById('field_complaint');
const description = document.getElementById('description');
const reference = document.getElementById('reference');
const switch_done = document.getElementById('switch_done');
const switch_none = document.getElementById('switch_none');
const docs1 = document.getElementById('docs1');
const docs2 = document.getElementById('docs2');
const docs3 = document.getElementById('docs3');
alert_complaint.innerText = '';
var element_arr = [];



function checkField(pattern, element, message){
    if(pattern.test(element.value)) {
        var element_v = element.value;
        element_arr.push(element_v)
        element.value = "";
        if(element.nextElementSibling.innerText.length >1){
            element.nextElementSibling.innerText = ""
        }
    } else {
        let alert_element = element.nextElementSibling;
        alert_element.innerText = message;
    }
}

form_complaint.addEventListener('submit', function(e) {
   e.preventDefault();

    let name_test = /^[a-zA-Z ,\.'-]{3,30}$/

    checkField(name_test, name_field, "Погрешан формат имена!")

    let surname_test = /^[a-zA-Z]{3,30}$/;
    checkField(surname_test, surname,"Погрешан формат презимена!" )


    let email_test = /^([a-zA-Z0-9\._-]+)@([a-z]){2,5}\.([a-z]){2,}$/;
    checkField(email_test, email,"Погрешан формат емаил адресе!" )


    let contact_test = /^([+]?([\d]{2})?[\d]{3})?([\/\.\- ]{1})?([\d]{3})([\/\.\- ]{1})?([\d]{3})([\/\.\- ]{1})?([\d]{1})?$/g;
    checkField(contact_test, contact,"Погрешан формат контакт адресе!" )


    let address_test = /^[a-zA-z0-9 \.-]{2,40}$/;
    checkField(address_test, address, "Погрешан формат адресе!" );

    let form_test = /^[a-zA-Z0-9 \.-_']+$/;
    checkField(form_test, form_files, "Погрешан формат формата притужбе!");

    let description_test = /^[a-zA-Z0-9 \.-_']+$/;
    checkField(description_test, description, "Погрешан формат формата описа!");

    let reference_test = /^[a-zA-Z0-9 \.-_']+$/;
    checkField(reference_test, reference, "Погрешан формат напомене!");
    let pravna_sredstva ;
    if(switch_done.checked){
        pravna_sredstva = switch_done.value;
    } else {
        pravna_sredstva = switch_none.value;
    }

    let doc1 = docs1.value.split('\\');
    let docs1_name = doc1[doc1.length-1];

    let doc2 = docs2.value.split('\\');
    let docs2_name = doc2[doc2.length-1];

    let doc3 = docs3.value.split('\\');
    let docs3_name = doc3[doc3.length-1];


    if(element_arr[0] && element_arr[1] && element_arr[2] && element_arr[3] && element_arr[4]) {
        let data = {
            name_m: element_arr[0],
            surname: element_arr[1],
            email: element_arr[2],
            contact: element_arr[3],
            address: element_arr[4],
            form_compl: element_arr[5],
            description: element_arr[6],
            reference: element_arr[7],
            regulative: pravna_sredstva,
            docs1: docs1_name,
            docs2: docs2_name,
            docs3: docs3_name
        }
        let json = JSON.stringify(data);
        window.localStorage.setItem(data.email, json);
    }
})


