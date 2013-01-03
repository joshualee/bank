function isNumber(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}

$(document).ready(function() {
    $("#withdraw-form").submit(function() {
        $error = $(this).find("#withdraw-error");
        var amount = $(this).find("input[name='amount']").val()
       
        if (amount == "" || !isNumber(amount)) {
           $error.html("Please enter a numeric amount.");
           return false;
        }
        
        amount = parseFloat(amount);        
        var max = parseFloat($("#currentcash").html());
        
        if (amount <= 0) {
            $error.html("Please enter a positive amount.");
            return false;
        }
        
        if (amount > max) {
            $error.html("You don't have enough cash.");
            return false;
        }
   });
});