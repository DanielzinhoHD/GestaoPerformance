<script>
    const DIRPAGE='<?php echo DIRPAGE ?>';
    $('form').submit((e)=>{
        e.preventDefault();

        const name = $('input[name="nome"]').val();
        
        const email = $('input[name="email"]').val();
        
        const pw = $('input[name="senha"]').val();
        
        const pw2 = $('input[name="Confirmarsenha"]').val();

        const submit = $('button[name="submit"]').val();

        $.post(DIRPAGE+'registro/Cadastrar',{
           nome:name,
           email:email,
           senha:pw,
           Confirmarsenha:pw2,
           submit:submit
        }).done((erro)=>{
            if(!erro){
                location.href=DIRPAGE;
            }
            const span = $('#error-msg');
            span.html(erro);
        });
    })

</script>