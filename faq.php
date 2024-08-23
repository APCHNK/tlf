
    <?php require "header.php"?>
        <section class="sec6">
            <div class="container">
                <div class="title">FAQ</div>
                <div class="accordeons">
                    <div class="accordeon">
                        <div class="top">
                            <span>What is it SEPA ?</span>
                            <img src="./assets/img/arrow3.svg" alt="">
                        </div>
                        <div class="bot">
                            <p><span>Fastest Payment Service in Europe:</span>SEPA stands out as the swiftest payment service on the continent! ⏱️ With transactions processed within one business day, you can send and receive funds faster than ever before. Say goodbye to waiting days for your money to travel across borders! 💼💸</p>
                            <p><span>Cheapest Way to Conduct Business:</span>When it comes to cutting costs, SEPA is the ultimate champion. 💹 Its low fees make it the most cost-effective option for businesses engaged in cross-border activities. Enjoy reduced expenses while seamlessly managing your financial transactions.</p>
                            <p><span>Widespread Transaction Provider:</span>SEPA's reach spans far and wide, covering numerous countries in the European region. 🇪🇺 No matter where you're conducting business, SEPA ensures that your payments are universally accepted and processed with ease. Seamlessly connect with partners and customers across borders! 🌎🌐</p>
                        </div>
                    </div>
                    <div class="accordeon">
                        <div class="top">
                            <span>What is between SEPA and SEPA instant ? </span>
                            <img src="./assets/img/arrow3.svg" alt="">
                        </div>
                        <div class="bot">
                            <p><span>SEPA</span> (Single Euro Payments Area) is a payment system designed to facilitate euro transfers between participating countries. Usually, transfers via SEPA can take several business days.</p>
                            <p><span>SEPA Instant</span> is a faster version of SEPA that allows you to make instant transfers in EUR. It is important to note that SEPA Instant transfers can take place in real time, even on weekends and holidays.</p>
                            <p><span>Main differences:</span><br>1. Speed: SEPA Instant transfers are processed instantly, while regular SEPA transfers can take several days.<br>
                            2. Availability: SEPA Instant is available around the clock, including weekends and holidays, while regular SEPA transfers work on bank business days.</p>
                            <p>Both options have their advantages depending on your needs. However, for now, Trust Link Finance has decided not to support SEPA Instant. This decision is based on security and protection of the interests of our customers in order to minimize potential risks.</p>
                        </div>
                    </div>
                    <div class="accordeon">
                        <div class="top">
                            <span>How to contact customer support ?</span>
                            <img src="./assets/img/arrow3.svg" alt="">
                        </div>
                        <div class="bot">
                            <p><span>To get support, you can use the following contact methods:</span><br>📧 Email: If you have a question or request, feel free to write to us at help@trustlinkfinance.cz.</p>
                            <p>Our team will promptly respond to your message and provide the necessary information.</p>
                        </div>
                    </div>
                    <div class="accordeon">
                        <div class="top">
                            <span>What documents do we check ?</span>
                            <img src="./assets/img/arrow3.svg" alt="">
                        </div>
                        <div class="bot">
                            <p><span>Fraud Protection:</span> Verification of residential address, proof of income, and origin of funds helps us detect and prevent attempts at fraud and money laundering. </p>
                            <ul>
                                <li>We are committed to providing fair and legal transactions for our clients.</li>
                                <li>Compliance with regulations: Verification of documents allows us to comply with international regulations and requirements for financial institutions. This is important to our reputation and long-term sustainability.</li>
                                <li>Anti-Money Laundering: The document verification process helps us effectively fight money laundering and other illegal financial transactions. We are proud of our contribution to keeping the financial environment clean.</li>
                                <li>Protecting the interests of clients: Verification of documents is also a way to protect the interests of our clients. This prevents unauthorized access to accounts and ensures the security of their funds.</li>
                            </ul>
                            <p><span>We strive to create an environment</span>where our clients can exchange cryptocurrencies for fiat with confidence in the safety and legitimacy of transactions. Your documents are protected and used solely for the security of our platform.</p>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                // Hide all accordion content initially
                $(".accordeon .bot").hide();

                // Add click event listener to accordion headers
                $(".accordeon .top").click(function() {
                    // Check if the clicked accordion is already open
                    var isOpen = $(this).siblings(".bot").is(":visible");

                    // Close all accordions
                    $(".accordeon .bot").slideUp();

                    // If the clicked accordion was closed, open it
                    if (!isOpen) {
                        $(this).siblings(".bot").slideDown();
                    }
                });
            });
        </script>
        <script>
            
            let faq = document.querySelectorAll('.mfaq');


            faq.forEach((item) => {
            item.classList.add('active')
            });
        </script>

    <?php require "modal.php"?>
    <?php require "footer.php"?>