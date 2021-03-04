function mask(context, functionMask) {
    setTimeout(function() {
        var v = maskPhone(context.value);
        if (v != context.value) {
            context.value = v;
        }
    }, 1);
}

function maskPhone(value) {
    let replaceValue = value.replace(/\D/g, "");
    replaceValue = replaceValue.replace(/^0/, "");
    if (replaceValue.length > 10) {
        replaceValue = replaceValue.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
    } else if (replaceValue.length > 5) {
        replaceValue = replaceValue.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
    } else if (replaceValue.length > 2) {
        replaceValue = replaceValue.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
    } else {
        replaceValue = replaceValue.replace(/^(\d*)/, "($1");
    }
    return replaceValue;
}

function sendWhatsappOrder(event, form) {
    event.preventDefault();
    console.log('oi order');
    const name = form.orderName;
    const email = form.orderEmail;
    const phone = form.orderPhone;
    const msg = `Ol%C3%A1%2C me chamo ${name.value}, email: ${email.value}, tel: ${phone.value}, gostaria de fazer um pedido`
    const url = `https://api.whatsapp.com/send?phone=551127091063&text=${msg.split(' ').join('%20')}`;
    window.open(url);
    clearFormOrderValues(form);

}

function clearFormOrderValues(form) {
    form.orderName.value = '';
    form.orderEmail.value = '';
    form.orderPhone.value = '';
}

function sendWhatsappResale(event, form) {
    event.preventDefault();
    console.log('oi', form);
    const name = form.resaleName.value;
    const email = form.resaleEmail.value;
    const phone = form.resalePhone.value;
    const radioProduct = form.product.value;
    const radioSale = form.sale.value;
    console.log(name, email, phone, radioProduct, radioSale);
}


function changeValidationMessageFormOrder() {
    document.querySelector('#orderName').setCustomValidity('Por Favor Preencha este Campo');
    document.querySelector('#orderEmail').setCustomValidity('Por Favor Preencha o Email Corretamente');
    document.querySelector('#orderPhone').setCustomValidity('Por Favor Preencha seu Telefone Corretamente');
}

function changeValidationMessageFormResale() {
    document.querySelector('#resaleName').setCustomValidity('Por Favor Preencha este Campo');
    document.querySelector('#resaleEmail').setCustomValidity('Por Favor Preencha o Email Corretamente');
    document.querySelector('#resalePhone').setCustomValidity('Por Favor Preencha seu Telefone Corretamente');
}
// changeValidationMessageFormOrder();
// changeValidationMessageFormResale();