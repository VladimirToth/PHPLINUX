<div class="footer_section">
    <h3>About us</h3>
    <p>Text text</p>
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