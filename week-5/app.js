function saveForm() {
  const formElements = document.querySelectorAll('input.form-control, select, input.form-check-input[checked]')

  const temporalData = {};
  formElements.forEach(function (element){
    temporalData[element.name] = element.value;
  });
  localStorage.setItem('tempData', JSON.stringify(temporalData));
}

function restoreFormData(){
  const data = localStorage.getItem('tempData');
  if(data){
    const formData = JSON.parse(data);
    Object.keys(formData).forEach(elementKey => {
      document.getElementsByName(elementKey)[0].value = formData[elementKey];
    });
  }
}

