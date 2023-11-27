// delete single user
function deleteUser(userId) {
  Swal.fire({
    title: "Delete Member",
    text: "Are you sure you want to delete this member?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonText: "Yes, delete it!",
    cancelButtonText: "Cancel",
  }).then((result) => {
    if (result.isConfirmed) {
      // User clicked "Yes, delete it!"
      // Perform the delete operation using AJAX
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "userDelete.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Reload the user list after deletion
          window.location.reload();
        }
      };
      xhr.send("id=" + userId);
    }
  });
}

// delete PIN
function deletePin(tokenId) {
  Swal.fire({
    title: "Delete PIN",
    text: "Are you sure you want to delete this PIN?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonText: "Yes, delete it!",
    cancelButtonText: "Cancel",
  }).then((result) => {
    if (result.isConfirmed) {
      // User clicked "Yes, delete it!"
      // Perform the delete operation using AJAX
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "userPin.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Reload the user list after deletion
          window.location.reload();
        }
      };
      xhr.send("id=" + tokenId);
    }
  });
}

// delete single event
function deleteEvent(eventId) {
  Swal.fire({
    title: "Delete Event",
    text: "Are you sure you want to delete this event?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonText: "Yes, delete it!",
    cancelButtonText: "Cancel",
  }).then((result) => {
    if (result.isConfirmed) {
      // User clicked "Yes, delete it!"
      // Perform the delete operation using AJAX
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "eventDelete.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Reload the user list after deletion
          window.location.reload();
        }
      };
      xhr.send("id=" + eventId);
    }
  });
}

// delete single event
function deleteUnpaidMembers(members) {
  Swal.fire({
    title: "Delete Event",
    text: "Are you sure you want to delete this event?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonText: "Yes, delete it!",
    cancelButtonText: "Cancel",
  }).then((result) => {
    if (result.isConfirmed) {
      // User clicked "Yes, delete it!"
      // Perform the delete operation using AJAX
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "eventDelete.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Reload the user list after deletion
          window.location.reload();
        }
      };
      xhr.send("id=" + eventId);
    }
  });
}

// calculate age
function calculateAge() {
  // Get the selected date of birth from the input field
  var dobInput = document.getElementById("dob");
  var selectedDOB = new Date(dobInput.value);

  // Get the current date
  var currentDate = new Date();

  // Calculate the age
  var age = currentDate.getFullYear() - selectedDOB.getFullYear();

  // Check if the birthday has occurred this year or not
  if (
    currentDate.getMonth() < selectedDOB.getMonth() ||
    (currentDate.getMonth() === selectedDOB.getMonth() &&
      currentDate.getDate() < selectedDOB.getDate())
  ) {
    age--;
  }

  // Get the values for elder_age, youth_age, and children_age from the form
  // var elder_age = parseInt(document.getElementById("elderAge").value);
  // var youth_age = parseInt(document.getElementById("youthAge").value);
  // var children_age = parseInt(document.getElementById("childrenAge").value);
  var elder_age = document.getElementById("elderAge");
  var youth_age = document.getElementById("youthAge");
  var children_age = document.getElementById("childrenAge");

  var ageInput = document.getElementById("age");
  ageInput.value = age;

  // Calculate the age grade based on age
  var ageGrade = "";
  if (age >= elder_age) {
    ageGrade = "Elder";
  } else if (age >= youth_age) {
    ageGrade = "Youth";
  } else {
    ageGrade = "Children";
  }

  // Set the calculated age grade in the age_grade input field
  var ageGradeInput = document.getElementById("age_grade");
  ageGradeInput.value = ageGrade;
}
