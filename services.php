
    <?php require "header.php"?>
        <section class="sec5">
            <div class="container">
                <div class="items">
                    <div class="item" data-aos="fade-right">
                        <img src="./assets/img/ser1.svg" alt="">
                        <div class="text">
                            <div class="title">Cryptocurrency to fiat exchange</div>
                            <p>The company provides the ability to quickly and conveniently exchange various cryptocurrencies for fiat funds at the current market rate. Clients can sell their cryptocurrencies and receive the corresponding amount in their chosen fiat currency.</p>
                        </div>
                    </div>
                    <div class="item" data-aos="fade-left">
                        <img src="./assets/img/ser2.svg" alt="">
                        <div class="text">
                            <div class="title">Fiat to cryptocurrency exchange</div>
                            <p>The company also provides fiat-to-cryptocurrency exchange services. Clients can purchase cryptocurrencies using their funds in USD, EUR or other fiat currencies.</p>
                        </div>
                    </div>
                    <div class="item" data-aos="fade-right">
                        <img src="./assets/img/ser3.svg" alt="">
                        <div class="text">
                            <div class="title">Advice and support</div>
                            <p>Trust Link Finance offers professional advice and support to clients in matters related to the exchange of cryptocurrencies. The team of experts of the company is ready to help clients with the choice of the most profitable exchange strategies and provide information on the latest trends and news in the field of cryptocurrencies.</p>
                        </div>
                    </div>
                    <div class="item" data-aos="fade-left">
                        <img src="./assets/img/ser4.svg" alt="">
                        <div class="text">
                            <div class="title">Providing secure and reliable services</div>
                            <p>The main goal of Trust Link Finance is to provide clients with a safe and secure platform for exchanging cryptocurrencies for fiat. The company strives to provide customers with an easy and convenient way to exchange, with minimal risks and maximum protection of their funds.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>

            let ser = document.querySelectorAll('.mser');
            

            ser.forEach((item) => {
            item.classList.add('active')
            });
        </script>
    <?php require "modal.php"?>
    <?php require "footer.php"?>