$ ->
  console.log "Sparkmasterflex's PHP Project Boilerplate"

  # for links to open in new tab or window
  $('a[rel=external]').bind 'click', () -> this.target = "_blank"

  # look for .hide class and set display: none
  $('.js-hide').hide()


  # handle's $.ajax post from contact form
  #
  # sends POST hash to url designated in
  #   'action' attribute of the form
  $('form#contact-form').submit (e) ->
    $.ajax
      url: $(e.target).attr('action')
      type: "POST"
      dataType: "json"
      data: $(e.target).serialize()
      success: (response) ->
        if response
          $(e.target).prepend "<p>Post successful and no validation errors</p>"
          console.log response
        else
          $(e.target).prepend "<p>Please enter all fields</p>"
      error: (err, response) ->
        console.log "An error occurred while posting."
        console.log err
        console.log response

    false