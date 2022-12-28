//  var t =document.getElementById("num");

//  function chambretype(value){
//     if(value=="suit"){
//         t.classList .remove("hidden");

//     }else{
//         t.classList.add("hidden")
//     }
//  }


// function updateForm() {
//     var roomType = document.getElementById('room_type').value;
//     if (roomType === 'suite') {
//       document.getElementById('suite_type_section').style.display = 'block';
//     } else {
//       document.getElementById('suite_type_section').style.display = 'none';
//     }
// }  



function updateForm() {
  var roomType = document.getElementById('room_type').value;
  var suiteTypeSection = document.getElementById('suite_type_section');
console.log(roomType);
  if (roomType == 'suite') {
    suiteTypeSection.style.display = "block";
  } else {
    suiteTypeSection.style.display = "none";
  }
}

function showSuiteTypeSelect() {
    document.getElementById("suite_type_section").style.display = "block";
  }
  
  function hideSuiteTypeSelect() {
    document.getElementById("suite_type_section").style.display = "none";
  }
  
  function updateForm() {
    var roomType = document.getElementById("room_type").value;
    if (roomType == "suite") {
      showSuiteTypeSelect();
    } else {
      hideSuiteTypeSelect();
    }
  }
  
//  



// function updateForm() {
//     var roomType = document.getElementById('room-type').value;
//     var suiteTypeSection = document.getElementById('suite-type-section');
  
//     if (roomType === 'suite') {
//       suiteTypeSection.style.display = 'block';
//     } else {
//       suiteTypeSection.style.display = 'none';
//     }
//   }

  
  function updateGuestInfoFields() {
  var numGuests = document.getElementById('num-guests').value;
  var guestInfoFields = document.getElementById('guest-info-fields');

  // supprime tous les champs de formulaire existants
  while (guestInfoFields.firstChild) {
    guestInfoFields.removeChild(guestInfoFields.firstChild);
 
  }}