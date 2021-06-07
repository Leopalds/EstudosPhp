<?php $title = 'Home'; require('partials/head.php'); ?>
  
<h1>Digite seu nome</h1>

<form method="POST" action="/nomes">
    <input name="name"></input>
    <button type="submit"> Submit </button>

</form>
    
<?php require('partials/footer.php'); ?>