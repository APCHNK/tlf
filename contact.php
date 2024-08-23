
<?php require "header.php"?>
        <section class="sec7">
            <div class="bg1" data-aos="fade-left">
                <img src="./assets/img/bg8.svg" alt="">
            </div>
            <div class="bg2" data-aos="fade-right">
                <img src="./assets/img/bg9.svg" alt="">
            </div>
            <div class="container">
                <form action="" data-aos="fade-right">
                    <div class="title">
                        CONTACT US
                    </div>
                    <div class="namesur">
                        <div class="name">
                            <span>Name</span>
                            <input type="text">
                        </div>
                        <div class="surname">
                            <span>Surname</span>
                            <input type="text">
                        </div>
                    </div>
                    <div class="email">
                        <span>Email</span>
                        <input type="text">
                    </div>
                    <div class="phone">
                        <span>Phone number</span>
                        <input type="text">
                    </div>
                    <div class="questions">
                        <span>Questions</span>
                        <input type="text">
                    </div>
                </form>
                <div class="contacts" data-aos="fade-left">
                    <div class="title">CONTACTS</div>
                    <ul>
                        <li>
                            <a href="tel:+420234043328">
                                <img src="./assets/img/i1.svg" alt="">
                                <span>+ 420 (2) 34043328</span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:support@trustlinkfinance.com">
                                <img src="./assets/img/i2.svg" alt="">
                                <span>support@trustlinkfinance.com</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/trust_link_finance?igshid=MzRlODBiNWFlZA==">
                                <img src="./assets/img/i3.svg" alt="">
                                <span>trust_link_finance</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <script>
            let contacts = document.querySelectorAll('.mcontacts');

            contacts.forEach((item) => {
            item.classList.add('active')
            });
        </script>
    <?php require "modal.php"?>
    <?php require "footer.php"?>