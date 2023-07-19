<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
?>

<? 
//$this->addExternalCss("/local/components/d_form.result.new_fifth/templates/.dem/css/common.css");
?>
   
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
}//end if sizeof($_POST) > 0 
?>