
<?php require "header.php"?>
        <section class="sec9">
            <div class="container">
                <h1>Conditions for <br>fixing rates</h1>
                <style>
                    .text{
                        font-size: 40px;
                    }
                </style>
                <div class="text" data-aos="fade-up">
                    <span>Conditions for fixing rates by the Trust Link Finance service (hereinafter referred to as TLF)</span>
                    <p>
                    TLF is an exchange service that provides services for converting cryptocurrencies into fiat currencies, virtual assets and other cryptocurrencies. We allow users to easily and quickly exchange their assets with minimal costs and maximum security.
When calculating the cost, our exchange service takes into account the price on several cryptocurrency exchanges such as: binance.com

                    </p>
                    <p>
                    In addition, when calculating the value of fiat currency, TLF takes into account the price ratio to the US dollar on the website xe.com.
                    </p>
                    <p>
                    The amount to be issued is calculated at the exchange rate specified when the client opens an order on the exchange. The rate is fixed at the moment the funds are credited to the service address, during business hours. To credit cryptocurrency, the transaction sent by the user must receive a certain number of confirmations, which depends on the network.
                    </p>
                    <span>Exchange cryptocurrency for fiat money</span>
                    <p>
                    Detailed calculation of the amount to be issued and the service commission in the formulas:
                    </p>
                    <span></span>
                    <p>
                    <b>Amount to receive cryptocurrency (Ao):</b>((Ai - F) * Pf / Pex) = AoAi - amount given by the user in fiat currency; F - Crybex commission; Pf is the cross rate of fiat currency to USD on the website xe.com at the time the fiat currency is received by the exchange office; Pex is the cost of cryptocurrency on the exchange at the time the fiat currency is received by the exchange office.

                    </p>
                    <p>
                    <b>Crybex commission (F): </b>(Pcr / (Pex / Pf) - 1) * 100= FPcr - the cost of cryptocurrency on the Crybex.com website at the time the fiat currency is received by the exchange office; Pex - the cost of cryptocurrency on the exchange at the time the fiat currency is received by the exchange office; Pf is the cross rate of fiat currency to USD on the website xe.com at the time the fiat currency is received by the exchange office.
 
                    </p>
                    <p>
                        <b>Crypto-to-crypto exchange</b><br>
                        Detailed calculation of the amount to be issued and the service commission in the formulas:
                        <b>Amount to receive cryptocurrency (Ao):</b>
                        (Pexi / Pexo - F) * Nc = AoPexi - I give the value of the cryptocurrency on the exchange at the time it is received by the exchange office. Pexo - I receive the value of the cryptocurrency on the exchange at the time it is received by the exchange office. <b> F - Crybex commission;</b> Nc is the number of coins sent.<br>
                        Crybex commission (F):((Pexi / Pexo)/Pcr - 1) * 100 = F (%)Pexi - I give the cost of the cryptocurrency on the exchange at the time it is received by the exchange office. Pexo - I receive the value of the cryptocurrency on the exchange at the time of receiving the cryptocurrency and give it to the exchange office. Pcr - I get the value of cryptocurrency for 1 coin
                    </p>
                    <p>
                        <b>Stablecoins</b><br>
                        The TLF exchange service provides services for converting stemcoins* into fiat currencies, bank cards and cryptocurrencies, calculating the amount to be issued at the current exchange rate, which takes into account the service commission and is indicated on the service website.

                    </p>
                    <p>
                    Stablecoins are cryptocurrencies backed by other assets (fiat currencies <b>- US dollars, euros, British pounds, gold, silver, securities, bills, etc.)</b>
                    </p>
                    <p>
                    for example, <b> USDT, USDC, BUSD.</b> <br>When exchanging stablecoins, the rate will be fixed during service business hours for 30 minutes from the moment a new application is created. After this time has expired, the rate can be recalculated in accordance with the current rate at the time of crediting coins to the TLF address.

                    </p>
                    <span>The amount receivable is calculated based on the actual amount received at the TLF address and not the amount stated on the application.</span>
                    
                </div>
                
            </div>
        </section>
        <script>
            
            let faq = document.querySelectorAll('.mfaq');


            faq.forEach((item) => {
            item.classList.add('active')
            });
        </script>
    <?php require "modal.php"?>
    <?php require "footer.php"?>