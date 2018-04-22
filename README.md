# php-nice-url
الشرح تدخل إلى الدالة 4 قيم :

1- المتغير $input نوعه string هو عنوان الصفحة الذي سيحول إلى اسم لطيف.

2- المتغير $replace نوعه string سيستبدل بالفراغ وعادة ما يكون - شخطة أو _ شخطة سفلية.

3- المتغير $remove_words نوعه boolean تحديد إن كنت تريد إزالة الكلمات الغير مفيدة.

4- المتغير $words_array نوعة array مصفوفة الكلمات الغير مفيدة التي سيتم إزالتها من العنوان.

`$bad_words = array('a','and','the','an','it','is','with','can','of','why','not','و','أو');`

`echo generate_seo_link('Another day and a half of PHP meetings', '-', true, $bad_words);`

`//النتيجة :: another-day-half-php-meetings`

`echo '<br>';`

`echo generate_seo_link('CSS again? Why not just PHP?', '-', true, $bad_words);`

`//النتيجة :: css-again-just-php`

`echo '<br>';`

`echo generate_seo_link('A penny saved is a penny earned.', '-', true, $bad_words);`

`//النتيجة :: penny-saved-earned`

`echo '<br>';`

`echo generate_seo_link('كيف حالكم و صحتكم', '-', true, $bad_words);`

`echo '<br>';`

`//النتيجة :: كيف-حالكم-صحتكم`
