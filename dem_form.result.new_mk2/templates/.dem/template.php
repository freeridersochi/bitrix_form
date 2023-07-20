<?
require($_SERVER["DOCUMENT_ROOT"]."/local/components/dem_form.result.new_mk2/templates/.dem/result_modifier.php");
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
                        name="form_text_<?=$name_id;?>" 
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
                            name="form_text_<?=$company_id;?>"
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
                        name="form_email_<?=$email_id;?>"
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
                        name="form_text_<?=$phone_id;?>"
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
                            name="form_textarea_<?=$comment_id;?>"
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