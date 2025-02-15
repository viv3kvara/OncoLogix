document.addEventListener("DOMContentLoaded", () => {
  getCountries();
});

async function getCountries() {
  const countryDropdown = document.getElementById("country");
  try {
    const response = await fetch(
      "https://countriesnow.space/api/v0.1/countries"
    );
    const data = await response.json();
    data.data.forEach((country) => {
      let option = document.createElement("option");
      option.value = country.country;
      option.textContent = country.country;
      countryDropdown.appendChild(option);
    });
  } catch (error) {
    console.error("Error fetching countries:", error);
  }
}

async function getStates() {
  const country = document.getElementById("country").value;
  const stateDropdown = document.getElementById("state");
  stateDropdown.innerHTML = "<option value=''>Select State</option>";

  if (!country) return;

  try {
    const response = await fetch(
      "https://countriesnow.space/api/v0.1/countries/states",
      {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ country: country }),
      }
    );
    const data = await response.json();
    data.data.states.forEach((state) => {
      let option = document.createElement("option");
      option.value = state.name;
      option.textContent = state.name;
      stateDropdown.appendChild(option);
    });
  } catch (error) {
    console.error("Error fetching states:", error);
  }
}

async function getCities() {
  const country = document.getElementById("country").value;
  const state = document.getElementById("state").value;
  const cityDropdown = document.getElementById("city");
  cityDropdown.innerHTML = "<option value=''>Select City</option>";

  if (!country || !state) return;

  try {
    const response = await fetch(
      "https://countriesnow.space/api/v0.1/countries/state/cities",
      {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ country: country, state: state }),
      }
    );
    const data = await response.json();
    data.data.forEach((city) => {
      let option = document.createElement("option");
      option.value = city;
      option.textContent = city;
      cityDropdown.appendChild(option);
    });
  } catch (error) {
    console.error("Error fetching cities:", error);
  }
}
