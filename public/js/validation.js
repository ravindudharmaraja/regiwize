function navigateToNewStep1() {
    window.location.href = "/new";
}
function navigateToExistingStep1() {
    window.location.href = "/existing";
}
function navigateToNewStep2() {
    window.location.href = "/new/register";
}
function navigateToExistingStep2() {
    window.location.href = "/existing/register";
}
// JavaScript to toggle between individual and company owner inputs based on checkbox
const ownerTypeCheckbox = document.getElementById("owner_type_checkbox");
const ownerList = document.querySelector(".owner-list");
const individualOwnerTemplate = document.querySelector(".individual-owner");
const companyOwnerTemplate = document.querySelector(".company-owner");
const continueButton = document.getElementById("continue_button");

ownerTypeCheckbox.addEventListener("change", () => {
    // Remove existing owner input fields
    while (ownerList.firstChild) {
        ownerList.removeChild(ownerList.firstChild);
    }

    if (ownerTypeCheckbox.checked) {
        // Clone and append company owner input fields
        const newCompanyOwner = companyOwnerTemplate.cloneNode(true);
        newCompanyOwner.style.display = "block";
        ownerList.appendChild(newCompanyOwner);
    } else {
        // Clone and append individual owner input fields
        const newIndividualOwner = individualOwnerTemplate.cloneNode(true);
        newIndividualOwner.style.display = "block";
        ownerList.appendChild(newIndividualOwner);
    }

    validateOwnershipPercentages();
});

// Function to validate ownership percentages and enable/disable the "Next Step" button
function validateOwnershipPercentages() {
    const ownershipPercentageInputs = ownerList.querySelectorAll('input[type="number"]');
    let totalPercentage = 0;
    ownershipPercentageInputs.forEach(input => {
        totalPercentage += parseInt(input.value) || 0;
    });

    if (totalPercentage === 100) {
        continueButton.removeAttribute("disabled");
    } else {
        continueButton.setAttribute("disabled", "disabled");
    }
}

// Attach input event listeners for percentage inputs
ownerList.addEventListener("input", validateOwnershipPercentages);

// Initial validation
validateOwnershipPercentages();

// Function to add new owner input fields
function addOwnerFields() {
    if (ownerTypeCheckbox.checked) {
        // Clone and append company owner input fields
        const newCompanyOwner = companyOwnerTemplate.cloneNode(true);
        newCompanyOwner.style.display = "block";
        ownerList.appendChild(newCompanyOwner);
    } else {
        // Clone and append individual owner input fields
        const newIndividualOwner = individualOwnerTemplate.cloneNode(true);
        newIndividualOwner.style.display = "block";
        ownerList.appendChild(newIndividualOwner);
    }
}

// Event listener for the "Add" button
const addButton = document.querySelector(".add_button");
addButton.addEventListener("click", addOwnerFields);

function showSSNField() {
    const ssnField = document.querySelector(".ssn-field");
    ssnField.style.display = "block";
}

function hideSSNField() {
    const ssnField = document.querySelector(".ssn-field");
    ssnField.style.display = "none";
}
