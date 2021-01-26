
<?php include 'header.php'; ?>
 
    <div class="top-page">
        <div class="wrapper">
            <ul class="breadcrumb">
                <li><a href="index.php">Насловна</a></li>
                <li><span class="separator"></span></li>
                <li class="breadcrumb_last">Контакт</li>
            </ul>
            <h2 class="header-title center">Контакт.</h2>
        </div>
        <div class="page-top-bgr"></div>
    </div>

    <a href="podnesi-prituzbu.php" class="floating-cta"><p>Поднеси <br>притужбу</p></a>

    <div class="page-content-outer">
        <div class="wrapper form-page contact-page">
            <div class="form-content col-8">
                <h5 class="underline">Пошаљите нам поруку.</h5>
                <form id="form_contact">
                    <ul class="form_list">
                        <li class="split">
                            <span class="half">
                                <label>ИМЕ<em>*</em></label>
                                <input type="text" id="name" required />
                            </span>
                            <span class="half">
                                <label>ПРЕЗИМЕ<em>*</em></label> 
                                <input type="text" id="surname" required/>
                            </span>
                        </li>
                        <li class="split">
                            <span class="half">
                                <label>МЕЈЛ АДРЕСА<em>*</em></label>
                                <input type="text" id="email" required />
                            </span>
                            <span class="half">
                                <label>КОНТАКТ ТЕЛЕФОН<em>*</em></label>
                                <input type="text" id="contact" required />
                            </span>
                        </li>
                        <li class="split">
                            <span class="half full">
                            <label>РАЗЛОГ ЈАВЉАЊА<em>*</em></label>
                            <select class= "style-btn" name="contact" id="choose">
                                <option value="value1">--</option>
                                <option value="value2">1 opcija</option>
                                <option value="value3">2 opcija</option>
                                <option value="value4">3 opcija</option>
                            </select>
                            </span>
                        </li>
                        <li class="split">
                            <span class="half full">
                                <label>ПОРУКА<em>*</em></label>
                                <textarea class="message-box" required></textarea>
                            </span>
                        </li>
                        <li class="btn-line">
                            <input type="submit" value="пошаљите поруку" class="button" >   
                            <span class="loader"></span>
                            <span class="submit-content">Сва поља обележена звездицом (*) су обавезна за попуњавање.</span>
                        </li>
                    </ul>  
                </form>
                <p id="alert-message"></p>
            </div>

            <div class="col-3">
                <div class="inner-container">
                    <figure>
                        <img src="./images/box-image.png" />
                    </figure>
                    <p>Уколико имате било каква питања или нејасноће, на која нисте могли да нађете одговоре у нашој секцији 
                    <a href="najcesca-pitanja.php"><br>НАЈЧЕШЋА ПИТАЊА</a>
                    попуните формулар и ми ђемо вам се јавити првом приликом.<br><br> Препоручујемо да из падајућег менија <strong>РАЗЛОГ ЈАВЉАЊА</strong> одаберете одговарајућу опцију, како бисмо имали што више информација потребних за сагледавање вашег захтева.
                    </p>
                </div>
            </div>
            <div class="map">
                <div class="col-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9506.086613551637!2d20.453402894689656!3d44.81260249174888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7ab02afb2f95%3A0xbe89be16fe32107f!2sPoslovna%20Zgrada%2C%20Kosovska%2017%2FI%2C%20Kosovska%2017%2F1%2C%20Beograd%2011103!5e0!3m2!1sen!2srs!4v1595748825605!5m2!1sen!2srs" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-1"></div>
                <div class="col-3 map-content">
                    <h6>Адреса</h6>
                    <p>Косовска 17/1</p>
                    <p>11000, Beograd</p>
                    <h6>Бројеви телефона</h6>
                    <p>011/ 3240-394</p>
                    <p>011/ 3227-494</p>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/contact-form.js"></script>

    <?php include 'footer.php'; ?>

