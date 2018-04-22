<?php
/* أخذ العنوان المدخل والكلمات الغير مفيدة */
function generate_seo_link($input, $replace = '-', $remove_words = true, $words_array = array()) {
//تصغير الحروف وإزالة المسافات وعلامات الترقيم
$return = trim(preg_replace('/ +/', ' ', preg_replace('/[^a-zA-Z\p{Arabic}0-9\s]/u', '', mb_strtolower($input))));

//إزالة الكلمات الغير مفيدة
//ستعمل فقط إذا أدخلت الكلمات في المصفوفة
if($remove_words) { $return = remove_words($return, $replace, $words_array); }

//استبدال المساحة 
//عادة تكون إما - شخطة أو _ شخط سفلية
//...إرجاع القيمة
return str_replace(' ', $replace, $return);
}

/* سيتم أخذ الكلامات الغير مفيدة */
function remove_words($input,$replace,$words_array = array(),$unique_words = true)
{
//فصل الكلمات بالمساحات
$input_array = explode(' ',$input);

//إنشاء المصفوفة التي سترجع
$return = array();

//حلقة لإزالة الكلمات الغير مفيدة من العنوان
foreach($input_array as $word)
{
    //الكلمات ستضافة إلى المصفوفة...
    if(!in_array($word,$words_array) && ($unique_words ? !in_array($word,$return) : true))
    {
        $return[] = $word;
    }
}

//إعادة الكلمات المفيدة مفصولة بشخطة أو الشيء الذي حددته
return implode($replace,$return);
}
?>