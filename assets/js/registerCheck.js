let cleave = new Cleave('.siret', {
    delimiters: [' '],
    blocks: [9,5]
});

lastName.onchange = () =>{
    if(lastName.value.match(/^[a-zA-Z- 'À-ÖØ-öø-ÿ]+$/)){
        lastName.classList.add('is-valid');
        messageName.innerHTML = '';
    } else{
        messageName.innerHTML ='<p class="invalidated">Entrer un nom valide </p>';
        lastName.classList.remove('is-valid');
    }
}

firstName.onchange = () =>{
    if(firstName.value.match(/^[a-zA-Z- 'À-ÖØ-öø-ÿ]+$/)){
        firstName.classList.add('is-valid');
        messageFirstName.innerHTML = '';
    } else{
        messageFirstName.innerHTML ='<p class="invalidated">Entrer un prénom valide </p>';
        firstName.classList.remove('is-valid');
    }
}

businessName.onchange = () => {
    if(businessName.value.match(/^[a-zA-Z- \'À-ÖØ-öø-ÿ]+$/)){
        businessName.classList.add('is-valid');
        messageNameCompany.innerHTML = '';
    } else{
        messageNameCompany.innerHTML ='<p class="invalidated">Entrer un nom d\'entreprise valide </p>';
        businessName.classList.remove('is-valid');
    }
}

adress.onchange = () => {
    if(adress.value.match(/^([0-9À-ÖØ-öø-ÿ]+)\s([a-zÀ-ÖØ-öø-ÿ]+)\s([A-Z]{0,1}[a-zÀ-ÖØ-öø-ÿ]+)\s{0,1}([A-Z]{0,1}[a-zÀ-ÖØ-öø-ÿ]+)\s{0,1}([a-z0-9À-ÖØ-öø-ÿ]+)$/)){
        adress.classList.add('is-valid');
        messageAddress.innerHTML = '';
    } else{
        messageAddress.innerHTML ='<p class="invalidated">Entrer une adresse valide </p>';
        adress.classList.remove('is-valid');
    } 
}

siret.onchange = () =>{
    if(siret.value.match(/^([0-9]{9}){1}[ ]{1}([0-9]{5}){1}$/)){
        siret.classList.add('is-valid');
        messageSiret.innerHTML = '';
    } else{
        siret.classList.remove('is-valid');
        messageSiret.innerHTML = '<p class="invalidated">Entrer un numéro de siret valide </p> ';
    }
} 

zipCode.onchange = () =>{
    if(zipCode.value.match(/^[0-9]{5}(?:-[0-9]{4})?$/)){
        zipCode.classList.add('is-valid');
    } else{
        zipCode.classList.remove('is-valid');
    }
}

mail.onchange = () => {
    if(mail.value.match(/^([0-9a-z-_.]+){1}(@){1}([a-z.-]+){1}$/)) {
        mail.classList.add('is-valid');
        messageMail.innerHTML = '';
    } else {
        messageMail.innerHTML = '<p class="invalidated">Entrer une adresse mail valide </p>'
        mail.classList.remove('is-valid');
    }
} 