function log_In()
{
  response;

   $("#frmLog_In").submit(function(event)
   {

      event.preventDefault();
      user = $(this).find('input[name="user"]').val();
      pass = $(this).find('input[name="pass"]').val();

      if (user.length == 0 || pass.length == 0)
      {
        response = '<div class="alert alert-dismissible alert-danger">';
        response += '<p><strong>ERROR</strong> Llena todos los datos!!!!...</p>';
        response += '</div>';
        $("#response").html(response);
      }

      else
      {
        $.ajax({
          url: 'User/logIn',
          type: 'POST',
          data: {data: $(this).serialize()}
        })
        .done(function(r)
        {
          console.log('did it');
          $("#response").html(r);
        });
      }
  });
}

function sign_In()
{
  console.log(55);
}

function logOut()
{
  $.ajax({
    url: 'User/logOut',
    type: 'POST',
    data: {data: 'sd'}
  })
  .done(function(r)
  {
    console.log(r);
  });
}
