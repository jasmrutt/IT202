//<!--Jasmin Rutter, 3/23/23, IT 202-010, Unit 7 Fruit Stand, jnr7@njit.edu -->
"use strict";
$(document).ready(() => {
    $('#create-form').submit((event) => {
      let isValid = true;
  
      // validate fruit code
      const fruitCode = $('#fruit_code').val().trim();
      if (fruitCode === '') {
        $('#fruit-code-error').text('This field should not be blank');
        isValid = false;
      } else if (fruitCode.length < 4) {
        $('#fruit-code-error').text('This field should have a minimum of 4 characters');
        isValid = false;
      } else if (fruitCode.length > 10) {
        $('#fruit-code-error').text('This field should have a maximum of 10 characters');
        isValid = false;
      } else {
        $('#fruit-code-error').text('');
      }
  
      // validate fruit name
      const fruitName = $('#fruit_name').val().trim();
      if (fruitName === '') {
        $('#fruit-name-error').text('This field should not be blank');
        isValid = false;
      } else if (fruitName.length < 10) {
        $('#fruit-name-error').text('This field should have a minimum of 10 characters');
        isValid = false;
      } else if (fruitName.length > 100) {
        $('#fruit-name-error').text('This field should have a maximum of 100 characters');
        isValid = false;
      } else {
        $('#fruit-name-error').text('');
      }
  
      // validate fruit description
      const fruitDescription = $('#description').val().trim();
      if (fruitDescription === '') {
        $('#fruit-description-error').text('This field should not be blank');
        isValid = false;
      } else if (fruitDescription.length < 10) {
        $('#fruit-description-error').text('This field should have a minimum of 10 characters');
        isValid = false;
      } else if (fruitDescription.length > 255) {
        $('#fruit-description-error').text('This field should have a maximum of 255 characters');
        isValid = false;
      } else {
        $('#fruit-description-error').text('');
      }

      // validate fruit description
      const fruitPrice = $('#price').val().trim();
      if (fruitPrice === '') {
        $('#fruit-price-error').text('This field should not be blank');
        isValid = false;
      } else if (fruitPrice <= 0) {
        $('#fruit-price-error').text('This field should not be negative or a zero');
        isValid = false;
      } else if (fruitPrice > 100000) {
        $('#fruit-price-error').text('This field should not exceed $100,000');
        isValid = false;
      } else {
        $('#fruit-price-error').text('');
      }

      if(isValid == false){
        event.preventDefault();
    }
    });
    
});