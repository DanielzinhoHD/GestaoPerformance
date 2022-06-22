<script>

const DIRPAGE = "<?php echo DIRPAGE?>"

const clientSelect = $("select[name='cliente']");

clientSelect.on('change', () => {

  const clientId = clientSelect.val();
  // console.log(clientId);

  $.post(DIRPAGE + "formulario/retornaProjeto", {
      clientId: clientId,
      change: true
  }).done((project) => {
      // console.log(JSON.parse(project));
      project = JSON.parse(project);
      const projectSelect = $("select[name='projeto']");

      const nullSelection = $('<option>', {
        disabled: true,
        selected: true,
        text: '-----'
      })
      
      projectSelect.html(nullSelection);

      project.forEach((value, index)=>{
        projectSelect.append($('<option>', {
          text: `${value.proposta}`,
          value: `${value.idProjeto}`
        }))
      })

  })
});

</script>