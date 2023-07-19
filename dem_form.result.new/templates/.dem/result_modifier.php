<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
?>  

<?
if (sizeof($_POST) > 0 ){  

      $postValues = array(
         "form_text_1" => $_POST['form_text_1'],
         "form_text_2" => $_POST['form_text_2'],
         "form_email_24" => $_POST['form_email_24'],
         "form_text_4" => $_POST['form_text_4'],
         "form_textarea_5" => $_POST['form_textarea_5']
      );

      echo '///TODOO Fix send email data to admin';

      $postValues_clear=array();

      foreach ($postValues as $key => $value){
         $input_text = strip_tags($value);
         $input_text = htmlspecialchars($input_text);
         $postValues_clear[$key]=$input_text;
      }

	$FORM_ID = $arResult["QUESTIONS"]["SIMPLE_QUESTION_142"]["STRUCTURE"][0]["ID"]; //1
	CModule::IncludeModule("form");
	
	// создадим новый результат
    if ($RESULT_ID = CFormResult::Add($FORM_ID, $postValues_clear))
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
