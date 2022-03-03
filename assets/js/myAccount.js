buttonModifyPersonnalInformations.onclick = () =>{
    lastName.removeAttribute('disabled');
    firstName.removeAttribute('disabled');
    adress.removeAttribute('disabled');
    zipCode.removeAttribute('disabled');
    city.removeAttribute('disabled');
}
buttonModifyProfessionalInformations.onclick = () =>{
    id_types.removeAttribute('disabled');
    businessName.removeAttribute('disabled');
    siret.removeAttribute('disabled');
}
buttonModifyMail.onclick = () =>{
    mail.removeAttribute('disabled');
}
penDescription.onclick = () =>{
    boxDescription.classList.add('d-none');
    boxUpdateDescription.classList.remove('d-none');
}