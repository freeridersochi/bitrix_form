<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();

$this->addExternalCss("/local/components/dem_form.result.new_mk2/templates/.dem/css/common.css");

//проверяем на наличие значений в массиве $_POST
if (isset($_POST['form_text_6'])){   
    
    echo '123';
        $name = $_POST['form_text_6'];
        $company = $_POST['form_text_7'];
        $email = $_POST['form_email_8'];
        $phone = $_POST['form_text_9'];
        $message = $_POST['form_textarea_10'];
        
        //формируем массив с параметрами 18, 19 и т.д. ID полей
        $arValues = array (
            "form_text_6" => $name,
            "form_text_7" => $company,
            "form_email_8" => $email,
            "form_text_9" => $phone,
            "form_textarea_10" => $message
        );
    //задаем ID нашей формы, можно глянуть в админке


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
}//end if sizeof($_POST) > 0 
?>