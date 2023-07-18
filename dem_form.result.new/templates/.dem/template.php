<? 
//$this->addExternalCss("/local/components/d_form.result.new_fifth/templates/.dem/css/common.css");
?>

<div class="contact-form">
    <!-- Form title -->
    <div class="contact-form__head">
        <div class="contact-form__head-title">Связаться</div>
        <div class="contact-form__head-text">Наши сотрудники помогут выполнить подбор услуги и&nbsp;расчет цены с&nbsp;учетом
            ваших требований
        </div>
    </div>
    <!-- Form body -->
    <form class="contact-form__form" action="" method="POST">
        <!-- Name -->
        <div class="contact-form__form-inputs">
            <div class="input contact-form__input">
                <label class="input__label" for="medicine_name">
                <div class="input__label-text">Ваше имя*</div>
                <input class="input__input" type="text" 
                        id="medicine_name" 
                        name="form_text_22" 
                        value=""
                        required="">
                <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
            </label>
            </div>
            <!-- Company -->
            <div class="input contact-form__input">
                <label class="input__label" for="medicine_company">
                    <div class="input__label-text">Компания/Должность*</div>
                    <input class="input__input" 
                            type="text" 
                            id="medicine_company" 
                            name="form_text_23"
                            value=""
                            required="">
                    <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                </label>
            </div>
            <!-- Email -->
            <div class="input contact-form__input">
                <label class="input__label" for="medicine_email">
                <div class="input__label-text">Email*</div>
                <input class="input__input" 
                        type="email" 
                        id="medicine_email" 
                        name="form_email_24" 
                        value=""
                       required="">
                    <div class="input__notification">Неверный формат почты</div>
                </label>
            </div>
            <!-- Phone -->
            <div class="input contact-form__input">
                <label class="input__label" for="medicine_phone">
                <div class="input__label-text">Номер телефона*</div>
                <input class="input__input"
                        name="form_text_25"
                        type="tel" 
                        id="medicine_phone"
                        data-inputmask="'mask': '+79999999999', 'clearIncomplete': 'true'"
                        maxlength="12"
                        x-autocompletetype="phone-full" 
                        name="medicine_phone" 
                        value="" 
                        required="">
                </label>
            </div>
        </div>
        <!-- Textarea -->
        <div class="contact-form__form-message">
            <div class="input"><label class="input__label" for="medicine_message">
                <div class="input__label-text">Сообщение</div>
                <textarea class="input__input" 
                            type="text" 
                            id="medicine_message" 
                            name="form_textarea_26"
                          value=""></textarea>
                <div class="input__notification"></div>
            </label></div>
        </div>
        <div class="contact-form__bottom">
            <!-- Privancy policy -->
            <div class="contact-form__bottom-policy">Нажимая «Отправить», Вы&nbsp;подтверждаете, что
                    ознакомлены, полностью согласны и&nbsp;принимаете условия «Согласия на&nbsp;обработку персональных
                    данных».
                </div>
            <!-- Save btn -->
            <button class="form-button contact-form__bottom-button" 
                data-success="Отправлено"
                data-error="Ошибка отправки"
                type="submit" 
        	    name="web_form_submit">
                <div class="form-button__title">Оставить заявку</div>
            </button>
        </div>
    </form>
</div>


<?
//проверяем на наличие значений в массиве $_POST
if (isset($_POST['form_text_22'])){
	    
	    $name = $_POST['form_text_22'];
	    $company = $_POST['form_text_23'];
	    $email = $_POST['form_email_24'];
	    $phone = $_POST['form_text_25'];
	    $message = $_POST['form_textarea_26'];
	  
      	//формируем массив с параметрами 18, 19 и т.д. ID полей
        $arValues = array (
    	    "form_text_22" => $name,
    	    "form_text_23" => $company,
    	    "form_email_24" => $email,
    	    "form_text_25" => $phone,
    	    "form_textarea_26" => $message
        );
	//задаем ID нашей формы, можно глянуть в админке
	$FORM_ID = 6;
	//подключаем модуль форм, т.к. без него скорей всего будет ошибка
	CModule::IncludeModule("form");
	
	// создадим новый результат
    if ($RESULT_ID = CFormResult::Add($FORM_ID, $arValues))
    {
        echo "Результат #".$RESULT_ID." успешно создан";
    }
    else
    {
        global $strError;
        echo $strError;
    }
}
?>



