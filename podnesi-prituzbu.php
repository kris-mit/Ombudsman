
    <?php include 'header.php'; ?>

    <div class="top-page">
        <div class="wrapper">
            <ul class="breadcrumb">
                <li><a href="index.php">Насловна</a></li>
                <li><span class="separator"></span></li>
                <li class="breadcrumb_last">Поднеси притужбу</li>
            </ul>
            <h2 class="header-title center">Поднеси притужбу.</h2>
        </div>
        <div class="page-top-bgr"></div>
    </div>

    <a href="podnesi-prituzbu.php" class="floating-cta"><p>Поднеси <br>притужбу</p></a>

    <div class="wrapper page-content-outer form-page">
        <div class="form-content col-8">
            <h5 class="underline">Лични подаци о подносиоцу притужбе.</h5>
            <ul class="form">
                <li class="split">
                    <span class="half">
                        <label>ИМЕ<em>*</em></label>
                        <input type="text" />
                    </span>
                    <span class="half">
                        <label>ПРЕЗИМЕ<em>*</em></label> 
                        <input type="text" />
                    </span>
                </li>
                <li class="split">
                    <span class="half">
                        <label>МЕЈЛ АДРЕСА<em>*</em></label>
                        <input type="text" />
                    </span>
                    <span class="half">
                        <label>КОНТАКТ ТЕЛЕФОН<em>*</em></label>
                        <input type="text" />
                    </span>
                </li>
                <li class="split">
                    <span class="half full">
                        <label>АДРЕСА<em>*</em></label>
                        <textarea></textarea>
                    </span>
                </li>
            </ul>
                <h5 class="underline">Садржај притужбе.</h5>
            <ul class="form form-files">
                <li class="split">
                    <span class="half full">
                        <label>Назив и седиште органа на који се односи притужба<em>*</em></label>
                        <textarea></textarea>
                    </span>
                </li> 
                <li class="split">
                    <span class="half full">
                        <label>Опис повреде права грађана, чињеница и доказа који поткрепљују наводе из притужбе<em>*</em></label>
                        <textarea></textarea>
                    </span>
                </li> 
                <li class="indent">
                    <label class="style-header">Уколико имате скенирану документацију као доказ, можете приложити фајлове овде</label>
                    <form action="#">
                        <ol>
                            <li class="button-wrap">
                                <label class ="new-button" for="upload">
                                <input id="upload" type="file" >
                            </li>
                            <li class="button-wrap">
                                <label class ="new-button" for="upload">
                                <input id="upload" type="file" >
                            </li>
                            <li class="button-wrap">
                                <label class ="new-button" for="upload">
                                <input id="upload" type="file" >
                            </li>
                        </ol>
                    </form>
                    <p class="info">Дозвољене екстензије докумената су .pdf, .txt, .doc, .docx. <br>Максимална величина фајла је 5 мегабајта.</p>
                </li>
                <li class="switch-buttons">
                    <label class="radio-mark-header">Да ли сте исцрпели сва правна средства? *</label>
                    <label class="container">
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>Да
                      </label>
                    <label class="container">
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>Не
                    </label>
                </li>
                <li class="indent split">
                    <span class="half full">
                        <label>Напомена</label>
                        <textarea></textarea>
                    </span>
                </li>
                <li class="btn-line">
                    <input type="submit" value="пошаљите притужбу" class="button"></a>
                    <span class="loader"></span>
                    <span class="submit-content">Сва поља обележена звездицом (*) су обавезна за попуњавање.</span>
                </li>
            </ul>
        </div>

        <div class="col-3">
            <div class="inner-container">
                <figure>
                    <img src="./images/box-image.png" />
                </figure>
                <p>Сва појашњења у вези са подношењем притужбе можете наћи на страници
                <a href="o-podnosenju-prituzbi.php"><br>О ПОДНОШЕЊУ ПРИТУЖБЕ</a><br><br>
                Уколико вам треба додатна помоћ можете нас контактирати преко <a href="kontakt.php">КОНТАКТ</a> странице или потражити одговоре на питања у нашој секцији <a href="najcesca-pitanja.php">НАЈЧЕШЋА ПИТАЊА.</a>
                </p>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
