<?php
require "components/head.php";
require "components/nav.php";
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
    .content-wrapper {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        padding: 20px;
        margin: 20px;
        margin-top: 40px; /* This creates space from the top */
    }
    .contact-box {
        text-align: left;
    }
    .contact-item {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }
    .contact-item i {
        margin-right: 10px;
    }
    .email {
        display: flex;
        align-items: center;
    }
    .email i {
        margin-right: 10px;
    }
    .map {
        flex-shrink: 0;
        margin-left: 20px;
        border: 2px solid #000; /* Border around the map */
        padding: 10px; /* Padding inside the border */
    }
    .footer {
        background-color: #f1f1f1;
        padding: 20px;
        text-align: center;
        border-top: 2px solid #000;
        margin-top: 20px;
    }
</style>

<div class="content-wrapper">
    <div>
        <h1>rekvizīti</h1>
        <div class="contact-box">
            <div class="contact-item">
                <i class="fas fa-user"></i>
                <span>Aprūpes centra vadītāja</span>
                <i class="fas fa-phone" style="margin-left: auto;"></i>
                <span>26357033</span>
            </div>
            <div class="contact-item">
                <i class="fas fa-user"></i>
                <span>Saimnieciskās daļas vadītājs</span>
                <i class="fas fa-phone" style="margin-left: auto;"></i>
                <span>29214149</span>
            </div>
            <div class="contact-item">
                <i class="fas fa-user"></i>
                <span>Sociālā darbiniece</span>
                <i class="fas fa-phone" style="margin-left: auto;"></i>
                <span>26150680</span>
            </div>
            <div class="contact-item">
                <i class="fas fa-user"></i>
                <span>Sociālā aprūpētāja</span>
                <i class="fas fa-phone" style="margin-left: auto;"></i>
                <span>26420585</span>
            </div>
            <div class="email">
                <i class="fas fa-envelope"></i> 
                <span>saullektssigulda@inbox.lv</span>
            </div>
        </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d616.6067079131626!2d24.87733417198854!3d57.15753839262049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e94fdce6674f5b%3A0xdb658e7aa39aea52!2sD%C4%81rza%20iela%2047A%2C%20Sigulda%2C%20Siguldas%20pils%C4%93ta%2C%20Siguldas%20novads%2C%20LV-2150!5e0!3m2!1slv!2slv!4v1720086537711!5m2!1slv!2slv" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<div class="footer">
    <p>Adrese: Dārza iela 47a, Sigulda, Siguldas novads, LV-2140</p>
    <p>Tālrunis: 26357033</p>
    <p>E-pasts: saullēkts.sigulda@inbox.lv</p>
    <p>Vadītāja: Ginta Goldmane</p>
</div>
</body>
</html>
