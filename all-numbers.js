function allnumeric(inputtxt)
   {
      var numbers = /^[0-9]+$/; //regularni izrazz koji sadrzi sve brojeve
      if(inputtxt.value.match(numbers))
      {
         return true;
      }
      else
      {
         alert('Molimo Vas da u polje za količinu unesete brojeve!');
         document.form.quantity.focus();
         return;
      }
   }