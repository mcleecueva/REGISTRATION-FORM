document.getElementById("registrationForm").addEventListener("submit", function (e) {
  e.preventDefault(); 

  let isValid = true;

  // FOR Clear all previous error.
  document.querySelectorAll("input").forEach(input => {
    input.classList.remove("invalid");
  });

  // FOR Contact validation (should match 09xxxxxxxxx)
  const contactInput = document.getElementById("contact");
  const contactPattern = /^09\d{9}$/;
  if (!contactPattern.test(contactInput.value)) {
    contactInput.classList.add("invalid");
    isValid = false;
  }

  // FOR ID No. validation (should match 2023-33-103)
  const idInput = document.getElementById("idNo");
  const idPattern = /^\d{4}-\d{2}-\d{3}$/;
  if (!idPattern.test(idInput.value)) {
    idInput.classList.add("invalid");
    isValid = false;
  }

  //FOR Basic required fields validation
  const requiredFields = ["firstName", "lastName", "email", "course", "batch"];
  requiredFields.forEach(id => {
    const input = document.getElementById(id);
    if (input.value.trim() === "") {
      input.classList.add("invalid");
      isValid = false;
    }
  });

  if (isValid) {
    alert("Registration successful!");
    
    this.reset();
  }
});
