# survey
1-	در ابتدا می بایست پکیج auth لاراول نصب شود(در صورتی که پکیج auth لاراول از قبل نصب شده باشد نیازی به انجام این مرحله نمی باشد).

•	composer require laravel/ui:^2.4

•	php artisan ui vue –auth

2-	سپس با دستور زیر پکیج نظرسنجی را نصب می شود.

•	composer require mbagri/survey

3-	کد زیر را در مسیر config/app.php در بخش providers قرار  می دهیم

 Mbagri\Survey\SurveyServiceProvider::class,
 
4-	کد زیر را در مسیر  config/app.phpدر بخش aliases قرار می دهیم

   'Survey'=>\Mbagri\Survey\SurveyFacade::class,
   
5-	در این مرحله در مسیر روت پروژه دستور زیر را وارد می نماییم تا فایل های پروژه Publish شوند.

php artisan vendor:publish --provider="Mbagri\Survey\SurveyServiceProvider"

6-	پس از publish شدن فایل های پکیج، دستور زیر در مسیر روت پروژه وارد می شود

Php artisan migrate

7-	مراحل نصب پکیج با موفقیت انجام شد.
