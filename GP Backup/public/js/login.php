<script>

const DIRPAGE = "<?php echo DIRPAGE?>"

$("#login-form").submit((event) => {
  event.preventDefault();

  const email = $('input[name="email"]').val();
  const pw = $('input[name="pw"]').val();
  const submit = $('button[name="submit"]').val();
  // console.log(submit);

// Ajax post com a rota "login" e método "login";
  $.post(DIRPAGE + "login/login", {
      email: email,
      pw: pw,
      submit: submit
  }).done((error) => {
      if(!error){
        location.href = DIRPAGE;
      }
      console.log(error);
      const span = $("#error-msg");
      span.html(error);
  })
});

</script>