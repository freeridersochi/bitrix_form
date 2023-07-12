<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
?>

<?

//проверяем на наличие значений в массиве $_POST
if (sizeof($_POST) > 0 ){  
   
      //1. Create ditry array put Post result. Work with it post result. 
      //2. Create clear array. 

      $postValues = array(
         "form_text_22" => $_POST['form_text_22'],
         "form_text_23" => $_POST['form_text_23'],
         "form_email_24" => $_POST['form_email_24'],
         "form_text_25" => $_POST['form_text_25'],
         "form_textarea_26" => $_POST['form_textarea_26']
      );

      $postValues_clear=array();

      foreach ($postValues as $key => $value){
         $input_text = strip_tags($value);
         $input_text = htmlspecialchars($input_text);
         $postValues_clear[$key]=$input_text;
      }

	//задаем ID нашей формы, можно глянуть в админке
	$FORM_ID = 6;
	//подключаем модуль форм, т.к. без него скорей всего будет ошибка
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