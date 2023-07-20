<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();

$this->addExternalCss("/local/components/dem_form.result.new_mk2/templates/.dem/css/common.css");

$post_clear = array();

foreach ($_POST as $key => $value){
    $input_text = strip_tags($value);
    $input_text = htmlspecialchars($input_text);
    $post_clear[$key] = $input_text;
}

if (isset($_POST['form_text_6'])){   

    $FORM_ID = $arParams["WEB_FORM_ID"];    

    CModule::IncludeModule("form");
    
    if ($RESULT_ID = CFormResult::Add($FORM_ID, $post_clear))
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