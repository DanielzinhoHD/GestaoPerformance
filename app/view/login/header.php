<script>

$(document).ready(function() {

  $("#login-form").submit((event) => {
    event.preventDefault();

    const email = $('input[name="email"]').val();
    const pw = $('input[name="pw"]').val();
    const submit = $('input[name="submit"]').val();

  // Ajax post com a rota "login" e método "login";
    $.post("login/login", {
        email: email,
        pw: pw,
        submit: submit
    }).done((error) => {
        if(!error){
            location.href = "<?php echo DIRREQ?>";
        }
        console.log(error);
        const span = $("#error-msg");
        span.html(error);
    })
  })

});

</script>