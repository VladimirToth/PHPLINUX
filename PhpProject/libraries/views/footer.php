<div id="footer">
  <div class="container">
    <p class="text-muted">Hello to our footer</p>
  </div>
</div>

<div class="footer_section">
    <h3>Facebook</h3>
</div>

<div class="footer_section" id="newsletter">
    <h3>Newsletter</h3>
    <form method="post" action="/aptech/web/#newsletter">
        Email
        <input type="email" name="email"/>
        <input type="submit"/>
    </form>
    <?php if(isset($_POST['email'])): ?>
    <p>You have been registered..</p>
    <?php endif; ?>

</div>