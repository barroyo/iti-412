
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

function showUserDataTable(){
  const data = localStorage.getItem('tempData');
  if(data){
    const formData = JSON.parse(data);
    // const row = document.createElement('tr');
    // const nameCol = document.createElement('td');
    // nameCol.innerHTML = 'Bladimir';
    // row.appendChild(nameCol);
    // const userNameCol = document.createElement('td');
    // userNameCol.innerHTML = 'barroyo';
    // row.appendChild(userNameCol);
    // const provinceCol = document.createElement('td');
    // provinceCol.innerHTML = 'Alajuela';
    // row.appendChild(provinceCol);
    // document.getElementById('userDataTable').appendChild(row);
    let rowHtml = '<tr>';
    Object.keys(formData).forEach(elementKey => {
      rowHtml += `<td>${formData[elementKey]}</td>`;
    });
    rowHtml += '</tr>';
    document.getElementById('userDataTable').innerHTML = rowHtml;
  }
}
