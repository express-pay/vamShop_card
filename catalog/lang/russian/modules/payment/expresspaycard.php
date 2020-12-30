<?php
/* -----------------------------------------------------------------------------------------
   $Id: expresspayerip.php 998 2012/09/16 13:24:46 VaM $

   VaM Shop - open source ecommerce solution
   http://vamshop.ru
   http://vamshop.com

   Copyright (c) 2012 VamShop
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(moneyorder.php,v 1.8 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (moneyorder.php,v 1.4 2003/08/13); www.nextcommerce.org
   (c) 2004	 xt:Commerce (webmoney.php,v 1.4 2003/08/13); xt-commerce.com

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

  define('MODULE_PAYMENT_EXPRESSPAYCARD_TEXT_TITLE', 'Экспресс Платежи: Интернет-эквайринг');
  define('MODULE_PAYMENT_EXPRESSPAYCARD_TEXT_PUBLIC_TITLE', 'Экспресс Платежи: Интернет-эквайринг');
  define('MODULE_PAYMENT_EXPRESSPAYCARD_TEXT_ADMIN_DESCRIPTION', 'Модуль оплаты Экспресс Платежи: Интернет-эквайринг<br />Как правильно настроить модуль читайте <a href="https://express-pay.by/cms-extensions" target="_blank"><u>здесь</u></a>.');
  define('MODULE_PAYMENT_EXPRESSPAYCARD_TEXT_DESCRIPTION', 'Идет выписка счета.');
  
	define('MODULE_PAYMENT_EXPRESSPAYCARD_STATUS_TITLE' , 'Разрешить модуль Экспресс Платежи: Интернет-эквайринг');
  define('MODULE_PAYMENT_EXPRESSPAYCARD_STATUS_DESC' , 'Вы хотите разрешить использование модуля при оформлении заказов?');
  
	define('MODULE_PAYMENT_EXPRESSPAYCARD_ALLOWED_TITLE' , 'Разрешённые страны');
	define('MODULE_PAYMENT_EXPRESSPAYCARD_ALLOWED_DESC' , 'Укажите коды стран, для которых будет доступен данный модуль (например RU,DE (оставьте поле пустым, если хотите что б модуль был доступен покупателям из любых стран))');
  
  define('MODULE_PAYMENT_EXPRESSPAYCARD_SORT_ORDER_TITLE' , 'Порядок сортировки');
	define('MODULE_PAYMENT_EXPRESSPAYCARD_SORT_ORDER_DESC' , 'Порядок сортировки модуля.');
  
  define('MODULE_PAYMENT_EXPRESSPAYCARD_ZONE_TITLE' , 'Зона');
	define('MODULE_PAYMENT_EXPRESSPAYCARD_ZONE_DESC' , 'Если выбрана зона, то данный модуль оплаты будет виден только покупателям из выбранной зоны.');
  
  define('MODULE_PAYMENT_EXPRESSPAYCARD_ORDER_STATUS_ID_TITLE' , 'Укажите оплаченный статус заказа');
  define('MODULE_PAYMENT_EXPRESSPAYCARD_ORDER_STATUS_ID_DESC' , 'Укажите оплаченный статус заказа.');
  
  define('MODULE_PAYMENT_EXPRESSPAYCARD_ISTEST_TITLE' , 'Использовать тестовый режим');
  define('MODULE_PAYMENT_EXPRESSPAYCARD_ISTEST_DESC' , 'Взаимодействие выполняется с тестовым стендом');
  
  define('MODULE_PAYMENT_EXPRESSPAYCARD_SERVICEID_TITLE' , 'Номер услуги');
  define('MODULE_PAYMENT_EXPRESSPAYCARD_SERVICEID_DESC' , 'Можно узнать в личном кабинете сервиса Экспресс Платежи в настройках услуги.');
  
  define('MODULE_PAYMENT_EXPRESSPAYCARD_TOKEN_TITLE' , 'Токен');
  define('MODULE_PAYMENT_EXPRESSPAYCARD_TOKEN_DESC' , 'Можно узнать в личном кабинете сервиса Экспресс Платежи в настройках услуги.');
  
  define('MODULE_PAYMENT_EXPRESSPAYCARD_USESIGNATURE_TITLE' , 'Использовать цифровую подпись для выставления счетов');
  define('MODULE_PAYMENT_EXPRESSPAYCARD_USESIGNATURE_DESC' , 'Значение должно совпадать со значением, установленным в личном кабинете сервиса Экспресс Платежи.');
  
  define('MODULE_PAYMENT_EXPRESSPAYCARD_SECRETWORD_TITLE' , 'Секретное слово');
	define('MODULE_PAYMENT_EXPRESSPAYCARD_SECRETWORD_DESC' , 'Задается в личном кабинете, секретное слово должно совпадать с секретным словом, установленным в личном кабинете сервиса Экспресс Платежи.');
  
  define('MODULE_PAYMENT_EXPRESSPAYCARD_NOTIFURL_TITLE' , 'Адрес для получения уведомлений');
  define('MODULE_PAYMENT_EXPRESSPAYCARD_NOTIFURL_DESC' , 'Данный адрес необходимо указать в настройках услуги в личном кабинете сервиса Экспресс Платежи в разделе настройки уведомлений');
  
  define('MODULE_PAYMENT_EXPRESSPAYCARD_USESIGNATUREFORNOTIF_TITLE' , 'Использовать цифровую подпись для уведомлений');
  define('MODULE_PAYMENT_EXPRESSPAYCARD_USESIGNATUREFORNOTIF_DESC' , 'Значение должно совпадать со значением, установленным в личном кабинете сервиса Экспресс Платежи.');
  
  define('MODULE_PAYMENT_EXPRESSPAYCARD_SECRETWORDFORNOTIF_TITLE' , 'Секретное слово для уведомлений');
  define('MODULE_PAYMENT_EXPRESSPAYCARD_SECRETWORDFORNOTIF_DESC' , 'Значение должно совпадать со значением, установленным в разделе настройки уведомлений в личном кабинете сервиса Экспресс Платежи');

?>