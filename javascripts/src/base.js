(function() {
  $(function() {
    console.log("Sparkmasterflex's PHP Project Boilerplate");
    console.log("another change");
    $('a[rel=external]').bind('click', function() {
      return this.target = "_blank";
    });
    $('.js-hide').hide();
    return $('form#contact-form').submit(function(e) {
      $.ajax({
        url: $(e.target).attr('action'),
        type: "POST",
        dataType: "json",
        data: $(e.target).serialize(),
        success: function(response) {
          if (response) {
            $(e.target).prepend("<p>Post successful and no validation errors</p>");
            return console.log(response);
          } else {
            return $(e.target).prepend("<p>Please enter all fields</p>");
          }
        },
        error: function(err, response) {
          console.log("An error occurred while posting.");
          console.log(err);
          return console.log(response);
        }
      });
      return false;
    });
  });

}).call(this);
